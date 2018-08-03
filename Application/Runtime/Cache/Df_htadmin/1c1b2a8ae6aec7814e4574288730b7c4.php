<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>鸿扬网络-管理系统</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="/Public/df_htadmin/css/bootstrap.min.css" />
		<link rel="stylesheet" href="/Public/df_htadmin/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="/Public/df_htadmin/css/jquery-ui.custom.min.css" />
		<link rel="stylesheet" href="/Public/df_htadmin/css/chosen.css" />
		<link rel="stylesheet" href="/Public/df_htadmin/css/datepicker.css" />
		<link rel="stylesheet" href="/Public/df_htadmin/css/bootstrap-timepicker.css" />
		<link rel="stylesheet" href="/Public/df_htadmin/css/daterangepicker.css" />
		<link rel="stylesheet" href="/Public/df_htadmin/css/bootstrap-datetimepicker.css" />
		<link rel="stylesheet" href="/Public/df_htadmin/css/colorpicker.css" />
		<!-- text fonts -->
		<link rel="stylesheet" href="/Public/df_htadmin/css/ace-fonts.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="/Public/df_htadmin/css/ace.min.css" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="/Public/df_htadmin/css/ace-part2.min.css" />
		<![endif]-->
		<link rel="stylesheet" href="/Public/df_htadmin/css/ace-skins.min.css" />
		<link rel="stylesheet" href="/Public/df_htadmin/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="/Public/df_htadmin/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="/Public/df_htadmin/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="/Public/df_htadmin/js/html5shiv.min.js"></script>
		<script src="/Public/df_htadmin/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<div class="navbar-container" id="navbar-container">
				<div class="navbar-header pull-left">
					<a href="http://www.hongyangkeji.com.cn" class="navbar-brand" target="_blank">
						<small>
							鸿扬网络
						</small>
					</a>
				</div>
				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<span class="user-info">
									<small>您好,</small>
									<?php echo ($gu["username"]); ?>
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="#">
										<i class="ace-icon fa fa-cog"></i>
										Settings
									</a>
								</li>

								<li>
									<a href="/df_htadmin/user/">
										<i class="ace-icon fa fa-user"></i>
										会员信息
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="<?php echo U('df_htadmin/login/logout');?>">
										<i class="ace-icon fa fa-power-off"></i>
										退出
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
        
        
<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>
			<div id="sidebar" class="sidebar responsive"> 
  <script type="text/javascript">
	try{ace.settings.check('sidebar','fixed')}catch(e){}
