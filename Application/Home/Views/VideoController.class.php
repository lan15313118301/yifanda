<?php
/**
 * 视频中心
 */
namespace Home\Controller;
use Think\Controller;
class VideoController extends BaseController {
	
    public function index(){
		$video = M("video");
		if(I("keyword")){
			$map["name"] = array("like","%".I("keyword")."%");
			$array["keyword"] = I("keyword");
		}else{
			if(I("type")){
				$map["type"] = array("eq",I("type"));
				$type = I("type");
			}else{
				$map["type"] = array("eq","1");
				$type = "1";
			}
		}
		
		$count = $video->where($map)->count();
        $Page = new \Think\Page($count,16); // 15
        $Page->setConfig("header", '<span class="rows">共 %TOTAL_ROW% 条记录</span>');
        $Page->setConfig("first", '1');
        $Page->setConfig("last", '...%TOTAL_PAGE%');
        $Page->rollPage = 5;
        $array['list'] = $video->order("sort desc,id desc")-> where($map) ->limit($Page->firstRow.',16')->select();
        $array['page'] = $Page->show();
		//dump($array);
		$array["type"] = $type;
		if($type == 1) $array["typename"] = "数字沙盘视频";
		if($type == 2) $array["typename"] = "展览展示视频";
		if($type == 3) $array["typename"] = "文博馆视频";
		if($type == 4) $array["typename"] = "舞美演出视频";
		if($type == 5) $array["typename"] = "企业宣传视频";
        $array["title"] = $array["typename"]."_视频中心";
		$this->assign($array);
        $this->display();
	}
	
	
	//详情页面
    public function show(){
    	$id = I("get.id");
    	$video = D("video");
    	$array["data"] = $video -> where("id={$id}") -> find();
    	
		$content = html_entity_decode($array["data"]["content"]);
		$array["data"]["content"] = $content;
		
		//上下
		$prev = $video->where("id<$id")->order("id desc") ->limit('0,1')->select();
		$next = $video->where("id>$id")->order("id asc") ->limit('0,1')->select();
		$array['prev'] = $prev[0];
		$array['next'] = $next[0];
		
		//更多
		$array["more"] = $video -> where("type=".$array["data"]["type"]."") -> order("click desc") -> limit("0,20") -> select();
		
		//点击量
		$data["click"] = $array["data"]["click"]+1;
		$array["data"]["click"] = $array["data"]["click"] + 1;
		$video -> where("id={$id}") -> save($data);
		
		if($type == 1) $array["typename"] = "数字沙盘视频";
		if($type == 2) $array["typename"] = "展览展示视频";
		if($type == 3) $array["typename"] = "文博馆视频";
		if($type == 4) $array["typename"] = "舞美演出视频";
		if($type == 5) $array["typename"] = "企业宣传视频";
		
		$array["title"] = $array["data"]["name"]."_".$array["typename"]."_视频中心";
		$this->assign($array);
        $this->display();
    }
	
	
	
	

}
