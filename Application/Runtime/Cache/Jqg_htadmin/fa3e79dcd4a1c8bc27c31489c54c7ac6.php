<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>鸿扬网络-管理系统</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="/Public/jqg_htadmin/css/bootstrap.min.css" />
		<link rel="stylesheet" href="/Public/jqg_htadmin/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="/Public/jqg_htadmin/css/jquery-ui.custom.min.css" />
		<link rel="stylesheet" href="/Public/jqg_htadmin/css/chosen.css" />
		<link rel="stylesheet" href="/Public/jqg_htadmin/css/datepicker.css" />
		<link rel="stylesheet" href="/Public/jqg_htadmin/css/bootstrap-timepicker.css" />
		<link rel="stylesheet" href="/Public/jqg_htadmin/css/daterangepicker.css" />
		<link rel="stylesheet" href="/Public/jqg_htadmin/css/bootstrap-datetimepicker.css" />
		<link rel="stylesheet" href="/Public/jqg_htadmin/css/colorpicker.css" />
		<!-- text fonts -->
		<link rel="stylesheet" href="/Public/jqg_htadmin/css/ace-fonts.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="/Public/jqg_htadmin/css/ace.min.css" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="/Public/jqg_htadmin/css/ace-part2.min.css" />
		<![endif]-->
		<link rel="stylesheet" href="/Public/jqg_htadmin/css/ace-skins.min.css" />
		<link rel="stylesheet" href="/Public/jqg_htadmin/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="/Public/jqg_htadmin/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="/Public/jqg_htadmin/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="/Public/jqg_htadmin/js/html5shiv.min.js"></script>
		<script src="/Public/jqg_htadmin/js/respond.min.js"></script>
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
									<a href="/jqg_htadmin/user/">
										<i class="ace-icon fa fa-user"></i>
										会员信息
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="<?php echo U('jqg_htadmin/login/logout');?>">
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
        
        
<script src="/Public/jqg_htadmin/js/bootstrap.min.js"></script> 
<div class="main-container" id="main-container"> 
<script type="text/javascript">
	try{ace.settings.check('main-container' , 'fixed')}catch(e){}
