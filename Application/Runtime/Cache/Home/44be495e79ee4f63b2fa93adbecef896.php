<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo ($title); ?>_中南（香港）能源有限公司</title>
<link rel="stylesheet" type="text/css" href="/Public/home/css/public.css">
<script type="text/javascript" src="/Public/home/js/jquery.1.9.1.js"></script>
</head>
<body>
<div class="header">
	<div class="topbg">
    	<div class="inner">
        	
        	<a href="">中文</a> | 
            <a href="">英文</a> | 
            <a href="">繁体</a>
        </div>
    </div>
    <div class="head inner">
    	
        <a href="/"><img src="/Public/home/img/logo.jpg" class="logo"></a>
       
        <ul class="nav">
            <li <?php if(CONTROLLER_NAME == 'Index'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("index/index");?>">首页</a></li>
            <li <?php if(CONTROLLER_NAME == 'Aboutus'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("aboutus/index");?>">企业概况</a></li>
            <li <?php if(CONTROLLER_NAME == 'Photovoltaic'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("photovoltaic/index");?>">光伏产业</a></li>
            <li <?php if(CONTROLLER_NAME == 'Wind'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("wind/index");?>">风电产业</a></li>
            <li <?php if(CONTROLLER_NAME == 'Power'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("power/index");?>">电力服务</a></li>
            <li <?php if(CONTROLLER_NAME == 'Human'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("human/index");?>">人力资源</a></li>
            <li <?php if(CONTROLLER_NAME == 'Contactus'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("contactus/index");?>">联系我们</a></li>
        </ul>
        
    </div>
    
</div>

    

<div class="aboutusbg"></div>
<div style="clear:both"></div>
<div class="ernavbg"> </div>
<div class="social inner">
  <div class="ernav"> <span>企业概况</span> 
    <ul>
  <li <?php if($data["id"] == 1): ?>class="hover"<?php endif; ?>><a href="<?php echo U("aboutus/index");?>">公司介绍</a></li>
  <li <?php if($data["id"] == 2): ?>class="hover"<?php endif; ?>><a href="<?php echo U("aboutus/index?id=2");?>">组织架构</a></li>
  <li <?php if(ACTION_NAME == 'qualification' || ACTION_NAME == 'qualification_show'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("aboutus/qualification");?>">企业资质</a></li>
  <li <?php if($data["id"] == 3): ?>class="hover"<?php endif; ?>><a href="<?php echo U("aboutus/index?id=3");?>">业绩分布图</a></li>
  <li <?php if($data["id"] == 4): ?>class="hover"<?php endif; ?>><a href="<?php echo U("aboutus/index?id=4");?>">业务结构</a></li>
  <li <?php if($data["id"] == 5): ?>class="hover"<?php endif; ?>><a href="<?php echo U("aboutus/index?id=5");?>">公司实力</a></li>
  <li <?php if(ACTION_NAME == 'honor' || ACTION_NAME == 'honor_show'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("aboutus/honor");?>">公司荣誉</a></li>
  <li <?php if(ACTION_NAME == 'social' || ACTION_NAME == 'social_show'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("aboutus/social");?>">社会责任</a></li>
</ul>
 
    <img src="/Public/home/img/leftnavbg.jpg"> </div>
  <div class="erright">
    <div class="top"> <span>社会责任</span>
      <div class="position">当前位置：<a href="/">首页</a> > <a href="<?php echo U("aboutus/index");?>">关于我们</a> > 社会责任</div>
    </div>
    <div class="content">
      <ul>
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i; if($i == 1): ?><li class="one">
                        <a href="<?php echo U('aboutus/social_show?id='.$v['id'].'');?>"><img src="<?php echo ($v["thumb"]); ?>"></a>
                        <span class="t"><a href="<?php echo U('news/show?id='.$v['id'].'');?>"><?php echo ($v["name"]); ?></a> <font></font></span>
                        <p><?php echo ($v["summary"]); ?></p>
                        <a href="<?php echo U('aboutus/social_show?id='.$v['id'].'');?>"><span class="t2">阅读全文</span></a>
                    </li>
                <?php else: ?>
            		<li><a href="<?php echo U('aboutus/social_show?id='.$v['id'].'');?>"><?php echo ($v["name"]); ?></a><span class="time"><?php echo (date('Y/m/d',$v["addtime"])); ?></span></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
            
      </ul>
      <div class="page"><?php echo ($page); ?></div>
    </div>
  </div>
</div>
<div style="clear:both"></div>
<div class="footerbg">
	<div class="footer inner">
    	<ul class="nav">
        	<li><a href="<?php echo U("index/index");?>">首页</a></li>
            <li class="line">::</li>
            <li><a href="<?php echo U("aboutus/index");?>">企业概况</a></li>
            <li class="line">::</li>
            <li><a href="<?php echo U("photovoltaic/index");?>">光伏产业</a></li>
            <li class="line">::</li>
            <li><a href="<?php echo U("wind/index");?>">风电产业</a></li>
            <li class="line">::</li>
            <li><a href="<?php echo U("power/index");?>">电力服务</a></li>
            <li class="line">::</li>
            <li><a href="<?php echo U("human/index");?>">人力资源</a></li>
            <li class="line">::</li>
            <li><a href="<?php echo U("contactus/index");?>">联系我们</a></li>
    	</ul>
    	<img src="/Public/home/img/footlogo.png" class="logo">
        <ul class="lxwm">
        	<li><img src="/Public/home/img/footimg1.png" />公司座机：028-85645989</li>
            <li><img src="/Public/home/img/footimg2.png" />公司Q  Q：1225567634 </li>
            <li><img src="/Public/home/img/footimg3.png" />北京市西城区宣内大街西线胡同28号1506室</li>
        </ul>
        <img src="/Public/home/img/foottel.png" class="tel">
        <p>Copyright @中南（香港）新能源有限公司&nbsp;&nbsp;&nbsp;&nbsp;技术支持：<a href="http://www.hongyangkeji.com.cn/" target="_blank">鸿扬网络</a> </p>
        
    </div>
</div>
</body>
</html>