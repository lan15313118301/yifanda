<?php
/**
 * 后台 登录
 */
namespace Dr_htadmin\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
        //验证登录
        if($_POST['login']){
            $User = M("User");
			
            $verify = new \Think\Verify();
			
            if(!$verify->check($_POST['login']['code'],'')){
                $this->error('验证码验证失败');
                exit();
            }
			
            
			// dump($_POST);
            $data = $User->where("username='{$_POST[login][username]}'")->find();

			// dump($data);
            //  exit;
            if( $data && $data['password'] == md5($_POST[login][passwd]) ){
                session(array('name'=>'session_id','expire'=>3600));
                $_SESSION['admin']['uid'] = $data['uid'];
				$_SESSION['admin']['username'] = $data['username'];
				$_SESSION['admin']['password'] = $data['password'];
				$_SESSION['admin']['type'] = $data['type'];
				$_SESSION['lang'] = $_REQUEST['lang'];
                $this->success('登录成功', ''.U("Dr_htadmin/index/index").'');
                exit;
            }
            $this->error('登录失败');
            exit;
        }
        $this->display();
    }
    public function verify(){
        $Verify = new \Think\Verify();
		ob_clean();
        $Verify->fontSize = 20;
        $Verify->length   = 4;
        $Verify->imageW = 290;
        $Verify->imageH = 50;
        $Verify->entry();
    }
	
	
	public function logout(){
        $_SESSION['admin'] = NULL;
		$this->redirect("/Dr_htadmin");	
    }
}