</script> 
  <div id="sidebar" class="sidebar responsive"> 
  <script type="text/javascript">
	try{ace.settings.check('sidebar','fixed')}catch(e){}
  </script>
  <ul class="nav nav-list" style="top: 0px;">
    <li <?php if(CONTROLLER_NAME == 'Index'): ?>class="active"<?php endif; ?>> <a href="<?php echo U("jqg_htadmin/index/index");?>"> <i class="menu-icon fa fa-tachometer"></i> <span class="menu-text"> 控制台 </span> </a> <b class="arrow"></b></li>
    <li class="<?php if(CONTROLLER_NAME == 'Show' && $type == '1' || CONTROLLER_NAME == 'Video'): ?>active open<?php endif; ?> hsub"> <a href="#" class="dropdown-toggle"> <i class="menu-icon fa fa-file"></i> <span class="menu-text"> 关于我们 </span> <b class="arrow fa fa-angle-down"></b> </a> <b class="arrow"></b>
    <ul class="submenu">
      <li <?php if(CONTROLLER_NAME == 'Show' && $showid == '1') echo "class='active'"; ?>><a href="<?php echo U("jqg_htadmin/show/index?id=1");?>"><i class="menu-icon fa fa-caret-right"></i>关于嘉乾阁</a><b class="arrow"></b></li>
      <li <?php if(CONTROLLER_NAME == 'Show' && $showid == '2') echo "class='active'"; ?>><a href="<?php echo U("jqg_htadmin/show/index?id=2");?>"><i class="menu-icon fa fa-caret-right"></i>企业文化</a><b class="arrow"></b></li>
      <li <?php if(CONTROLLER_NAME == 'Show' && $showid == '3') echo "class='active'"; ?>><a href="<?php echo U("jqg_htadmin/show/index?id=3");?>"><i class="menu-icon fa fa-caret-right"></i>社会责任</a><b class="arrow"></b></li>
      <li <?php if(CONTROLLER_NAME == 'Video') echo "class='active'"; ?>><a href="<?php echo U("jqg_htadmin/video/index");?>"><i class="menu-icon fa fa-caret-right"></i>视频中心</a><b class="arrow"></b></li>
      <li <?php if(CONTROLLER_NAME == 'Show' && $showid == '4') echo "class='active'"; ?>><a href="<?php echo U("jqg_htadmin/show/index?id=4");?>"><i class="menu-icon fa fa-caret-right"></i>人才招聘</a><b class="arrow"></b></li>
      <li <?php if(CONTROLLER_NAME == 'Show' && $showid == '5') echo "class='active'"; ?>><a href="<?php echo U("jqg_htadmin/show/index?id=5");?>"><i class="menu-icon fa fa-caret-right"></i>联系我们</a><b class="arrow"></b></li>
    </ul>
    </li>
    <li class="<?php if(CONTROLLER_NAME == 'Furniture' || CONTROLLER_NAME == 'Furnituretype'): ?>active open<?php endif; ?> hsub"> <a href="#" class="dropdown-toggle"> <i class="menu-icon fa fa-file"></i> <span class="menu-text"> 明清家具 </span> <b class="arrow fa fa-angle-down"></b> </a> <b class="arrow"></b>
    <ul class="submenu">
      <li <?php if(CONTROLLER_NAME == 'Furnituretype') echo "class='active'"; ?>><a href="<?php echo U("jqg_htadmin/furnituretype/index");?>"><i class="menu-icon fa fa-caret-right"></i>栏目管理</a><b class="arrow"></b></li>
      <li class="<?php if(CONTROLLER_NAME == 'Furniture'): ?>active open<?php endif; ?> hsub"> <a href="#" class="dropdown-toggle"> <i class="menu-icon fa fa-caret-right"></i> 内容管理 <b class="arrow fa fa-angle-down"></b> </a> <b class="arrow"></b>
        <ul class="submenu">
          	<?php if(is_array($furnituretype)): $i = 0; $__LIST__ = $furnituretype;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li <?php if($type == $v['id']) echo 'class="active"'; ?> > <a href="<?php echo U("jqg_htadmin/furniture/index?type=".$v['id']."");?>"> <?php echo ($v["name"]); ?></a> <b class="arrow"></b> </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
      </li> 
    </ul>
    </li>
    
    <li class="<?php if(CONTROLLER_NAME == 'Customer'): ?>active open<?php endif; ?> hsub"> <a href="#" class="dropdown-toggle"> <i class="menu-icon fa fa-file"></i> <span class="menu-text"> 经典案例 </span> <b class="arrow fa fa-angle-down"></b> </a> <b class="arrow"></b>
    <ul class="submenu">
      <li <?php if(CONTROLLER_NAME == 'Customer'): ?>class='active'<?php endif; ?>><a href="<?php echo U("jqg_htadmin/customer/index");?>"><i class="menu-icon fa fa-caret-right"></i>客户实录</a><b class="arrow"></b></li>
    </ul>
    </li>
    
    <li class="<?php if(CONTROLLER_NAME == 'Show' && $type == '2'): ?>active open<?php endif; ?> hsub"> <a href="#" class="dropdown-toggle"> <i class="menu-icon fa fa-file"></i> <span class="menu-text"> 客户服务 </span> <b class="arrow fa fa-angle-down"></b> </a> <b class="arrow"></b>
    <ul class="submenu">
      <?php if(is_array($service)): $i = 0; $__LIST__ = $service;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li <?php if(CONTROLLER_NAME == 'Show' && $showid == $v['id']) echo "class='active'"; ?>><a href="<?php echo U("jqg_htadmin/show/index?id=".$v['id']."");?>"><i class="menu-icon fa fa-caret-right"></i><?php echo ($v["name"]); ?></a><b class="arrow"></b></li><?php endforeach; endif; else: echo "" ;endif; ?>
      
    </ul>
    </li>
    
    <li <?php if(CONTROLLER_NAME == 'Craftsman'): ?>class="active"<?php endif; ?>> <a href="<?php echo U("jqg_htadmin/craftsman/index");?>"> <i class="menu-icon fa fa-file"></i> <span class="menu-text"> 工艺大师 </span> </a> <b class="arrow"></b></li>
    
    <li class="<?php if(CONTROLLER_NAME == 'Story' || CONTROLLER_NAME == 'Storytype'): ?>active open<?php endif; ?> hsub"> <a href="#" class="dropdown-toggle"> <i class="menu-icon fa fa-file"></i> <span class="menu-text"> 品牌故事 </span> <b class="arrow fa fa-angle-down"></b> </a> <b class="arrow"></b>
    <ul class="submenu">
      <li <?php if(CONTROLLER_NAME == 'Storytype') echo "class='active'"; ?>><a href="<?php echo U("jqg_htadmin/storytype/index");?>"><i class="menu-icon fa fa-caret-right"></i>栏目管理</a><b class="arrow"></b></li>
      <li class="<?php if(CONTROLLER_NAME == 'Story'): ?>active open<?php endif; ?> hsub"> <a href="#" class="dropdown-toggle"> <i class="menu-icon fa fa-caret-right"></i> 内容管理 <b class="arrow fa fa-angle-down"></b> </a> <b class="arrow"></b>
        <ul class="submenu">
          	<?php if(is_array($storytype)): $i = 0; $__LIST__ = $storytype;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li <?php if($type == $v['id']) echo 'class="active"'; ?> > <a href="<?php echo U("jqg_htadmin/story/index?type=".$v['id']."");?>"> <?php echo ($v["name"]); ?></a> <b class="arrow"></b> </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
      </li> 
    </ul>
    </li>
    <li class="<?php if(CONTROLLER_NAME == 'Interlocution'): ?>active open<?php endif; ?> hsub"> <a href="#" class="dropdown-toggle"> <i class="menu-icon fa fa-file"></i> <span class="menu-text"> 百问百答 </span> <b class="arrow fa fa-angle-down"></b> </a> <b class="arrow"></b>
    <ul class="submenu">
      <li <?php if($type == 1) echo "class='active'"; ?>><a href="<?php echo U("jqg_htadmin/interlocution/index?type=1");?>"><i class="menu-icon fa fa-caret-right"></i>木材问答</a><b class="arrow"></b></li>
      <li <?php if($type == 2) echo "class='active'"; ?>><a href="<?php echo U("jqg_htadmin/interlocution/index?type=2");?>"><i class="menu-icon fa fa-caret-right"></i>工艺问答</a><b class="arrow"></b></li>
      <li <?php if($type == 3) echo "class='active'"; ?>><a href="<?php echo U("jqg_htadmin/interlocution/index?type=3");?>"><i class="menu-icon fa fa-caret-right"></i>搭配问答</a><b class="arrow"></b></li>
      <li <?php if($type == 4) echo "class='active'"; ?>><a href="<?php echo U("jqg_htadmin/interlocution/index?type=4");?>"><i class="menu-icon fa fa-caret-right"></i>其它问答</a><b class="arrow"></b></li>
    </ul>
    </li>
    <li class="<?php if(CONTROLLER_NAME == 'News'): ?>active open<?php endif; ?> hsub"> <a href="#" class="dropdown-toggle"> <i class="menu-icon fa fa-file"></i> <span class="menu-text"> 新闻资讯 </span> <b class="arrow fa fa-angle-down"></b> </a> <b class="arrow"></b>
    <ul class="submenu">
      <li <?php if($type == 1) echo "class='active'"; ?>><a href="<?php echo U("jqg_htadmin/news/index?type=1");?>"><i class="menu-icon fa fa-caret-right"></i>公司动态</a><b class="arrow"></b></li>
      <li <?php if($type == 2) echo "class='active'"; ?>><a href="<?php echo U("jqg_htadmin/news/index?type=2");?>"><i class="menu-icon fa fa-caret-right"></i>行业动态</a><b class="arrow"></b></li>
    </ul>
    </li>
   
    <li <?php if(CONTROLLER_NAME == 'Message'): ?>class="active"<?php endif; ?>> <a href="<?php echo U("jqg_htadmin/message/index");?>"> <i class="menu-icon fa fa-file"></i> <span class="menu-text"> 留言管理 </span> </a> <b class="arrow"></b></li>
    
    
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
        <div class="row">
          <div class="col-xs-12">
            <div class="row">
            <form action="<?php echo U('craftsman/dels');?>" method="post" id="myform">
            	<input type="hidden" name="type" value="<?php echo ($type); ?>">
              <div class="col-xs-12">
                <h3 class="header smaller lighter blue">工艺大师 <small> <i class="ace-icon fa fa-angle-double-right"></i> 内容管理 </small> </h3>
                <div class="well well-sm">
                  <button type="button" class="close line-height-0" data-dismiss="alert"> <i class="ace-icon fa fa-times smaller-75"></i> </button>
                  <a class='menubutton' href='<?php echo U("jqg_htadmin/craftsman/add?type=".$type."");?>'> 添加数据 <i class="fa fa-external-link bigger-110"></i> </a> </div>
                <div class="table-header"> 内容 </div>
                <div>
                  <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                    <thead>
                      <tr>
                        <th class="center"> <label class="position-relative">
                            <input type="checkbox" class="ace" />
                            <span class="lbl"></span> </label>
                        </th>
                        <th style="width:60px">排序</th>
                        <th>名称</th>
                        
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
                        <td class="center"><label class="position-relative">
                            <input type="checkbox" class="ace" name="id[]" value="<?php echo ($v["id"]); ?>" />
                            <span class="lbl"></span> </label></td>
                        <td style="padding:2px">
                        	<input type="text" name="sort[]" value="<?php echo ($v["sort"]); ?>" style="width:35px">
                            <input type="hidden" name="sortid[]" value="<?php echo ($v["id"]); ?>">
                        </td>
                        <td><?php echo ($v[name]); ?></td>
                        
                        <td><div class="hidden-sm hidden-xs action-buttons"> 
                            
                            <a class="green" href="<?php echo U("jqg_htadmin/craftsman/edit?id=".$v['id']."&type=".$type."");?>"> <i class="ace-icon fa fa-pencil bigger-130"></i> </a> 
                            <a class="red" href="<?php echo U("jqg_htadmin/craftsman/del?id=".$v['id']."");?>" onclick="if (confirm('确认删除吗？')){return true;}else{return false;}"> <i class="ace-icon fa fa-trash-o bigger-130"></i> </a> </div></td>
                      </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                      
                    </tbody>
                    <tr>
                        <td class="right" colspan="8">
                        	<input type="submit" class="btn btn-info" value="批量删除">
                            <input type="submit" class="btn btn-info" value="保存排序" onClick="$('#myform').attr('action', '<?php echo U("craftsman/sort");?>'); ">
                        </td>
                      </tr>
                  </table>
                </div>
                </form>
              </div>
            </div>
          </div>
          <!-- /.col --> 
        </div>
        <!-- /.row --> 
      </div>
      <!-- /.page-content-area --> 
    </div>
    <!-- /.page-content --> 
  </div>
  <!-- /.main-content --> 
  
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
  
  <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse"> <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i> </a> </div>
