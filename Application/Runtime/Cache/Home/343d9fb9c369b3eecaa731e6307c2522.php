<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo ($title); ?>金沙滩旅游</title>
<link rel="stylesheet" type="text/css" href="/Public/home/css/public.css">
<script type="text/javascript" src="/Public/home/js/jquery.1.9.1.js"></script>
</head>
<body>
<div class="header">
	<div class="topbg">
    	<div class="inner">
        	<span>欢迎来到营口金沙滩旅游服务有限公司！</span>
        	<a href="">+收藏本站  |  </a>
            <a href="<?php echo U('aboutus/index');?>">关于我们</a>
        </div>
    </div>
    <div class="head inner">
    	
        <a href="/"><img src="/Public/home/img/logo.png" class="logo"></a>
        <div class="ss">
        	<div class="t">
            	<input type="text">
                <input type="submit" value="搜 索">
            </div>
            <div class="d">
            	热门： 旅游服务  |  外语翻译  |  家政服务  |  商业信息咨询  |  法律咨询服务
            </div>
        </div>
        <img src="/Public/home/img/tel.png" class="tel" >
        
    </div>
    
</div>
<div class="navbg">
    <ul class="nav inner">
        <li <?php if(CONTROLLER_NAME == 'Index'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("index/index");?>">首页</a></li>
        <li <?php if(CONTROLLER_NAME == 'Aboutus'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("aboutus/index");?>">关于我们</a></li>
        <li <?php if(CONTROLLER_NAME == 'Tourism'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("tourism/index");?>">旅游服务</a></li>
        <li <?php if(CONTROLLER_NAME == 'Law'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("law/index");?>">法律咨询服务</a></li>
        <li <?php if(CONTROLLER_NAME == 'News'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("news/index");?>">旅游资讯</a></li>
        <li <?php if(CONTROLLER_NAME == 'House'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("house/index");?>">家政服务</a></li>
        <li <?php if(CONTROLLER_NAME == 'Business'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("business/index");?>">商业信息咨询</a></li>
        <li <?php if(CONTROLLER_NAME == 'Language'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("language/index");?>">外语翻译</a></li>
        <li <?php if(CONTROLLER_NAME == 'Contactus'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("contactus/index");?>">联系我们</li></a>
    </ul>
</div>
<div class="aboutbg"></div>
<div style="clear:both"></div>
<div class="ernavbg">
	<div class="ernav inner">
    	<div class="position">当前位置：<a href="/">首页</a> > <a href="<?php echo U("tourism/index");?>">旅游服务</a> > <?php echo ($data["name"]); ?></div>
        <div class="nav">
        	<ul>
              <li class="hover"><a href="#title1">旅游服务</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="tourism_show inner">
	<div class="top">
    	<img src="<?php echo ($data["thumb"]); ?>">
        <div class="r">
        	<span><?php echo ($data["name"]); ?></span>
            <p><?php echo ($data["summary"]); ?></p>
            <a href="javascript: void 0;" id="sd">立即预定</a>
        </div>
    </div>
    <div class="down">
    	<ul class="ulnav">
        	<li class="on"><a href="#t1">预定须知</a></li>
            <li><a href="#t2">景点简介</a></li>
            <li><a href="#t3">交通指南</a></li>
            <li><a href="#t4">温馨提示</a></li>
        </ul>
        
        <span class="tit" id="t1"><b>预定须知</b></span>
        <div class="content">
        	<?php echo ($data["content"]["0"]); ?> 
        </div>
        <span class="tit" id="t2"><b>景点简介</b></span>
        <div class="content">
        	<?php echo ($data["content"]["1"]); ?> 
        </div>
        <span class="tit" id="t3"><b>交通指南</b></span>
        <div class="content">
        	<?php echo ($data["content"]["2"]); ?>  
        </div>
        <span class="tit" id="t4"><b>温馨提示</b></span>
        <div class="content">
        	<?php echo ($data["content"]["3"]); ?> 
        </div>
    </div>
</div>
<div class="signupbg" id="signupbg" style="display:none">
	<div class="signup">
    	<div>
        	<img src="/Public/home/img/logo.png">
            <span class="tel">您也可以直接拨打：0417-8205810</span>
            <script type="text/javascript" src="/Public/home/js/jquery.form.js"></script> 
			<script language="JavaScript">
                $(function(){
					$("#sd").click(function(){
				 		$("#signupbg").show();
				    });
					
					$("#gb").click(function(){
				 		$("#signupbg").hide();
				    });
					
                    $('#myform').ajaxForm({
                        success:  complete, 
                        dataType: 'json'
                    });
                    function complete(data){
                        if (data.val==1){
                            alert(data.status);
                        }
                        
                        if (data.val==2){
                            alert(data.status);
							location.reload();
                        }
                            
                    }
                    
                });
            </script> 
            <form action="<?php echo U('tourism/enroll');?>" method="post" id="myform">
                <input type="hidden" name="id" value="<?php echo ($data["id"]); ?>" />
                <ul>
                    <li><span>姓名：</span><input type="text" name="name"></li>
                    <li><span>手机：</span><input type="text" name="tel"></li>
                    <li><span>人数：</span><input type="text" name="num"></li>
                    <li><span>ＱＱ：</span><input type="text" name="qq"></li>
                    <li>
                        <span>选择服务：</span>
                        <select name="type">
                            <option>请选择您需要的服务</option>
                            <option>11</option>
                        </select>
                    </li>
					<input type="submit" value="立即提交">
                </ul>
            </form>
            
        </div>
        <img src="/Public/home/img/gb.png" class="gb" id="gb">
    </div>
</div>
<div style="clear:both"></div>
<div class="footerbg">
	<div class="footer inner">
    	<ul class="nav inner">
        	<li <?php if(CONTROLLER_NAME == 'Index'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("index/index");?>">首页</a></li>
        <li <?php if(CONTROLLER_NAME == 'Aboutus'): ?>class="hover"<?php endif; ?>>
            <a href="<?php echo U("aboutus/index");?>">关于我们</a>
        </li>
        <li <?php if(CONTROLLER_NAME == 'News'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("news/index");?>">旅游服务</a></li>
        <li <?php if(CONTROLLER_NAME == 'Product'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("product/index");?>">法律咨询服务</a></li>
        <li <?php if(CONTROLLER_NAME == 'Support'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("support/index");?>">旅游资讯</a></li>
        <li <?php if(CONTROLLER_NAME == 'Support'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("support/index");?>">家政服务</a></li>
        <li <?php if(CONTROLLER_NAME == 'Service'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("service/index");?>">商业信息咨询</a></li>
        <li <?php if(CONTROLLER_NAME == 'Project'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("project/index");?>">外语翻译</a></li>
        <li <?php if(CONTROLLER_NAME == 'Contactus'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("contactus/index");?>">联系我们</li></a>
        </ul>
    	
        <div class="min">
        	<p>
            服务时间 ：早 ：8:00     晚：8:00<br>
Email：hanweinzh@163.com<br>
地址：辽宁省营口市鲅鱼圈区熊岳镇万科海港城7-B号楼10号商业
            </p>
            <img src="/Public/home/img/footerimg.png" >
        </div>
        
        <p class="d">技术支持：<a href="">鸿扬网络</a> </p>
        
    </div>
</div>
</body>
</html>