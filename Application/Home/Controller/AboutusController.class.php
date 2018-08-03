<?php
/**
 * 关于我们
 */
namespace Home\Controller;
use Think\Controller;
class AboutusController extends BaseController {
   
	//企业介绍
    public function index(){
		$id = I("get.id");
		$map["id"] = array("eq","1");
		$array["data"] = M("Show") -> where($map) -> find();
		$content = unserialize($array["data"]["content"]);
		foreach ( $content as $key=>$item) {
			 $content[$key] = html_entity_decode($content[$key]);
		}
		$array["data"]["content"] = $content;
		
		// dump($array);
        $array["title"] = "关于嘉乾阁_关于我们";
		$this->assign($array);
        $this->display();
    }
	
	//望海荣誉
	public function honor(){
		$id = I("get.id");
		$map["id"] = array("eq","2");
		$array["data"] = M("Show") -> where($map) -> find();
		$content = unserialize($array["data"]["content"]);
		foreach ( $content as $key=>$item) {
			 $content[$key] = html_entity_decode($content[$key]);
		}
		$array["data"]["content"] = $content;
		
		// dump($array);
        $array["title"] = "企业文化_关于我们";
		$this->assign($array);
        $this->display("index");
	}
	
	//社会责任
	public function speech(){
		$id = I("get.id");
		$map["id"] = array("eq","3");
		$array["data"] = M("Show") -> where($map) -> find();
		$content = unserialize($array["data"]["content"]);
		foreach ( $content as $key=>$item) {
			 $content[$key] = html_entity_decode($content[$key]);
		}
		$array["data"]["content"] = $content;
		
		//dump($array);
        $array["title"] = "社会责任_关于我们";
		$this->assign($array);
        $this->display("index");
    }
	
	//视频中心
	public function style(){
		$type = I("get.type");
		
		$style = M("style");
		if($type)$map["type"] = array("eq",$type);
		$count = $style->where($map)->count();

        $array['list'] = $style->order("sort desc,id desc")-> where($map) -> select();
		// dump($array);
		$array["type"] = $type;
        $array["title"] = "视频中心_关于我们";
		$this->assign($array);
        $this->display();
    }
	
    //详情页面
    public function style_show(){
    	$id = I("get.id");
    	$style = D("style");
    	$array["data"] = $style -> where("id={$id}") -> find();
    	$array["title"] = $array["data"]["name"]."_视频中心_关于我们";
		$content = html_entity_decode($array["data"]["content"]);
		$array["data"]["content"] = $content;
		//$array["imgs"] = unserialize($array["data"]["imgs"]);
		$this->assign($array);
        $this->display();
    }
	
	
	//人才招聘
	public function recruitment(){
		$id = I("get.id");
		$map["id"] = array("eq","4");
		$array["data"] = M("Show") -> where($map) -> find();
		$content = unserialize($array["data"]["content"]);
		foreach ( $content as $key=>$item) {
			 $content[$key] = html_entity_decode($content[$key]);
		}
		$array["data"]["content"] = $content;
		
		//dump($array);
        $array["title"] = "人才招聘_关于我们";
		$this->assign($array);
        $this->display("index");
    }
	
	//联系我们
	public function contactus(){
		$id = I("get.id");
		$map["id"] = array("eq","5");
		$array["data"] = M("Show") -> where($map) -> find();
		$content = unserialize($array["data"]["content"]);
		foreach ( $content as $key=>$item) {
			 $content[$key] = html_entity_decode($content[$key]);
		}
		$array["data"]["content"] = $content;
		
		//dump($array);
        $array["title"] = "联系我们_关于我们";
		$this->assign($array);
        $this->display("index");
    }
	
}
