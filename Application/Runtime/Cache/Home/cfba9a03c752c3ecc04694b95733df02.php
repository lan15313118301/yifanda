<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo ($title); ?>_东软望海</title>
<link rel="stylesheet" type="text/css" href="/Public/home/css/public.css">
<link rel="stylesheet" type="text/css" href="/Public/home/css/app-a08305a0f0.css">
<script src="/Public/home/js/jquery.min.js"></script>
<script type="text/javascript" src="/Public/home/js/jquery.form.js"></script>
</head>
<body class="hd-dark">
<header data-section="loadcontent">
      <div class="header-container clearfix">
        <a href="/" class="logo">
          <span class="lg icon-LINKFACE"></span>
        </a>
        <div class="container">
          <nav class="navbar-collapse" id="navbar-nav">
            <ul class="navbar-nav">
              <li>
                <a href="/">首页<span class="nav-s-en">&nbsp;&nbsp;HOME</span></a>
              </li>
              <li class="sub">
                <a href="javascript:void(0);" data-min-width="135">关于望海
                  <span class="nav-s-en">&nbsp;&nbsp;Aboutus</span></a>
                <nav>
                  <ul class="sub-list">
                    <li class="multi"><a href="<?php echo U('aboutus/index');?>">企业介绍</a></li>
                    <li class="multi"><a href="<?php echo U('aboutus/honor');?>">望海荣誉</a></li>
                    <li class="multi"><a href="<?php echo U('aboutus/style');?>">望海风采</a></li>
                    <li class="multi"><a href="<?php echo U('aboutus/speech');?>">总裁致辞</a></li>
                  </ul>
                </nav>
              </li>
              <li>
                <a href="/solution">解决方案
                  <span class="nav-s-en">&nbsp;&nbsp;SOLUTION</span></a>
              </li>
              <li>
                <a href="/#cases">案例
                  <span class="nav-s-en">&nbsp;&nbsp;OUR CASE</span></a>
              </li>
              <li>
                <a href="/news">新闻
                  <span class="nav-s-en">&nbsp;&nbsp;NEWS</span></a>
              </li>
              <li class="sub">
                <a href="javascript:void(0)" data-min-width="100">关于
                  <span class="nav-s-en">&nbsp;&nbsp;ABOUT US</span></a>
                <nav>
                  <ul class="sub-list">
                    <li>
                      <a href="/about-us">关于我们</a></li>
                    <li>
                      <a href="/join-us">加入我们</a></li>
                  </ul>
                </nav>
              </li>
            </ul>
            <div class="cur"></div>
          </nav>
        </div>
        <a class="login" href="https://user.linkface.cn" target="_blank">管理中心</a></div>
    </header>
           



<link href='/Public/home/css/css.css' type="text/css" rel="stylesheet" media="all" />

<div class="aboutusbg"></div>
<div style="clear:both"></div>
<div class="ernavbg"></div>
<div class="style inner">
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
    <div class="top"> <span>望海风采</span>
      <div class="position"> 您当前位置：<a href="/">首页</a> > <a href="<?php echo U('aboutus/index');?>">关于望海</a> >
        望海风采 </div>
    </div>
    <div class="ertitle">
		<b>望海风采</b> ViewHigh Style
	</div>
    <div class="content">

    <!--滚动看图-->
             <div id="img"> 
                <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><img src="<?php echo ($v["thumb"]); ?>" width="906" height="510"><?php endforeach; endif; else: echo "" ;endif; ?>
                <div id="front" title="上一张"><a href="javaScript:void(0)" class="pngFix"></a></div>
                <div id="next" title="下一张"><a href="javaScript:void(0)" class="pngFix"></a></div>
             </div>
             
              
             <div id="cbtn">
                <i class="picSildeLeft"><img src="/Public/home/img/picSlideLeft.gif"></i> 
                <i class="picSildeRight"><img src="/Public/home/img/picSlideRight.gif"></i> 
                <div id="cSlideUl">
                    <ul>
                        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li><img src="<?php echo ($v["thumb"]); ?>"></li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
             </div>         

    <!--end滚动看图-->


