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


<div class="programmebg"></div>
<div style="clear:both"></div>
<div class="ernavbg"></div>
<div class="case inner">
  <div class="ernav"> <span>经典案例与案例</span>
    <ul>            
            <li><a href="<?php echo U('programme/index');?>">解决方案</a></li>
			<li class="hover"><a href="<?php echo U('programme/cases');?>">经典案例</a></li>
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
    <div class="top"> <span>经典案例</span>
      <div class="position"> 您当前位置：<a href="/">首页</a> > <a href="<?php echo U('programme/index');?>">经典案例与案例</a> >
        经典案例 </div>
    </div>
    <div class="programmenav">
      <ul>
            <li <?php if($type == 1): ?>class="hover"<?php endif; ?>><a href="<?php echo U('programme/case?type=1');?>">西北地区</a></li>
            <li <?php if($type == 2): ?>class="hover"<?php endif; ?>><a href="<?php echo U('programme/case?type=2');?>">东北地区</a></li>
            <li <?php if($type == 3): ?>class="hover"<?php endif; ?>><a href="<?php echo U('programme/case?type=3');?>">华东地区</a></li>
            <li <?php if($type == 4): ?>class="hover"<?php endif; ?>><a href="<?php echo U('programme/case?type=4');?>">西南地区</a></li>
            <li <?php if($type == 5): ?>class="hover"<?php endif; ?>><a href="<?php echo U('programme/case?type=5');?>">华北地区</a></li>
            <li <?php if($type == 6): ?>class="hover"<?php endif; ?>><a href="<?php echo U('programme/case?type=6');?>">华南地区</a></li>
            <li <?php if($type == 7): ?>class="hover"<?php endif; ?>><a href="<?php echo U('programme/case?type=7');?>">华中地区</a></li>
		</ul>
    </div>
    <div class="content">
      <ul>
		<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li> 
            	<a href="<?php echo U('programme/case?id='.$v['id'].'');?>"><img src="<?php echo ($v["thumb"]); ?>"></a> 
                <span class="tit"><a href="<?php echo U('programme/case?id='.$v['id'].'');?>"><?php echo ($v["name"]); ?></a></span> 
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
        

      </ul>
      <div class="page"><?php echo ($page); ?></div>
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