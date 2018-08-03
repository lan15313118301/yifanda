<?php
/**
 * 权限判断 数据初始化
 */
namespace Home\Controller;
use Think\Controller;
class BaseController extends Controller {	
	
    //前置操作方法
    function _initialize(){
		$array["furnituretype"] = M("furnituretype") -> order("sort desc,id asc") -> select();
		$array["service"] = M("show") -> where("type=2")-> select();
		$array["storytype"] = M("storytype") -> order("sort desc,id asc") -> limit("0,5") -> select();
		$array["interlocution1"] = M("interlocution") -> where("type=1") -> order("sort desc,id desc") -> limit("0,6") -> select();
		$array["interlocution2"] = M("interlocution") -> where("type=2") -> order("sort desc,id desc") -> limit("0,6") -> select();
		$array["interlocution3"] = M("interlocution") -> where("type=3") -> order("sort desc,id desc") -> limit("0,6") -> select();
		$array["interlocution4"] = M("interlocution") -> where("type=4") -> order("sort desc,id desc") -> limit("0,6") -> select();
		$this->assign($array);
    }
}