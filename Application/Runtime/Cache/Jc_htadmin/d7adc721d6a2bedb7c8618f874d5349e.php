<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>鸿扬网络-管理系统</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="/Public/jc_htadmin/css/bootstrap.min.css" />
		<link rel="stylesheet" href="/Public/jc_htadmin/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="/Public/jc_htadmin/css/jquery-ui.custom.min.css" />
		<link rel="stylesheet" href="/Public/jc_htadmin/css/chosen.css" />
		<link rel="stylesheet" href="/Public/jc_htadmin/css/datepicker.css" />
		<link rel="stylesheet" href="/Public/jc_htadmin/css/bootstrap-timepicker.css" />
		<link rel="stylesheet" href="/Public/jc_htadmin/css/daterangepicker.css" />
		<link rel="stylesheet" href="/Public/jc_htadmin/css/bootstrap-datetimepicker.css" />
		<link rel="stylesheet" href="/Public/jc_htadmin/css/colorpicker.css" />
		<!-- text fonts -->
		<link rel="stylesheet" href="/Public/jc_htadmin/css/ace-fonts.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="/Public/jc_htadmin/css/ace.min.css" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="/Public/jc_htadmin/css/ace-part2.min.css" />
		<![endif]-->
		<link rel="stylesheet" href="/Public/jc_htadmin/css/ace-skins.min.css" />
		<link rel="stylesheet" href="/Public/jc_htadmin/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="/Public/jc_htadmin/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="/Public/jc_htadmin/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="/Public/jc_htadmin/js/html5shiv.min.js"></script>
		<script src="/Public/jc_htadmin/js/respond.min.js"></script>
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
									<a href="/jc_htadmin/user/">
										<i class="ace-icon fa fa-user"></i>
										会员信息
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="<?php echo U('jc_htadmin/login/logout');?>">
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
        
        
<script src="/Public/jc_htadmin/js/bootstrap.min.js"></script> 
<div class="main-container" id="main-container"> 
<script type="text/javascript">
	try{ace.settings.check('main-container' , 'fixed')}catch(e){}
</script> 
  <div id="sidebar" class="sidebar responsive"> 
  <script type="text/javascript">
	try{ace.settings.check('sidebar','fixed')}catch(e){}
