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
      </li>
    </ul>
  </div>
</div>


<div class="contactusbg"></div>
<div style="clear:both"></div>
<div class="ernavbg"> </div>
<div class="service inner">
	 <div class="ernav">
    	<span>联系我们</span>
        <ul>            
            <li><a href="<?php echo U('contactus/index');?>">联系方式</a></li>
			<li class="hover"><a href="<?php echo U('contactus/recruit');?>">招贤纳士</a></li>
        </ul>
    </div>
     <div class="erright">
    	<div class="top">
        	<span><?php echo ($data["name"]); ?></span>
            <div class="position">
            	您当前位置：<a href="/">首页</a> > 招贤纳士
            </div>
        </div>
        <div class="ertitle">
        	<b>联系方式</b> Contact Information
        </div>
        <div class="content support"> 
      
      <div class="r">
        <ul>
          <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li> <span class="tit"><?php echo ($v["name"]); ?></span>
            <div class="cont"> 
            	<p><?php echo ($v["content"]); ?></p>
              <img src="/Public/home/img/top.jpg" />
              </div>
          </li><?php endforeach; endif; else: echo "" ;endif; ?>
          
          
        </ul>
      </div>
      <div class="page">
        <?php echo ($page); ?>
      </div>
    </div>
     </div>
</div>
<script type="text/javascript">
	$(function() {
		$(".r ul li").click(function(){
			if($(this).children('div').css('display') == "none"){
				$(this).children('span.tit').css("background-image","url(/Public/home/img/jian.png)");
				$(this).children('div').slideDown();	
			}
		});
		
		$(".cont img").click(function(){
			if($(this).parent('div').css('display') == "block"){
				$(this).parent('div').slideUp();	
				$(this).parent().prev().css("background-image","url(/Public/home/img/jia.png)");
			}
		});
	})
</script> 
<script type="text/javascript">
$(document).ready(function(){

	$(".side ul li").hover(function(){
		$(this).find(".sidebox").stop().animate({"width":"140px"},200).css({"opacity":"1","filter":"Alpha(opacity=100)","background":"#357DB8"})	
	},function(){
		$(this).find(".sidebox").stop().animate({"width":"49px"},200).css({"opacity":"0.8","filter":"Alpha(opacity=80)","background":"#000"})	
	});
	
});

//回到顶部
function goTop(){
	$('html,body').animate({'scrollTop':0},600);
}
</script> 

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