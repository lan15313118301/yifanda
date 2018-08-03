<?php
/**
 * 咨询服务
 */
namespace Home\Controller;
use Think\Controller;
class ConsultationController extends BaseController {
   
	//实施服务
    public function index(){
		$id = I("get.id");
		$map["id"] = array("eq","4");
		$array["data"] = M("Show") -> where($map) -> find();
		$content = unserialize($array["data"]["content"]);
		foreach ( $content as $key=>$item) {
			 $content[$key] = html_entity_decode($content[$key]);
		}
		$array["data"]["content"] = $content;
		
		//dump($array);
        $array["title"] = "关于嘉乾阁_咨询服务";
		$this->assign($array);
        $this->display();
    }
	
	//售前咨询
	public function presale(){
		$id = I("get.id");
		$map["id"] = array("eq","5");
		$array["data"] = M("Show") -> where($map) -> find();
		$content = unserialize($array["data"]["content"]);
		foreach ( $content as $key=>$item) {
			 $content[$key] = html_entity_decode($content[$key]);
		}
		$array["data"]["content"] = $content;
		
		// dump($array);
        $array["title"] = "企业文化_咨询服务";
		$this->assign($array);
        $this->display("index");
	}
	
	//战略咨询
	public function responsibility(){
		
        $array["title"] = "社会责任_咨询服务";
		$this->assign($array);
        $this->display("index");
    }
	
	
	
}
