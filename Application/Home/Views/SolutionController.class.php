<?php
/**
 * 解决方案
 */
namespace Home\Controller;
use Think\Controller;
class SolutionController extends BaseController {
   
	//城市规划
    public function index(){
		$array["data"] = $this->content("8");
        $array["title"] = $array["data"]["name"]."_解决方案";
		$this->assign($array);
        $this->display();
    }
	
	//房地产营销
    public function realestate(){
		$array["data"] = $this->content("9");
        $array["title"] = $array["data"]["name"]."_解决方案";
		$this->assign($array);
        $this->display("index");
    }
	
	//石油化工
    public function petrochemical(){
		$array["data"] = $this->content("10");
        $array["title"] = $array["data"]["name"]."_解决方案";
		$this->assign($array);
        $this->display("index");
    }
	
	//煤炭电力
    public function coal(){
		$array["data"] = $this->content("11");
        $array["title"] = $array["data"]["name"]."_解决方案";
		$this->assign($array);
        $this->display("index");
    }
	
	//企业展厅
    public function enterprise(){
		$array["data"] = $this->content("12");
        $array["title"] = $array["data"]["name"]."_解决方案";
		$this->assign($array);
        $this->display("index");
    }
	
	//博物馆
    public function museum(){
		$array["data"] = $this->content("13");
        $array["title"] = $array["data"]["name"]."_解决方案";
		$this->assign($array);
        $this->display("index");
    }

    //舞美演出
    public function wumei(){
		$array["data"] = $this->content("23");
        $array["title"] = $array["data"]["name"]."_解决方案";
		$this->assign($array);
        $this->display("index");
    }
	
	
	
	function content($id){
		$map["id"] = array("eq",$id);
		$data = M("Show") -> where($map) -> find();
		$content = unserialize($data["content"]);
		foreach ( $content as $key=>$item) {
			 $content[$key] = html_entity_decode($content[$key]);
		}
		$data["content"] = $content;
		return $data;
	}
	
	
}
