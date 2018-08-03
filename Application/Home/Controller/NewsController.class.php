<?php
/**
 * 新闻资讯
 */
namespace Home\Controller;
use Think\Controller;
class NewsController extends BaseController {
/**
 * 新闻资讯
 */
 
    public function index(){
		if(I("type")){
			$type = I("type");
		}else{
			$type = 1;
		}
		
		$news = M("news");
		if($type)$map["type"] = array("eq",$type);
		$count = $news->where($map)->count();
        $page = new \Think\Page($count,9); // 15
        //定制分页栏的显示
        $page -> setConfig('prev', '上一页');
        $page -> setConfig('next', '下一页');
        $page -> setConfig('first', '首页');
        $page -> setConfig('last', '尾页');
        $page -> setConfig('theme', '%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
        $page -> rollPage = 5;//根据实际情况
        $page -> lastSuffix = false;
        $array['list'] = $news->order("sort desc,id desc")-> where($map) ->limit($page->firstRow,$page -> listRows)->select();
        $array['page'] = $page->show();
		// dump($array);
        foreach ($array['list'] as $k => $v){
            $array['list'][$k]['summary'] = mb_substr($v['summary'],0,100, 'utf-8');
        }
		if($type == 1) $array["typename"] = "行业资讯";
		if($type == 2) $array["typename"] = "公司新闻";
		if($type == 3) $array["typename"] = "媒体报道";
        $array["title"] = "新闻资讯";
		$this->assign($array);
        $this->display();
    }
	
    //详情页面
    public function show(){
    	$id = I("get.id");
    	$news = D("news");
    	$array["data"] = $news -> where("id={$id}") -> find();
    	$array["title"] = $array["data"]["name"]."_新闻资讯";
		
		$content = html_entity_decode($array["data"]["content"]);
		
		$array["data"]["content"] = $content;
		$array["type"] = $array["data"]["type"];
		if($array["type"] == 1) $array["typename"] = "行业资讯";
		if($array["type"] == 2) $array["typename"] = "公司新闻";
		if($array["type"] == 3) $array["typename"] = "媒体报道";
		$this->assign($array);
        $this->display();
    }
	
	
	
	

}