</script>
  <ul class="nav nav-list" style="top: 0px;">
    <li <?php if(CONTROLLER_NAME == 'Index'): ?>class="active"<?php endif; ?>> <a href="<?php echo U("df_htadmin/index/index");?>"> <i class="menu-icon fa fa-tachometer"></i> <span class="menu-text"> 控制台 </span> </a> <b class="arrow"></b>
    </li>
    <li <?php if(CONTROLLER_NAME == 'Banner'): ?>class="active"<?php endif; ?>> <a href="<?php echo U("df_htadmin/banner/index");?>"> <i class="menu-icon fa fa-tachometer"></i> <span class="menu-text"> banner图 </span> </a> <b class="arrow"></b>
    </li>
    <li class="<?php if(CONTROLLER_NAME == 'Show' && $type == '1' || CONTROLLER_NAME == 'Honor'): ?>active open<?php endif; ?> hsub"> <a href="#" class="dropdown-toggle"> <i class="menu-icon fa fa-file"></i> <span class="menu-text"> 关于我们 </span> <b class="arrow fa fa-angle-down"></b> </a> <b class="arrow"></b>
    <ul class="submenu">
      <li <?php if($showid == '1' && $type == '1') echo "class='active'"; ?>><a href="<?php echo U("df_htadmin/show/index?id=1");?>"><i class="menu-icon fa fa-caret-right"></i>公司简介</a><b class="arrow"></b>
      </li>
      <li <?php if($showid == '2' && $type == '1') echo "class='active'"; ?>><a href="<?php echo U("df_htadmin/show/index?id=2");?>"><i class="menu-icon fa fa-caret-right"></i>企业理念</a><b class="arrow"></b>
      </li>
      <li <?php if(CONTROLLER_NAME == 'Honor') echo "class='active'"; ?>><a href="<?php echo U("df_htadmin/honor/index");?>"><i class="menu-icon fa fa-caret-right"></i>荣誉资质</a><b class="arrow"></b>
      </li>
    </ul>
    </li>
    
    <li class="<?php if(CONTROLLER_NAME == 'News'): ?>active open<?php endif; ?> hsub"> <a href="#" class="dropdown-toggle"> <i class="menu-icon fa fa-file"></i> <span class="menu-text"> 新闻动态 </span> <b class="arrow fa fa-angle-down"></b> </a> <b class="arrow"></b>
    <ul class="submenu">
      <li <?php if(CONTROLLER_NAME == 'News' && $type == '1') echo "class='active'"; ?>><a href="<?php echo U("df_htadmin/news/index?type=1");?>"><i class="menu-icon fa fa-caret-right"></i>媒体报道</a><b class="arrow"></b>
      </li>
      <li <?php if(CONTROLLER_NAME == 'News' && $type == '2') echo "class='active'"; ?>><a href="<?php echo U("df_htadmin/news/index?type=2");?>"><i class="menu-icon fa fa-caret-right"></i>行业动态</a><b class="arrow"></b>
      </li>
      <li <?php if(CONTROLLER_NAME == 'News' && $type == '3') echo "class='active'"; ?>><a href="<?php echo U("df_htadmin/news/index?type=3");?>"><i class="menu-icon fa fa-caret-right"></i>公司动态</a><b class="arrow"></b>
      </li>
    </ul>
    </li>
    
    <li class="<?php if(CONTROLLER_NAME == 'Product'): ?>active open<?php endif; ?> hsub"> <a href="#" class="dropdown-toggle"> <i class="menu-icon fa fa-file"></i> <span class="menu-text"> 产品介绍 </span> <b class="arrow fa fa-angle-down"></b> </a> <b class="arrow"></b>
    <ul class="submenu">
      <li <?php if(CONTROLLER_NAME == 'Product' && $type == '1') echo "class='active'"; ?>><a href="<?php echo U("df_htadmin/product/index?type=1");?>"><i class="menu-icon fa fa-caret-right"></i>ELCOA.0.</a><b class="arrow"></b>
      </li>
      <li <?php if(CONTROLLER_NAME == 'Product' && $type == '2') echo "class='active'"; ?>><a href="<?php echo U("df_htadmin/product/index?type=2");?>"><i class="menu-icon fa fa-caret-right"></i>史密斯</a><b class="arrow"></b>
      </li>
    </ul>
    </li>
    
    <li <?php if(CONTROLLER_NAME == 'Support'): ?>class="active"<?php endif; ?>> <a href="<?php echo U("df_htadmin/support/index");?>"> <i class="menu-icon fa fa-file"></i> <span class="menu-text"> 技术支持 </span> </a> <b class="arrow"></b></li>
    <li <?php if(CONTROLLER_NAME == 'Show' && $type == '2'): ?>class="active"<?php endif; ?>> <a href="<?php echo U("df_htadmin/show/index?id=3");?>"> <i class="menu-icon fa fa-file"></i> <span class="menu-text"> 服务流程 </span> </a> <b class="arrow"></b></li>
    <li <?php if(CONTROLLER_NAME == 'Project'): ?>class="active"<?php endif; ?>> <a href="<?php echo U("df_htadmin/project/index");?>"> <i class="menu-icon fa fa-file"></i> <span class="menu-text"> 工程业绩 </span> </a> <b class="arrow"></b></li>
    <li <?php if(CONTROLLER_NAME == 'Show' && $type == '3'): ?>class="active"<?php endif; ?>> <a href="<?php echo U("df_htadmin/show/index?id=4");?>"> <i class="menu-icon fa fa-file"></i> <span class="menu-text"> 联系我们 </span> </a> <b class="arrow"></b></li>
    
    
    
  
  </ul>
  
  <!-- #section:basics/sidebar.layout.minimize -->
  <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse"> <i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i> </div>
  
  <!-- /section:basics/sidebar.layout.minimize --> 
  <script type="text/javascript">
					try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
				</script> 
