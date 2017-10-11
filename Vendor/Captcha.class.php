<?php
/**
 * 验证码工具栏
 */
class Captcha {
	private $width;		//验证码宽
	private $height;	//验证码高
	private $pixelnum;	//干扰点密度
	private $linenum;	//干扰线数量
	private $stringnum;	//验证码字符个数
	private $string;	//要写入的随机字符串

	/**
	 * 构造方法
	 */
	public function __construct(){
		$this->initParams();	//初始化相关属性
	}
	/**
	 * 初始化属性
	 */
	private function initParams(){
		$this->width = $GLOBALS['config']['Captcha']['width'];
		$this->height = $GLOBALS['config']['Captcha']['height'];
		$this->pixelnum = $GLOBALS['config']['Captcha']['pixelnum'];
		$this->linenum = $GLOBALS['config']['Captcha']['linenum'];
		$this->stringnum = $GLOBALS['config']['Captcha']['stringnum'];
	}

	/**
	 * 得到随机的验证码字符串
	 * @return [type] [description]
	 */
	private function getRandString(){
		//array_merge将这3种数组合并成一个数组
		$arr = array_merge(range(0,9), range('a','z'), range('A','Z'));
		//将数组里的项打乱
		shuffle($arr);
		//从数组中随机选择[指定数量]的元素的下标数组(也是个数组·)
		$rand_keys = array_rand($arr, $this->stringnum);
		$str = '';
		foreach ($rand_keys as $value) {
			$str .= $arr[$value];
		}
		//保存到session中
		@session_start();
		$_SESSION['captcha'] = $str;
		return $str;
	}
}
