<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo ($title); ?>_嘉乾阁家具</title>
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
        	<span><a href="">望海荣誉</a></span>                
        	<span><a href="">望海风采</a></span>
        	<span><a href="">总裁致辞</a></span>
        </div>
      </li>
      <li <?php if(CONTROLLER_NAME == 'Product'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("product/index");?>">产品展示</a>
      </li>
      <li <?php if(CONTROLLER_NAME == 'Programme'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("programme/index");?>">解决方案与案例</a>
      </li>
      <li <?php if(CONTROLLER_NAME == 'Consultation'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("consultation/index");?>">咨询服务</a>
      </li>
      <li <?php if(CONTROLLER_NAME == 'News'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("news/index");?>">新闻资讯</a>
      </li>
      <li <?php if(CONTROLLER_NAME == 'Responsibility'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("responsibility/index");?>">社会责任</a>
      </li>
      <li <?php if(CONTROLLER_NAME == 'Contactus'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("contactus/index");?>">联系我们</a>
      	<div>
        	<span><a href="<?php echo U('contactus/index');?>">联系方式</a></span>
        	<span><a href="<?php echo U('contactus/careers');?>">招贤纳士</a></span>
        </div>
      </li>
    </ul>
  </div>
</div>

<div class="aboutusbg"></div>
<div style="clear:both"></div>
<div class="ernavbg"></div>
<div class="service inner">
	 <div class="ernav">
    	<span>关于我们</span>
        <ul>            
            <li <?php if($data["id"] == 1): ?>class="hover"<?php endif; ?>><a href="<?php echo U('aboutus/index');?>">公司介绍</a></li>
			<li <?php if($data["id"] == 2): ?>class="hover"<?php endif; ?>><a href="<?php echo U('aboutus/honor');?>">望海荣誉</a></li>
			<li <?php if(ACTION_NAME == 'style' || ACTION_NAME == 'style_show'): ?>class="hover"<?php endif; ?>><a href="<?php echo U('aboutus/style');?>">望海风采</a></li>
            <li <?php if($data["id"] == 3): ?>class="hover"<?php endif; ?>><a href="<?php echo U('aboutus/speech');?>">总裁致辞</a></li>
        </ul>
        
        <!--<span style="margin-top:8px">联系我们</span>
        <img src="/Public/home/img/tel.jpg">
        <div>
        	北京嘉乾阁家具有限公司<br>
            电话:010-85791899<br>
            手机（微信）：15652997347<br>
            联系人：王经理<br>
            邮箱：beijingjiaqiange@163.com<br>
            网址:www.jiaqiange.com<br>
            工厂地址：北京顺义临河村<br>
            直营中心：北京朝阳区高碑店新村一区4-1
        </div>-->
    </div>
     <div class="erright">
    	<div class="top">
        	<span>望海风采</span>
            <div class="position">
            	您当前位置：<a href="/">首页</a> > 
                <a href="<?php echo U('aboutus/index');?>">联系我们</a> > 
                望海风采 >
                <?php echo ($data["name"]); ?>
            </div>
        </div>
        
        <div class="content">
        	<span class="t"><?php echo ($data["name"]); ?></span>
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
                	<li><a href="<?php echo U('aboutus/index');?>">政府解决方案</a></li>
                	<li><a href="<?php echo U('aboutus/index');?>">医院解决方案</a></li>
                </ul>
            </div>
            <div class="r">
            	<span>客户服务</span>
                <ul>
                	<li><a href="<?php echo U('aboutus/index');?>">VIP服务</a></li>
                	<li><a href="<?php echo U('aboutus/index');?>">特色呼叫中心</a></li>
                </ul>
            </div>
            
            <div class="r">
            	<span>关于我们</span>
                <ul>
                	<li><a href="<?php echo U('aboutus/index');?>">公司介绍</a></li>
                	<li><a href="<?php echo U('aboutus/index');?>">总裁致辞</a></li>
                	<li><a href="<?php echo U('aboutus/index');?>">望海荣誉</a></li>
                </ul>
            </div>
            
        </div>
    </div>
    
</div>
<div class="footerdbg">
<div class="footerd inner">
    	<div class="l">版权所有：北京东软望海科技有限公司   京ICP备13014106号       </div>
        <ul>
        	<li><a href="">首页</a></li>
            <li><a href="">企业</a></li>
            <li><a href="">产品</a></li>
            <li><a href="">新闻</a></li>
            <li><a href="">案例</a></li>
            <li><a href="">客服</a></li>
        </ul>
    </div>
</div>
</body>
</html>