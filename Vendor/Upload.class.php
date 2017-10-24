<?php
/**
 * 文件上传类
 */
class Upload {
	//定义公开的静态方法用来记录错误信息
	public static $error;
	/**
	 * 实现文件上传
	 * @param array $file 上传文件的信息一维数组，5个元素
	 * @param array $allow 允许上传文件的类型一维数组
	 * @param string $path 文件上传的目录
	 * @param int $maxsize 允许上传的文件大小，默认1M
	 * @return mixed 上传失败返回false|上传成功返回新的文件名$newname
	 */		
	public upload($file, $allow, $path, $maxsize=1048576){
		//1.判断系统错误
		switch ($file['error']) {
			case 1 :
				self::$error = '上传失败！超出了文件限制的大小！';
				return false;
			case 2 :
				self::$error = '上传失败！超出了浏览器规定的文件大小！';
				return false;
			case 3 :
				self::$error = '上传失败！上传文件不完整！';
				return false;
			case 4 :
				self::$error = '上传失败！请先选择要上传的文件！';
				return false;
			case 6 :
			case 7 :
				self::$error = '对不起服务器繁忙 ，请稍后再试！';
				return false;
		}
		//2.判断业务逻辑错误
		if($file['size'] > $maxsize){
			self::$error = '上传失败，超出了文件限制的大小！';
			return false;
		}
		if(!in_array($file['type'], $allow)){
			self::$error = '上传的文件类型不正确，允许的文件类型有' . implode(',', $allow);
			return false;
		}
		//3.移动临时文件
		//先得到该文件的新名字
		$newname = $this->randName();

	}
}