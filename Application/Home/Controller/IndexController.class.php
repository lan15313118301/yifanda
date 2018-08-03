<?php
/**
 * 首页
 */
namespace Home\Controller;
use Think\Controller;
class IndexController extends BaseController {


    public function index(){
		
        $array['case'] = M("case")->order("sort desc,id desc")-> limit('0,6')->select();
		$array['news'] = M("news")->order("sort desc,id desc")-> limit('0,4')->select();
		$array['course'] = M("course")-> limit('0,6')->order("sort desc,id desc")->select();
        // 查找游戏数据
        $data = M('Product') -> where("type = 1") -> limit(6) -> select();
        foreach ($data as $key => $value){
            $data[$key]['summary'] = mb_substr($data[$key]['summary'],0,6,'utf-8');

        }
        $hezuo = M('Product') -> where("type = 2") -> limit(12) -> select();
        foreach ($hezuo as $key => $value){
            $hezuo[$key]['summary'] = mb_substr($hezuo[$key]['summary'],0,60,'utf-8');

        }
        // 查找游戏发行商
        $faxing = M('Programme') -> where('type = 1') -> limit(8) -> select();
        foreach ($faxing as $k => $v){
            $faxing[$k]['content'] = htmlspecialchars_decode($faxing[$k]['content']);
            $faxing[$k]['content'] = mb_substr($faxing[$k]['content'],0,180,'utf-8');
        }
        $array["title"] = "首页";
//        dump($data);exit;
		$this->assign($array);
        $this->assign('faxing',$faxing);
        $this->assign('data',$data);
        $this->assign('hezuo',$hezuo);
        $this->display();
    }
	
	public function message(){
		if(I("action") == "add"){
			// dump($_REQUEST);exit;
			$data["name"] = I("post.name");
			$data["tel"] = I("post.tel");
			$data["content"] = I("post.content");
			$data["addtime"] = time();
			
			if($data["name"] == ""){
				$data1['status'] = 1;
				$data1['content'] = "请输入您的姓名";
				$this->ajaxReturn($data1);
				exit;
			}
			if($data["tel"] == ""){
				$data1['status'] = 1;
				$data1['content'] = "请输入您的电话";
				$this->ajaxReturn($data1);
				exit;
			}
			
			if(M("message")->add($data)){
				$data1['status'] = 2;
				$data1['content'] = "提交成功,感谢您的反馈";
				$this->ajaxReturn($data1);
				exit;
			}
			exit;
		}
        $array["title"] = "意见反馈_服务支持";
		$this->assign($array);
        $this->display();
    }
	
}
