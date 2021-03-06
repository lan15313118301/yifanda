<?php
/**
 * 后台 分类 文章
 */
namespace Dr_htadmin\Controller;
use Think\Controller;
class UploadController extends Controller {
   
    //上传缩略图
    public function uploadphoto(){
		$time = date("Ymd",time());
            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize   =     1024000 ;// 设置附件上传大小
            // 设置附件上传类型
            $upload->exts      =     array(
                                            'gif', 'jpg', 'jpeg', 'png', 'bmp',
                                            'swf', 'flv',
                                            'swf', 'flv', 'mp3', 'wav', 'wma', 'wmv', 'mid', 'avi', 'mpg', 'asf', 'rm', 'rmvb',
                                            'doc', 'docx', 'xls', 'xlsx', 'ppt', 'htm', 'html', 'txt', 'zip', 'rar', 'gz', 'bz2',
                                        );
            $upload->savePath  =     './'.$time.'/'; // 设置附件上传目录
            $upload->autoSub   =     FALSE; // 存本目录
            $upload->replace   =     TRUE; // 同名覆盖
            if( $_GET['type'] != "thumb" ){
                exit("非法操作");
            }
            $upload->saveName  =     time().'_'.mt_rand(1000,10000); // 文件名
            // 上传文件
            $info   =   $upload->upload();
            if(!$info) {
                // 上传错误提示错误信息
                $this->error($upload->getError());
            }else{
                // 上传成功
                header('Content-type: text/html; charset=UTF-8');
                echo json_encode(array('error' => 0, 'url' => "/Uploads/".$time."/".$info['imgFile']['savename']));
            }
        exit;
    }
	
	
	 //上传缩略图
    public function upload() {
		$time = date("Ymd",time());
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     1024000 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg', 'icon');// 设置附件上传类型
        $upload->savePath  =     './'.$time.'/'; // 设置附件上传目录
        $upload->autoSub   =     FALSE; // 存本目录
        $upload->replace   =     TRUE; // 同名覆盖
        if( $_GET['type'] != "thumb" ){
            exit("非法操作");
        }
        $upload->saveName  =     time().'_'.mt_rand(1000,10000); // 文件名
        // 上传文件
        $info   =   $upload->upload();
        if(!$info) {
            // 上传错误提示错误信息
            $this->error($upload->getError());
        }else{
            // 上传成功
            exit("/Uploads/".$time."/".$info['upload']['savename']);
        }
        exit;
    }
	
	 //图片上传
    public function uplaodfile(){
		$time = date("Ymd",time());
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     10240000000 ;// 设置附件上传大小
        $upload->exts      =     array('jpg','png','gif');// 设置附件上传类型
        $upload->savePath  =     './'.$time.'/'; // 设置附件上传目录
        $upload->autoSub   =     FALSE; // 存本目录
        $upload->replace   =     TRUE; // 同名覆盖
        $upload->saveName  =     time().'_'.mt_rand(1000,10000); // 文件名
        // 上传文件
			
        $info = $upload->upload();
		
		
        if(!$info) {
            // 上传错误提示错误信息
			// $this->error($upload->getError());
        }else{
            // 上传成功
            exit("/Uploads/".$time."/".$info['Filedata']['savename']);
        }
        exit;
    }
	
