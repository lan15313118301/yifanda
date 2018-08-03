<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo ($title); ?>北京东方隆博机电设备有限公司</title>
<link rel="stylesheet" type="text/css" href="/Public/home/css/public.css">
<script type="text/javascript" src="/Public/home/js/jquery.1.9.1.js"></script>
</head>
<body>
<div class="header">
	<div class="topbg">
    	<div class="inner">
        	<span>东方隆博：成为最受欢迎的热水器品牌运营商</span>
        	<a href="<?php echo U('contactus/index');?>">联系我们</a> | 
            <a href="">关注东方隆博</a> | 
            <a href="">收藏我们</a>
        </div>
    </div>
    <div class="head inner">
    	
        <a href="/"><img src="/Public/home/img/logo.png" class="logo"></a>
        <img src="/Public/home/img/tel.png" class="tel" >
        
    </div>
    
</div>
<div class="navbg">
<ul class="nav inner">
        	<li <?php if(CONTROLLER_NAME == 'Index'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("index/index");?>">网站首页</a></li>
            <li <?php if(CONTROLLER_NAME == 'Aboutus'): ?>class="hover"<?php endif; ?>>
           		<a href="<?php echo U("aboutus/index");?>">关于我们</a>
               <!-- <div>
                	<span><a href="<?php echo U('aboutus/index?id=1');?>">公司简介</a></span>
                  <span><a href="<?php echo U('aboutus/index?id=2');?>">领导致辞</a></span>
                  <span><a href="<?php echo U('aboutus/index?id=3');?>">荣誉资质</a></span>
                  <span><a href="<?php echo U('aboutus/index?id=4');?>">企业文化</a></span> 
                  <span><a href="<?php echo U('aboutus/index?id=5');?>">组织架构</a></span> 
                  <span><a href="<?php echo U('aboutus/index?id=6');?>">发展历程</a></span>
                </div>-->
            </li>
            <li <?php if(CONTROLLER_NAME == 'News'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("news/index");?>">新闻中心</a></li>
            <li <?php if(CONTROLLER_NAME == 'Product'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("product/index");?>">产品介绍</a></li>
            <li <?php if(CONTROLLER_NAME == 'Support'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("support/index");?>">技术支持</a></li>
            <li <?php if(CONTROLLER_NAME == 'Service'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("service/index");?>">服务流程</a></li>
            <li <?php if(CONTROLLER_NAME == 'Project'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("project/index");?>">工程业绩</a></li>
            <li <?php if(CONTROLLER_NAME == 'Contactus'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("contactus/index");?>">联系我们</li></a>
        </ul>
        </div>
<div class="supportbg"></div>
<div style="clear:both"></div>
<div class="ernavbg">
	<div class="ernav inner">
    	<div class="position">
            当前位置:<a href="/">首页</a> > <a href="<?php echo U("support/index");?>">技术支持</a>
        </div>
        <div class="nav">
        	<ul>
              <li class="hover"><a href="<?php echo U("support/index");?>">技术支持</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="support inner">
	<ul>
    	<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li>
                <a href="<?php echo U('support/show?id='.$v['id'].'');?>"><img src="<?php echo ($v["thumb"]); ?>"></a>
                <span class="t"><a href="<?php echo U('support/show?id='.$v['id'].'');?>"><?php echo ($v["name"]); ?></a> <font></font></span>
                <p><?php echo ($v["summary"]); ?></p>
                <a href="<?php echo U('support/show?id='.$v['id'].'');?>"><span class="t2">查看详情</span></a>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
        
        
       
    </ul>
    <div class="page" style="margin-top:20px"><?php echo ($page); ?></div>
	<div style="clear:both"></div>
</div>
<div style="clear:both"></div>
<div class="footerbg">
	<div class="footer inner">
    	<ul class="nav inner">
        	<li <?php if(CONTROLLER_NAME == 'Index'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("index/index");?>">网站首页</a></li>
            <li <?php if(CONTROLLER_NAME == 'Aboutus'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("aboutus/index");?>">关于我们</a></li>
            <li <?php if(CONTROLLER_NAME == 'News'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("news/index");?>">新闻中心</a></li>
            <li <?php if(CONTROLLER_NAME == 'Product'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("product/index");?>">产品介绍</a></li>
            <li <?php if(CONTROLLER_NAME == 'Support'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("support/index");?>">技术支持</a></li>
            <li <?php if(CONTROLLER_NAME == 'Service'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("service/index");?>">服务流程</a></li>
            <li <?php if(CONTROLLER_NAME == 'Project'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("project/index");?>">工程业绩</a></li>
            <li <?php if(CONTROLLER_NAME == 'Contactus'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("contactus/index");?>">联系我们</li></a>
        </ul>
    	<img src="/Public/home/img/footerlogo.png" class="logo">
        <ul class="lxwm">
        	<li><img src="/Public/home/img/footimg1.png" /> 电话: 010-85912706&nbsp;&nbsp;010-85912887 </li>
            <li><img src="/Public/home/img/footimg2.png" />邮箱：dflb8888@163.com</li>
            <li><img src="/Public/home/img/footimg3.png" />地址：北京 朝阳区北京市朝阳区慈云寺1号院东区国际2号楼2907</li>
        </ul>
        <img src="/Public/home/img/foottel.png" class="tel">
        <p>Copyright © 鸿扬网络科技 All Rights Reserved 版权    陕ICP备13006227号 高端网站建设领导者！ </p>
        
    </div>
</div>
</body>
</html>