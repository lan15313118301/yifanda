<?php
/**
 * 社会责任
 */
namespace Home\Controller;
use Think\Controller;
class ResponsibilityController extends BaseController {
   
	//公益理念
    public function index(){
		$id = I("get.id");
		$map["id"] = array("eq","6");
		$array["data"] = M("Show") -> where($map) -> find();
		$content = unserialize($array["data"]["content"]);
		foreach ( $content as $key=>$item) {
			 $content[$key] = html_entity_decode($content[$key]);
		}
		$array["data"]["content"] = $content;
		
		//dump($array);
        $array["title"] = $array["data"]["name"]."_社会责任";
		$this->assign($array);
        $this->display();
    }
	
	//慈善捐赠
	public function charitable(){
		$id = I("get.id");
		$map["id"] = array("eq","7");
		$array["data"] = M("Show") -> where($map) -> find();
		$content = unserialize($array["data"]["content"]);
		foreach ( $content as $key=>$item) {
			 $content[$key] = html_entity_decode($content[$key]);
		}
		$array["data"]["content"] = $content;
		
		// dump($array);
        $array["title"] = $array["data"]["name"]."_社会责任";
		$this->assign($array);
        $this->display("index");
	}
	
	//责任体系
	public function responsibility(){
		$id = I("get.id");
		$map["id"] = array("eq","8");
		$array["data"] = M("Show") -> where($map) -> find();
		$content = unserialize($array["data"]["content"]);
		foreach ( $content as $key=>$item) {
			 $content[$key] = html_entity_decode($content[$key]);
		}
		$array["data"]["content"] = $content;
		
		//dump($array);
        $array["title"] = $array["data"]["name"]."_社会责任";
		$this->assign($array);
        $this->display("index");
    }
	
	//社会责任报告
	public function social(){
		$id = I("get.id");
		$map["id"] = array("eq","9");
		$array["data"] = M("Show") -> where($map) -> find();
		$content = unserialize($array["data"]["content"]);
		foreach ( $content as $key=>$item) {
			 $content[$key] = html_entity_decode($content[$key]);
		}
		$array["data"]["content"] = $content;
		
		//dump($array);
        $array["title"] = $array["data"]["name"]."_社会责任";
		$this->assign($array);
        $this->display("index");
    }	
}
