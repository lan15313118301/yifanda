<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo ($title); ?>_中瑞加尔</title>
<link rel="stylesheet" type="text/css" href="/Public/home/css/public.css">
<script type="text/javascript" src="/Public/home/js/jquery.1.9.1.js"></script>
</head>
<body>
<div class="header">
	
    <div class="head inner">
        <a href="/"><img src="/Public/home/img/logo.jpg" class="logo"></a>
        <img src="/Public/home/img/font.jpg" class="font">
        <img src="/Public/home/img/tel.jpg" class="tel">
    </div>
    
</div>
<div class="navbg">
	 <ul class="nav inner">
		<li <?php if(CONTROLLER_NAME == 'Index'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("index/index");?>">网站首页</a></li>
		<li <?php if(CONTROLLER_NAME == 'Aboutus'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("aboutus/index");?>">关于我们</a></li>
		<li <?php if(CONTROLLER_NAME == 'Product'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("product/index");?>">产品中心</a></li>
		<li <?php if(CONTROLLER_NAME == 'Industry'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("industry/index");?>">行业应用</a></li>
        <li <?php if(CONTROLLER_NAME == 'Download'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("download/index");?>">下载中心</a></li>
		<li <?php if(CONTROLLER_NAME == 'News'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("news/index");?>">新闻中心</a></li>
		<li <?php if(CONTROLLER_NAME == 'Message'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("message/index");?>">客户留言</a></li>
		<li <?php if(CONTROLLER_NAME == 'Contactus'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("contactus/index");?>">联系我们</a></li>
	</ul>
	<div style="clear:both"></div>
</div>
    
<div class="messagebg"></div>
<div style="clear:both"></div>
<div class="ernavbg">
	
</div>
<div class="message inner">
	<div class="ernav">
    	<span style="line-height:22px; height:auto; padding:20px 0">产品分类<br>PRODUCTS</span>
        	<ul>
              <?php if(is_array($producttype)): $i = 0; $__LIST__ = $producttype;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li <?php if($type == $v["id"]) echo "class='hover'"; ?>><a href="<?php echo U("product/index?type=".$v['id']."");?>"><?php echo ($v["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>

          <img src="/Public/home/img/leftnavbg.jpg">
          
          <span>联系我们</span>
          <div>
          	<img src="/Public/home/img/leftnavimg.jpg">
        	北京中瑞加尔科技有限公司<br>
            售前咨询：010-80217822<br>
            售前咨询：13311562894<br>
            QQ :  2838404525<br>
            QQ :  1837305866<br>
            售后服务：010-80217822<br>
            客服邮箱：<br>
            zhongruijiaer@163.com<br>
            地址：北京大兴安定工业区
		  </div>
          <img src="/Public/home/img/leftnavbg.jpg">
     </div>
     <div class="erright">
    	<div class="top">
        	<span>客户留言</span>
            <div class="position">当前位置：<a href="/">首页</a> > 客户留言</div>
        </div>
        <div class="content">
        	<div class="cont">
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
						alert("提交成功");
						location.reload();
					}
					
				}
			});
		</script>
                <form method="post" action="<?php echo U('message/index');?>" enctype="multipart/form-data" id="myform">
                <input type="hidden" name="action" value="add">
            	<ul>
                	<li><span>姓名：</span><input type="text" class="text" name="name" placeholder="请输入姓名"></li>
					<li><span>电话：</span><input type="text" class="text" name="tel" placeholder="请输入您的电话"></li>
					<li><span>邮箱：</span><input type="text" class="text" name="email" placeholder="请输入您的邮箱"></li>
					<li><span>地址：</span><input type="text" class="text" name="address" placeholder="请输入您的地址"></li>
					<li><span>留言：</span><textarea name="content"></textarea></li>
                    <li><span></span><input type="submit" class="submit" value="提 交"></li>
            	</ul>
                </form>
            </div>
       </div>
     </div>
</div>
<div style="clear:both"></div>
<div class="footerbg">
	<div class="footer inner">
    	<div class="top">
        	<img src="/Public/home/img/footerimg.jpg">
            <span>地址：中国北京市大兴安定工业区</span>
            <a href="<?php echo U("contactus/index");?>">查看地图</a>
        </div>
        <div class="min">
        	<img src="/Public/home/img/footlogo.png">
            <p>
            	北京中瑞加尔科技有限公司<br>
				接待中心：北京市大兴安定工业区﻿﻿<br>
				售前咨询：010-80217822、 13311562894     售后服务：010-80217822<br>
				QQ:       2838404525 、1837305866       客服邮箱：zhongruijiaer@163.com<br>
            </p>
        </div>
        <div class="down">
        	版权所有 ：中瑞加尔
            <ul class=" footnav">
                <li <?php if(CONTROLLER_NAME == 'Index'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("index/index");?>">网站首页</a></li>
                <li <?php if(CONTROLLER_NAME == 'Aboutus'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("aboutus/index");?>">关于我们</a></li>
                <li <?php if(CONTROLLER_NAME == 'Product'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("product/index");?>">产品中心</a></li>
                <li <?php if(CONTROLLER_NAME == 'Industry'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("industry/index");?>">行业应用</a></li>
                <li <?php if(CONTROLLER_NAME == 'News'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("news/index");?>">新闻中心</a></li>
                <li <?php if(CONTROLLER_NAME == 'Message'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("message/index");?>">客户留言</a></li>
                <li <?php if(CONTROLLER_NAME == 'Contactus'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("contactus/index");?>">联系我们</a></li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>