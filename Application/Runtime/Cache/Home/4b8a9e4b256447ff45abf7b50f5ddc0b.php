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

<style type="text/css">
	img,
	ol,
	li,
	h1,
	h2,
	h3,
	h4,
	h5,
	h6,
	th,
	b,
	input,
	select,
	dl,
	dt,
	dd {
		margin: 0 auto;
		padding: 0px;
		list-style-type: none;
		font-weight: normal;
		font-size: 100%;
		border: 0px;
		font-weight: bolder;
		text-align: center;
	}
	
	h1 {
		font-size: 70px;
		font-weight: bold;
		/* padding: 10px 0 5px 0; */
		color: #ffab2b;
		text-align: center;
	}
	
	h2 {
		width: 100%;
		float: left;
		font-size: 30px;
		font-weight: bold;
		padding: 10px 0 5px 0;
		color: #333;
		letter-spacing: 0;
	}
	
	.introFont {
		width: 100%;
		font-size: 16px;
		line-height: 28px;
		color: #757575;
		padding: auto 3%;
	}
	
	fieldset,
	img {
		/*width:100%;*/
		display: block;
		border: none;
		margin: 0 auto;
	}
	
	input,
	button,
	select,
	textarea {
		outline: none
	}
	
	*:focus {
		outline: none;
	}
	
	body {
		font-family: Microsoft JhengHei, sans-serif;
		margin: 0px;
		padding: 0px;
		font-size: 14px;
		overflow-x: hidden;
		background-color: #ffffff;
		letter-spacing: 1px;
	}
	/*body {font-family:"Microsoft Jhenghei",'Nanum Gothic', sans-serif;margin:0px;padding:0px;font-size: 14px;overflow-x: hidden;color:fff; background-color:#333;}*/
	
	a {
		cursor: pointer;
		text-decoration: none;
	}
	
	a:hover {
		/*filter: brightness(1.1);-ms-filter: brightness(1.1);-moz-filter: brightness(1.1);-webkit-filter: brightness(1.1);*/
	}
	
	.center {
		margin: auto;
		padding: 0;
		width: 80%;
		margin-left: 25%;
	}
	
	::-webkit-input-placeholder {
		/* WebKit browsers */
		color: #fff;
	}
	
	:-moz-placeholder {
		/* Mozilla Firefox 4 to 18 */
		color: #fff;
	}
	
	::-moz-placeholder {
		/* Mozilla Firefox 19+ */
		color: #fff;
	}
	
	:-ms-input-placeholder {
		/* Internet Explorer 10+ */
		color: #fff;
	}
	
	.about {
		display: ;
		width: 100%;
		float: right;
		position: relative;
		background: #fff;
	}
	
	.about .block_2 {
		width: 90%;
		margin: 0 5%;
		float: left;
	}
	
	.about .block_2 h2 {
		width: 100%;
		float: left;
		font-size: 30px;
		font-weight: bold;
		padding: 10px 0 5px 0;
		color: #333;
		letter-spacing: 0;
	}
	
	.about .block_2 ul {
		float: left;
		width: 100%;
		margin: 20px 0;
	}
	
	.about .block_2 ul li {
		width: 45%;
		margin: 0 2.5%;
		float: left;
		height: 150px;
	}
	
	.about .block_1 {
		width: 90%;
		margin: 0 5%;
		float: left;
	}
	
	.about .block_1 ul {}
	
	.about .block_1 ul li {
		float: left;
		width: 100%;
		margin: 20px 0;
	}
	
	.about .block_1 .b1img {
		width: 34%;
		margin: 0 2.5%;
		max-width: 320px;
	}
	
	.about .block_1 .b1intro {
		width: 56%;
		margin: 0 2.5%;
		float: left;
		padding: 30px 0 0 0;
	}
	
	.about .block_1 .b1intro h2 {
		width: 100%;
		float: left;
		font-size: 30px;
		font-weight: bold;
		padding: 10px 0 5px 0;
		color: #333;
		letter-spacing: 0;
	}
	
	.about .block_3 {
		width: 90%;
		margin: 0 5%;
		float: left;
	}
	
	.about .block_3 ul {
		float: left;
		width: 100%;
		margin: 20px 0;
	}
	
	.about .block_3 ul li {
		width: 33.3%;
		margin: 0;
		float: left;
	}
	
	.about .block_3 .b3img {
		width: 60%;
		margin: 0 20%;
		/*max-width: 167px;*/
	}
	
	.about .block_3 .b3intro {
		margin: 0 5%;
		float: left;
		padding: 20px 0 0 0;
	}
	
	.about .block_3 .b3intro h2 {
		width: 100%;
		float: left;
		font-size: 18px;
		font-weight: bold;
		padding: 10px 0 5px 0;
		color: #333;
		letter-spacing: 0;
	}
	
	.about .tokenFlow {
		width: 90%;
		margin: 50px 5% 0 5%;
		float: left;
	}
	
	.about .tokenFlow .textTKF {
		width: 44%;
		margin: 0 0 0 3%;
		float: left;
	}
	
	.about .tokenFlow .textTKF ul {}
	
	.about .tokenFlow .textTKF ul li {
		width: 100%;
		float: left;
		font-size: 15px;
		color: #757575;
		letter-spacing: 0;
		list-style: decimal;
		line-height: 40px;
	}
	
	.about .tokenFlow .imgTKF {
		width: 50%;
		margin: 0;
		float: left;
		position: relative;
		min-width: 570px;
		top: -290px;
		left: 42%;
		z-index: 9;
	}
	
	.product .content ul li {
		float: left;
		width: 448px;
		background: #fff;
		padding: 20px 20px;
		width: 32.3%;
		border-bottom: #fff solid 0px;
	}
	
	.evatar {
		display: ;
		width: 100%;
		float: left;
		position: relative;
		padding: 0;
		background: url(..//Public/home/img/bg_evatar02.svg) no-repeat center top #000;
		margin: -320px 0 0 0;
		overflow: hidden;
	}
	
	.evatar .block_4 {
		width: 90%;
		margin: 0 5%;
		float: left;
	}
	
	.evatar .block_4 ul {
		float: left;
		width: 100%;
		margin: 50px 0% 50px 0%;
	}
	
	.evatar .block_4 ul li {
		width: 25%;
		margin: 0;
		float: left;
		transition: all 1s;
	}
	
	.evatar .block_4 .b4img {
		width: 60%;
		margin: 0 20%;
		/*max-width: 167px;*/
	}
	
	.evatar .block_4 .b4intro {
		width: 90%;
		margin: 0 5%;
		float: left;
		padding: 20px 0 0 0;
	}
	
	.evatar .block_4 .b4intro h2 {
		width: 100%;
		float: left;
		font-size: 24px;
		font-weight: bold;
		padding: 10px 0 5px 0;
		color: #fff;
		letter-spacing: 0;
		text-align: center;
	}
	
	.evatar .gameTOP {
		width: 90%;
		margin: 50px 5% 0 5%;
		float: left;
		position: relative;
	}
	/*å…©å¼µé›»è…¦æµ®å‹•*/
	
	.evatar .gameTOP .imgGT10 {
		width: 50%;
		margin: 0;
		float: left;
		position: relative;
		min-width: 590px;
		top: -50px;
		left: -12%;
		;
		z-index: 9;
		transition: all 1s;
	}
	/*.evatar .gameTOP .imgGT200 {width:50%;margin:0; float:left;position: relative;min-width:590px;top: -450px;left:48%;z-index: 10;}*/
	
	.evatar .gameTOP .imgGT10 ul {
		position: absolute;
		float: left;
		bottom: 33.6%;
		width: 100%;
		height: 100%;
		overflow: hidden;
	}
	
	.evatar .gameTOP .imgGT10 ul li {
		float: left;
	}
	
	.evatar .gameTOP .imgGT10 ul li>img {}
	
	.evatar .gameTOP .imgGT10 .gt10_a {
		bottom: 0px;
		float: left;
		position: absolute;
		width: 8%;
		left: 15%;
	}
	
	.evatar .gameTOP .imgGT10 .gt10_b {
		bottom: 0px;
		float: left;
		position: absolute;
		width: 8%;
		left: 24.5%;
	}
	
	.evatar .gameTOP .imgGT10 .gt10_c {
		bottom: 0px;
		float: left;
		position: absolute;
		width: 8%;
		left: 33.5%;
	}
	
	.evatar .gameTOP .imgGT10 .gt10_d {
		bottom: 0px;
		float: left;
		position: absolute;
		width: 17%;
		left: 39%;
	}
	
	.evatar .gameTOP .imgGT10 .gt10_e {
		bottom: 0px;
		float: left;
		position: absolute;
		width: 9%;
		left: 52%;
	}
	
	.evatar .gameTOP .imgGT10 .gt10_f {
		bottom: 0px;
		float: left;
		position: absolute;
		width: 8.5%;
		left: 61.5%;
	}
	
	.evatar .gameTOP .imgGT10 .gt10_g {
		bottom: 0px;
		float: left;
		position: absolute;
		width: 8.5%;
		left: 71%;
	}
	
	.evatar .gameTOP .imgGT10 .gt10_h {
		bottom: 0px;
		float: left;
		position: absolute;
		width: 8.5%;
		left: 80.5%;
	}
	
	.evatar .gameTOP .imgGT200 {
		width: 50%;
		margin: 0;
		float: left;
		position: absolute;
		min-width: 590px;
		top: 16%;
		left: 48%;
		z-index: 10;
		transition: all 1s;
	}
	
	.evatar .gameTOP .imgGT200 ul {
		position: absolute;
		float: left;
		bottom: 33.6%;
		width: 100%;
		height: 100%;
		overflow: hidden;
	}
	
	.evatar .gameTOP .imgGT200 ul li {
		float: left;
	}
	
	.evatar .gameTOP .imgGT200 ul li>img {}
	
	.evatar .gameTOP .imgGT200 .gt200_a {
		bottom: 0px;
		float: left;
		position: absolute;
		width: 21%;
		left: 12%;
	}
	
	.evatar .gameTOP .imgGT200 .gt200_b {
		bottom: 0px;
		float: left;
		position: absolute;
		width: 23.5%;
		left: 20%;
	}
	
	.evatar .gameTOP .imgGT200 .gt200_c {
		bottom: 0px;
		float: left;
		position: absolute;
		width: 21.5%;
		left: 29.5%;
	}
	
	.evatar .gameTOP .imgGT200 .gt200_d {
		bottom: 0px;
		float: left;
		position: absolute;
		width: 36%;
		left: 31.5%;
	}
	
	.evatar .gameTOP .imgGT200 .gt200_e {
		bottom: 0px;
		float: left;
		position: absolute;
		width: 30%;
		left: 43.2%;
	}
	
	.evatar .gameTOP .imgGT200 .gt200_f {
		bottom: 0px;
		float: left;
		position: absolute;
		width: 27%;
		left: 53.5%;
	}
	
	.evatar .gameTOP .imgGT200 .gt200_g {
		bottom: 0px;
		float: left;
		position: absolute;
		width: 27%;
		left: 62.5%;
	}
	
	.evatar .gameTOP .imgGT200 .gt200_h {
		bottom: 0px;
		float: left;
		position: absolute;
		width: 24%;
		left: 73%;
	}
	
	.evatar .evatarApp {
		width: 90%;
		margin: 5% 5% 0 5%;
		float: left;
	}
	
	.evatar .evatarApp .evaAppImg {
		max-width: 368px;
		margin: 0 auto;
	}
	
	.evatar .evatarApp .evaAppLogo {
		max-width: 330px;
		margin: 20% 10%;
		width: 80%;
		float: left;
	}
	
	.evatar .evatarApp ul {
		float: left;
		width: 100%;
		margin: 90px 0 50px 0;
	}
	
	.evatar .evatarApp ul li {
		width: 45%;
		margin: 0 2.5%;
		float: left;
	}
	
	.evatar .evatarApp .gList {
		width: 90%;
		float: left;
		margin: 0 5%;
		font-size: 13px;
		font-weight: bold;
		border-radius: 40px;
		background-color: #ffab2b;
		color: #fff;
		padding: 10px 0;
		text-align: center;
		transition: all 1s;
	}
	
	.evatar .evatarApp .gList:hover {
		background-color: #ffc;
		box-shadow: 0px 0px 15px #fc0;
		color: #666;
	}
	/*road map*/
	
	.evatar .roadMap {
		width: 90%;
		margin: 0 5%;
		float: left;
	}
	
	.evatar .roadMap .rmImg {
		max-width: 720px;
		width: 95%;
		margin: 3% 2.5%;
		float: left;
	}
	/*team*/
	
	.evatar .Team {
		width: 90%;
		margin: 0 5%;
		float: left;
	}
	
	.evatar .Team ul {
		float: left;
		width: 100%;
		margin: 0;
	}
	
	.evatar .Team ul li {
		float: left;
		width: 33.3%;
		margin: 3% 0 0 0;
	}
	
	.evatar .proImg {
		width: 40%;
		margin: 5% 30%;
		transition: all 1s;
	}
	
	.evatar .proName {
		width: 100%;
		float: left;
		font-size: 18px;
		padding: 10px 0 5px 0;
		color: #ffab2b;
		letter-spacing: 0;
		font-weight: bold;
	}
	
	.evatar .proJob {
		width: 100%;
		float: left;
		font-size: 16px;
		line-height: 28px;
		color: #dedede;
		letter-spacing: 0;
		font-weight: bold;
	}
	
	.evatar .proView {
		width: 100%;
		float: left;
	}
	
	.evatar .proView a {
		width: 50%;
		float: left;
		margin: 10px 25%;
		font-size: 12px;
		border-radius: 20px;
		background-color: #555;
		color: #999;
		padding: 5px 0;
		text-align: center;
		transition: all 1s;
	}
	
	.evatar .proView a:hover {
		background-color: #ffab2b;
		color: #fff;
	}
	/*Motion ICO MTN Token information*/
	
	.mimti {
		display: ;
		width: 100%;
		float: left;
		position: relative;
		padding: 0 0 10% 0;
		margin: 0;
		background: #000;
		overflow: hidden;
	}
	
	.mimti .icoTokenInfo {
		width: 90%;
		margin: 0 5%;
		float: left;
	}
	
	.mimti .icoTokenInfo .iTImg {
		max-width: 940px;
		width: 95%;
		margin: 3% 2.5%;
		float: left;
	}
	/*token Allocation*/
	
	.tokenAll {
		display: ;
		width: 100%;
		float: left;
		position: relative;
		padding: 0 0 1% 0;
		background: url(..//Public/home/img/bg_tokenAllocation.svg) no-repeat center -800px #181a3c;
		overflow: hidden;
	}
	
	.tokenAll .tkl {
		width: 90%;
		margin: 0 5%;
		float: left;
	}
	
	.tokenAll .tkl .tKImg {
		width: 100%;
		float: left;
		position: relative;
	}
	
	.tokenAll .tkl .tKImg .piechat {
		width: 55%;
		margin: 3% 22.5%;
		float: left;
		position: relative;
		z-index: 9;
	}
	
	.tokenAll .tkl .tKImg .piechat_a {
		width: 54%;
		float: left;
		position: absolute;
		max-width: 649px;
		top: 24%;
		z-index: 10;
		left: -5%;
	}
	
	.tokenAll .tkl .tKImg .piechat_b {
		width: 32%;
		float: left;
		position: absolute;
		max-width: 395px;
		left: 44%;
		z-index: 10;
		top: 4%;
	}
	
	.tokenAll .tkl .tKImg .piechat_c {
		width: 39%;
		float: left;
		position: absolute;
		max-width: 462px;
		top: 37.5%;
		left: 68%;
		z-index: 10;
	}
	
	.tokenAll .tkl .tKImg .piechat_d {
		width: 40%;
		float: left;
		position: absolute;
		max-width: 456px;
		top: 71%;
		left: 52%;
		z-index: 10;
	}
	
	.tokenAll .fundUsage {
		width: 90%;
		margin: 0 5%;
		float: left;
	}
	
	.tokenAll .fundUsage ul {
		width: 100%;
		float: left;
	}
	
	.tokenAll .fundUsage ul li {
		width: 100%;
		float: left;
		margin: 10px 0;
	}
	
	.tokenAll .fundUsage .fuImgL {
		max-height: 141px;
		width: 15%;
		margin: 2.5%;
		float: left;
	}
	
	.tokenAll .fundUsage .fuImgL .fuA_a {
		position: absolute;
		float: left;
		z-index: 11;
	}
	
	.tokenAll .fundUsage .fuImgL .fuA_b {
		position: absolute;
		float: left;
		z-index: 10;
	}
	
	.tokenAll .fundUsage .fuImgL .fuA_c {
		position: absolute;
		float: left;
		z-index: 9;
	}
	
	.tokenAll .fundUsage .fuImgL .fuC_a {
		position: absolute;
		float: left;
		z-index: 11;
	}
	
	.tokenAll .fundUsage .fuImgL .fuC_b {
		position: absolute;
		float: left;
		z-index: 10;
	}
	
	.tokenAll .fundUsage .fuImgL .fuC_c {
		position: absolute;
		float: left;
		z-index: 9;
	}
	
	.tokenAll .fundUsage .fuImgR {
		max-height: 141px;
		width: 15%;
		margin: 2.5%;
		float: right;
	}
	
	.tokenAll .fundUsage .fuImgR .fuB_a {
		position: absolute;
		float: left;
		z-index: 11;
	}
	
	.tokenAll .fundUsage .fuImgR .fuB_b {
		position: absolute;
		float: left;
		z-index: 10;
	}
	
	.tokenAll .fundUsage .fuImgR .fuB_c {
		position: absolute;
		float: left;
		z-index: 9;
	}
	
	.tokenAll .fundUsage .fuImgR .fuD_a {
		position: absolute;
		float: left;
		z-index: 11;
	}
	
	.tokenAll .fundUsage .fuImgR .fuD_b {
		position: absolute;
		float: left;
		z-index: 10;
	}
	
	.tokenAll .fundUsage .fuImgR .fuD_c {
		position: absolute;
		float: left;
		z-index: 9;
	}
	
	.tokenAll .fundUsage .fuText {
		width: 75%;
		margin: 2.5%;
		float: left
	}
	
	.tokenAll .fundUsage .fuText h2 {
		width: 100%;
		float: left;
		font-size: 40px;
		font-weight: bold;
		padding: 10px 0 5px 0;
		color: #fff;
		letter-spacing: 0;
	}
	
	.textColor01 {
		background-image: -webkit-gradient(linear, left top, left bottom, from(#656cf1), to(#45eaff));
		-webkit-background-clip: text;
		-webkit-text-fill-color: transparent;
	}
	
	.textColor02 {
		background-image: -webkit-gradient(linear, left top, left bottom, from(#4bdbdb), to(#2e7577));
		-webkit-background-clip: text;
		-webkit-text-fill-color: transparent;
	}
	
	.textColor03 {
		background-image: -webkit-gradient(linear, left top, left bottom, from(#fea726), to(#fb792b));
		-webkit-background-clip: text;
		-webkit-text-fill-color: transparent;
	}
	
	.textColor04 {
		background-image: -webkit-gradient(linear, left top, left bottom, from(#833cd1), to(#34216c));
		-webkit-background-clip: text;
		-webkit-text-fill-color: transparent;
	}
	/*å½ˆè·³è¦–çª—*/
	
	.blackBg {
		position: fixed;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		margin: 0 auto;
		background-color: rgba(0, 0, 0, 0.8);
		z-index: 9999;
		overflow: auto;
		display: none;
	}
	
	.blackBg .popbox {
		max-width: 430px;
		width: 95%;
		margin: 4% auto;
		background-color: rgba(18, 20, 42, 0.9);
		border-radius: 10px;
		border: 1px solid #453457;
		overflow: auto;
	}
	
	.popbox .close {
		float: right;
		width: 100%;
	}
	
	.popbox .close img {
		max-width: 31px;
		margin: 0 auto;
		padding: 20px 0;
	}
	
	.bg_top {
		float: left;
		width: 100%;
	}
	
	.bg_center {
		float: left;
		width: 90%;
		padding: 5% 5% 8% 5%;
	}
	
	.bg_center .proImg {
		width: 40%;
		margin: 5% 30%;
		transition: all 1s;
	}
	
	.bg_center .proName {
		width: 100%;
		float: left;
		font-size: 18px;
		padding: 10px 0 5px 0;
		color: #ffab2b;
		letter-spacing: 0;
		font-weight: bold;
	}
	
	.bg_center .proJob {
		width: 100%;
		float: left;
		font-size: 16px;
		line-height: 28px;
		color: #dedede;
		font-weight: bold;
	}
	
	.bg_center .proDes {
		font-size: 13px;
		color: #d9d9d9;
		float: left;
	}
	
	.bg_center .proDes .resume_list {}
	
	.bg_center .proDes .resume_list li {
		float: left;
		width: 90%;
		list-style-type: disc;
		line-height: 28px;
		margin: 0 3% 0 7%;
	}
	
	.copyright .crLi {
		float: left;
		width: 25%;
	}
	
	.copyright .crLi .soIcon {
		float: left;
		width: 30px;
	}
	
	.copyright .crLi ul {}
	
	.copyright .crLi ul li {
		float: left;
		width: 100%;
		margin: 3% 0;
	}
	
	.copyright .crLi ul li a {
		width: 100%;
		float: left;
		font-size: 16px;
		padding: 10px 0 5px 0;
		color: #ccc;
	}
	
	.copyright .crLi h3 {
		width: 100%;
		float: left;
		font-size: 16px;
		padding: 10px 0 5px 0;
		color: #f4b95b;
	}
	
	.copyright .copyfont {
		width: 100%;
		font-size: 11px;
		color: #6e6e6e;
		font-family: Arial, sans-serif;
		padding: 1.5% 0 0 0;
		text-align: center;
	}
	/*éš±ç§æ¬Šæ¢æ¬¾*/
	
	.bg_center .proDes .term li {
		float: left;
		width: 90%;
		line-height: 24px;
		margin: 0 3% 0 7%;
		font-size: 11px;
	}
	
	.term .text01 {
		float: left;
		width: 90%;
		line-height: 24px;
		margin: 0 3% 0 7%;
		font-size: 11px;
	}
	
	.bg_center .proDes .term b {
		font-weight: bold;
		color: #fff;
	}
	
	.listStyleDec {
		list-style: decimal;
	}
	
	.listStyleNo {
		list-style: none;
	}
	
	.listStyleRM {
		list-style: upper-alpha;
	}
	
	.listStyleDS {
		list-style: disc;
	}
	/*GOTOP*/
	
	.gotop {
		position: fixed;
		z-index: 999;
		bottom: 35px;
		right: 35px;
		color: rgba(0, 0, 0, 0.5);
	}
	
	.description_div {
		width: 100%;
	}
	
	.token_usage_flow_img {
		height: 80%;
		width: 80%;
		margin-top: 20px;
	}
	p{
		margin-left: 10%;
	}
</style>
<section>
	<!--百科导航-->
	<div class="t-ctn b-ctn">
		<div class="bty"> <img src="/Public/mobile/img/aboutusbg.jpg" width="640" height="202" alt="banner"> </div>
		<ul>
			<li <?php if($type == 2): ?>class="hover"<?php endif; ?>>
				<a href="<?php echo U('product/honor?type=2');?>">Motion</a>
			</li>
			<li <?php if($type == 1): ?>class="hover"<?php endif; ?>>
				<a href="<?php echo U('product/index?type=1');?>">游戏名称</a>
			</li>

		</ul>
	</div>
</section>
<section>
	<!--百科导航-->
	<div class="t-ctn t-ctn2 b-ctn3">
		<div class="ertitle"> <b><?php echo ($data["name"]); ?></b> <?php echo ($data["enname"]); ?> </div>
		<!--标题-->
		<!--修改-->
		<div class="video_about">
			<h1 style="text-align:center">關於Motion</h1>
			<!--兩欄-->
			<div class="introFont" style="margin: auto 20px;">
				Motion 是區塊鏈時代的手機遊戲平台，遊戲玩家們可使用Motion的加密貨幣MTN，作為官方的遊戲內購貨幣。
			</div>
		</div>
		<div class="block_2">
			<ul style="margin-top: 20px;">
				<li style="text-align:center">
					<h2>社交挖礦</h2>
					<div class="introFont">玩家可透過分享有趣的內容，獲取MTN作為獎勵。</div>
				</li style="text-align:center">

				<li style="text-align:center">
					<h2>去中心化的行銷</h2>
					<div class="introFont">成功轉介他人時，玩家將能收到MTN作為轉介獎金。</div>
				</li>

				<li style="text-align:center">
					<h2>遊戲菁英獎勵</h2>
					<div class="introFont">玩家可藉由完成遊戲相關的各種計件工作來賺取MTN。</div>
				</li>

				<li style="text-align:center">
					<h2>B2B 貸款方案</h2>
					<div class="introFont">玩家可使用MTN支持遊戲開發並賺取利息。</div>
				</li>

			</ul>
		</div>

		<!--1欄 Current problems-->
		<div class="block_1">
			<h1 class="textLH1 w90mg5" style="margin-top: 20px;">產業痛點</h1>
			<ul>
				<li style="width: 100%; display:inline-block; text-align:center;">
					<div class="b1img floatL wow fadeInDown" style="display: inline-block;"><img src="/Public/home/img/cp_a.svg"></div>
					<div class="b1intro wow fadeInDown" data-wow-delay=".3" style="display: inline-block;width: 80%;">
						<h2 class="">高額的平台服務費</h2>
						<div class="introFont">在高額上架費之外，手機遊戲平台還會對遊戲內購部分，收取30%的服務費。</div>
					</div>
				</li>

				<li style="width: 100%;display:inline-block; text-align:center;">
					<div class="b1img floatR wow fadeInLeft" style="display: inline-block;"><img src="/Public/home/img/cp_b.svg"></div>
					<div class="b1intro wow fadeInLeft" data-wow-delay=".3" style="display: inline-block;width: 80%;">
						<h2 class="textAR">高額的玩家獲取成本</h2>
						<div class="introFont textAR">由於眾多遊戲均在爭奪玩家的注意力，玩家的獲取成本逐年增加，在過去8年間已增加15倍。</div>
					</div>
				</li>

				<li style="width: 100%;display:inline-block; text-align:center;">
					<div class="b1img floatL wow fadeInDown" style="display: inline-block;"><img src="/Public/home/img/cp_c.svg"></div>
					<div class="b1intro wow fadeInDown" data-wow-delay=".3" style="display:inline-block;width: 80%;">
						<h2 class="">無所不在的業配文</h2>
						<div class="introFont">網路社群中充斥著廣告與業配，導致玩家所見內容往往有所偏頗，要找到公正的評論越來越困難。</div>
					</div>
				</li>
			</ul>
		</div>

		<!--3欄 Motion is the solution-->
		<div class="block_3">
			<h1 class="textLH1 textAR w90mg5" style="margin-top: 20px;">Motion是最佳的解決方案！</h1>
			<ul>
				<li class="wow zoomIn" data-wow-delay="0" style="width: 80%;">
					<div class="b3img"><img src="/Public/home/img/ms_a.svg"></div>
					<div class="b3intro" style="text-align: center;">
						<h2 class="" style="font-size: 18px; text-align: center;">合理的平台服務費</h2>
						<div class="introFont">Motion將平台服務費降低20% 且不收取上架費，因此當使用MTN進行遊戲內購時，玩家將可獲得10%的折扣。
						</div>
					</div>
				</li>

				<li class="wow zoomIn" data-wow-delay="0" style="width: 80%;">
					<div class="b3img"><img src="/Public/home/img/ms_b.svg"></div>
					<div class="b3intro">
						<h2 class="" style="font-size: 18px;">社交挖礦</h2>
						<div class="introFont">玩家只要在Motion平台上創作有趣的內容來分享對於遊戲的熱情與經驗，就可以挖到MTN，要賺取MTN非常容易。</div>
					</div>
				</li>

				<li class="wow zoomIn" data-wow-delay="0" style="width: 80%;">
					<div class="b3img"><img src="/Public/home/img/ms_c.svg"></div>
					<div class="b3intro">
						<h2 class="" style="font-size: 18px;">去中心化的行銷</h2>
						<div class="introFont">玩家將取代廣告，成為遊戲的最佳的銷售員。只要把推廣連結傳送給親友，所產生之營收都將獲得MTN作為推廣獎勵。</div>
					</div>
				</li>
			</ul>
		</div>

		<!--3欄 Advanced Features on Motion-->
		<div class="block_3" id="p02">
			<h1 class="textLH1 textAL w90mg5" style="margin-top: 5%;">Motion的進階功能</h1>
			<ul>
				<li class="wow zoomIn" data-wow-delay="0" style="width:80%">
					<div class="b3img"><img src="/Public/home/img/afm_a.svg"></div>
					<div class="b3intro">
						<h2 class="" style="font-size: 18px;">遊戲菁英獎勵</h2>
						<div class="introFont">玩家可藉由完成遊戲相關的計件工作賺取代幣來購買虛寶，這種方式同時也能提升社群的忠誠度與互動性。
						</div>
					</div>
				</li>

				<li class="wow zoomIn" data-wow-delay="0" style="width:80%">
					<div class="b3img"><img src="/Public/home/img/afm_b.svg"></div>
					<div class="b3intro">
						<h2 class="" style="font-size: 18px;">B2B 遊戲開發貸款方案</h2>
						<div class="introFont">這個平台除了是為了支持遊戲開發之外，也是要確保 MTN 的供應量與流通性。玩家借出MTN後，將可每天收到利息 。
						</div>
					</div>
				</li>

				<li class="wow zoomIn" data-wow-delay="0" style="width:80%">
					<div class="b3img"><img src="/Public/home/img/afm_c.svg"></div>
					<div class="b3intro">
						<h2 class="" style="font-size: 18px;">去中心化的虛寶交易</h2>
						<div class="introFont">Motion整合區塊鏈技術，為玩家提供加密交易市集，玩家可在安全且可驗證的環境中安心交易各種虛寶。</div>
					</div>
				</li>
			</ul>
		</div>

		<ul >
			<ul>
				<ul style="margin-top: 20px;">
					<p >1.玩家可使用法定貨幣購買MTN</p>
					<p>2.玩家也可藉由社交挖礦與各種去中心化行銷工具賺取MTN</p>
					<p>3.玩家可使用MTN在平台上消費</p>
					<p>4.遊戲發行商將提供玩家購買的服務、遊戲點數以及虛寶</p>
					<p>5.遊戲發行商由Motion平台收回MTN</p>
					<p>6.Motion 可為遊戲發行商將MTN兌換回法定貨幣</p>
				</ul>
				<img style="text-align: center;" width="150%" height="100%" class="token_usage_flow_img" src="/Public/home/img/TokenUsageFlow.png" />
			</ul>
		</ul>
	</div>
	<?php if($data["id"] == 1): ?><!--<div class="aboutdown">-->
	<!--<div> <span>我们的使命</span>-->
	<!--<p>致力于为医院提供高效运营及医疗生态价值链管理，<br>-->
	<!--以最优质的产品和最全面的服务为客户带来<font>高效、便捷、优越</font> 的体验。</p>-->
	<!--</div>-->
	<!--<div> <span>我们的价值观</span>-->
	<!--<p><font>创新 协同 共赢</font></p>-->
	<!--</div>-->
	<!--<div><img src="/Public/home/img/about2.jpg"></div>-->
	<!--<div> <span>我们的企业精神</span>-->
	<!--<p><font>敬业 学习 拿结果</font></p>-->
	<!--&lt;!&ndash;<p>敬业 学习 拿结果</p>&ndash;&gt; -->
	<!--</div>-->
	<!--<div><img src="/Public/home/img/about3.jpg"></div>-->
	<!--<div> <span>我们的愿景</span>-->
	<!--<p>做产品功能上<font>最前瞻</font>、<br>-->
	<!--技术和服务上<font>最专业</font>的医疗数据-->
	<!--运营服务企业</p>-->
	<!--</div>-->
	<!--<div><img src="/Public/home/img/about4.jpg"></div>-->
	<!--</div>--><?php endif; ?>
</section>
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