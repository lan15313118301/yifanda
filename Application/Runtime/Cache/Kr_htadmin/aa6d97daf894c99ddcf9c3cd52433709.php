<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>鸿扬网络-管理系统</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="/Public/kr_htadmin/css/bootstrap.min.css" />
		<link rel="stylesheet" href="/Public/kr_htadmin/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="/Public/kr_htadmin/css/jquery-ui.custom.min.css" />
		<link rel="stylesheet" href="/Public/kr_htadmin/css/chosen.css" />
		<link rel="stylesheet" href="/Public/kr_htadmin/css/datepicker.css" />
		<link rel="stylesheet" href="/Public/kr_htadmin/css/bootstrap-timepicker.css" />
		<link rel="stylesheet" href="/Public/kr_htadmin/css/daterangepicker.css" />
		<link rel="stylesheet" href="/Public/kr_htadmin/css/bootstrap-datetimepicker.css" />
		<link rel="stylesheet" href="/Public/kr_htadmin/css/colorpicker.css" />
		<!-- text fonts -->
		<link rel="stylesheet" href="/Public/kr_htadmin/css/ace-fonts.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="/Public/kr_htadmin/css/ace.min.css" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="/Public/kr_htadmin/css/ace-part2.min.css" />
		<![endif]-->
		<link rel="stylesheet" href="/Public/kr_htadmin/css/ace-skins.min.css" />
		<link rel="stylesheet" href="/Public/kr_htadmin/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="/Public/kr_htadmin/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="/Public/kr_htadmin/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="/Public/kr_htadmin/js/html5shiv.min.js"></script>
		<script src="/Public/kr_htadmin/js/respond.min.js"></script>
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
									<a href="/kr_htadmin/user/">
										<i class="ace-icon fa fa-user"></i>
										会员信息
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="<?php echo U('kr_htadmin/login/logout');?>">
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
    <li <?php if(CONTROLLER_NAME == 'Index'): ?>class="active"<?php endif; ?>> <a href="<?php echo U("kr_htadmin/index/index");?>"> <i class="menu-icon fa fa-tachometer"></i> <span class="menu-text"> 控制台 </span> </a> <b class="arrow"></b>
    </li>
    <li class="<?php if(CONTROLLER_NAME == 'Show' && $type == '1' || CONTROLLER_NAME == 'Honor'): ?>active open<?php endif; ?> hsub"> <a href="#" class="dropdown-toggle"> <i class="menu-icon fa fa-file"></i> <span class="menu-text"> 关于我们 </span> <b class="arrow fa fa-angle-down"></b> </a> <b class="arrow"></b>
    <ul class="submenu">
      
      <li <?php if(CONTROLLER_NAME == 'Show' && $type == '1') echo "class='active'"; ?>><a href="<?php echo U("kr_htadmin/show/index?id=1");?>"><i class="menu-icon fa fa-caret-right"></i>公司简介</a><b class="arrow"></b>
      </li>
      <li <?php if(CONTROLLER_NAME == 'Honor') echo "class='active'"; ?>><a href="<?php echo U("kr_htadmin/honor/index");?>"><i class="menu-icon fa fa-caret-right"></i>资质荣誉</a><b class="arrow"></b>
      </li>
    </ul>
    </li>
    
    
    
    
    
    
    
    
    
    <li <?php if(CONTROLLER_NAME == 'Show' && $type == '1'): ?>class="active"<?php endif; ?>> <a href="<?php echo U("kr_htadmin/show/index?id=1");?>"> <i class="menu-icon fa fa-file"></i> <span class="menu-text"> 关于我们 </span> </a> <b class="arrow"></b>
    </li>
    <li class="<?php if(CONTROLLER_NAME == 'Product' || CONTROLLER_NAME == 'Producttype'): ?>active open<?php endif; ?> hsub"> <a href="#" class="dropdown-toggle"> <i class="menu-icon fa fa-file"></i> <span class="menu-text"> 类别管理 </span> <b class="arrow fa fa-angle-down"></b> </a> <b class="arrow"></b>
    <ul class="submenu">
      <li class="<?php if(CONTROLLER_NAME == 'Product'): ?>active open<?php endif; ?> hsub"> <a href="#" class="dropdown-toggle"> <i class="menu-icon fa fa-caret-right"></i> 产品展示 <b class="arrow fa fa-angle-down"></b> </a> <b class="arrow"></b>
        <ul class="submenu">
          <?php if(is_array($producttype)): $i = 0; $__LIST__ = $producttype;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li <?php if($type == $v["id"]) echo 'class="active"'; ?> > <a href="<?php echo U('product/index?type='.$v['id'].'');?>"> <?php echo ($v["name"]); ?></a> <b class="arrow"></b> </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
      </li>
      <li <?php if(CONTROLLER_NAME == 'Producttype') echo "class='active'"; ?>><a href="<?php echo U("kr_htadmin/producttype/index");?>"><i class="menu-icon fa fa-caret-right"></i>类别管理</a><b class="arrow"></b>
      </li>
    </ul>
    </li>
    <li <?php if(CONTROLLER_NAME == 'Industry'): ?>class="active"<?php endif; ?>> <a href="<?php echo U("kr_htadmin/industry/index");?>"> <i class="menu-icon fa fa-file"></i> <span class="menu-text"> 行业应用 </span> </a> <b class="arrow"></b>
    </li>
    <li <?php if(CONTROLLER_NAME == 'Download'): ?>class="active"<?php endif; ?>> <a href="<?php echo U("kr_htadmin/download/index");?>"> <i class="menu-icon fa fa-file"></i> <span class="menu-text"> 下载中心 </span> </a> <b class="arrow"></b>
    </li>
    <li <?php if(CONTROLLER_NAME == 'News'): ?>class="active"<?php endif; ?>> <a href="<?php echo U("kr_htadmin/news/index");?>"> <i class="menu-icon fa fa-file"></i> <span class="menu-text"> 新闻中心 </span> </a> <b class="arrow"></b>
    </li>
    <li <?php if(CONTROLLER_NAME == 'Message'): ?>class="active"<?php endif; ?>> <a href="<?php echo U("kr_htadmin/message/index");?>"> <i class="menu-icon fa fa-file"></i> <span class="menu-text"> 客户留言 </span> </a> <b class="arrow"></b>
    </li>
    <li <?php if(CONTROLLER_NAME == 'Show' && $type == '2'): ?>class="active"<?php endif; ?>> <a href="<?php echo U("kr_htadmin/show/index?id=2");?>"> <i class="menu-icon fa fa-file"></i> <span class="menu-text"> 联系我们 </span> </a> <b class="arrow"></b>
    </li>
    <li <?php if(CONTROLLER_NAME == 'Cooperation'): ?>class="active"<?php endif; ?>> <a href="<?php echo U("kr_htadmin/cooperation/index");?>"> <i class="menu-icon fa fa-file"></i> <span class="menu-text"> 合作伙伴 </span> </a> <b class="arrow"></b>
    </li>
    
    
    
    
    
  
  </ul>
  
  <!-- #section:basics/sidebar.layout.minimize -->
  <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse"> <i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i> </div>
  
  <!-- /section:basics/sidebar.layout.minimize --> 
  <script type="text/javascript">
					try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
				</script> 
