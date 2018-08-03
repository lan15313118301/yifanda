<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>UploadiFive Test</title>
<script src="/Public/uploadify/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="/Public/uploadify/jquery.uploadify.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="/Public/uploadify/uploadify.css">
<style type="text/css">
body {font: 13px Arial, Helvetica, Sans-serif;}
</style>
</head>
<body>
<form>
<div id="queue"></div>
<input id="file_upload" name="file_upload" type="file" multiple="true">
</form>
<script type="text/javascript">
        <?php $timestamp = time();?>
        $(function() {
                $('#file_upload').uploadify({
                        'formData': {
                'session_id':'$_SESSION[userid]',
                                'timestamp' : '<?php echo $timestamp;?>',
                                'token'     : '<?php echo md5('unique_salt' . $timestamp);?>'
                        },
                'onComplete':{
                    
                },
               'fileTypeExts':'*.wma;*.3gp;*.rm;*.rmvb;*.flv;*.wmv;*.mpg;*.avi',
               'buttonClass':'some_class',
               'fileExt':'*.wma;*.3gp;*.rm;*.rmvb;*.flv;*.wmv;*.mpg;*.avi',
               'buttonText': '上传视频',
               'width': '70',
               'height': '20',
                        'swf'      : '/Public/uploadify/uploadify.swf',
                        'uploader' : '/Public/uploadify/uploadify.php'
                });
        });
</script>
</body>
</html>