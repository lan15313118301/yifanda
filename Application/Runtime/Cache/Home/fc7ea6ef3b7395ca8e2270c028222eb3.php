<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0021)http://m.olay.com.cn/ -->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo ($title); ?>_北大青鸟CBD校区</title>
<meta charset="utf-8">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="format-detection" content="telephone=yes">
<meta name="viewport" content="width=640, user-scalable=no, target-densitydpi=device-dpi">
<meta name="renderer" content="webkit">
<link rel="stylesheet" type="text/css" href="/Public/mobile/css/swiper.min.css">
<link rel="stylesheet" type="text/css" href="/Public/mobile/css/index.css">
<script async src="/Public/mobile/js/analytics.js"></script>
<script src="/Public/mobile/js/gw.js" async></script>
<script src="/Public/mobile/js/jquery.min.js"></script>
<meta name="viewport" content="width=640, user-scalable=no, target-densitydpi=device-dpi,minimal-ui">
</head>
<body style="margin-left: 0px; overflow-y: auto;">
<header>
  <div class="header-ctn"> <a href="/" class="header-logo" onclick="_gaq.push(['_trackEvent', 'Header','Homepage_TopBar', 'Homepage_TopBar']);"></a> 
    <!--导航条-->
    <ul class="header-nav">
      <li class="header-nav-search"> <a class="header-nav-icon i2" onclick="_gaq.push([&#39;_trackEvent&#39;, &#39;Header&#39;,&#39;Search&#39;, &#39;searchicon&#39;]);"></a> </li>
      <li class="i6-left"> <a id="right-nav" href="#right-nav-content" class="header-nav-icon i6 "></a> </li>
    </ul>
    <!--导航条-End--> 
  </div>
  <section class="pd_top"> 
    <!--搜索search-->
    <div class="header-search" style="display: none;">
      <form action="<?php echo U('search/index');?>">
            <input type="text" id="txtSearchKey" name="key" value="<?php echo ($key); ?>" class="input0 input3" placeholder="请输入关键字,例如：大红瓶">
            <input type="submit" value="" class="input-search">
      </form>
      </div>
  </section>
  
  <!--历史足迹-->
  <div class="swiper-container footprint swiper-container-horizontal">
    <div class="swiper-wrapper">
      <p class="p_zuji2">您还没有浏览过产品，立即搜索，开启美肌之旅</p>
    </div>
    <!--<div class="pagination"></div>--> 
    <!-- Add Arrows -->
    <div class="swiper-button-next swiper-button-disabled"></div>
    <div class="swiper-button-prev swiper-button-disabled"></div>
  </div>
  <script type="text/javascript">
    function Search() {
        var keyword = $("#txtSearchKey").val();
        if (keyword == "") {
            alert("请输入关键字");
        }
        else {
            _gaq.push(['_trackEvent', 'Header', 'Search', 'Searchresult_' + keyword]);
            window.location = "/ProductSearch.aspx?searchkey=" + $("#txtSearchKey").val();

        }
    }

    $(document).ready(function () {
        $("#txtSearchKey").keydown(function (e) {
            var curKey = e.which;
            if (curKey == 13) {
                Search();
            }
        });

        $("#btnSearchPro").click(function () {
            Search();
        });
    });
</script> 
  <!--历史足迹-End--> 
  <!--页头—End--> 
  
</header>
<!--页头-End--> 
<!--侧边导航-->
<aside>
  <div id="right-nav-content" class="right-nav" style="position: fixed; top: 0px; height: 100%; z-index: 999999; left: auto; right: -521px; display: none;">
    <ul>
      <li class="right-nav-li1"> </li>
      <li><a href="/"><b class="right-nav-b">网站首页</b></a></li>
      <li><a href="<?php echo U('aboutus/index');?>"><b class="right-nav-b">关于我们</b></a></li>
      <li><a href="<?php echo U('news/index');?>"><b class="right-nav-b">新闻中心</b></a></li>
      <li><a href="<?php echo U('product/index');?>"><b class="right-nav-b">产品介绍</b></a></li>
      <li><a href="<?php echo U('support/index');?>"><b class="right-nav-b">技术支持</b></a></li>
      <li><a href="<?php echo U('service/index');?>"><b class="right-nav-b">服务流程</b></a></li>
      <li><a href="<?php echo U('project/index');?>"><b class="right-nav-b">工程业绩</b></a></li>
      <li><a href="<?php echo U('contactus/index');?>"><b class="right-nav-b">联系我们</b></a></li>
    </ul>
  </div>
  <script type="text/javascript">
    (function () {

        $("#btn_login").click(function () {
            popWindow("sus-vip2");
            $("#right-nav").trigger("click");

        })
        $("#btn_reg").click(function () {
            popWindow("sus-vip2");
            $("#right-nav").trigger("click");

        })
        $(".s-close").click(function () {
            $(".sus-vip,.zhezhao").fadeOut("100");
            
        })


    })();
    function popWindow(windowName) {
        $(".zhezhao, ." + windowName).fadeIn("100");

    }


