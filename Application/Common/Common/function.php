<?php

//产品名称
function furnituretype($id){
	if($id > 0){
		$furnituretype = M("furnituretype");
		$data = $furnituretype -> where("id={$id}") -> find();
		return $data["name"];
	}
}

function storytype($id){
	if($id > 0){
		$storytype = M("storytype");
		$data = $storytype -> where("id={$id}") -> find();
		return $data["name"];
	}
}

//产品分类
function produtc_nav(){
	$productclass = M("Productclass");
	$list = $productclass -> where("class=0") -> select();

	$content = "";
	foreach($list as $key => $val) {
		$class = $list[$key]["id"];
		$class2list = $productclass -> where("class={$class}") -> select();
		$content .= "<ul>";
		$content .= "<li class='tit'>".$list[$key]["name"]."</li>";
		foreach($class2list as $key => $val) {
			$class = $class2list[$key]["id"];
			$class2 = $productclass -> where("class={$class}") -> select();
			$content .= "<li><a href='".U("product/lists?class=".$class2list[$key]["id"]."")."'>• ".$class2list[$key]["name"]."</a></li>";
		}
		$content .= "</ul>";
	}

	return $content;
} 

//发送邮件
function sendMail($to, $subject, $content) {
 //echo C('MAIL_HOST');
 Vendor('PHPMailer.PHPMailerAutoload');
 $mail = new PHPMailer(); //实例化
 $mail->IsSMTP(); // 启用SMTP
 $mail->Host=C('MAIL_HOST'); //smtp服务器的名称（这里以126邮箱为例）
 $mail->SMTPAuth = C('MAIL_SMTPAUTH'); //启用smtp认证
 $mail->Username = C('MAIL_USERNAME'); //你的邮箱名
 $mail->Password = C('MAIL_PASSWORD') ; //邮箱密码
 $mail->From = C('MAIL_FROM'); //发件人地址（也就是你的邮箱地址）
 $mail->FromName = C('MAIL_FROMNAME'); //发件人姓名
 $mail->AddAddress($to,"name");
 $mail->WordWrap = 50; //设置每行字符长度
 $mail->IsHTML(C('MAIL_ISHTML')); // 是否HTML格式邮件
 $mail->CharSet=C('MAIL_CHARSET'); //设置邮件编码
 $mail->Subject =$subject; //邮件主题
 $mail->Body = $content; //邮件内容
 $mail->AltBody = "This is the body in plain text for non-HTML mail clients"; //邮件正文不支持HTML的备用显示
 if($mail->Send()) {
 return true;
 } else {
 return false;
 }
}

//截取字符串
function cut_str($string, $sublen, $start = 0, $code = 'UTF-8')    
   {    
		// $sublen=0;
		// $start =100;
      if($code == 'UTF-8')    
      {    
          $pa = "/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|\xe0[\xa0-\xbf][\x80-\xbf]|[\xe1-\xef][\x80-\xbf][\x80-\xbf]|\xf0[\x90-\xbf][\x80-\xbf][\x80-\xbf]|[\xf1-\xf7][\x80-\xbf][\x80-\xbf][\x80-\xbf]/";    
          preg_match_all($pa, $string, $t_string);    
 
          if(count($t_string[0]) - $start > $sublen) return join('', array_slice($t_string[0], $start, $sublen))."...";    
          return join('', array_slice($t_string[0], $start, $sublen));    
      }    
      else    
      {    
          $start = $start*2;    
          $sublen = $sublen*2;    
          $strlen = strlen($string);    
          $tmpstr = '';    
 
         for($i=0; $i<$strlen; $i++)    
          {    
              if($i>=$start && $i<($start+$sublen))    
              {    
                  if(ord(substr($string, $i, 1))>129)    
                  {    
                      $tmpstr.= substr($string, $i, 2);    
                  }    
                  else    
                  {    
                      $tmpstr.= substr($string, $i, 1);    
                  }    
              }    
              if(ord(substr($string, $i, 1))>129) $i++;    
          }    
          if(strlen($tmpstr)<$strlen ) $tmpstr.= "...";    
          return $tmpstr;    
      }    
   }
   
   
   
	 
	 
	 function num_format($num){
		if(!is_numeric($num)){
			return false;
		}
		$rvalue='';
		$num = explode('.',$num);//把整数和小数分开
		$rl = !isset($num['1']) ? '' : $num['1'];//小数部分的值
		$j = strlen($num[0]) % 3;//整数有多少位
		$sl = substr($num[0], 0, $j);//前面不满三位的数取出来
		$sr = substr($num[0], $j);//后面的满三位的数取出来
		$i = 0;
		while($i <= strlen($sr)){
			$rvalue = $rvalue.','.substr($sr, $i, 3);//三位三位取出再合并，按逗号隔开
			$i = $i + 3;
		}
		$rvalue = $sl.$rvalue;
		$rvalue = substr($rvalue,0,strlen($rvalue)-1);//去掉最后一个逗号
		$rvalue = explode(',',$rvalue);//分解成数组
		if($rvalue[0]==0){
			array_shift($rvalue);//如果第一个元素为0，删除第一个元素
		}
		$rv = $rvalue[0];//前面不满三位的数
		for($i = 1; $i < count($rvalue); $i++){
			$rv = $rv.','.$rvalue[$i];
		}
		if(!empty($rl)){
			$rvalue = $rv.'.'.$rl;//小数不为空，整数和小数合并
		}else{
			$rvalue = $rv;//小数为空，只有整数
		}
		return $rvalue;
	}