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

    

<div class="photovoltaicbg"></div>
<div style="clear:both"></div>
<div class="ernavbg"> </div>
<div class="photovoltaic inner">
  <div class="ernav"> <span>光伏产业</span>
    <ul>
      <li class="hover"><a href="<?php echo U("photovoltaic/index");?>">光伏项目</a></li>
    </ul>
    <img src="/Public/home/img/leftnavbg.jpg"> </div>
  <div class="erright">
    <div class="top"> <span>光伏产业</span>
      <div class="position">当前位置：<a href="/">首页</a> > <a href="<?php echo U("photovoltaic/index");?>">光伏产业</a></div>
    </div>
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