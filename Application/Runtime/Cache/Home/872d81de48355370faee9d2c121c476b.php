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
  <div class="header-container clearfix"> <a href="/" class="logo"> <span class="lg icon-LINKFACE"></span> </a>
    <div class="container">
      <nav class="navbar-collapse" id="navbar-nav">
        <ul class="navbar-nav">
          <li> <a href="/">首页</a> </li>
          <li class="sub"> <a href="javascript:void(0);" data-min-width="135">关于望海 </a>
            <nav>
              <ul class="sub-list">
                <li class="multi"><a href="<?php echo U('aboutus/index');?>">企业介绍</a></li>
                <li class="multi"><a href="<?php echo U('aboutus/honor');?>">望海荣誉</a></li>
                <li class="multi"><a href="<?php echo U('aboutus/style');?>">望海风采</a></li>
                <li class="multi"><a href="<?php echo U('aboutus/speech');?>">总裁致辞</a></li>
              </ul>
            </nav>
          </li>
          <li class="sub"> <a href="javascript:void(0);" data-min-width="135">产品展示 </a>
            <nav>
              <ul class="sub-list">
                <li class="multi"><a href="<?php echo U('product/index?type=1');?>">医院产品端</a></li>
                <li class="multi"><a href="<?php echo U('product/index?type=2');?>">政府产品端</a></li>
              </ul>
            </nav>
          </li>
          <li class="sub"> <a href="javascript:void(0);" data-min-width="135">解决方案与案例 </a>
            <nav>
              <ul class="sub-list">
                <li class="multi"><a href="<?php echo U('programme/index');?>">解决方案</a></li>
                <li class="multi"><a href="<?php echo U('programme/cases');?>">经典案例</a></li>
              </ul>
            </nav>
          </li>
          <li class="sub"> <a href="javascript:void(0);" data-min-width="135">咨询服务 </a>
            <nav>
              <ul class="sub-list">
                <li class="multi"><a href="<?php echo U('consultation/index');?>">战略咨询</a></li>
                <li class="multi"><a href="<?php echo U('consultation/presale');?>">售前咨询</a></li>
                <li class="multi"><a href="<?php echo U('consultation/strategy');?>">实施服务</a></li>
              </ul>
            </nav>
          </li>
          <li class="sub"> <a href="javascript:void(0);" data-min-width="135">新闻资讯 </a>
            <nav>
              <ul class="sub-list">
                <li class="multi"><a href="<?php echo U('news/index?type=1');?>">行业新闻</a></li>
                <li class="multi"><a href="<?php echo U('news/index?type=2');?>">公司新闻</a></li>
                <li class="multi"><a href="<?php echo U('news/index?type=3');?>">媒体报道</a></li>
              </ul>
            </nav>
          </li>
          <li class="sub"> <a href="javascript:void(0);" data-min-width="135">社会责任 </a>
            <nav>
              <ul class="sub-list">
                <li class="multi"><a href="<?php echo U('responsibility/index');?>">公益理念</a></li>
                <li class="multi"><a href="<?php echo U('responsibility/charitable');?>">慈善捐赠</a></li>
                <li class="multi"><a href="<?php echo U('responsibility/responsibility');?>">责任体系</a></li>
                <li class="multi"><a href="<?php echo U('responsibility/social');?>">社会责任报告</a></li>
              </ul>
            </nav>
          </li>
          <li class="sub"> <a href="javascript:void(0);" data-min-width="135">联系我们 </a>
            <nav>
              <ul class="sub-list">
                <li class="multi"><a href="<?php echo U('contactus/index');?>">联系方式</a></li>
                <li class="multi"><a href="<?php echo U('contactus/careers');?>">招贤纳士</a></li>
              </ul>
            </nav>
          </li>
        </ul>
        <div class="cur"></div>
      </nav>
    </div>
    <a class="login" href="https://user.linkface.cn" target="_blank">管理中心</a></div>
</header>

<div class="responsibilitybg"></div>
<div style="clear:both"></div>
<div class="ernavbg"></div>
<div class="service inner">
	 <div class="ernav">
    	<span>社会责任</span>
        <ul>            
            <li <?php if($data["id"] == 6): ?>class="hover"<?php endif; ?>><a href="<?php echo U('responsibility/index');?>">公益理念</a></li>
			<li <?php if($data["id"] == 7): ?>class="hover"<?php endif; ?>><a href="<?php echo U('responsibility/charitable');?>">慈善捐赠</a></li>
			<li <?php if($data["id"] == 8): ?>class="hover"<?php endif; ?>><a href="<?php echo U('responsibility/responsibility');?>">责任体系</a></li>
			<li <?php if($data["id"] == 9): ?>class="hover"<?php endif; ?>><a href="<?php echo U('responsibility/social');?>">社会责任报告</a></li>
        </ul>
    </div>
     <div class="erright">
    	<div class="top">
        	<span><?php echo ($data["name"]); ?></span>
            <div class="position">
            	您当前位置：<a href="/">首页</a> > 
                <a href="<?php echo U('responsibility/index');?>">社会责任</a> >
                <?php echo ($data["name"]); ?>
            </div>
        </div>
        <div class="ertitle">
        	<b><?php echo ($data["name"]); ?></b> <?php echo ($data["enname"]); ?>
        </div>
        <div class="content">
        	<?php echo ($data["content"]["0"]); ?>
        </div>
        
     </div>
</div>
<div style="clear:both"></div>

<footer><span class="icon-top" id="scrollTop"></span>
           <div class="container">
             <div class="footer-container">
               <div class="info">
                 <div class="qrcode img-wrap"><img src="./人工智能 重塑金融世界的奇点-linkface_files/wechat20180412.png" alt="Linkface Wechat QRcode"></div>
                 <div class="info-lines">
                   <p class="tel">010-56658780</p>
                   <p class="linkface">北京今始科技有限公司</p>
                   <p>合作邮箱：<a href="mailto:market@linkface.cn">market@linkface.cn</a></p>
                   <p>北京市朝阳区安立路30号仰山公园东一门2号楼</p>
                 </div>
               </div>
               <div class="link">
                 <ul class="pages">
                   <li>
                     <ul>
                       <li>产品</li>
                       <li><a href="https://linkface.cn/product/face" target="_self">金融产品线</a></li>
                       <li><a href="https://linkface.cn/product/xiaotong" target="_self">商业智能线</a></li>
                     </ul>
                   </li>
                   <li>
                     <ul>
                       <li>相关文档</li>
                       <li><a href="http://devdoc.cloud.linkface.cn/" target="_blank">API文档</a></li>
                     </ul>
                   </li>
                   <li>
                     <ul>
                       <li>友情链接</li>
                       <li><a href="http://www.jdcapital.com/" target="_blank">九鼎投资</a></li>
                       <li><a href="http://www.sensetime.com/" target="_blank">商汤科技</a></li>
                       <li><a href="https://www.daocloud.io/" target="_blank">Daocloud</a></li>
                     </ul>
                   </li>
                 </ul>
                 <p class="copyright">©2016 Linkface Corporation 京ICP备 15020634</p>
               </div>
             </div>
           </div>
         </footer>
<script src="/Public/home/js/app.867beabeedf85dbdead3.js"></script>
</body>
</html>