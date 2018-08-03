<?php
/**
 * 解决方案与案例
 */
namespace Home\Controller;
use Think\Controller;
class ProgrammeController extends BaseController {
    public function index(){
		if(I("type")){
			$type = I("type");
		}else{
			$type = 1;
		}
		$programme = M("Programme");
		$map["type"] = array("eq",$type); 
		$count = $programme->where($map)->count();
        $page = new \Think\Page($count,9); // 15
        //定制分页栏的显示
        $page -> setConfig('prev', '上一页');
        $page -> setConfig('next', '下一页');
        $page -> setConfig('first', '首页');
        $page -> setConfig('last', '尾页');
        $page -> setConfig('theme', '%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
        $page -> rollPage = 5;//根据实际情况
        $page -> lastSuffix = false;
        $array['list'] = $programme->order("sort desc,id desc")-> where($map) ->limit($page->firstRow,$page -> listRows)->select();
		$array['page'] = $page->show();
        $array["type"] = $type;
		
		if($type == 1)$array["typename"] = "OES";
		if($type == 2)$array["typename"] = "DRG";
		if($type == 3)$array["typename"] = "HRP";
		$array["title"] = "解决方案_解决方案与案例";
		$this->assign($array);
        $this->display();
    }
	
	//详情页面
    public function show(){
    	$id = I("get.id");
    	$Programme = D("Programme");
    	$array["data"] = $Programme -> where("id={$id}") -> find();
    	
		$content = html_entity_decode($array["data"]["content"]);
		$array["data"]["content"] = $content;
		if($array["data"]["type"] == 1)$array["typename"] = "OES";
		if($array["data"]["type"] == 2)$array["typename"] = "DRG";
		if($array["data"]["type"] == 3)$array["typename"] = "HRP";
		$array["title"] = $array["data"]["name"]."_".$array["typename"]."_解决方案与案例_关于我们";
		//$array["imgs"] = unserialize($array["data"]["imgs"]);
		$this->assign($array);
        $this->display();
    }
	
	public function cases(){
		if(I("type")){
			$type = I("type");
		}else{
			$type = 1;
		}
		$case = M("case");
		$map["type"] = array("eq",$type); 
		$count = $case->where($map)->count();
        $Page = new \Think\Page($count,15); // 15
        $Page->setConfig("header", '<span class="rows">共 %TOTAL_ROW% 条记录</span>');
        $Page->setConfig("first", '1');
        $Page->setConfig("last", '...%TOTAL_PAGE%');
        $Page->rollPage = 5;
        $array['list'] = $case->order("sort desc,id desc")-> where($map) ->limit($Page->firstRow.',9')->select();
		$array['page'] = $Page->show();
        $array["type"] = $type;
		
		if($type == 1)$array["typename"] = "西北地区";
		if($type == 2)$array["typename"] = "东北地区";
		if($type == 3)$array["typename"] = "华东地区";
		if($type == 4)$array["typename"] = "西南地区";
		if($type == 5)$array["typename"] = "华北地区";
		if($type == 6)$array["typename"] = "华南地区";
		if($type == 7)$array["typename"] = "华中地区";
		$array["title"] = "解决方案_解决方案与案例";
		$this->assign($array);
        $this->display();
    }
	
	//详情页面
    public function cases_show(){
    	$id = I("get.id");
    	$case = D("case");
    	$array["data"] = $case -> where("id={$id}") -> find();
    	
		$content = html_entity_decode($array["data"]["content"]);
		$array["data"]["content"] = $content;
		if($array["data"]["type"] == 1)$array["typename"] = "西北地区";
		if($array["data"]["type"] == 2)$array["typename"] = "东北地区";
		if($array["data"]["type"] == 3)$array["typename"] = "华东地区";
		if($array["data"]["type"] == 4)$array["typename"] = "西南地区";
		if($array["data"]["type"] == 5)$array["typename"] = "华北地区";
		if($array["data"]["type"] == 6)$array["typename"] = "华南地区";
		if($array["data"]["type"] == 7)$array["typename"] = "华中地区";
		$array["title"] = $array["data"]["name"]."_".$array["typename"]."_解决方案与案例_关于我们";
		//$array["imgs"] = unserialize($array["data"]["imgs"]);
		$this->assign($array);
        $this->display();
    }
}