</script>
  <ul class="nav nav-list" style="top: 0px;">
    <li <?php if(CONTROLLER_NAME == 'Index'): ?>class="active"<?php endif; ?>> <a href="<?php echo U("jc_htadmin/index/index");?>"> <i class="menu-icon fa fa-tachometer"></i> <span class="menu-text"> 控制台 </span> </a> <b class="arrow"></b>
    </li>
    <li class="<?php if(CONTROLLER_NAME == 'Product'): ?>active open<?php endif; ?> hsub"> <a href="#" class="dropdown-toggle"> <i class="menu-icon fa fa-file"></i> <span class="menu-text"> 产品展示 </span> <b class="arrow fa fa-angle-down"></b> </a> <b class="arrow"></b>
        <ul class="submenu">
          <li <?php if(CONTROLLER_NAME == 'Product' && $type == '1') echo "class='active'"; ?>><a href="<?php echo U("jc_htadmin/product/index?type=1");?>"><i class="menu-icon fa fa-caret-right"></i>TDL柔性饰面砖</a><b class="arrow"></b>
          </li>
          <li <?php if(CONTROLLER_NAME == 'Product' && $type == '2') echo "class='active'"; ?>><a href="<?php echo U("jc_htadmin/product/index?type=2");?>"><i class="menu-icon fa fa-caret-right"></i>TDL天然彩色装饰砂浆</a><b class="arrow"></b>
          </li>
          <li <?php if(CONTROLLER_NAME == 'Product' && $type == '3') echo "class='active'"; ?>><a href="<?php echo U("jc_htadmin/product/index?type=3");?>"><i class="menu-icon fa fa-caret-right"></i>TDL外墙外保温</a><b class="arrow"></b>
          </li>
          
        </ul>
    </li>
    
    <li class="<?php if(CONTROLLER_NAME == 'Case'): ?>active open<?php endif; ?> hsub"> <a href="#" class="dropdown-toggle"> <i class="menu-icon fa fa-file"></i> <span class="menu-text"> 工程案例 </span> <b class="arrow fa fa-angle-down"></b> </a> <b class="arrow"></b>
        <ul class="submenu">
          <li <?php if(CONTROLLER_NAME == 'Case' && $type == '1') echo "class='active'"; ?>><a href="<?php echo U("jc_htadmin/case/index?type=1");?>"><i class="menu-icon fa fa-caret-right"></i>TDL柔性饰面砖</a><b class="arrow"></b>
          </li>
          <li <?php if(CONTROLLER_NAME == 'Case' && $type == '2') echo "class='active'"; ?>><a href="<?php echo U("jc_htadmin/case/index?type=2");?>"><i class="menu-icon fa fa-caret-right"></i>TDL天然彩色装饰砂浆</a><b class="arrow"></b>
          </li>
          <li <?php if(CONTROLLER_NAME == 'Case' && $type == '3') echo "class='active'"; ?>><a href="<?php echo U("jc_htadmin/case/index?type=3");?>"><i class="menu-icon fa fa-caret-right"></i>TDL外墙外保温</a><b class="arrow"></b>
          </li>
          
        </ul>
    </li>
    <li <?php if(CONTROLLER_NAME == 'Technical'): ?>class="active"<?php endif; ?>> <a href="<?php echo U("jc_htadmin/technical/index");?>"> <i class="menu-icon fa fa-file"></i> <span class="menu-text"> 技术解答 </span> </a> <b class="arrow"></b></li>
    <li <?php if(CONTROLLER_NAME == 'Patent'): ?>class="active"<?php endif; ?>> <a href="<?php echo U("jc_htadmin/patent/index");?>"> <i class="menu-icon fa fa-file"></i> <span class="menu-text"> 专利标准 </span> </a> <b class="arrow"></b></li>
    
    <li class="<?php if(CONTROLLER_NAME == 'News'): ?>active open<?php endif; ?> hsub"> <a href="#" class="dropdown-toggle"> <i class="menu-icon fa fa-file"></i> <span class="menu-text"> 动态信息 </span> <b class="arrow fa fa-angle-down"></b> </a> <b class="arrow"></b>
        <ul class="submenu">
          <li <?php if(CONTROLLER_NAME == 'News' && $type == '1') echo "class='active'"; ?>><a href="<?php echo U("jc_htadmin/news/index?type=1");?>"><i class="menu-icon fa fa-caret-right"></i>企业动态</a><b class="arrow"></b>
          </li>
          <li <?php if(CONTROLLER_NAME == 'News' && $type == '2') echo "class='active'"; ?>><a href="<?php echo U("jc_htadmin/news/index?type=2");?>"><i class="menu-icon fa fa-caret-right"></i>行业动态</a><b class="arrow"></b>
          </li>
          <li <?php if(CONTROLLER_NAME == 'News' && $type == '3') echo "class='active'"; ?>><a href="<?php echo U("jc_htadmin/news/index?type=3");?>"><i class="menu-icon fa fa-caret-right"></i>视频播报</a><b class="arrow"></b>
          </li>
          
        </ul>
    </li>
    
    <li <?php if(CONTROLLER_NAME == 'Show' && $type == '1'): ?>class="active"<?php endif; ?>> <a href="<?php echo U("jc_htadmin/show/index?id=1");?>"> <i class="menu-icon fa fa-file"></i> <span class="menu-text"> 关于我们 </span> </a> <b class="arrow"></b></li>
    <li <?php if(CONTROLLER_NAME == 'Show' && $type == '2'): ?>class="active"<?php endif; ?>> <a href="<?php echo U("jc_htadmin/show/index?id=2");?>"> <i class="menu-icon fa fa-file"></i> <span class="menu-text"> 联系我们 </span> </a> <b class="arrow"></b></li>
    <li <?php if(CONTROLLER_NAME == 'Clients'): ?>class="active"<?php endif; ?>> <a href="<?php echo U("jc_htadmin/clients/index");?>"> <i class="menu-icon fa fa-file"></i> <span class="menu-text"> 合作客户 </span> </a> <b class="arrow"></b></li>
    <li <?php if(CONTROLLER_NAME == 'Online'): ?>class="active"<?php endif; ?>> <a href="<?php echo U("jc_htadmin/online/index");?>"> <i class="menu-icon fa fa-file"></i> <span class="menu-text"> 在线加盟 </span> </a> <b class="arrow"></b></li>
    
    
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
            <form action="<?php echo U('online/dels');?>" method="post" id="myform">
            	<input type="hidden" name="type" value="<?php echo ($type); ?>">
              <div class="col-xs-12">
                <h3 class="header smaller lighter blue">在线加盟 <small> <i class="ace-icon fa fa-angle-double-right"></i> 内容管理 </small> </h3>
                
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
                        <th>单位</th>
                        <th>地址</th>
                        <th>邮编</th>
                        <th>联系人</th>
                        <th>电话</th>
                        <th>邮箱</th>
                        <th>微信号</th>
                        <th>留言内容</th>
                        <th>添加时间</th>
                        
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
                        <td><?php echo ($v[company]); ?></td>
                        <td><?php echo ($v[address]); ?></td>
                        <td><?php echo ($v[youbian]); ?></td>
                        <td><?php echo ($v[name]); ?></td>
                        <td><?php echo ($v[tel]); ?></td>
                        <td><?php echo ($v[email]); ?></td>
                        <td><?php echo ($v[weixin]); ?></td>
                        <td><?php echo ($v[content]); ?></td>
                        <td><?php echo (date('Y-m-d',$v["addtime"])); ?></td>
                        
                        <td><div class="hidden-sm hidden-xs action-buttons"> 
                            
                            
                            <a class="red" href="<?php echo U("jc_htadmin/online/del?id=".$v['id']."");?>" onclick="if (confirm('确认删除吗？')){return true;}else{return false;}"> <i class="ace-icon fa fa-trash-o bigger-130"></i> </a> </div></td>
                      </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                      
                    </tbody>
                    <tr>
                        <td class="right" colspan="12">
                        	<input type="submit" class="btn btn-info" value="批量删除">
                            <input type="submit" class="btn btn-info" value="保存排序" onClick="$('#myform').attr('action', '<?php echo U("online/sort");?>'); ">
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
			window.jQuery || document.write("<script src='/Public/jc_htadmin/js/jquery.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]--> 

<!--[if IE]>
        <script type="text/javascript">
         window.jQuery || document.write("<script src='/Public/jc_htadmin/js/jquery1x.min.js'>"+"<"+"/script>");
        </script>
        <![endif]--> 
<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='/Public/jc_htadmin/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script> 
<script src="/Public/jc_htadmin/js/bootstrap.min.js"></script> 
<script src="/Public/jc_htadmin/js/jquery.dataTables.min.js"></script> 
<script src="/Public/jc_htadmin/js/jquery.dataTables.bootstrap.js"></script> 
<script src="/Public/jc_htadmin/js/ace-elements.min.js"></script> 
<script src="/Public/jc_htadmin/js/ace.min.js"></script> 
<script type="text/javascript">
			jQuery(function($) {
				var oTable1 = 
				$('#sample-table-2')
				.dataTable( {
					bAutoWidth: false,
					"aoColumns": [
					  { "bSortable": false },
					  null,null,null,null,null,null,null,null,null,null,
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
<link rel="stylesheet" href="/Public/jc_htadmin/css/ace.onpage-help.css" />
<link rel="stylesheet" href="/Public/jc_htadmin/js/themes/sunburst.css" />
<script type="text/javascript"> ace.vars['base'] = '..'; </script> 
<script src="/Public/jc_htadmin/js/ace/elements.onpage-help.js"></script> 
<script src="/Public/jc_htadmin/js/ace/ace.onpage-help.js"></script> 
<script src="/Public/jc_htadmin/js/rainbow.js"></script> 
<script src="/Public/jc_htadmin/js/language/generic.js"></script> 
<script src="/Public/jc_htadmin/js/language/html.js"></script> 
<script src="/Public/jc_htadmin/js/language/css.js"></script> 
<script src="/Public/jc_htadmin/js/language/javascript.js"></script>
</body></html>