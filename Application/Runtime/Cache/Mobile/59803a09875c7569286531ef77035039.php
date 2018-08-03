<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0,user-scalable=no">
<meta name="format-detection" content="telephone=no" />
<title><?php echo ($title); ?>-传树建材</title>
<link rel="stylesheet" type="text/css" href="/Public/mobile/css/public.css">
<script type="text/javascript" src="/Public/home/js/jquery-1.7.2.min.js"></script>

<link rel="stylesheet" type="text/css" href="/Public/mobile/css/reset.css">
<link rel="stylesheet" type="text/css" href="/Public/mobile/css/reboot.css">
<link rel="stylesheet" type="text/css" href="/Public/mobile/css/main.css">
<link rel="stylesheet" type="text/css" href="/Public/mobile/css/media.css">
<script src="/Public/mobile/js/jquery-ui.min.js"></script>
<script src="/Public/mobile/js/jquery.simplesidebar.js"></script>

</head>
<body>
<div class="wrapper">
	
	<div class="toolbar">
    	<a href="<?php echo U('mobile/index/index');?>"><img class="logo" src="/Public/mobile/img/logo.png"></a>
		<div id="open-sb" class="menu-button menu-left"></div>
	</div>
	<section class="sidebar">
		<nav>
			<h6>网站导航</h6>
			<ul>
				<li><a href="<?php echo U('mobile/index/index');?>">网站首页</a></li>
				<li><a href="<?php echo U('mobile/aboutus/index');?>">关于我们</a>
                	<ul style="font-size:12px">
                    	<li style=" margin:0; line-height:24px"><a href="<?php echo U('aboutus/index?id=1');?>">● 公司简介</a></li>
                        <li style=" margin:0; line-height:24px"><a href="<?php echo U('aboutus/index?id=2');?>">● 领导致辞</a></li>
                        <li style=" margin:0; line-height:24px"><a href="<?php echo U('aboutus/index?id=3');?>">● 荣誉资质</a></li>
                        <li style=" margin:0; line-height:24px"><a href="<?php echo U('aboutus/index?id=4');?>">● 企业文化</a></li>
                        <li style=" margin:0; line-height:24px"><a href="<?php echo U('aboutus/index?id=5');?>">● 组织架构</a></li>
                        <li style=" margin:0; line-height:24px"><a href="<?php echo U('aboutus/index?id=6');?>">● 发展历程</a></li>
                    </ul>
                </li>
				<li><a href="<?php echo U('mobile/product/index');?>">产品中心</a></li>
				<li><a href="<?php echo U('mobile/case/index');?>">案例展示</a></li>
				<li><a href="<?php echo U('mobile/join/index');?>">招商加盟</a>
                	<ul style="font-size:12px">
                    	<li style=" margin:0; line-height:24px"><a href="<?php echo U('join/index?id=7');?>">● 加盟优势</a></li>
                    	<li style=" margin:0; line-height:24px"><a href="<?php echo U('join/index?id=8');?>">● 合作办厂</a></li>
                    	<li style=" margin:0; line-height:24px"><a href="<?php echo U('join/index?id=9');?>">● 客户直购</a></li>
                    	<li style=" margin:0; line-height:24px"><a href="<?php echo U('join/index?id=10');?>">● 产品代理</a></li> 
                    	<li style=" margin:0; line-height:24px"><a href="<?php echo U('join/index?id=11');?>">● 加盟流程</a></li> 
                    </ul>
                </li>
				<li>
                	<a href="<?php echo U("service/index");?>">售后服务</a>
                    <ul style="font-size:12px">
                    	<li style=" margin:0; line-height:24px"><a href="<?php echo U('service/index');?>">● 安装说明</a></li>
                    	<li style=" margin:0; line-height:24px"><a href="<?php echo U('service/show?id=12');?>">● 产品优势</a></li>
                    	<li style=" margin:0; line-height:24px"><a href="<?php echo U('service/show?id=13');?>">● 服务承诺</a></li>
                    </ul>
                	
                </li>
				<li><a href="<?php echo U("activities/index");?>">商务活动</a></li>
				<li><a href="<?php echo U("news/index");?>">新闻中心</a></li>
                <li><a href="<?php echo U("contactus/index");?>">联系我们</a>
                	<ul style="font-size:12px">
                    	<li style=" margin:0; line-height:24px"><a href="<?php echo U('contactus/index');?>">● 联系方式</a></li>
                    	<li style=" margin:0; line-height:24px"><a href="<?php echo U('contactus/recruitment');?>">● 人才招聘</a></li>
                    	<li style=" margin:0; line-height:24px"><a href="<?php echo U('contactus/dingdan');?>">● 在线订单</a></li>
                    </ul>
                </li>
			</ul>
			
		</nav>
	</section>