    //文件管理定位到站目录
    public function mannex(){
        
            $php_path = dirname(__FILE__) . '/../../';
            $php_url = dirname($_SERVER['PHP_SELF']) . '/';

            //根目录路径，可以指定绝对路径，比如 /var/www/attached/
            $root_path = $php_path . '../Uploads/'.'717'.'/';
            //根目录URL，可以指定绝对路径，比如 http://www.yoursite.com/attached/
            $root_url = $php_url . '../../../../Uploads/'.'717'.'/';
            //图片扩展名
            $ext_arr = array('gif', 'jpg', 'jpeg', 'png', 'bmp');

            //目录名 | 后加禁止指定类型 图片 FLASH 视频 文件
            $_GET['dir']='';
            $dir_name = empty($_GET['dir']) ? '' : trim($_GET['dir']);
            if (!in_array($dir_name, array('', 'image', 'flash', 'media', 'file'))) {
                    echo "Invalid Directory name.";
                    exit;
            }
            if ($dir_name !== '') {
                    $root_path .= $dir_name . "/";
                    $root_url .= $dir_name . "/";
                    if (!file_exists($root_path)) {
                            mkdir($root_path);
                    }
            }

            //根据path参数，设置各路径和URL
            if (empty($_GET['path'])) {
                    $current_path = realpath($root_path) . '/';
                    $current_url = $root_url;
                    $current_dir_path = '';
                    $moveup_dir_path = '';
            } else {
                    $current_path = realpath($root_path) . '/' . $_GET['path'];
                    $current_url = $root_url . $_GET['path'];
                    $current_dir_path = $_GET['path'];
                    $moveup_dir_path = preg_replace('/(.*?)[^\/]+\/$/', '$1', $current_dir_path);
            }
            //echo realpath($root_path);
            //排序形式，name or size or type
            $order = empty($_GET['order']) ? 'name' : strtolower($_GET['order']);

            //不允许使用..移动到上一级目录
            if (preg_match('/\.\./', $current_path)) {
                    echo 'Access is not allowed.';
                    exit;
            }
            //最后一个字符不是/
            if (!preg_match('/\/$/', $current_path)) {
                    echo 'Parameter is not valid.';
                    exit;
            }
            //目录不存在或不是目录
            if (!file_exists($current_path) || !is_dir($current_path)) {
                    echo 'Directory does not exist.';
                    exit;
            }

            //遍历目录取得文件信息
            $file_list = array();
            if ($handle = opendir($current_path)) {
                    $i = 0;
                    while (false !== ($filename = readdir($handle))) {
                            if ($filename{0} == '.') continue;
                            $file = $current_path . $filename;
                            if (is_dir($file)) {
                                    $file_list[$i]['is_dir'] = true; //是否文件夹
                                    $file_list[$i]['has_file'] = (count(scandir($file)) > 2); //文件夹是否包含文件
                                    $file_list[$i]['filesize'] = 0; //文件大小
                                    $file_list[$i]['is_photo'] = false; //是否图片
                                    $file_list[$i]['filetype'] = ''; //文件类别，用扩展名判断
                            } else {
                                    $file_list[$i]['is_dir'] = false;
                                    $file_list[$i]['has_file'] = false;
                                    $file_list[$i]['filesize'] = filesize($file);
                                    $file_list[$i]['dir_path'] = '';
                                    $file_ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                                    $file_list[$i]['is_photo'] = in_array($file_ext, $ext_arr);
                                    $file_list[$i]['filetype'] = $file_ext;
                            }
                            $file_list[$i]['filename'] = $filename; //文件名，包含扩展名
                            $file_list[$i]['datetime'] = date('Y-m-d H:i:s', filemtime($file)); //文件最后修改时间
                            $i++;
                    }
                    closedir($handle);
            }

            //排序
            function cmp_func($a, $b) {
                    global $order;
                    if ($a['is_dir'] && !$b['is_dir']) {
                            return -1;
                    } else if (!$a['is_dir'] && $b['is_dir']) {
                            return 1;
                    } else {
                            if ($order == 'size') {
                                    if ($a['filesize'] > $b['filesize']) {
                                            return 1;
                                    } else if ($a['filesize'] < $b['filesize']) {
                                            return -1;
                                    } else {
                                            return 0;
                                    }
                            } else if ($order == 'type') {
                                    return strcmp($a['filetype'], $b['filetype']);
                            } else {
                                    return strcmp($a['filename'], $b['filename']);
                            }
                    }
            }
            usort($file_list, 'cmp_func');

            $result = array();
            //相对于根目录的上一级目录
            $result['moveup_dir_path'] = $moveup_dir_path;
            //相对于根目录的当前目录
            $result['current_dir_path'] = $current_dir_path;
            //当前目录的URL
            $result['current_url'] = $current_url;
            //文件数
            $result['total_count'] = count($file_list);
            //文件列表数组
            $result['file_list'] = $file_list;

            //输出JSON字符串
            header('Content-type: application/json; charset=UTF-8');
            echo json_encode($result);
        exit();
    }
	
   
    //编辑缩略图
    public function editthumb(){
        $thumburl = str_replace('-', '/', str_replace('^', '.', $_GET['thumb']));
        $array['thumburl'] = $thumburl;
        $this->assign($array);
        $this->display();
        exit();
    }
    //保存编辑缩略图
    public function saveeditthumb(){
        $thumburl = '.' . str_replace('-', '/', str_replace('^', '.', $_POST['thumb']));
        
        $image = new \Think\Image();
        $image->open($thumburl);
        $width = $image->width(); // 返回图片的宽度
        $height = $image->height(); // 返回图片的高度
        $type = $image->type(); // 返回图片的类型
        $mime = $image->mime(); // 返回图片的mime类型
        $size = $image->size(); // 返回图片的尺寸数组 0 图片宽度 1 图片高度
        
        if( $_POST['thumb_zoom'] < 100 ){
            $image->thumb($width*$_POST['thumb_zoom']/100, $height*$_POST['thumb_zoom']/100);
        }
        if( $_POST['x1'] >= 0 && $_POST['y1'] >= 0 && $_POST['w'] >= 0 && $_POST['h'] >= 0 ){
            $image->crop($_POST['w'], $_POST['h'],$_POST['x1'],$_POST['y1']);
        }
//        $image->save('./Uploads/'.'717'.'/catalog/thumb/crop.jpg');
        unlink($thumburl);
        $image->save($thumburl);
        exit('ok');
    }
	
	//其他内容
	public function other(){
		$newstype = M("newstype");
		
		if($_REQUEST['action'] == 'edit'){
			echo $_REQUEST["guandian"];
			echo $_REQUEST["huati"];
			
			
			exit;
		}
		
		$infolist = $newstype ->select();
		$this->assign('infolist',$infolist);
		$this->assign('nav','other');
		$this->display();
	}
	
	
}