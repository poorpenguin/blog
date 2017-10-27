<?php
/**
 * 文件上传类
 */
class Upload {
	//定义公开的静态方法用来记录错误信息
	private $error;
	/**
	 * 实现文件上传
	 * @param array $file 上传文件的信息一维数组，5个元素
	 * @param array $allow 允许上传文件的类型一维数组
	 * @param string $path 文件上传的目录
	 * @param int $maxsize 允许上传的文件大小，默认1M
	 * @return mixed 上传失败返回false|上传成功返回新的文件名$newname
	 */		
	public function uploadFile($file, $allow, $path, $maxsize=1048576){
		//1.判断系统错误
		switch ($file['error']) {
			case 1 :
				$this->$error = '上传失败！超出了文件限制的大小！';
				return false;
			case 2 :
				$this->$error = '上传失败！超出了浏览器规定的文件大小！';
				return false;
			case 3 :
				$this->$error = '上传失败！上传文件不完整！';
				return false;
			case 4 :
				$this->$error = '上传失败！请先选择要上传的文件！';
				return false;
			case 6 :
			case 7 :
				$this->$error = '对不起服务器繁忙 ，请稍后再试！';
				return false;
		}
		//2.判断业务逻辑错误
		if($file['size'] > $maxsize){
			$this->$error = '上传失败，超出了文件限制的大小！';
			return false;
		}
		if(!in_array($file['type'], $allow)){
			$this->$error = '上传的文件类型不正确，允许的文件类型有' . implode(',', $allow);
			return false;
		}
		//3.移动临时文件
		//先得到该文件的新名字
		$newname = $this->randName($file['name']);
		//目标地址
		$target = $path . '/' . $newname;
		//移动文件
		$res = move_uploaded_file($file['tmp_name'], $target);
		if($res){
			//成功时返回上传文件的路径
			return $target;
		}else{
			$this->$error = '发生位置错误，上传失败！';
			return false;
		}

	}
	/**
	 * 生成一个随机名字的方法，防止上传文件重复
	 * @param  string $filename 原始文件名
	 * @return string            新文件名
	 */
	private function randName($filename){
		//1.生成文件的时间部分
		date_default_timezone_set('PRC');
		$newname = date('Ymd-His-');
		//2.加上随机产生的6位数字防止重复
		$str = '1234567890';
		for($i=0;$i<6;++$i){
			$newname .= $str[mt_rand(0,strlen($str)-1)];
		}
		//3.加上原文件的后缀
		$newname .= strrchr($filename, '.');
		return $newname;
	}
	/**
	 * 获取错误信息
	 */
	public function getError(){
		return $this->error;
	}
}