</div>

            
			<div class="main-content">
				<!-- #section:basics/content.breadcrumbs -->
				

				<!-- /section:basics/content.breadcrumbs -->
				<div class="page-content">
					<div class="page-content-area">
						<div class="page-header">
							<h1>
								控制台
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">								
								<div class="row">
									<div class="col-sm-5">
										<div class="widget-box transparent">
											<div class="widget-header widget-header-flat">
												<h4 class="widget-title lighter">
													<i class="ace-icon fa fa-star orange"></i>
													服务器信息
												</h4>

												<div class="widget-toolbar">
													<a href="#" data-action="collapse">
														<i class="ace-icon fa fa-chevron-up"></i>
													</a>
												</div>
											</div>

											<div class="widget-body">
												<div class="widget-main no-padding">
													<table class="table table-bordered table-striped">
														

														<tbody>
															<tr>
																<td>服务器操作系统</td>

																<td><?php echo (PHP_OS); ?>
																</td>
															</tr>

															<tr>
																<td>ThinkPHP版本</td>

																<td><?php echo (THINK_VERSION); ?>
																</td>
															</tr>

															<tr>
																<td>运行环境</td>

																<td><?php echo ($_SERVER['SERVER_SOFTWARE']); ?>
																</td>
															</tr>

															<tr>
																<td>MYSQL版本</td>

																<td><?php $system_info_mysql = M()->query("select version() as v;"); echo ($system_info_mysql["0"]["v"]); ?>
																</td>
															</tr>

															<tr>
																<td>上传限制</td>

																<td><?php echo ini_get('upload_max_filesize');?>
																</td>
															</tr>
														</tbody>
													</table>
												</div><!-- /.widget-main -->
											</div><!-- /.widget-body -->
										</div><!-- /.widget-box -->
									</div>
								</div><!-- /.row -->

								<div class="hr hr32 hr-dotted"></div>

								<div class="row">
								</div>
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
			window.jQuery || document.write("<script src='/Public/kr_htadmin/js/jquery.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
        <script type="text/javascript">
         window.jQuery || document.write("<script src='/Public/kr_htadmin/js/jquery1x.min.js'>"+"<"+"/script>");
        </script>
        <![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='/Public/kr_htadmin/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="/Public/kr_htadmin/js/bootstrap.min.js"></script>

		<script src="/Public/kr_htadmin/js/jquery.dataTables.min.js"></script>
		<script src="/Public/kr_htadmin/js/jquery.dataTables.bootstrap.js"></script>

		<script src="/Public/kr_htadmin/js/ace-elements.min.js"></script>
		<script src="/Public/kr_htadmin/js/ace.min.js"></script>

		<script type="text/javascript">
			jQuery(function($) {
				var oTable1 = 
				$('#sample-table-2')
				.dataTable( {
					bAutoWidth: false,
					"aoColumns": [
					  { "bSortable": false },
					  null, null,null, null, 
					  { "bSortable": false }
					],
					"aaSorting": [],
			
			    } );
			
			
				$(document).on('click', 'th input:checkbox' , function(){
					var that = this;
					$(this).closest('table').find('tr > td:first-child input:checkbox')
					.each(function(){
						this.checked = that.checked;
						$(this).closest('tr').toggleClass('selected');
					});
				});
			
			
				$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('table')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					//var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
			
			})
		</script>


		<link rel="stylesheet" href="/Public/kr_htadmin/css/ace.onpage-help.css" />
		<link rel="stylesheet" href="/Public/kr_htadmin/js/themes/sunburst.css" />

		<script type="text/javascript"> ace.vars['base'] = '..'; </script>
		<script src="/Public/kr_htadmin/js/ace/elements.onpage-help.js"></script>
		<script src="/Public/kr_htadmin/js/ace/ace.onpage-help.js"></script>
		<script src="/Public/kr_htadmin/js/rainbow.js"></script>
		<script src="/Public/kr_htadmin/js/language/generic.js"></script>
		<script src="/Public/kr_htadmin/js/language/html.js"></script>
		<script src="/Public/kr_htadmin/js/language/css.js"></script>
		<script src="/Public/kr_htadmin/js/language/javascript.js"></script>
	</body>
</html>