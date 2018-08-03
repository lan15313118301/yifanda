<?php
/**
 * 联系我们
 */
namespace Home\Controller;
use Think\Controller;
class ContactusController extends BaseController {
   
	//关于嘉乾阁
    public function index(){
		$id = I("get.id");
		$map["id"] = array("eq","1");
		$array["data"] = M("Show") -> where($map) -> find();
		$content = unserialize($array["data"]["content"]);
		foreach ( $content as $key=>$item) {
			 $content[$key] = html_entity_decode($content[$key]);
		}
		$array["data"]["content"] = $content;
		
		//dump($array);
        $array["title"] = "联系方式_联系我们";
		$this->assign($array);
        $this->display();
    }
	
	//视频中心
	public function careers(){
		$type = I("get.type");
		
		$careers = M("careers");
		if($type)$map["type"] = array("eq",$type);
		$count = $careers->where($map)->count();
        $page = new \Think\Page($count,9); // 15
        //定制分页栏的显示
        $page -> setConfig('prev', '上一页');
        $page -> setConfig('next', '下一页');
        $page -> setConfig('first', '首页');
        $page -> setConfig('last', '尾页');
        $page -> setConfig('theme', '%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
        $page -> rollPage = 5;//根据实际情况
        $page -> lastSuffix = false;
        $array['list'] = $careers->order("sort desc,id desc")-> where($map) ->limit($page->firstRow,$page -> listRows)->select();
        $array['page'] = $page->show();
//		 dump($array);
//        foreach($array as $key => $value){
////            $array['content'] = nl2br($array['content']); //nl2br() 函数在字符串中的每个新行 (\n) 之前插入 HTML 换行符 (<br />)。
//            $array['content'] = htmlspecialchars_decode(nl2br($array['content']));
//
//        }
		$array["type"] = $type;
        $array["title"] = "招贤纳士_联系我们";
		$this->assign($array);
        $this->display();
    }
	
	
}
