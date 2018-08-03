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

<div class="responsibilitybg"></div>
<div style="clear:both"></div>
<div class="ernavbg"></div>
<div class="news inner">
   <div class="ernav">
      <span>人才发展</span>
        <ul>            
            <li <?php if($data["id"] == 6): ?>class="hover"<?php endif; ?>><a href="<?php echo U('responsibility/index');?>">人才发展理念</a></li>
      <li <?php if($data["id"] == 7): ?>class="hover"<?php endif; ?>><a href="<?php echo U('responsibility/charitable');?>">人才发展实践</a></li>
      <li <?php if(CONTROLLER_NAME == Active): ?>class="hover"<?php endif; ?>><a href="<?php echo U('active/index?type=1');?>">文化活动</a></li>
      <li><a href="javascript:;">智联招聘</a></li>
        </ul>
    </div>
     <div class="erright">
    	<div class="top">
        	<span>
            </span>
            <div class="position">
            	您当前位置：<a href="/">首页</a> > 
                <a href="<?php echo U('active/index');?>">文化活动</a> >
                <?php echo ($typename); ?>
            </div>
        </div>
            <div class="programmenav">
      <ul>
            <li <?php if($type == 1): ?>class="hover"<?php endif; ?>><a href="<?php echo U('active/index?type=1');?>">体系部门</a></li>
            <li <?php if($type == 2): ?>class="hover"<?php endif; ?>><a href="<?php echo U('active/index?type=2');?>">公司活动</a></li>
    </ul>
    </div>
        <div class="content">
        	<ul>
             <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li class="down"> 
              <span class="time"><?php echo (date('Y-m-d',$v["addtime"])); ?></span>
              <a href="<?php echo U('active/show?id='.$v['id'].'');?>"><?php echo ($v["name"]); ?></a>
          </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
            <div class="page"><?php echo ($page); ?></div>
        </div>
     </div>
     
</div>

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