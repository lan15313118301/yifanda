<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0021)http://m.olay.com.cn/ -->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo ($title); ?>_伊凡达</title>
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
  <div class="header-ctn" style="background-color: black"> <a href="/" class="header-logo" onclick="_gaq.push(['_trackEvent', 'Header','Homepage_TopBar', 'Homepage_TopBar']);"></a>
    <!--导航条-->
    <ul class="header-nav" >
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
  <div id="right-nav-content" class="right-nav" style="position: fixed; top: 0px; height: 100%; z-index: 999999; left: auto; right: -521px; display: none;" style="background-color: black">
    <ul>
      <li class="right-nav-li1"> </li>
      <li><a href="<?php echo U("index/index");?>"><b class="right-nav-b">网站首页</b></a></li>
      <li><a href="<?php echo U('product/honor?type=2');?>"><b class="right-nav-b">Motion平台</b></a></li>
       <li><a href="<?php echo U('product/index2');?>"><b class="right-nav-b">合作伙伴</b></a></li>
       <li><a href="<?php echo U('programme/index');?>"><b class="right-nav-b">游戏发行商</b></a></li>
      <li><a href="<?php echo U('news/index');?>"><b class="right-nav-b">行业快讯</b></a></li>
       <li><a href="<?php echo U('aboutus/index');?>"><b class="right-nav-b">关于我们</b></a></li>
      <li><a href="<?php echo U('contactus/careers');?>"><b class="right-nav-b">加入我们</b></a></li>
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
    <div class="bty"> <img src="/Public/mobile/img/contactusbg.jpg" width="640" height="202" alt="banner"> </div>
    <ul>

      <li><a href="<?php echo U('contactus/careers');?>">招贤纳士</a></li>
    </ul>
  </div>
</section>
<section> 
  <!--百科导航-->
  <div class="t-ctn t-ctn2 b-ctn3">
    <div class="ertitle"> <b>加入我们</b> Contact Information</div>
    <!--标题-->
    <div class="support content" style="margin-top:10px">
      <ul>
        <div class="r">
        <ul>
          <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li> <span class="tit"><?php echo ($v["name"]); ?></span>
            <div class="cont"> 
            <span class="title">职位要求：</span>
            	<p>    
<?php echo ($v["summary"]); ?>
</p>
<span class="title">职位职责：</span>
<p><?php echo ($v["content"]); ?></p>
<font>请将您的简历发送至：evatarbj@evatarchina.com<br>
</font>
              <img src="/Public/home/img/top.jpg" />
              </div>
          </li><?php endforeach; endif; else: echo "" ;endif; ?>
          
          
          
          
        </ul>
      </div>
      </ul>
    </div>
  </div>
</section>
<script type="text/javascript">
	$(function() {
		$(".r ul li").click(function(){
			if($(this).children('div').css('display') == "none"){
				$(this).children('span.tit').css("background-image","url(/Public/home/img/jian.png)");
				$(this).children('div').slideDown();	
			}
		});
		
		$(".cont img").click(function(){
			if($(this).parent('div').css('display') == "block"){
				$(this).parent('div').slideUp();	
				$(this).parent().prev().css("background-image","url(/Public/home/img/jia.png)");
			}
		});
	})
</script> 
<script type="text/javascript">
$(document).ready(function(){

	$(".side ul li").hover(function(){
		$(this).find(".sidebox").stop().animate({"width":"140px"},200).css({"opacity":"1","filter":"Alpha(opacity=100)","background":"#357DB8"})	
	},function(){
		$(this).find(".sidebox").stop().animate({"width":"49px"},200).css({"opacity":"0.8","filter":"Alpha(opacity=80)","background":"#000"})	
	});
	
});

//回到顶部
function goTop(){
	$('html,body').animate({'scrollTop':0},600);
}
</script> 
<footer style="padding-bottom:10px">
  <p>
  	<!--<img src="/Public/mobile/img/rwm.png"><br>-->
      伊凡达互动(北京)科技有限公司@版权所有   <br>
      evatarbj@evatarchina.com    <br>
      +86-13521964944<br>
      北京市朝阳区达美中心T4-7层<br>
                    京ICP备13014106号
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