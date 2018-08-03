<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo ($title); ?>_北京市建兴新建材开发中心</title>
<link rel="stylesheet" type="text/css" href="/Public/home/css/public.css">
<script type="text/javascript" src="/Public/home/js/jquery.1.9.1.js"></script>
</head>
<body>
<div class="header">
    <div class="head inner">
    	
        <a href="/"><img src="/Public/home/img/logo.png" class="logo"></a>
       
        <img src="/Public/home/img/logoright.png" class="tel" >
        
    </div>
    
</div>
<div class="navbg">
    <ul class="nav inner">
        <li <?php if(CONTROLLER_NAME == 'Index'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("index/index");?>">首页</a></li>
        <li <?php if(CONTROLLER_NAME == 'Product'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("product/index");?>">产品展示</a></li>
        <li <?php if(CONTROLLER_NAME == 'Case'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("case/index");?>">工程案例</a></li>
        <li <?php if(CONTROLLER_NAME == 'Technical'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("technical/index");?>">技术解答</a></li>
        <li <?php if(CONTROLLER_NAME == 'Patent'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("patent/index");?>">专利标准</a></li>
        <li <?php if(CONTROLLER_NAME == 'Cooperative'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("cooperative/index");?>">合作加盟</a></li>
        <li <?php if(CONTROLLER_NAME == 'News'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("news/index");?>">动态信息</a></li>
        <li <?php if(CONTROLLER_NAME == 'Aboutus'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("aboutus/index");?>">关于我们</a></li>
        <li <?php if(CONTROLLER_NAME == 'Contactus'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("contactus/index");?>">联系我们</li></a>
    </ul>
</div>
<div class="cooperativebg"></div>
<div style="clear:both"></div>
<div class="ernavbg">
	<div class="ernav inner">
    	<div class="position">当前位置：<a href="/">首页</a> > <a href="<?php echo U("cooperative/index");?>">合作加盟</a></div>
        <div class="nav">
        	<ul>
              <li><a href="<?php echo U("cooperative/index");?>">合作加盟</a></li>
              <li class="hover"><a href="<?php echo U("cooperative/online");?>">在线加盟</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="online inner">
	<div class="cont">
    	<span class="t">在线加盟</span>
        <img src="/Public/home/img/online.png" class="img">
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
		<form action="<?php echo U('cooperative/online');?>" method="post" id="myform">
        <input type="hidden" name="action" value="add">
        <ul>
        	<li><span>单位：</span><input type="text" name="company"></li>
        	<li><span>地址：</span><input type="text" name="address"></li>
        	<li><span>邮编：</span><input type="text" name="youbian"></li>
        	<li><span>联系人：</span><input type="text" name="name"></li>
        	<li><span>电话：</span><input type="text" name="tel"></li>
        	<li><span>邮箱： </span><input type="text" name="email"></li>
        	<li><span>微信号：</span><input type="text" name="weixin"></li>
        	<li><span>留言内容：</span><textarea name="content" placeholder="介绍单位产业运营基本情况，介绍单位加盟愿景"></textarea></li>
        	<!--<li><span>验证码：</span><input type="text" name="" class="yzm"><img src="123" class="yzm"></li>-->
        </ul>
        <input type="submit" value="提交信息">
        </form>
    </div>
</div>
<div style="clear:both"></div>
<div class="footerbg">
	<div class="footer inner">
    	<ul class="nav inner">
        <li <?php if(CONTROLLER_NAME == 'Index'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("index/index");?>">首页</a></li>
        <li <?php if(CONTROLLER_NAME == 'Product'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("product/index");?>">产品展示</a></li>
        <li <?php if(CONTROLLER_NAME == 'Case'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("case/index");?>">工程案例</a></li>
        <li <?php if(CONTROLLER_NAME == 'Technical'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("technical/index");?>">技术解答</a></li>
        <li <?php if(CONTROLLER_NAME == 'Patent'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("patent/index");?>">专利标准</a></li>
        <li <?php if(CONTROLLER_NAME == 'Cooperative'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("cooperative/index");?>">合作加盟</a></li>
        <li <?php if(CONTROLLER_NAME == 'News'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("news/index");?>">动态信息</a></li>
        <li <?php if(CONTROLLER_NAME == 'Aboutus'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("aboutus/index");?>">关于我们</a></li>
        <li <?php if(CONTROLLER_NAME == 'Contactus'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("contactus/index");?>">联系我们</li></a>
    </ul>
    	<img src="/Public/home/img/footerlogo.png" class="logo">
        <ul class="lxwm">
        	<li><img src="/Public/home/img/footimg1.png" /> 电话: 13522583979 </li>
            <li><img src="/Public/home/img/footimg2.png" />邮箱：2831058223@qq.com</li>
            <li><img src="/Public/home/img/footimg3.png" />地址：北京大兴区新风街甲一号</li>
        </ul>
        <img src="/Public/home/img/foottel.png" class="tel">
        <p>Copyright © 北京市建兴新建材开发中心   ICP备案号：      技术支持：<a href="http://www.hongyangkeji.com.cn/" target="_blank">鸿扬网络</a> </p>
        
    </div>
</div>
</body>
</html>