<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo ($title); ?>_集成康锐</title>
<link rel="stylesheet" type="text/css" href="/Public/home/css/public.css">
<script type="text/javascript" src="/Public/home/js/jquery.1.9.1.js"></script>
<script type="text/javascript" src="/Public/home/js/jquery.form.js"></script>
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

    
<div class="healthybg"></div>
<div style="clear:both"></div>
<div class="ernavbg">
	
</div>
<div class="healthy inner">
     <div class="erright">
    	<div class="top">
            <div class="position">
            	<a href="/">首页</a> > <a href="<?php echo U('healthy/index');?>">健康攻略</a> 
            	<?php if($type == 1): ?>> 护鼻<?php endif; ?>
                <?php if($type == 2): ?>> 爱眼<?php endif; ?>
            </div>
        </div>
        
        <div class="content">
        	<div class="l">
            	<span>健康攻略</span>
                <ul>
                	<li <?php if($type == 1): ?>class="hover"<?php endif; ?>><a href="<?php echo U('healthy/index?type=1');?>">· 护鼻</a></li>
                    <li <?php if($type == 2): ?>class="hover"<?php endif; ?>><a href="<?php echo U('healthy/index?type=2');?>">· 爱眼</a></li>
                </ul>
            </div>
            <div class="r">
            	<ul>
                	<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li>
                    	<span><a href="<?php echo U('healthy/show?id='.$v['id'].'');?>"><b>·</b> <?php echo ($v["name"]); ?></a></span>
                        <p><?php echo ($v["summary"]); ?></p>
                        <a href="<?php echo U('healthy/show?id='.$v['id'].'');?>" class="more">阅读详情 ></a>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                    
                </ul>
            </div>
            <div class="page">
              <?php echo ($page); ?>
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
                    <a href="<?php echo U('product/index?type=1');?>">鼻部冲洗器</a>
                    <a href="<?php echo U('product/index?type=2');?>">隐形眼镜清洗器</a>
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