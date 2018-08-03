<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo ($title); ?>_东软望海</title>
<link rel="stylesheet" type="text/css" href="/Public/home/css/public.css">
<script type="text/javascript" src="/Public/home/js/jquery.1.9.1.js"></script>
<script type="text/javascript" src="/Public/home/js/jquery.form.js"></script>
</head>
<body>
<div class="header">
  <div class="head inner"> <a href="/"><img src="/Public/home/img/logo.png" class="logo"></a>
    <ul class="nav ">
      <li <?php if(CONTROLLER_NAME == 'Index'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("index/index");?>">网站首页</a>
      </li>
      <li <?php if(CONTROLLER_NAME == 'Aboutus'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("aboutus/index");?>">关于望海</a>
      	<div>
        	<span><a href="<?php echo U('aboutus/index');?>">企业介绍</a></span>
        	<span><a href="<?php echo U('aboutus/honor');?>">望海荣誉</a></span>                
        	<span><a href="<?php echo U('aboutus/style');?>">望海风采</a></span>
        	<span><a href="<?php echo U('aboutus/speech');?>">总裁致辞</a></span>
        </div>
      </li>
      <li <?php if(CONTROLLER_NAME == 'Product'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("product/index");?>">产品展示</a>
      	<div>
        	<span><a href="<?php echo U('product/index?type=1');?>">医院产品端</a></span>
        	<span><a href="<?php echo U('product/index?type=2');?>">政府产品端</a></span>
        </div>
      </li>
      <li <?php if(CONTROLLER_NAME == 'Programme'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("programme/index");?>">解决方案与案例</a>
      	<div>
        	<span><a href="<?php echo U('programme/index');?>">解决方案</a></span>
        	<span><a href="<?php echo U('programme/cases');?>">经典案例</a></span>
        </div>
      </li>
      <li <?php if(CONTROLLER_NAME == 'Consultation'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("consultation/index");?>">咨询服务</a>
      	<div>
        	<span><a href="<?php echo U('consultation/index');?>">战略咨询</a></span>
        	<span><a href="<?php echo U('consultation/presale');?>">售前咨询</a></span>                
        	<span><a href="<?php echo U('consultation/strategy');?>">实施服务</a></span>
        </div>
      </li>
      <li <?php if(CONTROLLER_NAME == 'News'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("news/index");?>">新闻资讯</a>
      	<div>
        	<span><a href="<?php echo U('news/index?type=1');?>">行业新闻</a></span>
        	<span><a href="<?php echo U('news/index?type=2');?>">公司新闻</a></span>
        	<span><a href="<?php echo U('news/index?type=3');?>">媒体报道</a></span>
        </div>
      </li>
      <li <?php if(CONTROLLER_NAME == 'Responsibility'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("responsibility/index");?>">社会责任</a>
      	<div>
        	<span><a href="<?php echo U('responsibility/index');?>">公益理念</a></span>
        	<span><a href="<?php echo U('responsibility/charitable');?>">慈善捐赠</a></span>                
        	<span><a href="<?php echo U('responsibility/responsibility');?>">责任体系</a></span>
        	<span><a href="<?php echo U('responsibility/social');?>">社会责任报告</a></span>
        </div>
      </li>
      <li <?php if(CONTROLLER_NAME == 'Contactus'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("contactus/index");?>">联系我们</a>
      	<div style="right:0; left:auto">
        	<span><a href="<?php echo U('contactus/index');?>">联系方式</a></span>
        	<span><a href="<?php echo U('contactus/careers');?>">招贤纳士</a></span>
        </div>
      </li>
    </ul>
  </div>
</div>


<div class="programmebg"></div>
<div style="clear:both"></div>
<div class="ernavbg"></div>
<div class="service inner">
  <div class="ernav">
    	<span>解决方案与案例</span>
        <ul>            
            <li><a href="<?php echo U('programme/index');?>">解决方案</a></li>
			<li class="hover"><a href="<?php echo U('programme/cases');?>">经典案例</a></li>
        </ul>
    </div>
  <div class="erright">
    <div class="top"> <span>解决方案</span>
      <div class="position"> 您当前位置：<a href="/">首页</a> > <a href="<?php echo U('programme/index');?>">解决方案与案例</a> >
        <a href="<?php echo U('programme/cases?type='.$data[typename].'');?>"><?php echo ($typename); ?></a> > <?php echo ($data["name"]); ?> </div>
    </div>
    <div class="programmenav">
    	<ul>
            <li <?php if($type == 1): ?>class="hover"<?php endif; ?>><a href="<?php echo U('programme/cases?type=1');?>">华北地区</a></li>
            <li <?php if($type == 2): ?>class="hover"<?php endif; ?>><a href="<?php echo U('programme/cases?type=2');?>">东北地区</a></li>
            <li <?php if($type == 3): ?>class="hover"<?php endif; ?>><a href="<?php echo U('programme/cases?type=3');?>">华东地区</a></li>
            <li <?php if($type == 4): ?>class="hover"<?php endif; ?>><a href="<?php echo U('programme/cases?type=4');?>">华南地区</a></li>
            <li <?php if($type == 5): ?>class="hover"<?php endif; ?>><a href="<?php echo U('programme/cases?type=5');?>">华中地区</a></li>
            <li <?php if($type == 6): ?>class="hover"<?php endif; ?>><a href="<?php echo U('programme/cases?type=6');?>">西南地区</a></li>
            <li <?php if($type == 7): ?>class="hover"<?php endif; ?>><a href="<?php echo U('programme/cases?type=7');?>">西北地区</a></li>
		</ul>
    </div>
    <div class="ertitle">
        	<b><?php echo ($data["name"]); ?></b> <?php echo ($data["enname"]); ?>
        </div>
        <div class="content">
        	<?php echo ($data["content"]); ?>
        </div>
  </div>
</div>
<div style="clear:both"></div>

<div style="clear:both"></div>
<div class="footerbg">
	<div class="ft">
    	<div class="content inner">
        	<div class="l">
            	<span>联系方式</span>
                <ul>
                	<li>dongruanwanghai@gmail.com    </li>
                	<li>010-67183686  010-66410808</li>
                	<li>010-66410008</li>
                	<li>北京市东城区广渠门内大街45号雍贵中心D座11层</li>
                </ul>
            </div>
            <div class="m"><img src="/Public/home/img/rwm.png"></div>
            <div class="r">
            	<span>解决方案</span>
                <ul>
                    <li><a href="<?php echo U('programme/index?type=1');?>">OES</a></li>
                    <li><a href="<?php echo U('programme/index?type=2');?>">DRG</a></li>
                	<li><a href="<?php echo U('programme/index?type=3');?>">HRP</a></li>
                </ul>
            </div>
            <div class="r">
            	<span>客户服务</span>
                <ul>
                    <li><a href="<?php echo U('consultation/index');?>">战略咨询</a></li>
                    <li><a href="<?php echo U('consultation/presale');?>">售前咨询</a></li>
                	<li><a href="<?php echo U('consultation/strategy');?>">实施服务</a></li>
                </ul>
            </div>
            
            <div class="r">
            	<span>关于我们</span>
                <ul>
                	<li><a href="<?php echo U('aboutus/index');?>">公司介绍</a></li>
                    <li><a href="<?php echo U('aboutus/honor');?>">望海荣誉</a></li>
                	<li><a href="<?php echo U('aboutus/style');?>">望海风采</a></li>
                    <li><a href="<?php echo U('aboutus/speech');?>">总裁致辞</a></li>
                </ul>
            </div>
            
        </div>
    </div>
    
</div>
<div class="footerdbg">
<div class="footerd inner">
    	<div class="l">版权所有：北京东软望海科技有限公司   京ICP备13014106号       </div>
        <ul>
        	<li><a href="<?php echo U('index/index');?>">网站首页</a></li>
            <li><a href="<?php echo U('aboutus/index');?>">关于望海</a></li>
            <li><a href="<?php echo U('product/index');?>">产品展示</a></li>
            <li><a href="<?php echo U('programme/index');?>">解决方案与案例</a></li>
            <li><a href="<?php echo U('consultation/index');?>">咨询服务</a></li>
            <li><a href="<?php echo U('news/index');?>">新闻资讯</a></li>
            <li><a href="<?php echo U('responsibility/index');?>">社会责任</a></li>
            <li><a href="<?php echo U('contactus/index');?>">联系我们</a></li>
        </ul>
    </div>
</div>
</body>
</html>