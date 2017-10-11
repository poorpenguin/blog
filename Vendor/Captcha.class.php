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
	/**
	 * 生产验证码
	 */
	public function generate(){
		//1.创建画布
		$img = imagecreatetruecolor($this->width, $this->height);
		//2.填充背景
			//2.1 创建背景颜色
		$backcolor = imagecolorallocate($img, mt_rand(200,255), mt_rand(150,255), mt_rand(200,255));
			//2.2 填充背景颜色
		imagefill($img, 0, 0, $backcolor);
		//3.得到随机验证码字符串
		$this->string = $this->getRandString();
		//4.验证码字符串写到图片上
			//4.1计算字符间隔
		$span = ceil($this->width/($this->stringnum + 1)); 
			//4.2循环写入单个字符
		for($i = 0; $i < $this->stringnum ; ++$i){
				//4.2.1设置字符的颜色
				$stringcolor = imagecolorallocate($img, mt_rand(0,255), mt_rand(0,100), mt_rand(0,80));
				//4.2.2单个字符写入到图片对应位置上
				imagestring($img, 5, ($i+1)*$span, ($this->height/2)-6, $this->string[$i], $stringcolor);
		}
		// 5, 添加干扰线
		for($i=1;$i<=$this->linenum;$i++) {
			$linecolor = imagecolorallocate($img, mt_rand(0,150), mt_rand(30,250), mt_rand(200,255));
			$x1 = mt_rand(0, $this->width - 1);
			$y1 = mt_rand(0, $this->height - 1);
			$x2 = mt_rand(0, $this->width - 1);
			$y2 = mt_rand(0, $this->height - 1);
			imageline($img, $x1, $y1, $x2, $y2, $linecolor);
		}
		// 6, 添加干扰点
		for($i=1;$i<=$this->width*$this->height*$this->pixelnum;$i++) {
			$pixelcolor = imagecolorallocate($img, mt_rand(100,150), mt_rand(0,120), mt_rand(0,255));
			imagesetpixel($img, mt_rand(0,$this->width-1),mt_rand(0,$this->height-1), $pixelcolor);
		}
		// 7, 输出图片
		header("Content-type:image/png");
		ob_clean();// 清理数据缓冲区
		imagepng($img);
		// 8, 销毁图片
		imagedestroy($img);
		
	}
}
