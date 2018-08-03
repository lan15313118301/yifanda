<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo ($title); ?>金沙滩旅游</title>
<link rel="stylesheet" type="text/css" href="/Public/home/css/public.css">
<script type="text/javascript" src="/Public/home/js/jquery.1.9.1.js"></script>
</head>
<body>
<div class="header">
	<div class="topbg">
    	<div class="inner">
        	<span>欢迎来到营口金沙滩旅游服务有限公司！</span>
        	<a href="">+收藏本站  |  </a>
            <a href="<?php echo U('aboutus/index');?>">关于我们</a>
        </div>
    </div>
    <div class="head inner">
    	
        <a href="/"><img src="/Public/home/img/logo.png" class="logo"></a>
        <div class="ss">
        	<div class="t">
            	<form action="<?php echo U('tourism/search');?>" method="get">
                    <input type="text" name="key">
                    <input type="submit" value="搜 索">
                </form>
            </div>
            <div class="d">
            	热门：<a href="<?php echo ('tourism/index');?>">旅游服务</a>  |  <a href="<?php echo ('tourism/index');?>">外语翻译</a>  | <a href="<?php echo ('tourism/index');?>"> 家政服务</a>  |  <a href="<?php echo ('tourism/index');?>">商业信息咨询</a>  |  <a href="<?php echo ('law/index');?>">法律咨询服务</a>
            </div>
        </div>
        <img src="/Public/home/img/tel.png" class="tel" >
        
    </div>
    
</div>
<div class="navbg">
    <ul class="nav inner">
        <li <?php if(CONTROLLER_NAME == 'Index'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("index/index");?>">首页</a></li>
        <li <?php if(CONTROLLER_NAME == 'Aboutus'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("aboutus/index");?>">关于我们</a></li>
        <li <?php if(CONTROLLER_NAME == 'Tourism'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("tourism/index");?>">旅游服务</a></li>
        <li <?php if(CONTROLLER_NAME == 'Law'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("law/index");?>">法律咨询服务</a></li>
        <li <?php if(CONTROLLER_NAME == 'News'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("news/index");?>">旅游资讯</a></li>
        <li <?php if(CONTROLLER_NAME == 'House'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("house/index");?>">家政服务</a></li>
        <li <?php if(CONTROLLER_NAME == 'Business'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("business/index");?>">商业信息咨询</a></li>
        <li <?php if(CONTROLLER_NAME == 'Language'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("language/index");?>">外语翻译</a></li>
        <li <?php if(CONTROLLER_NAME == 'Contactus'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("contactus/index");?>">联系我们</li></a>
    </ul>
</div>
<div class="aboutbg"></div>
<div style="clear:both"></div>
<div class="ernavbg">
	<div class="ernav inner">
    	<div class="position">当前位置：<a href="/">首页</a> > <a href="<?php echo U("gouse/index");?>">家政服务</a></div>
        <div class="nav">
        	<ul>
              <li class="hover"><a href="#title1">家政服务</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="about inner">
  <div class="content"><?php echo ($data["content"]["0"]); ?></div>
</div>
<div style="clear:both"></div>
<div class="footerbg">
	<div class="footer inner">
    	<ul class="nav inner">
        	<li <?php if(CONTROLLER_NAME == 'Index'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("index/index");?>">首页</a></li>
        <li <?php if(CONTROLLER_NAME == 'Aboutus'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("aboutus/index");?>">关于我们</a></li>
        <li <?php if(CONTROLLER_NAME == 'Tourism'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("tourism/index");?>">旅游服务</a></li>
        <li <?php if(CONTROLLER_NAME == 'Law'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("law/index");?>">法律咨询服务</a></li>
        <li <?php if(CONTROLLER_NAME == 'News'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("news/index");?>">旅游资讯</a></li>
        <li <?php if(CONTROLLER_NAME == 'House'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("house/index");?>">家政服务</a></li>
        <li <?php if(CONTROLLER_NAME == 'Business'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("business/index");?>">商业信息咨询</a></li>
        <li <?php if(CONTROLLER_NAME == 'Language'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("language/index");?>">外语翻译</a></li>
        <li <?php if(CONTROLLER_NAME == 'Contactus'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("contactus/index");?>">联系我们</li></a>
        </ul>
    	
        <div class="min">
        	<p>
            服务时间 ：早 ：8:00     晚：8:00<br>
Email：hanweinzh@163.com<br>
地址：辽宁省营口市鲅鱼圈区熊岳镇万科海港城7-B号楼10号商业
            </p>
            <img src="/Public/home/img/footerimg.png" >
        </div>
        
        <p class="d">技术支持：<a href="">鸿扬网络</a> </p>
        
    </div>
</div>
</body>
</html>