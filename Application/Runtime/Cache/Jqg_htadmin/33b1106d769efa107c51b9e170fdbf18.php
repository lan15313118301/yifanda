<?php if (!defined('THINK_PATH')) exit(); if(C('LAYOUT_ON')) { echo ''; } ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>跳转提示</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Login Page - Ace Admin</title>

		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<link rel="stylesheet" href="/Public/jqg_htadmin/css/bootstrap.min.css" />
		<link rel="stylesheet" href="/Public/jqg_htadmin/css/font-awesome.min.css" />
		<link rel="stylesheet" href="/Public/jqg_htadmin/css/ace-fonts.css" />
		<link rel="stylesheet" href="/Public/jqg_htadmin/css/ace.min.css" />
		<!--[if lte IE 9]>
			<link rel="stylesheet" href="/Public/jqg_htadmin/css/ace-part2.min.css" />
		<![endif]-->
		<link rel="stylesheet" href="/Public/jqg_htadmin/css/ace-rtl.min.css" />
		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="/Public/jqg_htadmin/css/ace-ie.min.css" />
		<![endif]-->
		<link rel="stylesheet" href="/Public/jqg_htadmin/css/ace.onpage-help.css" />
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="/Public/jqg_htadmin/js/html5shiv.js"></script>
		<script src="/Public/jqg_htadmin/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="login-layout">
		
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							

							<div class="space-6"></div>

							<div class="position-relative" style="margin-top:150px; font-size:18px;">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
<div class="system-message">
<present name="message">
<p class="success"><?php echo($message); ?></p>
<else/>
<p class="error"><?php echo($error); ?></p>
</present>
<p class="detail"></p>
<p class="jump">
页面自动 <a id="href" href="<?php echo($jumpUrl); ?>">跳转</a> 等待时间： <b id="wait"><?php echo($waitSecond); ?></b>
</p>
</div>
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<script type="text/javascript">
(function(){
var wait = document.getElementById('wait'),href = document.getElementById('href').href;
var interval = setInterval(function(){
	var time = --wait.innerHTML;
	if(time <= 0) {
		location.href = href;
		clearInterval(interval);
	};
}, 1000);
})();
</script>
</body>
</html>