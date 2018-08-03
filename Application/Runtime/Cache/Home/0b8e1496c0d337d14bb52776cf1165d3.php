<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0021)http://m.olay.com.cn/ -->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo ($title); ?>_中南（香港）能源有限公司</title>
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
      
      <li><a href="<?php echo U("index/index");?>"><b class="right-nav-b">首页</b></a></li>
		<li><a href="<?php echo U("aboutus/index");?>"><b class="right-nav-b">企业概况</b></a></li>
		<li><a href="<?php echo U("photovoltaic/index");?>"><b class="right-nav-b">光伏产业</b></a></li>
            <li><a href="<?php echo U("wind/index");?>"><b class="right-nav-b">风电产业</b></a></li>
            <li><a href="<?php echo U("power/index");?>"><b class="right-nav-b">电力服务</b></a></li>
            <li><a href="<?php echo U("human/index");?>"><b class="right-nav-b">人力资源</b></a></li>
            <li><a href="<?php echo U("contactus/index");?>"><b class="right-nav-b">联系我们</b></a></li>
      
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
    <h3 style="font-size:30px">光伏产业</h3>
    <div class="bty"> <img src="/Public/mobile/img/photovoltaicbg.jpg" width="640" height="202" alt="banner"> </div>
    <ul>
      <li class="hover"><a href="<?php echo U("photovoltaic/index");?>">光伏项目</a></li>
    </ul>

  </div>
</section>
<div style="clear:both"></div>
<section> 
  <!--百科导航-->
  <div class="t-ctn t-ctn2 b-ctn3 "> 
  <div class="photovoltaic">
    <div class="content">
      <p> 　　光伏产业，简称PV(photovoltaic)。我国76%的国土光照充沛，光能资源分布较为均匀；与水电、风电、核电等相比，太阳能发电没有任何排放和噪声，应用技术成熟，安全可靠；除大规模并网发电和离网应用外，太阳能还可以通过抽水、超导、蓄电池、制氢等多种方式储存， 太阳能+蓄能几乎可以满足中国未来稳定的能源需求。<br>
         　　太阳能是未来最清洁、安全和可靠的能源，发达国家正在把太阳能的开发利用作为能源革命主要内容长期规划，光伏产业正日益成为国际上继IT、微电子产业之后又一 爆炸式发展的行业。<br>
         　　利用太阳能的最佳方式是光伏转换，就是利用光伏效应，使太阳光射到硅材料上产生电流直接发电。以硅材料的应用开发形成的光电转换产业链条称之为“光伏产业”，包括高纯多晶硅原材料生产、太阳能电池生产、太阳能电池组件生产、相关生产设备的制造等。<br>
         　　工业和信息化部2015年8月19日公布数据显示，上半年我国光伏产业同比增长30%。同时产品价格稳中有升，企业经营普遍好转，国内前4家多晶硅企业均实现满产，前10家组件企业平均毛利率超15%，进入光伏制造行业规范公告名单的29家组件企业平均净利润率同比增长6.5个百分点. </p>
      <span class="tit"><font>光伏产业项目</font></span>
      <ul>
		<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('photovoltaic/show?id='.$v['id'].'');?>"><img src="<?php echo ($v["thumb"]); ?>"><span><?php echo ($v["name"]); ?></span><span>项目进展：<?php echo ($v["name1"]); ?></span></a></li><?php endforeach; endif; else: echo "" ;endif; ?>

      </ul>
      <div class="page"><?php echo ($page); ?></div>
    </div>
  </div>
</section>


<footer style="padding-bottom:10px">
  <p> <img src="/Public/mobile/img/foottel.png" class="tel"> </p>
  <p> 
  	公司座机：028-85645989<br>
    公司Q  Q：1225567634 <br>
    北京市西城区宣内大街西线胡同28号1506室者！<br>
    Copyright @中南（香港）新能源有限公司
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