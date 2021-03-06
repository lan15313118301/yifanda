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
        
        
<link rel="stylesheet" href="/Public/df_htadmin/css/jquery-ui.custom.min.css" />
<link rel="stylesheet" href="/Public/df_htadmin/css/chosen.css" />
<link rel="stylesheet" href="/Public/df_htadmin/css/datepicker.css" />
<link rel="stylesheet" href="/Public/df_htadmin/css/bootstrap-timepicker.css" />
<link rel="stylesheet" href="/Public/df_htadmin/css/daterangepicker.css" />
<link rel="stylesheet" href="/Public/df_htadmin/css/bootstrap-datetimepicker.css" />
<link rel="stylesheet" href="/Public/df_htadmin/css/colorpicker.css" />
<link rel="stylesheet" href="/Public/df_htadmin/css/ace.min.css" id="main-ace-style" />
<script src="/Public/home/js/jquery.js"></script>
<script>
$(function(){
	 $("#class1").change(function(){	 
		 var $lbtitle = $(this).val();
		 //alert($lbtitle);
		 $.getJSON('<?php echo U("df_htadmin/cooperative/class2");?>',{lbtitle:$lbtitle},function(data){
		 if (data.status==1){
			$("#class2 option").remove();
				for(var i = 0;i < data.content.length ; i++){
					
					$("#class2").append("<option value='"+data.content[i]['id']+"'>"+data.content[i]['name']+"</option>");
				}
			}
		}); 
	});
}); 
</script>
<div class="main-container" id="main-container"> 
  
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
    <li <?php if(CONTROLLER_NAME == 'Case'): ?>class="active"<?php endif; ?>> <a href="<?php echo U("df_htadmin/case/index");?>"> <i class="menu-icon fa fa-file"></i> <span class="menu-text"> 案例展示 </span> </a> <b class="arrow"></b></li>
    <li <?php if(CONTROLLER_NAME == 'Cooperative'): ?>class="active"<?php endif; ?>> <a href="<?php echo U("df_htadmin/cooperative/index");?>"> <i class="menu-icon fa fa-file"></i> <span class="menu-text"> 合作伙伴 </span> </a> <b class="arrow"></b></li>
    
    
    
  
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
          <h1> 合作伙伴 <small> <i class="ace-icon fa fa-angle-double-right"></i> 内容管理 <i class="ace-icon fa fa-angle-double-right"></i> 添加 </small> </h1>
        </div>
        <!-- /.page-header -->
        <div class="row">
          <div class="col-xs-12"> 
            <!-- PAGE CONTENT BEGINS -->
            <form class="form-horizontal" role="form" action="<?php echo U("df_htadmin/cooperative/add");?>" method="post" enctype="multipart/form-data">
              <input type="hidden" name="action" value="add" />
              <input type="hidden" name="type" value="<?php echo ($type); ?>" />
              <!-- #section:elements.form -->
              <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 标题 : </label>
                <div class="col-sm-9">
                  <input type="text" class="col-xs-10 col-sm-4" name="name" value="<?php echo ($list["name"]); ?>" />
                </div>
              </div>
              <div class="space-4"></div>
              <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 作者 : </label>
                <div class="col-sm-3">
                  <input type="text" class="col-xs-10 col-sm-5" name="author" value="<?php echo ($list["author"]); ?>" />
                </div>
              </div>
              
              <div class="space-4"></div>
              <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> 缩略图 : </label>
                <div class="col-sm-9">
                  <input type="hidden" class="set-input input_thumb" name="thumb" value="<?php echo ($list["thumb"]); ?>" />
                  <span id="thumbshow"></span> <span id="thumberror"></span> 
                  <script src="/Public/df_htadmin/js/jquery-1.7.1.min.js"></script> 
                  <script type="text/javascript" src="/Public/df_htadmin/js/ajaxupload.3.6.js" ></script>
                  <input id="thumbbutton" class="btn btn-xs" type="button" value="上传" />
                   (尺寸 896*432)
                  <script type="text/javascript">
                                                    $(document).ready(function() {
                                                        new AjaxUpload('thumbbutton', { action : "<?php echo U('df_htadmin/upload/upload?type=thumb');?>",//请求目标
                                                            name : 'upload', //文件参数名
                                                            multiple : false,//可以多选文件
                                                            onSubmit:function(file,ext){
                                                                    if(ext && /^(jpg|jpeg|png|gif)$/.test(ext)){
                                                                            //ext是后缀名
                                                                            $("#thumbbutton").val("正在上传…");
                                                                            $("#thumbbutton").attr("disabled","disabled");
                                                                    }else{
                                                                            $("#thumberror").css({"color":"#ff3300"}).html("不支持非图片格式！");
                                                                            return false;
                                                                    }
                                                            },
                                                            onComplete:function(file,response){
                                                                    $("#thumbbutton").val("重新上传");
                                                                    $("#thumbbutton").removeAttr("disabled");
                                                                    $("#thumberror").html("");
                                                                    $(".input_thumb").val(response);
                                                                    $("#thumbshow").html('<img style="max-width:200px;max-height:200px;" src="'+response+'?'+Math.random()+'" />');
                                                            }
                                                        });
                                                        $(".editthumb").live("click",function(){
                                                            var html='<div class="pop-box">';
                                                            html += '<style>';
                                                            html += '.pop-box{position: fixed;left: 0;top: 0;height: 100%;width: 100%;}';
                                                            html += '.pop-box .pop-close{position: absolute; width: 20px; height: 20px; border-radius: 15px; overflow: hidden; right: -10px; top: -10px; border: 2px solid #444; background-color: #FFF; line-height: 20px; text-align: center; font-family: Comic Sans MS; color: #000; font-size: 16px; cursor: pointer;}';
                                                            html += '.pop-box .pop-close:hover{color:red;}';
                                                            html += '.pop-box .pop-mask{height: 100%;background-color: #000;filter:alpha(opacity=50);-moz-opacity:0.5;-khtml-opacity: 0.5; opacity: 0.5;}';
                                                            html += '.pop-box .pop-content{width: 900px; height: 500px; position: absolute; top: 50%; margin-top: -250px; left: 50%; margin-left: -450px; background-color: #FFF; border: 3px solid #444;}';
                                                            html += '</style>';
                                                            html += '<div class="pop-mask"></div>';
                                                            html += '<div class="pop-content">';
                                                            html += '<div class="pop-close" onclick="$(this).parents(\'.pop-box\').remove();">X</div>';
                                                            html += '<iframe width="100%" height="100%" src="/Df_htadmin/Cooperative/editthumb/thumb/'+$("#thumbshow img").attr("src").replace(/\//gm,"-").replace(/\./gm,"^")+'?'+Math.random()+'" id="HtmlEdit" style="border:0;"></iframe>';
                                                            html += '</div></div>';
                                                            $("body").append(html);
                                                        });
                                                    });
                                                </script> 
                </div>
              </div>
              <div class="space-4"></div>
              <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 关键词 : </label>
                <div class="col-sm-9">
                  <input type="text" class="col-xs-10 col-sm-4" name="key" value="<?php echo ($list["key"]); ?>" />
                  <label class="col-sm-2 control-label no-padding-right" style="text-align:left" for="form-field-1"> 每个关键词用,隔开 </label>
                </div>
              </div>
              <div class="space-4"></div>
              <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> 简介 : </label>
                <div class="col-sm-9">
                  <textarea class="col-xs-10 col-sm-5" id="form-field-8" name="summary" ><?php echo ($list["summary"]); ?></textarea>
                </div>
              </div>
              <div class="space-4"></div>
              <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> 内容 : </label>
                <div class="col-sm-9">
                  <link rel="stylesheet" href="/Public/df_htadmin/kindeditor-4.1.10/themes/default/default.css" />
                  <link rel="stylesheet" href="/Public/df_htadmin/kindeditor-4.1.10/plugins/code/prettify.css" />
                  <script charset="utf-8" src="/Public/df_htadmin/kindeditor-4.1.10/kindeditor.js"></script> 
                  <script charset="utf-8" src="/Public/df_htadmin/kindeditor-4.1.10/lang/zh_CN.js"></script> 
                  <script charset="utf-8" src="/Public/df_htadmin/kindeditor-4.1.10/plugins/code/prettify.js"></script>
                  <style>
                                            	.ke-dialog-body input{ font-size:12px; padding:0px}
                                            </style>
                  <script>
                                                    KindEditor.ready(function(K) {
                                                            var editor1 = K.create('textarea[name="content"]', {
                                                                    cssPath : '/Public/df_htadmin/kindeditor-4.1.10/plugins/code/prettify.css',
                //                                                    uploadJson : '/Public/df_htadmin/kindeditor-4.1.10/php/upload_json.php',
                                                                    uploadJson : '<?php echo U("df_htadmin/upload/uploadphoto?type=thumb");?>',
                                                                    fileManagerJson : '<?php echo U("df_htadmin/upload/mannex");?>',
                                                                    allowFileManager : true,
                                                                    afterCreate : function() {
                                                                            var self = this;
                                                                            K.ctrl(document, 13, function() {
                                                                                    self.sync();
                                                                                    K('form[name=vsize1]')[0].submit();
                                                                            });
                                                                            K.ctrl(self.edit.doc, 13, function() {
                                                                                    self.sync();
                                                                                    K('form[name=vsize1]')[0].submit();
                                                                            });
                                                                    }
                                                            });
                                                            prettyPrint();
                                                    });
                                            </script>
                  <textarea name="content" class="col-xs-10 col-sm-9" style="min-width:700px;height:300px;visibility:hidden;"><?php echo ($list["content"]); ?></textarea>
                </div>
              </div>
              <div class="clearfix form-actions">
                <div class="col-md-offset-2 col-md-9">
                  <button class="btn btn-info" type="submit"> <i class="ace-icon fa fa-check bigger-110"></i> 提 交 </button>
                  &nbsp; &nbsp; &nbsp;
                  <button class="btn" type="reset"> <i class="ace-icon fa fa-undo bigger-110"></i> 重 置 </button>
                </div>
              </div>
              <div class="hr hr-24"></div>
            </form>
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
			window.jQuery || document.write("<script src='/Public/df_htadmin/js/jquery.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]--> 

<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='/Public/df_htadmin/js/jquery1x.min.js'>"+"<"+"/script>");
</script>
<![endif]--> 
<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='/Public/df_htadmin/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script> 
<script src="/Public/df_htadmin/js/bootstrap.min.js"></script> 

<!-- page specific plugin scripts --> 

<!--[if lte IE 8]>
		  <script src="/Public/df_htadmin/js/excanvas.min.js"></script>
		<![endif]--> 
<script src="/Public/df_htadmin/js/jquery-ui.custom.min.js"></script> 
<script src="/Public/df_htadmin/js/jquery.ui.touch-punch.min.js"></script> 
<script src="/Public/df_htadmin/js/chosen.jquery.min.js"></script> 
<script src="/Public/df_htadmin/js/fuelux/fuelux.spinner.min.js"></script> 
<script src="/Public/df_htadmin/js/date-time/bootstrap-datepicker.min.js"></script> 
<script src="/Public/df_htadmin/js/date-time/bootstrap-timepicker.min.js"></script> 
<script src="/Public/df_htadmin/js/date-time/moment.min.js"></script> 
<script src="/Public/df_htadmin/js/date-time/daterangepicker.min.js"></script> 
<script src="/Public/df_htadmin/js/date-time/bootstrap-datetimepicker.min.js"></script> 
<script src="/Public/df_htadmin/js/bootstrap-colorpicker.min.js"></script> 
<script src="/Public/df_htadmin/js/jquery.knob.min.js"></script> 
<script src="/Public/df_htadmin/js/jquery.autosize.min.js"></script> 
<script src="/Public/df_htadmin/js/jquery.inputlimiter.1.3.1.min.js"></script> 
<script src="/Public/df_htadmin/js/jquery.maskedinput.min.js"></script> 
<script src="/Public/df_htadmin/js/bootstrap-tag.min.js"></script> 
<script src="/Public/df_htadmin/js/typeahead.jquery.min.js"></script> 

<!-- ace scripts --> 
<script src="/Public/df_htadmin/js/ace-elements.min.js"></script> 
<script src="/Public/df_htadmin/js/ace.min.js"></script> 

<!-- inline scripts related to this page --> 
<script type="text/javascript">
			jQuery(function($) {
				$('#id-disable-check').on('click', function() {
					var inp = $('#form-input-readonly').get(0);
					if(inp.hasAttribute('disabled')) {
						inp.setAttribute('readonly' , 'true');
						inp.removeAttribute('disabled');
						inp.value="This text field is readonly!";
					}
					else {
						inp.setAttribute('disabled' , 'disabled');
						inp.removeAttribute('readonly');
						inp.value="This text field is disabled!";
					}
				});
			
			
				$('.chosen-select').chosen({allow_single_deselect:true}); 
				//resize the chosen on window resize
			
				$(window)
				.off('resize.chosen')
				.on('resize.chosen', function() {
					$('.chosen-select').each(function() {
						 var $this = $(this);
						 $this.next().css({'width': $this.parent().width()});
					})
				}).trigger('resize.chosen');
			
			
				$('#chosen-multiple-style').on('click', function(e){
					var target = $(e.target).find('input[type=radio]');
					var which = parseInt(target.val());
					if(which == 2) $('#form-field-select-4').addClass('tag-input-style');
					 else $('#form-field-select-4').removeClass('tag-input-style');
				});
			
			
				$('[data-rel=tooltip]').tooltip({container:'body'});
				$('[data-rel=popover]').popover({container:'body'});
				
				$('textarea[class*=autosize]').autosize({append: "n"});
				$('textarea.limited').inputlimiter({
					remText: '%n character%s remaining...',
					limitText: 'max allowed : %n.'
				});
			
				$.mask.definitions['~']='[+-]';
				$('.input-mask-date').mask('99/99/9999');
				$('.input-mask-phone').mask('(999) 999-9999');
				$('.input-mask-eyescript').mask('~9.99 ~9.99 999');
				$(".input-mask-cooperative").mask("a*-999-a999",{placeholder:" ",completed:function(){alert("You typed the following: "+this.val());}});
			
			
			
				$( "#input-size-slider" ).css('width','200px').slider({
					value:1,
					range: "min",
					min: 1,
					max: 8,
					step: 1,
					slide: function( event, ui ) {
						var sizing = ['', 'input-sm', 'input-lg', 'input-mini', 'input-small', 'input-medium', 'input-large', 'input-xlarge', 'input-xxlarge'];
						var val = parseInt(ui.value);
						$('#form-field-4').attr('class', sizing[val]).val('.'+sizing[val]);
					}
				});
			
				$( "#input-span-slider" ).slider({
					value:1,
					range: "min",
					min: 1,
					max: 12,
					step: 1,
					slide: function( event, ui ) {
						var val = parseInt(ui.value);
						$('#form-field-5').attr('class', 'col-xs-'+val).val('.col-xs-'+val);
					}
				});
			
			
				
				//"jQuery UI Slider"
				//range slider tooltip example
				$( "#slider-range" ).css('height','200px').slider({
					orientation: "vertical",
					range: true,
					min: 0,
					max: 100,
					values: [ 17, 67 ],
					slide: function( event, ui ) {
						var val = ui.values[$(ui.handle).index()-1] + "";
			
						if( !ui.handle.firstChild ) {
							$("<div class='tooltip right in' style='display:none;left:16px;top:-6px;'><div class='tooltip-arrow'></div><div class='tooltip-inner'></div></div>")
							.prependTo(ui.handle);
						}
						$(ui.handle.firstChild).show().children().eq(1).text(val);
					}
				}).find('a').on('blur', function(){
					$(this.firstChild).hide();
				});
				
				
				$( "#slider-range-max" ).slider({
					range: "max",
					min: 1,
					max: 10,
					value: 2
				});
				
				$( "#slider-eq > span" ).css({width:'90%', 'float':'left', margin:'15px'}).each(function() {
					// read initial values from markup and remove that
					var value = parseInt( $( this ).text(), 10 );
					$( this ).empty().slider({
						value: value,
						range: "min",
						animate: true
						
					});
				});
				
				$("#slider-eq > span.ui-slider-purple").slider('disable');//disable third item
			
				
				$('#id-input-file-1 , #id-input-file-2').ace_file_input({
					no_file:'No File ...',
					btn_choose:'Choose',
					btn_change:'Change',
					droppable:false,
					onchange:null,
					thumbnail:false //| true | large
					//whitelist:'gif|png|jpg|jpeg'
					//blacklist:'exe|php'
					//onchange:''
					//
				});
				//pre-show a file name, for example a previously selected file
				//$('#id-input-file-1').ace_file_input('show_file_list', ['myfile.txt'])
			
			
				$('#id-input-file-3').ace_file_input({
					style:'well',
					btn_choose:'Drop files here or click to choose',
					btn_change:null,
					no_icon:'ace-icon fa fa-cloud-upload',
					droppable:true,
					thumbnail:'small'//large | fit
					//,icon_remove:null//set null, to hide remove/reset button
					/**,before_change:function(files, dropped) {
						//Check an example below
						//or examples/file-upload.html
						return true;
					}*/
					/**,before_remove : function() {
						return true;
					}*/
					,
					preview_error : function(filename, error_code) {
						//name of the file that failed
						//error_code values
						//1 = 'FILE_LOAD_FAILED',
						//2 = 'IMAGE_LOAD_FAILED',
						//3 = 'THUMBNAIL_FAILED'
						//alert(error_code);
					}
			
				}).on('change', function(){
					//console.log($(this).data('ace_input_files'));
					//console.log($(this).data('ace_input_method'));
				});
				
			
				//dynamically change allowed formats by changing allowExt && allowMime function
				$('#id-file-format').removeAttr('checked').on('change', function() {
					var whitelist_ext, whitelist_mime;
					var btn_choose
					var no_icon
					if(this.checked) {
						btn_choose = "Drop images here or click to choose";
						no_icon = "ace-icon fa fa-picture-o";
			
						whitelist_ext = ["jpeg", "jpg", "png", "gif" , "bmp"];
						whitelist_mime = ["image/jpg", "image/jpeg", "image/png", "image/gif", "image/bmp"];
					}
					else {
						btn_choose = "Drop files here or click to choose";
						no_icon = "ace-icon fa fa-cloud-upload";
						
						whitelist_ext = null;//all extensions are acceptable
						whitelist_mime = null;//all mimes are acceptable
					}
					var file_input = $('#id-input-file-3');
					file_input
					.ace_file_input('update_settings',
					{
						'btn_choose': btn_choose,
						'no_icon': no_icon,
						'allowExt': whitelist_ext,
						'allowMime': whitelist_mime
					})
					file_input.ace_file_input('reset_input');
					
					file_input
					.off('file.error.ace')
					.on('file.error.ace', function(e, info) {
						//console.log(info.file_count);//number of selected files
						//console.log(info.invalid_count);//number of invalid files
						//console.log(info.error_list);//a list of errors in the following format
						
						//info.error_count['ext']
						//info.error_count['mime']
						//info.error_count['size']
						
						//info.error_list['ext']  = [list of file names with invalid extension]
						//info.error_list['mime'] = [list of file names with invalid mimetype]
						//info.error_list['size'] = [list of file names with invalid size]
						
						
						/**
						if( !info.dropped ) {
							//perhapse reset file field if files have been selected, and there are invalid files among them
							//when files are dropped, only valid files will be added to our file array
							e.preventDefault();//it will rest input
						}
						*/
						
						
						//if files have been selected (not dropped), you can choose to reset input
						//because browser keeps all selected files anyway and this cannot be changed
						//we can only reset file field to become empty again
						//on any cooperative you still should check files with your server side script
						//because any arbitrary file can be uploaded by user and it's not safe to rely on browser-side measures
					});
				
				});
			
				$('#spinner1').ace_spinner({value:0,min:0,max:200,step:10, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
				.on('change', function(){
					//alert(this.value)
				});
				$('#spinner2').ace_spinner({value:0,min:0,max:10000,step:100, touch_spinner: true, icon_up:'ace-icon fa fa-caret-up', icon_down:'ace-icon fa fa-caret-down'});
				$('#spinner3').ace_spinner({value:0,min:-100,max:100,step:10, on_sides: true, icon_up:'ace-icon fa fa-plus smaller-75', icon_down:'ace-icon fa fa-minus smaller-75', btn_up_class:'btn-success' , btn_down_class:'btn-danger'});
				//$('#spinner1').ace_spinner('disable').ace_spinner('value', 11);
				//or
				//$('#spinner1').closest('.ace-spinner').spinner('disable').spinner('enable').spinner('value', 11);//disable, enable or change value
				//$('#spinner1').closest('.ace-spinner').spinner('value', 0);//reset to 0
			
			
				//datepicker plugin
				//link
				$('.date-picker').datepicker({
					autoclose: true,
					todayHighlight: true
				})
				//show datepicker when clicking on the icon
				.next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
			
				//or change it into a date range picker
				$('.input-daterange').datepicker({autoclose:true});
			
			
				//to translate the daterange picker, please copy the "examples/daterange-fr.js" contents here before initialization
				$('input[name=date-range-picker]').daterangepicker({
					'applyClass' : 'btn-sm btn-success',
					'cancelClass' : 'btn-sm btn-default',
					locale: {
						applyLabel: 'Apply',
						cancelLabel: 'Cancel',
					}
				})
				.prev().on(ace.click_event, function(){
					$(this).next().focus();
				});
			
			
				$('#timepicker1').timepicker({
					minuteStep: 1,
					showSeconds: true,
					showMeridian: false
				}).next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
				
				$('#date-timepicker1').datetimepicker().next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
				
			
				$('#colorpicker1').colorpicker();
			
				$('#simple-colorpicker-1').ace_colorpicker();
				//$('#simple-colorpicker-1').ace_colorpicker('pick', 2);//select 2nd color
				//$('#simple-colorpicker-1').ace_colorpicker('pick', '#fbe983');//select #fbe983 color
				//var picker = $('#simple-colorpicker-1').data('ace_colorpicker')
				//picker.pick('red', true);//insert the color if it doesn't exist
			
			
				$(".knob").knob();
				
				
				var tag_input = $('#form-field-tags');
				try{
					tag_input.tag(
					  {
						placeholder:tag_input.attr('placeholder'),
						//enable typeahead by specifying the source array
						source: ace.vars['US_STATES'],//defined in ace.js >> ace.enable_search_ahead
						/**
						//or fetch data from database, fetch those that match "query"
						source: function(query, process) {
						  $.ajax({url: 'remote_source.php?q='+encodeURIComponent(query)})
						  .done(function(result_items){
							process(result_items);
						  });
						}
						*/
					  }
					)
			
					//programmatically add a new
					var $tag_obj = $('#form-field-tags').data('tag');
					$tag_obj.add('Programmatically Added');
				}
				catch(e) {
					//display a textarea for old IE, because it doesn't support this plugin or another one I tried!
					tag_input.after('<textarea id="'+tag_input.attr('id')+'" name="'+tag_input.attr('name')+'" rows="3">'+tag_input.val()+'</textarea>').remove();
					//$('#form-field-tags').autosize({append: "n"});
				}
				
				
				//////////
				
				//typeahead.js
				//example taken from plugin's page at: https://twitter.github.io/typeahead.js/examples/
				var substringMatcher = function(strs) {
					return function findMatches(q, cb) {
						var matches, substringRegex;
					 
						// an array that will be populated with substring matches
						matches = [];
					 
						// regex used to determine if a string contains the substring `q`
						substrRegex = new RegExp(q, 'i');
					 
						// iterate through the pool of strings and for any string that
						// contains the substring `q`, add it to the `matches` array
						$.each(strs, function(i, str) {
							if (substrRegex.test(str)) {
								// the typeahead jQuery plugin expects suggestions to a
								// JavaScript object, refer to typeahead docs for more info
								matches.push({ value: str });
							}
						});
			
						cb(matches);
					}
				 }
			
				 $('input.typeahead').typeahead({
					hint: true,
					highlight: true,
					minLength: 1
				 }, {
					name: 'states',
					displayKey: 'value',
					source: substringMatcher(ace.vars['US_STATES'])
				 });
					
			
			
				/////////
				$('#modal-form input[type=file]').ace_file_input({
					style:'well',
					btn_choose:'Drop files here or click to choose',
					btn_change:null,
					no_icon:'ace-icon fa fa-cloud-upload',
					droppable:true,
					thumbnail:'large'
				})
				
				//chosen plugin inside a modal will have a zero width because the select element is originally hidden
				//and its width cannot be determined.
				//so we set the width after modal is show
				$('#modal-form').on('shown.bs.modal', function () {
					$(this).find('.chosen-container').each(function(){
						$(this).find('a:first-child').css('width' , '210px');
						$(this).find('.chosen-drop').css('width' , '210px');
						$(this).find('.chosen-search input').css('width' , '200px');
					});
				})
				/**
				//or you can activate the chosen plugin after modal is shown
				//this way select element becomes visible with dimensions and chosen cooperative as expected
				$('#modal-form').on('shown', function () {
					$(this).find('.modal-chosen').chosen();
				})
				*/
			
			});
		</script> 

<!-- the following scripts are used in demo only for onpage help and you don't need them -->
<link rel="stylesheet" href="/Public/df_htadmin/css/ace.onpage-help.css" />
<link rel="stylesheet" href="/Public/df_htadmin/js/themes/sunburst.css" />
<script type="text/javascript"> ace.vars['base'] = '..'; </script> 
<script src="/Public/df_htadmin/js/ace/elements.onpage-help.js"></script> 
<script src="/Public/df_htadmin/js/ace/ace.onpage-help.js"></script> 
<script src="/Public/df_htadmin/js/rainbow.js"></script> 
<script src="/Public/df_htadmin/js/language/generic.js"></script> 
<script src="/Public/df_htadmin/js/language/html.js"></script> 
<script src="/Public/df_htadmin/js/language/css.js"></script> 
<script src="/Public/df_htadmin/js/language/javascript.js"></script>
</body></html>