</div>
<script>
$( document ).ready(function() {
	$.ajaxSetup({
		cache: false
	});
	$( '.sidebar' ).simpleSidebar({
		settings: {
			opener: '#open-sb',
			wrapper: '.wrapper',
			animation: {
				duration: 500,
				easing: 'easeOutQuint'
			}
		},
		sidebar: {
			align: 'right',
			width: 200,
			closingLinks: 'a',
		}
	});
});
</script>

<link rel="stylesheet" type="text/css" href="/Public/mobile/css/zzsc.css" />
<div style="clear:both"></div>
<div class="main">
  <div class="pro-switch">
    <div class="slider">
      <div class="flexslider">
        <ul class="slides">
          <li>
            <div class="img"><img src="/Public/mobile/img/banner5.jpg" width="100%"/></div>
          </li>
          <li>
            <div class="img"><img src="/Public/mobile/img/ban_5.jpg" width="100%"/></div>
          </li>
          <li>
            <div class="img"><img src="/Public/mobile/img/banner3.jpg" width="100%"/></div>
          </li>
          <li>
            <div class="img"><img src="/Public/mobile/img/ban_3.jpg" width="100%"/></div>
          </li>
          <li>
            <div class="img"><img src="/Public/mobile/img/ban_4.jpg" width="100%"/></div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<script defer src="/Public/mobile/js/slider.js"></script> 
<script type="text/javascript">
    $(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
</script> 
<img src="/Public/mobile/img/img.jpg" style="width:100%" /> 
<link href="/Public/mobile/css/movingboxes.css" rel="stylesheet">
<link href="/Public/mobile/css/demo.css" rel="stylesheet">
<script src="/Public/mobile/js/jquery.movingboxes.js"></script>
<script>
	$(function(){

		$('#slider1').movingBoxes({
			/* width and panelWidth options deprecated, but still work to keep the plugin backwards compatible
			width: 80,
			*/
			
			panelWidth: 1,
			startPanel   : 0.1,      // start with this panel
			wrap         : true,   // if true, the panel will "wrap" (it really rewinds/fast forwards) at the ends
			buildNav     : true,   // if true, navigation links will be added
			navFormatter : function(){ return "&#9679;"; } // function which returns the navigation text for each panel
		});

	});
	</script>
	<div id="wrapper" style="width:80%; margin:0 auto">

		<h1 class="demo-title"></h1>
		<!-- MovingBoxes Slider -->
		<ul id="slider1">
			<?php if(is_array($product)): $i = 0; $__LIST__ = $product;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li>
                    <a href="<?php echo U('product/show?id='.$v["id"].'');?>"><img src="<?php echo ($v["thumb"]); ?>"></a>
                    <h2><a href="<?php echo U('product/show?id='.$v["id"].'');?>"><?php echo ($v["name"]); ?></a></h2>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>

		</ul><!-- end Slider #1 -->

	</div><!-- end wrapper -->

<img src="/Public/mobile/img/img6.jpg" style="margin-top:2%; width:100%" />
<div class="div1">
    <div class="top">
        <span class="t">案例展示</span>
        <span class="more"><a href="<?php echo U('case/index');?>">更多&gt;&gt;</a></span>
    </div>
    <div class="down">
    	<ul>
        	<?php if(is_array($case)): $i = 0; $__LIST__ = $case;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li>
                    <a href="<?php echo U('case/show?id='.$v["id"].'');?>"><img src="<?php echo ($v["thumb"]); ?>"></a>
                    <span><a href="<?php echo U('case/show?id='.$v["id"].'');?>"><?php echo ($v["name"]); ?></a></span>
                    
                </li><?php endforeach; endif; else: echo "" ;endif; ?>
           
        </ul>
    </div>
</div>

<div class="div2">
    <div class="top">
        <span class="t">新闻中心</span>
        <span class="more"><a href="<?php echo U('news/index');?>">更多&gt;&gt;</a></span>
    </div>
    <div class="down">
    	<ul>
        	<?php if(is_array($news)): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li>
            	<a href="<?php echo U('news/show?id='.$v[id].'');?>"><img src="<?php echo ($v["thumb"]); ?>"></a>
                <span><a href="<?php echo U('news/show?id='.$v[id].'');?>"><?php echo ($v["name"]); ?></a></span>
                <p><?php echo (cut_str($v["summary"],70)); ?></p>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
</div>

<iframe style=" width:98%; height:20em; margin:0 1%" src="http://player.youku.com/embed/XMTM3MDc5MTIwNA==" frameborder=0 allowfullscreen></iframe>


<div class="footerbg">
	<div class="footer inner">
    	<img src="/Public/home/img/ewm.png" style="width:60%; margin:5% 20% 0" />
    	<p class="address">
        	版权所有：北京传树建材科技集团有限公司<br>
全国统一热线：400-099-9135 <br>
电话：010-57027382 \57931195<br>
传真：010-85794002<br>
总部：北京市东城区朝阳门外大街8号富华大厦 F座<br>
          8B(近地铁2号线东四十条站东南口以及东二环)<br>
生产孵化基地：北京市平谷区马坊镇马坊工业园区东区8号

			</p>
    </div>
</div>

</body>
</html>