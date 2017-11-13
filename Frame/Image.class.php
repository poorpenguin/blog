<?php
class Image {
	//记录错误信息
	public static $error;
	/**
	 * 缩略图制作
	 * @param  int  	$max_w    缩略图的最大宽度
	 * @param  int  	$max_h    缩略图的做大高度
	 * @param  string  	$src_file 原图的路径+图片名称
	 * @param  string 	$path     缩略图存放路径
	 * @param  int 		$red      红色
	 * @param  int 		$green    绿色
	 * @param  int 		$blue     蓝色
	 * @return bool|string  false|$thumb(缩略图名+路径)
	 */
	public function makeThumb($max_w,$max_h,$src_file,$path,$red=255,$green=255,$blue=255){
		//1.判断$src_file的合法性
		//1.1判断$src_file是否存在
		if(!file_exists($src_file)){
			self::$error = '原图不存在!';
			return false;
		}
		//1.2判断$src_file是否是图片
		if(!getimagesize($src_file)){
			self::$error = '图像格式不正确';
			return false;
		}
		//2.创建原图画布
		//2.1判断图片格式
		$src_info = getimagesize($src_file);
		switch ($src_info[2]) {
			case 1: $type = 'gif';break;
			case 2: $type = 'jpeg';break;
			case 3: $type = 'png';break;
		}
		//2.2使用可变函数创建原图画布
		$create_name = 'imagecreatefrom' . $type;
		$src_img = $create_name($src_file);//原图画布
		//3.创建缩略图画布
		$dst_img = imagecreatetruecolor($max_w,$max_h);
		$bgColor = imagecolorallocate($dst_img, $red, $green, $blue);
		imagefill($dst_img, 0, 0, $bgColor);
		//4.获取原图的信息
		$src_w = $src_info[0];
		$src_h = $src_info[1];
		//5.采集、拷贝
		if(imagecopyresampled($dst_img, $src_img, 0, 0, 0, 0, $max_w, $max_h, $src_w, $src_h)){
			//采样成功
			//5.1得到原图名称(不带路径)
			$filename = basename($src_file);
			//5.2拼凑出缩略图名称
			$thumb = 'thumb_' . $filename;
			//5.3保存图片
			$save_name = 'image' . $type;
			$save_name($dst_img,$path .'/'. $thumb);
			//5.4销毁画布
			imagedestroy($dst_img);
			imagedestroy($src_img);
			//返回缩略图名称
			return $thumb;
		}
		else{
			//采样失败
			imagedestroy($dst_img);
			imagedestroy($src_img);
			self::$error = '发生未知错误，缩略图生成失败！';
			return false;
		}
	}
}