<!-- /.main-container --> 

<!-- basic scripts --> 

<!--[if !IE]> -->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='/Public/jqg_htadmin/js/jquery.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]--> 

<!--[if IE]>
        <script type="text/javascript">
         window.jQuery || document.write("<script src='/Public/jqg_htadmin/js/jquery1x.min.js'>"+"<"+"/script>");
        </script>
        <![endif]--> 
<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='/Public/jqg_htadmin/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script> 
<script src="/Public/jqg_htadmin/js/bootstrap.min.js"></script> 
<script src="/Public/jqg_htadmin/js/jquery.dataTables.min.js"></script> 
<script src="/Public/jqg_htadmin/js/jquery.dataTables.bootstrap.js"></script> 
<script src="/Public/jqg_htadmin/js/ace-elements.min.js"></script> 
<script src="/Public/jqg_htadmin/js/ace.min.js"></script> 
<script type="text/javascript">
			jQuery(function($) {
				var oTable1 = 
				$('#sample-table-2')
				.dataTable( {
					bAutoWidth: false,
					"aoColumns": [
					  { "bSortable": false },
					  null,null,
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
<link rel="stylesheet" href="/Public/jqg_htadmin/css/ace.onpage-help.css" />
<link rel="stylesheet" href="/Public/jqg_htadmin/js/themes/sunburst.css" />
<script type="text/javascript"> ace.vars['base'] = '..'; </script> 
<script src="/Public/jqg_htadmin/js/ace/elements.onpage-help.js"></script> 
<script src="/Public/jqg_htadmin/js/ace/ace.onpage-help.js"></script> 
<script src="/Public/jqg_htadmin/js/rainbow.js"></script> 
<script src="/Public/jqg_htadmin/js/language/generic.js"></script> 
<script src="/Public/jqg_htadmin/js/language/html.js"></script> 
<script src="/Public/jqg_htadmin/js/language/css.js"></script> 
<script src="/Public/jqg_htadmin/js/language/javascript.js"></script>
</body></html>