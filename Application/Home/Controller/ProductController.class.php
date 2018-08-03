<?php
/**
 * 产品展示
 */
namespace Home\Controller;
use Think\Controller;
class ProductController extends BaseController {
    public function index(){
		if(I("type")){
			$type = I("type");
		}else{
			$type = 1;
		}
		
		$map["type"] = array("eq",$type); 
		$array["list"] = M("Product") -> where($map) -> select();
		
        $array["type"] = $type;
		
		if($type == 1)$array["typename"] = "游戏名称";
		if($type == 2)$array["typename"] = "合作伙伴";
		$array["title"] = "产品展示";
		$this->assign($array);
        $this->display();
    }

    public function index2(){
        if(I("type")){
            $type = I("type");
        }else{
            $type = 2;
        }

        $map["type"] = array("eq",$type);
        $array["list"] = M("Product") -> where($map) -> select();

        $array["type"] = $type;

//        if($type == 1)$array["typename"] = "游戏名称";
        if($type == 2)$array["typename"] = "合作伙伴";
        $array["title"] = "产品展示";
        foreach ($array['list'] as $k => $v){
            $array['list'][$k]['summary'] = mb_substr($v['summary'],0,60, 'utf-8');
        }
//        dump($array);exit;
        $this->assign($array);
        $this->display();
    }

    //望海荣誉
    public function honor(){
        $id = I("get.id");
        if(I("type")){
            $type = I("type");
        }else{
            $type = 1;
        }
        $map["id"] = array("eq","2");
        $array["data"] = M("Show") -> where($map) -> find();
        $content = unserialize($array["data"]["content"]);
        foreach ( $content as $key=>$item) {
            $content[$key] = html_entity_decode($content[$key]);
        }
        $array["data"]["content"] = $content;
        $array["type"] = $type;
        if($type == 1)$array["typename"] = "游戏名称";
        if($type == 2)$array["typename"] = "合作伙伴";
        // dump($array);
        $array["title"] = "企业文化_关于我们";
        $this->assign($array);
        $this->display("index3");
    }

	//详情页面
    public function show(){
    	$id = I("get.id");
    	$product = D("Product");
    	$array["data"] = $product -> where("id={$id}") -> find();
    	$array["title"] = $array["data"]["name"]."_详情";
		$content = html_entity_decode($array["data"]["content"]);
		$array["data"]["content"] = $content;
		if($array["data"]["type"] == 1)$array["typename"] = "游戏名称";
		if($array["data"]["type"] == 2)$array["typename"] = "合作伙伴";
		//$array["imgs"] = unserialize($array["data"]["imgs"]);
		$this->assign($array);
        $this->display();
    }
    //详情页面
    public function show2(){
        $id = I("get.id");
        $product = D("Product");
        $array["data"] = $product -> where("id={$id}") -> find();
        $array["title"] = $array["data"]["name"]."_详情";
        $content = html_entity_decode($array["data"]["content"]);
        $array["data"]["content"] = $content;
        if($array["data"]["type"] == 1)$array["typename"] = "游戏名称";
        if($array["data"]["type"] == 2)$array["typename"] = "合作伙伴";
        //$array["imgs"] = unserialize($array["data"]["imgs"]);
        $this->assign($array);
        $this->display();
    }
}
