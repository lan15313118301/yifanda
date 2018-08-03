<?php

// +----------------------------------------------------------------------
// | TOPThink [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2010 http://www.thinkidc.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 龙行天下 <ycgpp@126.com> <http://www.thinkidc.cn>
// +----------------------------------------------------------------------
// | LogoQRmake.class.php 2013-02-25
// +----------------------------------------------------------------------

class LogoQRmake {

	protected $api = 'http://chart.googleapis.com/';
	protected $data = '';
	protected $logo = null;
	protected $size = null;
	protected $QR = null;

	/**
	 * name   : 构造函数
	 */
	public function __construct($data, $logo, $size = '200x200') {
		$this->data = $data;
		$this->logo = $logo;
		$this->size = $size;
	}
	/**
	 * name   : 获得google的API
	 */
	protected function getpng() {
		return $this->api = $this->api . 'chart?chs=' . $this->size . '&cht=qr&chl=' . urlencode($this->data) . '&chld=L|1&choe=UTF-8';
	}
	/**
	 * name    : 输出二维码图片
	 * author  : ycgpp@126.com
	 */
	public function images() {
		$this->QR = imagecreatefrompng($this->getpng());
		if ($this->logo !== FALSE) {
			$this->logo = imagecreatefromstring(file_get_contents($this->logo));

			$QR_width = imagesx($this->QR);
			$QR_height = imagesy($this->QR);

			$logo_width = imagesx($this->logo);
			$logo_height = imagesy($this->logo);

			$logo_qr_width = $QR_width / 2;
			$scale = $logo_width / $logo_qr_width;
			$logo_qr_height = $logo_height / $scale;
			$from_width = ($QR_width - $logo_qr_width) / 2;

			imagecopyresampled($this->QR, $this->logo, $from_width, $from_width, 0, 0, $logo_qr_width, $logo_qr_height, $logo_width, $logo_height);
		}
		header('Content-type: image/png');
		imagepng($this->QR);
		imagedestroy($this->QR);
	}

}