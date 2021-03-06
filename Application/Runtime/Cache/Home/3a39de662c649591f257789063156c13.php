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
    <div class="head inner">
        <a href="/"><img src="/Public/home/img/logo.png" class="logo"></a>
        <ul class="nav ">
            <li <?php if(CONTROLLER_NAME == 'Index'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("index/index");?>">首页</a></li>
            <li <?php if(CONTROLLER_NAME == 'Furniture'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("furniture/index");?>">明清家具</a>
				<div class="ej furniture_nav">
                	<div class="cont">
                    <?php if(is_array($furnituretype)): $i = 0; $__LIST__ = $furnituretype;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div>
                    	<img src="<?php echo ($v["thumb"]); ?>" class="img">
                        <span><?php echo ($v["name"]); ?></span>
                        <img src="/Public/home/img/furniture7.png" class="img1">
                        <p><?php echo ($v["summary"]); ?></p>
                        <a href="<?php echo U("furniture/index?type=".$v["id"]."");?>" class="more">了解更多</a>
                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
				</div>            
            </li>
            <li <?php if(CONTROLLER_NAME == 'Personal'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("personal/index");?>">私人订制</a></li>
            <li <?php if(CONTROLLER_NAME == 'Case'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("case/index");?>">经典案例</a>
            	<div class="ej furniture_nav" style="margin-left:-592px">
                	<div class="cont">
					<div>
                    	<img src="/Public/home/img/furniture6.jpg" class="img">
                        <span>别墅专区</span>
                        <img src="/Public/home/img/furniture7.png" class="img1">
                        <p>以经典明清宝座、罗汉床为原型，结合现代元素，为您打造儒雅、舒适、极具品位的休闲待客区域。</p>
                        <a href="" class="more">了解更多</a>
                    </div>
                    <div>
                    	<img src="/Public/home/img/furniture6.jpg" class="img">
                        <span>公寓专区</span>
                        <img src="/Public/home/img/furniture7.png" class="img1">
                        <p>以精湛的技艺复刻传统经典书房，为您打造宁静雅致的看书、冥想、办公区域。</p>
                        <a href="">了解更多</a>
                    </div>
                    <div>
                    	<img src="/Public/home/img/furniture6.jpg" class="img">
                        <span>会所专区</span>
                        <img src="/Public/home/img/furniture7.png" class="img1">
                        <p>以自由、轻松为念，为您营造身心方式的畅聊区域。品茶论道，何其快意！</p>
                        <a href="">了解更多</a>
                    </div>
                    <div>
                    	<img src="/Public/home/img/furniture6.jpg" class="img">
                        <span>办公室专区</span>
                        <img src="/Public/home/img/furniture7.png" class="img1">
                        <p>一套好餐桌、一组好餐具，简单而又美好，享受用餐，享受生活</p>
                        <a href="">了解更多</a>
                    </div>
                    <div>
                    	<img src="/Public/home/img/furniture6.jpg" class="img">
                        <span>酒店专区</span>
                        <img src="/Public/home/img/furniture7.png" class="img1">
                        <p>典雅唯美，为您营造一个私密、温馨的休息空间</p>
                        <a href="">了解更多</a>
                    </div>
                    </div>
				</div>
            </li>
            <li <?php if(CONTROLLER_NAME == 'Service'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("service/index");?>">客户服务</a>
            	<div class="ej furniture_nav" style="margin-left:-754px">
                	<div class="cont">
                    <?php if(is_array($service)): $i = 0; $__LIST__ = $service;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div>
                    	<img src="<?php echo ($v["thumb"]); ?>" class="img">
                        <span><?php echo ($v["name"]); ?></span>
                        <img src="/Public/home/img/furniture7.png" class="img1">
                        <p><?php echo ($v["summary"]); ?></p>
                        <a href="<?php echo U('service/index?id='.$v['id'].'');?>" class="more">了解更多</a>
                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
                    
				</div>
            </li>
            <li <?php if(CONTROLLER_NAME == 'Craftsman'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("craftsman/index");?>">工艺大师</a></li>
            <li <?php if(CONTROLLER_NAME == 'Story'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("story/index");?>">品牌故事</a>
            	<div class="ej furniture_nav" style="margin-left:-1078px">
                	<div class="cont">
					<?php if(is_array($storytype)): $i = 0; $__LIST__ = $storytype;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div>
                    	<img src="<?php echo ($v["thumb"]); ?>" class="img">
                        <span><?php echo ($v["name"]); ?></span>
                        <img src="/Public/home/img/furniture7.png" class="img1">
                        <p><?php echo ($v["summary"]); ?></p>
                        <a href="<?php echo U("story/index?type=".$v["id"]."");?>" class="more">了解更多</a>
                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
				</div>
            </li>
        </ul>
    </div>
</div>

    
<div class="servicebg"></div>
<div style="clear:both"></div>
<div class="ernavbg"></div>
<div class="service inner">
	<div class="ernav">
    	<span>百问百答</span>
        <ul>
        	<li <?php if($type == 1): ?>class="hover"<?php endif; ?>><a href="<?php echo U('interlocution/index?type=1');?>">木材问答</a></li>
            <li <?php if($type == 2): ?>class="hover"<?php endif; ?>><a href="<?php echo U('interlocution/index?type=2');?>">工艺问答</a></li>
            <li <?php if($type == 3): ?>class="hover"<?php endif; ?>><a href="<?php echo U('interlocution/index?type=3');?>">搭配问答</a></li>
            <li <?php if($type == 4): ?>class="hover"<?php endif; ?>><a href="<?php echo U('interlocution/index?type=4');?>">其它问答</a></li>
        </ul>
        
        <span style="margin-top:8px">联系我们</span>
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
            
             
        </div>
    </div>
     <div class="erright">
    	<div class="top">
        	<span><?php echo ($typename); ?></span>
            <div class="position">
            	您当前位置：<a href="/">首页</a> > 
                <a href="<?php echo U('interlocution/index');?>">品牌印象</a> >
                <a href="<?php echo U('interlocution/index?type='.$type.'');?>"><?php echo ($typename); ?></a> >
                <?php echo ($data["name"]); ?>
            </div>
        </div>
        
        <div class="content">
			<?php echo ($data["content"]); ?>        	
        </div>
     </div>
</div>
<div style="clear:both"></div>

<div style="clear:both"></div>
<div class="bottom inner">
     	<span class="t">百问百答</span>
        <ul>
        	<li>
            	<div>
                	<img src="/Public/home/img/furniture1.png"><br>木材问答
                </div>
                <?php if(is_array($interlocution1)): $i = 0; $__LIST__ = $interlocution1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><span><a href="<?php echo U('interlocution/show?id='.$v['id'].'');?>"><?php echo ($v["name"]); ?></a></span><?php endforeach; endif; else: echo "" ;endif; ?>
                <a href="<?php echo U('interlocution/index?type=1');?>" class="more"><img src="/Public/home/img/furniture5.png"></a>
            </li>
            <li>
            	<div>
                	<img src="/Public/home/img/furniture2.png"><br>工艺问答
                </div>
				<?php if(is_array($interlocution2)): $i = 0; $__LIST__ = $interlocution2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><span><a href="<?php echo U('interlocution/show?id='.$v['id'].'');?>"><?php echo ($v["name"]); ?></a></span><?php endforeach; endif; else: echo "" ;endif; ?>
                <a href="<?php echo U('interlocution/index?type=2');?>" class="more"><img src="/Public/home/img/furniture5.png"></a>
            </li>
            <li>
            	<div>
                	<img src="/Public/home/img/furniture3.png"><br>搭配问答
                </div>
				<?php if(is_array($interlocution3)): $i = 0; $__LIST__ = $interlocution3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><span><a href="<?php echo U('interlocution/show?id='.$v['id'].'');?>"><?php echo ($v["name"]); ?></a></span><?php endforeach; endif; else: echo "" ;endif; ?>
                <a href="<?php echo U('interlocution/index?type=3');?>" class="more"><img src="/Public/home/img/furniture5.png"></a>
            </li>
            <li>
            	<div>
                	<img src="/Public/home/img/furniture4.png"><br>其它问答
                </div>
				<?php if(is_array($interlocution4)): $i = 0; $__LIST__ = $interlocution4;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><span><a href="<?php echo U('interlocution/show?id='.$v['id'].'');?>"><?php echo ($v["name"]); ?></a></span><?php endforeach; endif; else: echo "" ;endif; ?>
                <a href="<?php echo U('interlocution/index?type=4');?>" class="more"><img src="/Public/home/img/furniture5.png"></a>
            </li>
            
        </ul>
        <div class="ge"></div>
     </div>
<div style="clear:both"></div>
<div class="footerbg">
	<div class="ft">
    	<div class="content inner">
        	<div class="l">
            	<span>联系我们</span>
                <ul>
                	<li>电话:010-85791899</li>
                	<li>手机（微信）：15652997347</li>
                	<li>邮箱：beijingjiaqiange@163.com</li>
                	<li>ＱＱ：412593706</li>
                	<li>工厂地址：北京顺义临河村直营中心：北京朝阳区高碑店新村一区4-1</li>
                </ul>
            </div>
            <div class="r">
            	<span>关于我们</span>
                <ul>
                	<li><a href="<?php echo U('aboutus/index');?>">关于嘉乾阁</a></li>
                	<li><a href="<?php echo U('aboutus/culture');?>">企业文化</a></li>
                	<li><a href="<?php echo U('aboutus/responsibility');?>">社会责任</a></li>
                	<li><a href="<?php echo U('aboutus/video');?>">视频中心</a></li>
                	<li><a href="<?php echo U('aboutus/recruitment');?>">人才招聘</a></li>
                	<li><a href="<?php echo U('aboutus/contactus');?>">联系我们</a></li>
                </ul>
            </div>
            <div class="search">
                <ul>
                	<li><span>姓名　｜　</span><input type="text"></li>
                	<li><span>电话　｜　</span><input type="text"></li>
                	<li class="textarea"><textarea placeholder="内容"></textarea></li>
                	<li style="background:none"><input type="submit" value="提交"></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="fd inner">
    	<div class="content">Copyright 2017 www.drivingsoft.com 北京嘉乾阁家具有限公司 版权所有 All Rights Reserved</div>
    </div>
</div>
</body>
</html>