</script> 
</aside>
<section> 
  <!--百科导航-->
  <div class="t-ctn b-ctn">
    <h3>服务流程</h3>
    <div class="bty"> <img src="/Public/mobile/img/aboutbg.jpg" width="640" height="202" alt="banner"> </div>
    <ul>
      <li class="hover"><a href="#title1">服务流程</a></li>
    </ul>
  </div>
</section>
<div style="clear:both"></div>
<section> 
<div class="about">
  <div class="content"><?php echo ($data["content"]["0"]); ?></div> 
  <div style="clear:both"></div>
  </div>
</section>

<div class="index4bg">
    <div class="index4 inner" style="padding:30px 0 10px">
        <ul>
        	<li>
            	<img src="/Public/home/img/img13.jpg">
                <span>瞬间加热</span>
                <p>3秒出热水，8秒恒温</p>
                <a href="">我要量房>>></a>
            </li>
            <li>
            	<img src="/Public/home/img/img14.jpg">
                <span>水电分离</span>
                <p>旋磁感应加热，水电完全分离，更安全</p>
                <a href="">我要量房>>></a>
            </li>
            <li>
            	<img src="/Public/home/img/img15.jpg">
                <span>高效节能</span>
                <p>是普通热水器的2-3倍</p>
                <a href="">我要量房>>></a>
            </li>
            <li>
            	<img src="/Public/home/img/img16.jpg">
                <span>快速安装</span>
                <p>3购买后，24小时内可以送货上门安装</p>
                <a href="">我要量房>>></a>
            </li>
            <li>
            	<img src="/Public/home/img/img17.jpg">
                <span>10年保修</span>
                <p>所有产品提供10年免费保修</p>
                <a href="">我要量房>>></a>
            </li>
            
        </ul>
        <div style="clear:both"></div>
    </div>
</div>
<footer style="padding-bottom:80px">
  <p> <img src="/Public/mobile/img/foottel.png" class="tel"> </p>
  <p> 
  	电话: 010-85912706&nbsp;&nbsp;010-85912887<br>
    邮箱：dflb8888@163.com<br>
    地址：北京 朝阳区北京市朝阳区慈云寺1号院东区国际2号楼2907<br>
    Copyright © 鸿扬网络科技 All Rights Reserved 版权    陕ICP备13006227号 高端网站建设领导者！
  </p>
</footer>
<script src="/Public/mobile/js/flipsnap.min.js" type="text/javascript"></script> 
<script src="/Public/mobile/js/code.js" type="text/javascript"></script> 
<script src="/Public/mobile/js/jquery.panelslider.js" type="text/javascript"></script> 
<script src="/Public/mobile/js/swiper.min.js" type="text/javascript" charset="utf-8"></script> 
<script src="/Public/mobile/js/fsmin.js" type="text/javascript"></script> 
<script src="/Public/mobile/js/tag.js">{ site: "AK7okjI" }</script>


<style type="text/css">
.foot_down{ position:fixed; left:0;bottom:0; width:640px; border-top:#00398E solid 3px; z-index:99}
.foot_down ul{ float:left; width:640px;}
.foot_down ul li{ float:left; width:158px;height:80px; line-height:80px; background:#036DB7; text-align:center; font-size:26px; border-right:#00398E solid 2px}
.foot_down a{ color:#fff; float:left}

</style>
</body></html>