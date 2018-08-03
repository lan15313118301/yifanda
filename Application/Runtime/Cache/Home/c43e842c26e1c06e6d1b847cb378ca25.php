<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo ($title); ?>_银石惠众</title>
<link rel="stylesheet" type="text/css" href="/Public/home/css/public.css">
<link rel="stylesheet" type="text/css" href="/Public/home/css/index.css">
<script type="text/javascript" src="/Public/home/js/jquery.1.9.1.js"></script>
<script type="text/javascript" src="/Public/home/js/jquery.form.js"></script>
</head>
<body>
<div class="header">
  <div class="head inner"> <a href="/"><img src="/Public/home/img/logo.png" class="logo"></a>
    <ul class="nav ">
      <li <?php if(CONTROLLER_NAME == 'Index'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("index/index");?>">网站首页</a>
      </li>
      <li <?php if(CONTROLLER_NAME == 'Aboutus'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("aboutus/index");?>">关于我们</a>
      	<div>
        	<span><a href="<?php echo U('aboutus/index');?>">企业介绍</a></span>
        	<span><a href="<?php echo U('aboutus/honor');?>">企业荣誉</a></span>
        	<span><a href="<?php echo U('aboutus/style');?>">企业风采</a></span>
        	<span><a href="<?php echo U('aboutus/speech');?>">总裁致辞</a></span>
        </div>
      </li>
      <li <?php if(CONTROLLER_NAME == 'Product'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("product/index");?>">产品与解决方案</a>
      </li>
      <li <?php if(CONTROLLER_NAME == 'Programme'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("programme/cases");?>">案例展示</a>
      </li>
      <li <?php if(CONTROLLER_NAME == 'Consultation'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("consultation/presale");?>">咨询服务</a>
      	<div>
          <span><a href="<?php echo U('consultation/index');?>">医院管理咨询</a></span>
        	<span><a href="<?php echo U('consultation/drg');?>">DRG业务咨询</a></span>
        	<span><a href="<?php echo U('consultation/presale');?>">售前咨询</a></span>                
        	<span><a href="<?php echo U('consultation/strategy');?>">实施咨询</a></span>
        </div>
      </li>
      <li <?php if(CONTROLLER_NAME == 'News'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("news/index");?>">新闻资讯</a>
      	<div>
        	<span><a href="<?php echo U('news/index?type=1');?>">行业新闻</a></span>
        	<span><a href="<?php echo U('news/index?type=2');?>">公司新闻</a></span>
        	<span><a href="<?php echo U('news/index?type=3');?>">媒体报道</a></span>
        </div>
      </li>
      <li <?php if(CONTROLLER_NAME == 'Responsibility'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("responsibility/index");?>">人才发展</a>
      	<div>
        	<span><a href="<?php echo U('responsibility/index');?>">人才发展理念</a></span>
        	<span><a href="<?php echo U('responsibility/charitable');?>">人才发展实践</a></span>                
        	<span><a href="<?php echo U('active/index');?>">文化活动</a></span>
        </div>
      </li>
      <li <?php if(CONTROLLER_NAME == 'Contactus'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("contactus/index");?>">联系我们</a>
      	<div style="right:0; left:auto">
        	<span><a href="<?php echo U('contactus/index');?>">联系方式</a></span>
        	<span><a href="<?php echo U('contactus/careers');?>">招贤纳士</a></span>
        </div>
      </li>
    </ul>
  </div>
</div>

<link rel="stylesheet" href="/Public/home/css/slideshows.css" />

<script src="/Public/home/js/jquery1.js"></script>

<script src="/Public/home/js/jquery.cycle.all.js"></script>

<script src="/Public/home/js/jquery.easing.1.3.js"></script>

<style type="text/css">
  .slideshow_box{display:none;}
</style>

<script>

$(function() {

  





// ---------------------------------------------------

// Slideshow 1



    $('#slideshow_1').cycle({

        fx: 'scrollHorz',   

    easing: 'easeInOutCirc',

    speed:  700, 

    timeout: 5000, 

    pager: '.ss1_wrapper .slideshow_paging', 

        prev: '.ss1_wrapper .slideshow_prev',

        next: '.ss1_wrapper .slideshow_next',

    before: function(currSlideElement, nextSlideElement) {

      var data = $('.data', $(nextSlideElement)).html();

      $('.ss1_wrapper .slideshow_box .data').fadeOut(300, function(){

        $('.ss1_wrapper .slideshow_box .data').remove();

        $('<div class="data">'+data+'</div>').hide().appendTo('.ss1_wrapper .slideshow_box').fadeIn(600);

      });

    }

    });

  

  // not using the 'pause' option. instead make the slideshow pause when the mouse is over the whole wrapper

  $('.ss1_wrapper').mouseenter(function(){

    $('#slideshow_1').cycle('pause');

    }).mouseleave(function(){

    $('#slideshow_1').cycle('resume');

    });

  





// ---------------------------------------------------

// Slideshow 2



    $('#slideshow_2').cycle({

        fx: 'fade',   

    speed:  900, 

    timeout: 5000, 

    pager: '.ss2_wrapper .slideshow_paging', 

        prev: '.ss2_wrapper .slideshow_prev',

        next: '.ss2_wrapper .slideshow_next',

    before: function(currSlideElement, nextSlideElement) {


    }

    });



  $('.ss2_wrapper').mouseenter(function(){

    $('#slideshow_2').cycle('pause');

    $('.ss2_wrapper .slideshow_prev').stop(true, true).animate({ left:'20px'}, 200);

    $('.ss2_wrapper .slideshow_next').stop(true, true).animate({ right:'20px'}, 200);

    }).mouseleave(function(){

    $('#slideshow_2').cycle('resume');

    $('.ss2_wrapper .slideshow_prev').stop(true, true).animate({ left:'-40px'}, 200);

    $('.ss2_wrapper .slideshow_next').stop(true, true).animate({ right:'-40px'}, 200);

    });

  





// ---------------------------------------------------

// Slideshow 3



    $('#slideshow_3').cycle({

        fx: 'uncover',    

    speed:  700, 

    timeout: 5000, 

    pager: '.ss3_wrapper .slideshow_paging', 

    pagerAnchorBuilder: pager_create,

        prev: '.ss3_wrapper .slideshow_prev',

        next: '.ss3_wrapper .slideshow_next',

    before: function(currSlideElement, nextSlideElement) {

      var data = $('.data', $(nextSlideElement)).html();

      $('.ss3_wrapper .slideshow_box .data').fadeOut(300, function(){

        $('.ss3_wrapper .slideshow_box .data').remove();

        $('<div class="data">'+data+'</div>').hide().appendTo('.ss3_wrapper .slideshow_box').fadeIn(600);

      });

    }

    });

  

  function pager_create(id, slide) {

    var thumb = $('.thumb', $(slide)).html();

    var title = $('h4 a', $(slide)).html();

    var add_first = (id==0)?' class="first"':'';

    return '<li><a href="#" title="'+title+'"'+add_first+'>'+thumb+'</a></li>';

    };

  

  // not using the 'pause' option. instead make the slideshow pause when the mouse is over the whole wrapper

  $('.ss3_wrapper').mouseenter(function(){

    $('#slideshow_3').cycle('pause');

    }).mouseleave(function(){

    $('#slideshow_3').cycle('resume');

    });

  

  

  

  

// ---------------------------------------------------

  

  $('a[href="#"]').click(function(event){ 

    event.preventDefault(); // for this demo disable all links that point to "#"

  });

  

});

</script>

<div class="productbg"></div>
<div style="clear:both"></div>
<div class="ernavbg"></div>
<div class="service inner">

        <div class="ernav">
<span>产品展示</span>
<ul>            
  <li <?php if(ACTION_NAME == 'index'): ?>class="hover"<?php endif; ?> ><a href="<?php echo U('product/index');?>">产品展示</a></li>
</ul>
</div>


<div class="ernav" style="position:absolute;top:710px;">
<span>解决方案</span>
<ul>            
  	<li <?php if($type == 1): ?>class="hover"<?php endif; ?>><a href="<?php echo U('product/programme?type=1');?>">教育集团解决方案</a></li>
    <li <?php if($type == 2): ?>class="hover"<?php endif; ?>><a href="<?php echo U('product/programme?type=2');?>">医联体解决方案</a></li>
    <li <?php if($type == 3): ?>class="hover"<?php endif; ?>><a href="<?php echo U('product/programme?type=3');?>">医院运营管理解决方案</a></li>
    <li <?php if($type == 4): ?>class="hover"<?php endif; ?>><a href="<?php echo U('product/programme?type=4');?>">政府解决方案</a></li>
    <li <?php if($type == 5): ?>class="hover"<?php endif; ?>><a href="<?php echo U('product/programme?type=5');?>">DRG解决方案</a></li>
</ul>
</div>

     <div class="erright">
    	<div class="top"> <span></span>
          <div class="position"> 您当前位置：<a href="/">首页</a> > <a href="<?php echo U('product/index');?>">解决方案</a> >
            <a href="<?php echo U('product/index?type='.$data[type].'');?>"><?php echo ($typename); ?></a> > <?php echo ($data["name"]); ?></div>
        </div>
        <div style="text-align:center;" class="ertitle">
        	<b><?php echo ($data["name"]); ?></b>
        </div>
        <div class="content">
        	<?php echo ($data["content"]); ?>
        </div>


<div style="clear:both;"></div>
              

<div class="ss2_wrapper">

    

      <a href="#" class="slideshow_prev"><span>Previous</span></a>

      <a href="#" class="slideshow_next"><span>Next</span></a>

        

      <div class="slideshow_paging"></div>

      

      <div class="slideshow_box">



        <div class="data"></div>

      </div>

      

      <div id="slideshow_2" class="slideshow">

        
<?php if(is_array($imgs)): $i = 0; $__LIST__ = $imgs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="slideshow_item">

          <div class="image"><a href="#"><img src="<?php echo ($v); ?>" alt="photo 2" width="900" height="606" /></a></div>

        </div><?php endforeach; endif; else: echo "" ;endif; ?>
              

        

      </div>



    </div><!-- .ss2_wrapper -->



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
                    <li <?php if($type == 1): ?>class="hover"<?php endif; ?>><a href="<?php echo U('product/programme?type=1');?>">教育集团解决方案</a></li>
                    <li <?php if($type == 2): ?>class="hover"<?php endif; ?>><a href="<?php echo U('product/programme?type=2');?>">医联体解决方案</a></li>
                    <li <?php if($type == 3): ?>class="hover"<?php endif; ?>><a href="<?php echo U('product/programme?type=3');?>">医院运营管理解决方案</a></li>
                    <li <?php if($type == 4): ?>class="hover"<?php endif; ?>><a href="<?php echo U('product/programme?type=4');?>">政府解决方案</a></li>
                    <li <?php if($type == 5): ?>class="hover"<?php endif; ?>><a href="<?php echo U('product/programme?type=5');?>">DRG解决方案</a></li>
                </ul>
            </div>
            <div class="r">
            	<span>客户服务</span>
                <ul>
                    <li><a href="<?php echo U('consultation/index');?>">医院管理咨询</a></li> 
                    <li><a href="<?php echo U('consultation/drg');?>">DRG业务咨询</a></li> 
                    <li><a href="<?php echo U('consultation/presale');?>">售前咨询</a></li>
                	<li><a href="<?php echo U('consultation/strategy');?>">实施咨询</a></li>
                </ul>
            </div>
            
            <div class="r">
            	<span>关于我们</span>
                <ul>
                	<li><a href="<?php echo U('aboutus/index');?>">公司介绍</a></li>
                    <li><a href="<?php echo U('aboutus/honor');?>">企业荣誉</a></li>
                	<li><a href="<?php echo U('aboutus/style');?>">企业风采</a></li>
                    <li><a href="<?php echo U('aboutus/speech');?>">总裁致辞</a></li>
                </ul>
            </div>
            
        </div>
    </div>
    
</div>
<div class="footerdbg">
<div class="footerd inner">
    	<div class="l">版权所有：北京银石惠众科技有限公司   京ICP备13014106号       </div>
        <ul>
        	<li><a href="<?php echo U('index/index');?>">网站首页</a></li>
            <li><a href="<?php echo U('aboutus/index');?>">关于我们</a></li>
            <li><a href="<?php echo U('product/index');?>">产品与解决方案</a></li>
            <li><a href="<?php echo U('programme/cases');?>">案例展示</a></li>
            <li><a href="<?php echo U('consultation/index');?>">咨询服务</a></li>
            <li><a href="<?php echo U('news/index');?>">新闻资讯</a></li>
            <li><a href="<?php echo U('responsibility/index');?>">人才发展</a></li>
            <li><a href="<?php echo U('contactus/index');?>">联系我们</a></li>
        </ul>
    </div>
</div>
</body>
</html>