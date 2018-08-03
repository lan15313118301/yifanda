<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo ($title); ?>_集成康锐</title>
<link rel="stylesheet" type="text/css" href="/Public/home/css/public.css">
<script type="text/javascript" src="/Public/home/js/jquery.1.9.1.js"></script>
</head>
<body>
<div class="header">
	<div class="topbg">
    	<div class="top inner">
            <span>
                <font>400 - 600 - 8500</font>
                <a href="<?php echo U('news/index');?>">新闻资讯</a> |
                <a href="<?php echo U('joinus/index');?>">加入我们</a> |
                <a href="<?php echo U('contactus/index');?>">联系我们</a>
            </span>
        </div>
    </div>
    <div class="head inner">
        <a href="/"><img src="/Public/home/img/logo.png" class="logo"></a>
        <ul class="nav ">
            <li <?php if(CONTROLLER_NAME == 'Index'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("index/index");?>">首页</a></li>
            <li <?php if(CONTROLLER_NAME == 'Aboutus'): ?>class="hover"<?php endif; ?>><a href="<?php echo U('aboutus/index');?>">关于我们</a>
				<div class="bg"></div>
				<div class="ej">
					<span><a href="<?php echo U('aboutus/index');?>">公司简介</a></span>
					<span><a href="<?php echo U('aboutus/honor');?>">资质荣誉</a></span>
				</div>
			</li>
            <li <?php if(CONTROLLER_NAME == 'Healthy'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("healthy/index");?>">健康攻略</a>
            	<div class="bg"></div>
				<div class="ej">
					<span><a href="<?php echo U('healthy/index?type=1');?>">护鼻</a></span>
					<span><a href="<?php echo U('healthy/index?type=2');?>">爱眼</a></span>
				</div>
            </li>
            <li <?php if(CONTROLLER_NAME == 'Product'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("product/index");?>">产品中心</a>
            	<div class="bg"></div>
				<div class="ej">
					<span><a href="<?php echo U('product/index?type=1');?>">护鼻冲洗器</a></span>
					<span><a href="<?php echo U('product/index?type=2');?>">隐形眼镜冲洗器</a></span>
				</div>
            </li>
            <li <?php if(CONTROLLER_NAME == 'Responsibility'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("responsibility/index");?>">责任与创新</a>
            	<div class="bg"></div>
				<div class="ej">
					<span><a href="<?php echo U('responsibility/index');?>">社会责任</a></span>
					<span><a href="<?php echo U('responsibility/technology');?>">技术创新</a></span>
                    <span><a href="<?php echo U('responsibility/administration');?>">管理创新</a></span>
				</div>
            </li>
            <li <?php if(CONTROLLER_NAME == 'Service'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("service/index");?>">服务支持</a>
            	<div class="bg"></div>
				<div class="ej">
					<span><a href="<?php echo U('service/index');?>">常见问题</a></span>
					<span><a href="<?php echo U('service/information');?>">信息通告</a></span>
                    <span><a href="<?php echo U('service/hotline');?>">服务热线</a></span>
					<span><a href="<?php echo U('service/feedback');?>">意见反馈</a></span>
				</div>
            </li>
        </ul>
        <div class="ss">
        	<form method="post" action="<?php echo U('search/index');?>" enctype="multipart/form-data" id="myform">
            	<input type="text" name="key" value="<?php echo ($key); ?>" placeholder="请输入关键词">
                <input type="submit" value="">
            </form>
        </div>
    </div>
</div>

    

<div class="servicebg"></div>
<div style="clear:both"></div>
<div class="ernavbg"> </div>
<div class="service inner">
  <div class="erright">
    <div class="top">
      <div class="position"><a href="/">首页</a> > <a href="<?php echo U('service/feedback');?>">服务支持</a> > 意见反馈</div>
    </div>
    <div class="content feedback"> 
      <div class="l"> <span>服务支持</span>
  <ul>
    <li <?php if(ACTION_NAME == 'index'): ?>class="hover"<?php endif; ?>><a href="<?php echo U('service/index');?>">· 常见问题</a></li>
    <li <?php if(ACTION_NAME == 'information' || ACTION_NAME == 'information_show'): ?>class="hover"<?php endif; ?>><a href="<?php echo U('service/information');?>">· 信息通告</a></li>
    <li <?php if(ACTION_NAME == 'hotline'): ?>class="hover"<?php endif; ?>><a href="<?php echo U('service/hotline');?>">· 服务热线</a></li>
    <li <?php if(ACTION_NAME == 'feedback'): ?>class="hover"<?php endif; ?>><a href="<?php echo U('service/feedback');?>">· 意见反馈</a></li>
  </ul>
</div>

        <script src="/Public/home/js/jquery.form.js"></script>
		<script type="text/javascript">
			$(function(){
				$('#myform').ajaxForm({
					success:  complete1, 
					dataType: 'json'
				});
				function complete1(data){
					if (data.status==1){
						alert(data.content);
					}
					
					if (data.status==2){
						alert("提交成功,感谢您的反馈");
						location.reload();
					}
					
				}
			});
		</script>
      <div class="r">
        <form method="post" action="<?php echo U('service/feedback');?>" enctype="multipart/form-data" id="myform">
	    <input type="hidden" name="action" value="add">
      	<ul>
        	<li><span>您的称呼：</span><input type="text" name="name" /></li>
        	<li><span>您的电话：</span><input type="text" name="tel" /></li>
        	<li><span>电子邮件：</span><input type="text" name="email" /></li>
        	<li><span>在此输入您的问题/意见/建议：</span><textarea name="content"></textarea></li>
            <li><input type="submit" value="提交" /></li>
        </ul>
        </form>
      </div>
    </div>
  </div>
</div>
<div style="clear:both"></div>
<div class="footerbg">
	<div class="ft">
    	<div class="content inner">
        	<ul>
            	<li>
                	<span class="t"><font>关于我们</font></span>
                    <a href="/">首页</a>
                    <a href="<?php echo U('aboutus/index');?>">公司简介</a>
                    <a href="<?php echo U('aboutus/honor');?>">资质荣誉</a>
                </li>
                <li>
                	<span class="t"><font>产品中心</font></span>
                    <a href="<?php echo U('product/index');?>">鼻部冲洗器</a>
                    <a href="">隐形眼镜清洗器</a>
                </li>
                <li>
                	<span class="t"><font>服务支持</font></span>
                    <a href="<?php echo U('service/index');?>">常见问题</a>
                    <a href="<?php echo U('service/information');?>">信息通告</a>
                    <a href="<?php echo U('service/hotline');?>">服务热线</a>
                    <a href="<?php echo U('service/feedback');?>">意见反馈</a>
                </li>
                <li>
                	<span class="t"><font>其他信息</font></span>
                    <a href="<?php echo U('contactus/index');?>">联系我们</a>
                    <a href="<?php echo U('joinus/index');?>">加入我们</a>
                    <a href="<?php echo U('healthy/index');?>">健康攻略</a>
                    <a href="<?php echo U('news/index');?>">新闻资讯</a>
                </li>
            </ul>
            <div class="right">
            	<img src="/Public/home/img/tel.png">
                <img src="/Public/home/img/wixin.png">
                <img src="/Public/home/img/xinlang.png">
                <img src="/Public/home/img/fenxiang.png">
            </div>
        </div>
    </div>
    <div class="fd inner">
    	<div class="content">Copyright 2017 www.drivingsoft.com   北京集成康锐 版权所有 All Rights Reserved</div>
    </div>
</div>
</body>
</html>