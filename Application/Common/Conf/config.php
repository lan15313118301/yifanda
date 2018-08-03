<?php
function is_mobile(){//判断手机电脑
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    $mobile_agents = Array("240x320","acer","acoon","acs-","abacho","ahong","airness","alcatel","amoi","android","anywhereyougo.com","applewebkit/525","applewebkit/532","asus","audio","au-mic","avantogo","becker","benq","bilbo","bird","blackberry","blazer","bleu","cdm-","compal","coolpad","danger","dbtel","dopod","elaine","eric","etouch","fly ","fly_","fly-","go.web","goodaccess","gradiente","grundig","haier","hedy","hitachi","htc","huawei","hutchison","inno","ipad","ipaq","ipod","jbrowser","kddi","kgt","kwc","lenovo","lg ","lg2","lg3","lg4","lg5","lg7","lg8","lg9","lg-","lge-","lge9","longcos","maemo","mercator","meridian","micromax","midp","mini","mitsu","mmm","mmp","mobi","mot-","moto","nec-","netfront","newgen","nexian","nf-browser","nintendo","nitro","nokia","nook","novarra","obigo","palm","panasonic","pantech","philips","phone","pg-","playstation","pocket","pt-","qc-","qtek","rover","sagem","sama","samu","sanyo","samsung","sch-","scooter","sec-","sendo","sgh-","sharp","siemens","sie-","softbank","sony","spice","sprint","spv","symbian","tablet","talkabout","tcl-","teleca","telit","tianyu","tim-","toshiba","tsm","up.browser","utec","utstar","verykool","virgin","vk-","voda","voxtel","vx","wap","wellco","wig browser","wii","windows ce","wireless","xda","xde","zte");
    $is_mobile = false;
    foreach ($mobile_agents as $device) {
        if (stristr($user_agent, $device)) {
            $is_mobile = true;
            break;
        }
    }
    return $is_mobile;
 }
 
 if(is_mobile()){ //判断手机电脑
    $is = "Mobile";
 }else{
    $is = "View";          
 }
return array(
	//'配置项'=>'配置值'
	'MODULE_ALLOW_LIST'         =>  array('Home','Mobile','En','Enmobile','Dr_htadmin'), // 配置你原来的分组列表
    'URL_MODEL'                 =>  2, // 如果你的环境不支持PATHINFO 请设置为3
    'DB_TYPE'                   =>  'mysql',
    'DB_HOST'                   =>  'localhost',
    'DB_NAME'                   =>  'xunda',
    'DB_USER'                   =>  'root',
    'DB_PWD'                    =>  'root',
    'DB_PORT'                   =>  '3306',
    'DB_PREFIX'                 =>  'dr_',
    'APP_AUTOLOAD_PATH'         =>  '@.TagLib',
    'DEFAULT_GROUP'             =>  'Home',
    'SHOW_PAGE_TRACE'           =>  0,//显示调试信息

	'DEFAULT_V_LAYER' => $is, // 设置默认的视图层名称
	
    //我的定义
    '__CSS__'                   =>  '/Public/home/css/',

    'AUTH_CONFIG' => array(  
        'AUTH_ON' => true, //认证开关  
        'AUTH_TYPE' => 1, // 认证方式，1为时时认证；2为登录认证。  
        'AUTH_GROUP' => 'think_auth_group', //用户组数据表名  
        'AUTH_GROUP_ACCESS' => 'think_auth_group_access', //用户组明细表  
        'AUTH_RULE' => 'think_auth_rule', //权限规则表  
        'AUTH_USER' => 'think_user'//用户信息表  
    ),
    'TMPL_L_DELIM'    =>    '{',
    'TMPL_R_DELIM'    =>    '}',
    'TAGLIB_BEGIN'    =>    '<!--[',
    'TAGLIB_END'      =>    ']-->',
	
	
	'MAIL_HOST' =>'smtp.qq.com',
	'MAIL_SMTPAUTH' =>TRUE, //启用smtp认证
	'MAIL_USERNAME' =>'982920200@qq.com',
	'MAIL_FROM' =>'982920200@qq.com',
	'MAIL_FROMNAME' =>'JH1912',
	'MAIL_PASSWORD' =>'313871asd',
	'MAIL_CHARSET' =>'utf-8',
	'MAIL_ISHTML' =>TRUE, // 是否HTML格式邮件
	
	
	'QQ_AUTH'                 => array(
		'APP_ID'         => '101169694', //你的QQ互联APPID
		'APP_KEY'   => 'd2c22607906b49da3dc5a88221c42c6f',
		'SCOPE'          => '',
		'CALLBACK'       => 'http://www.jh1912.com/oauth/callback?type=qq',
	),
	
	'SINA_AUTH'                 => array(
		'APP_ID'         => '1957661569', //你的QQ互联APPID
		'APP_KEY'  		 => '15ba23d636abff3dd6086d7b34173817',
		'SCOPE'          => '',
		'CALLBACK'       => 'http://www.jh1912.com/oauth/callback?type=sina',
	),
 
    
);


