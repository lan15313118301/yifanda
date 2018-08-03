<?php
/**
 * 新闻资讯
 */
namespace Home\Controller;
use Think\Controller;
class ActiveController extends BaseController {
/**
 * 新闻资讯
 */
 
    public function index(){
		if(I("type")){
			$type = I("type");
		}else{
			$type = 1;
		}
		
		$Active = M("Active");
		if($type)$map["type"] = array("eq",$type);
		$count = $Active->where($map)->count();
        $Page = new \Think\Page($count,9); // 15
        $Page->setConfig("header", '<span class="rows">共 %TOTAL_ROW% 条记录</span>');
        $Page->setConfig("first", '1');
        $Page->setConfig("last", '...%TOTAL_PAGE%');
        $Page->rollPage = 9;
        $array['list'] = $Active->order("sort desc,id desc")-> where($map) ->limit($Page->firstRow.',9')->select();
        $array['page'] = $Page->show();
		// dump($array);
		$array["type"] = $type;
		if($type == 1) $array["typename"] = "体系部门";
		if($type == 2) $array["typename"] = "公司活动";
        $array["title"] = "文化活动";
		$this->assign($array);
        $this->display();
    }
	
    //详情页面
    public function show(){
    	$id = I("get.id");
    	$Active = D("Active");
    	$array["data"] = $Active -> where("id={$id}") -> find();
    	$array["title"] = $array["data"]["name"]."_新闻资讯";
		
		$content = html_entity_decode($array["data"]["content"]);
		
		$array["data"]["content"] = $content;
		$array["type"] = $array["data"]["type"];
		if($array["type"] == 1) $array["typename"] = "体系部门";
		if($array["type"] == 2) $array["typename"] = "公司活动";
		$this->assign($array);
        $this->display();
    }
	
	
	
	

}