<script>
$(document).ready(function(){                          
    var index=0;
    var length=$("#img img").length;
    var i=1;
    
    //关键函数：通过控制i ，来显示图片
    function showImg(i){
        $("#img img")
            .eq(i).stop(true,true).fadeIn(800)
            .siblings("img").hide();
         $("#cbtn li")
            .eq(i).addClass("hov")
            .siblings().removeClass("hov");
    }
    
    function slideNext(){
        if(index >= 0 && index < length-1) {
             ++index;
             showImg(index);
        }else{
            if(confirm("已经是最后一张,点击确定重新浏览！")){
                showImg(0);
                index=0;
                aniPx=(length-5)*142+'px'; //所有图片数 - 可见图片数 * 每张的距离 = 最后一张滚动到第一张的距离
                $("#cSlideUl ul").animate({ "left": "+="+aniPx },200);
                i=1;
            }
            return false;
        }
        if(i<0 || i>length-5) {return false;}                         
               $("#cSlideUl ul").animate({ "left": "-=142px" },200)
               i++;
    }
     
    function slideFront(){
       if(index >= 1 ) {
             --index;
             showImg(index);
        }
        if(i<2 || i>length+5) {return false;}
               $("#cSlideUl ul").animate({ "left": "+=142px" },200)
               i--;
    }   
        $("#img img").eq(0).show();
        $("#cbtn li").eq(0).addClass("hov");
        $("#cbtn tt").each(function(e){
            var str=(e+1)+""+length;
            $(this).html(str)
        })
    
        $(".picSildeRight,#next").click(function(){
               slideNext();
           })
        $(".picSildeLeft,#front").click(function(){
               slideFront();
           })
        $("#cbtn li").click(function(){
            index  =  $("#cbtn li").index(this);
            showImg(index);
        }); 
        $("#next,#front").hover(function(){
            $(this).children("a").fadeIn();
        },function(){
            $(this).children("a").fadeOut();
        })
    })  
</script>

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
                    <li><a href="<?php echo U('programme/index?type=1');?>">OES</a></li>
                    <li><a href="<?php echo U('programme/index?type=2');?>">DRG</a></li>
                	<li><a href="<?php echo U('programme/index?type=3');?>">HRP</a></li>
                </ul>
            </div>
            <div class="r">
            	<span>客户服务</span>
                <ul>
                    <li><a href="<?php echo U('consultation/index');?>">战略咨询</a></li>
                    <li><a href="<?php echo U('consultation/presale');?>">售前咨询</a></li>
                	<li><a href="<?php echo U('consultation/strategy');?>">实施服务</a></li>
                </ul>
            </div>
            
            <div class="r">
            	<span>关于我们</span>
                <ul>
                	<li><a href="<?php echo U('aboutus/index');?>">公司介绍</a></li>
                    <li><a href="<?php echo U('aboutus/honor');?>">望海荣誉</a></li>
                	<li><a href="<?php echo U('aboutus/style');?>">望海风采</a></li>
                    <li><a href="<?php echo U('aboutus/speech');?>">总裁致辞</a></li>
                </ul>
            </div>
            
        </div>
    </div>
    
</div>
<div class="footerdbg">
<div class="footerd inner">
    	<div class="l">版权所有：北京东软望海科技有限公司   京ICP备13014106号       </div>
        <ul>
        	<li><a href="<?php echo U('index/index');?>">网站首页</a></li>
            <li><a href="<?php echo U('aboutus/index');?>">关于望海</a></li>
            <li><a href="<?php echo U('product/index');?>">产品展示</a></li>
            <li><a href="<?php echo U('programme/index');?>">解决方案与案例</a></li>
            <li><a href="<?php echo U('consultation/index');?>">咨询服务</a></li>
            <li><a href="<?php echo U('news/index');?>">新闻资讯</a></li>
            <li><a href="<?php echo U('responsibility/index');?>">社会责任</a></li>
            <li><a href="<?php echo U('contactus/index');?>">联系我们</a></li>
        </ul>
    </div>
</div>
<script src="/Public/home/js/app.867beabeedf85dbdead3.js"></script>
</body>
</html>