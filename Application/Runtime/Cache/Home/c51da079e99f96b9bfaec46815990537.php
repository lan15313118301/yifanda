<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0021)http://m.olay.com.cn/ -->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo ($title); ?>_东软望海</title>
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
      <li><a href="<?php echo U("index/index");?>"><b class="right-nav-b">网站首页</b></a></li>
      <li><a href="<?php echo U("aboutus/index");?>"><b class="right-nav-b">关于望海</b></a></li>
      <li><a href="<?php echo U("product/index");?>"><b class="right-nav-b">产品展示</b></a></li>
      <li><a href="<?php echo U("programme/index");?>"><b class="right-nav-b">解决方案</b></a></li>
      <li><a href="<?php echo U("programme/cases");?>"><b class="right-nav-b">经典案例</b></a></li>
      <li><a href="<?php echo U("consultation/index");?>"><b class="right-nav-b">咨询服务</b></a></li>
      <li><a href="<?php echo U("news/index");?>"><b class="right-nav-b">新闻资讯</b></a></li>
      <li><a href="<?php echo U("responsibility/index");?>"><b class="right-nav-b">社会责任</b></a></li>
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
    <h3>社会责任</h3>
    <div class="bty"> <img src="/Public/mobile/img/responsibilitybg.jpg" width="640" height="202" alt="banner"> </div>
    <ul>
            <li <?php if($data["id"] == 6): ?>class="hover"<?php endif; ?>><a href="<?php echo U('responsibility/index');?>">公益理念</a></li>
			<li <?php if($data["id"] == 7): ?>class="hover"<?php endif; ?>><a href="<?php echo U('responsibility/charitable');?>">慈善捐赠</a></li>
			<li <?php if($data["id"] == 8): ?>class="hover"<?php endif; ?>><a href="<?php echo U('responsibility/responsibility');?>">责任体系</a></li>
			<li <?php if($data["id"] == 9): ?>class="hover"<?php endif; ?>><a href="<?php echo U('responsibility/social');?>">社会责任报告</a></li>
    </ul>
  </div>
</section>
<section> 
  <!--百科导航-->
  <div class="t-ctn t-ctn2 b-ctn3">
    <div class="ertitle"> <b><?php echo ($data["name"]); ?></b> <?php echo ($data["enname"]); ?> </div>
    <!--标题-->
    <div class="bty2 content"> <?php echo ($data["content"]["0"]); ?>
      <div class="tab"> </div>
    </div>
  </div>
  <?php if($data["id"] == 1): ?><div class="aboutdown">
    <div> <span>我们的使命</span>
      <p>致力于为医院提供高效运营及医疗生态价值链管理，<br>
        以最优质的产品和最全面的服务为客户带来<font>高效、便捷、优越</font> 的体验。</p>
    </div>
    <div> <span>我们的价值观</span>
      <p><font>创新 协同 共赢</font></p>
    </div>
    <div><img src="/Public/home/img/about2.jpg"></div>
    <div> <span>我们的企业精神</span>
      <p><font>敬业 学习 拿结果</font></p>
      <!--<p>敬业 学习 拿结果</p>--> 
    </div>
    <div><img src="/Public/home/img/about3.jpg"></div>
    <div> <span>我们的愿景</span>
      <p>做产品功能上<font>最前瞻</font>、<br>
        技术和服务上<font>最专业</font>的医疗数据
        运营服务企业</p>
    </div>
    <div><img src="/Public/home/img/about4.jpg"></div>
  </div><?php endif; ?> 
</section>
<footer style="padding-bottom:10px">
  <p> 
    北京东软望海科技有限公司@版权所有   <br>
    dongruanwanghai@gmail.com    <br>
                	010-67183686  010-66410808<br>
                	010-66410008<br>
                	北京市东城区广渠门内大街45号雍贵中心D座11层<br>
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