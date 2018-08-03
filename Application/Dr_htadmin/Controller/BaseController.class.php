<?php
/**
 * 权限判断 数据初始化
 */
namespace Dr_htadmin\Controller;
use Think\Controller;
class BaseController extends Controller {
    //前置操作方法
    function _initialize(){
		// dump($_SESSION);
        if( ACTION_NAME != 'uploadfile' || CONTROLLER_NAME != 'Video' || MODULE_NAME != 'Admin' ){	
            // 验证登录  [uid] => 1 [username] => admin [password] => 21232f297a57a5a743894a0e4a801fc3
            if($_SESSION['admin']['type'] != 1){
                $this->success('请先登录', ''.U('Dr_htadmin/login/index').'');
                exit;
            }else{
                $User = M('User');
                $data = $User->where("uid='".$_SESSION['admin']['uid']."'")->find();
                if( !$data || !($data['username'] == $_SESSION['admin']['username']) || !($data['password'] == $_SESSION['admin']['password'])){
                    session('uid',null);
                    session('username',null);
                    session('password',null);
                    $this->success('请先登录', ''.U('Dr_htadmin/login/index').'');
                    exit;
                }
				
				$helps = M("Show")->where("type=1")->select();
				$partners = M("Show")->where("type=2")->select();
				$icolor = M("Icolor")->select();
                
                if(session('uid')){
                    if($data['role'] == 2){
                        $this->success('已登陆', '/center/');
                        exit;
                    }elseif($data['role'] == 3){
                        $this->success('已登陆', '/agent/');
                        exit;
                    }
                }
				
				
				$array["furnituretype"] = M("furnituretype") -> order("sort desc,id asc") -> select();
				$array["service"] = M("show") -> where("type=2")-> select();
				$array["storytype"] = M("storytype") -> order("sort desc,id asc") -> select();
				
				
				
                $this->assign($array);
                
            }
        }
            
    }
}