</div>

			<div class="main-content">
				<div class="page-content">
					<div class="page-content-area">
						<div class="page-header">
							<h1>首页BANNER</h1>
						</div><!-- /.page-header -->
							<div class="well well-sm">
								<button type="button" class="close line-height-0" data-dismiss="alert">
									<i class="ace-icon fa fa-times smaller-75"></i>
								</button>
        						<a class='menubutton' href='<?php echo U('Df_htadmin/banner/add');?>'>
									添加
									<i class="fa fa-external-link bigger-110"></i>
								</a>
							</div>
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div>
									<ul class="ace-thumbnails clearfix">
										<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li style="width:33%">
											<a href="<?php echo ($v["img"]); ?>" data-rel="colorbox">
												<img src="<?php echo ($v["img"]); ?>" width="100%" />
											</a>
                                            <div class="tags">
													<!-- #section:pages/gallery.tags -->
													<span class="label-holder">
														<span class="label label-info arrowed"><?php echo ($v["text1"]); ?></span>
													</span>

													<span class="label-holder">
														<span class="label label-danger"><?php echo ($v["text2"]); ?></span>
													</span>

													<!-- /section:pages/gallery.tags -->
												</div>

											<div class="tools tools-bottom">
												<a href="<?php echo U('Df_htadmin/banner/edit?id='.$v[id].'');?>">
													<i class="ace-icon fa fa-pencil"></i>
												</a>

												<a href="<?php echo U('Df_htadmin/banner/del?id='.$v[id].'');?>" onclick="if (confirm('确认删除吗？')){return true;}else{return false;}">
													<i class="ace-icon fa fa-times red"></i>
												</a>
											</div>
										</li><?php endforeach; endif; else: echo "" ;endif; ?>
									</ul>
								</div><!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content-area -->
				</div><!-- /.page-content -->
			</div><!-- /.main-content -->

			<div class="footer">
	<div class="footer-inner">
		<div class="footer-content">
			<span class="bigger-120">
			<span class="blue bolder"><a href="http://www.hongyangkeji.com.cn" target="_blank">鸿扬网络</a></span>
				 &copy; 2014-2015
			</span>
		</div>
	</div>
</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='/Public/Df_htadmin/js/jquery.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='/Public/Df_htadmin/js/jquery1x.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='/Public/Df_htadmin/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="/Public/Df_htadmin/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->
		<script src="/Public/Df_htadmin/js/jquery.colorbox-min.js"></script>

		<!-- ace scripts -->
		<script src="/Public/Df_htadmin/js/ace-elements.min.js"></script>
		<script src="/Public/Df_htadmin/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
	var $overflow = '';
	var colorbox_params = {
		rel: 'colorbox',
		reposition:true,
		scalePhotos:true,
		scrolling:false,
		previous:'<i class="ace-icon fa fa-arrow-left"></i>',
		next:'<i class="ace-icon fa fa-arrow-right"></i>',
		close:'&times;',
		current:'{current} of {total}',
		maxWidth:'100%',
		maxHeight:'100%',
		onOpen:function(){
			$overflow = document.body.style.overflow;
			document.body.style.overflow = 'hidden';
		},
		onClosed:function(){
			document.body.style.overflow = $overflow;
		},
		onComplete:function(){
			$.colorbox.resize();
		}
	};

	$('.ace-thumbnails [data-rel="colorbox"]').colorbox(colorbox_params);
	$("#cboxLoadingGraphic").html("<i class='ace-icon fa fa-spinner orange'></i>");//let's add a custom loading icon
})
		</script>

		<!-- the following scripts are used in demo only for onpage help and you don't need them -->
		<link rel="stylesheet" href="/Public/Df_htadmin/css/ace.onpage-help.css" />
		<link rel="stylesheet" href="/Public/Df_htadmin/js/themes/sunburst.css" />
        <link rel="stylesheet" href="/Public/Df_htadmin/css/colorbox.css" />
		<link rel="stylesheet" href="/Public/Df_htadmin/css/ace.min.css" id="main-ace-style" />
		
		<script type="text/javascript"> ace.vars['base'] = '..'; </script>
		<script src="/Public/Df_htadmin/js/ace/elements.onpage-help.js"></script>
		<script src="/Public/Df_htadmin/js/ace/ace.onpage-help.js"></script>
		<script src="/Public/Df_htadmin/js/rainbow.js"></script>
		<script src="/Public/Df_htadmin/js/language/generic.js"></script>
		<script src="/Public/Df_htadmin/js/language/html.js"></script>
		<script src="/Public/Df_htadmin/js/language/css.js"></script>
		<script src="/Public/Df_htadmin/js/language/javascript.js"></script>
	</body>
</html>