<?php
/**
 * 基础控制器类
 */
class Controller {
	//保存smarty模板对象
	protected $smarty;

	/**
	 * 构造方法
	 */
	public function __construct(){
		$this->initCode();
		$this->initSmarty();
	}
	/**
	 * 设置编码
	 */
	protected function initCode(){
		header('Content-type:text/html;charset=utf-8');
	}
	/**
	 * 初始化smarty模板
	 */
	protected function initSmarty(){
		$this->smarty = new Smarty();
		//设置默认模板目录（我们设置为当前分组下的View中对应控制器的子目录）
		$this->smarty->setTemplateDir(CURRENT_VIEW_DIR . CONTROLLER . '/');
		//设置模板编译文件保存位置 (我们设置在当前分组下的View_c对应控制器的子目录中)
		$this->smarty->setCompileDir(CURRENT_MODULE_DIR . 'View_c/' . CONTROLLER . '/');
	}
	/**
	 * 封装smarty中assign方法
	 */
	protected function assign($name, $value){
		$this->smarty->assign($name, $value);
	}
	/**
	 * 封装smarty中display方法
	 */
	protected function display(){
		$this->smarty->display(ACTION . '.html');
	}

	/**
	 * 封装跳转方法
	 */
	protected function jump($url, $info=null, $time=3){
		//判断是立即跳转还是刷新跳转
		if(is_null($info)){
			//立即跳转
			header('location:' . $url);
			die;
		}else{
			//刷新跳转
			//利用定界符输出模板
			echo <<<TIAOZHUAN
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<!--[if IE 8]><style>.ie8 .alert-circle,.ie8 .alert-footer{display:none}.ie8 .alert-box{padding-top:75px}.ie8 .alert-sec-text{top:45px}</style><![endif]-->
<title>等待跳转</title>
<style>
body {
	margin: 0;
	padding: 0;
	background: #E6EAEB;
	font-family: Arial, '微软雅黑', '宋体', sans-serif
}
.alert-box {
	display: none;
	position: relative;
	margin: 96px auto 0;
	padding: 180px 85px 22px;
	border-radius: 10px 10px 0 0;
	background: #FFF;
	box-shadow: 5px 9px 17px rgba(102,102,102,0.75);
	width: 286px;
	color: #FFF;
	text-align: center
}
.alert-box p {
	margin: 0
}
.alert-circle {
	position: absolute;
	top: -50px;
	left: 111px
}
.alert-sec-circle {
	stroke-dashoffset: 0;
	stroke-dasharray: 735;
	transition: stroke-dashoffset 1s linear
}
.alert-sec-text {
	position: absolute;
	top: 11px;
	left: 190px;
	width: 76px;
	color: #000;
	font-size: 68px
}
.alert-sec-unit {
	font-size: 34px
}
.alert-body {
	margin: 35px 0
}
.alert-head {
	color: #242424;
	font-size: 28px
}
.alert-concent {
	margin: 25px 0 14px;
	color: #7B7B7B;
	font-size: 18px
}
.alert-concent p {
	line-height: 27px
}
.alert-btn {
	display: block;
	border-radius: 10px;
	background-color: #4AB0F7;
	height: 55px;
	line-height: 55px;
	width: 286px;
	color: #FFF;
	font-size: 20px;
	text-decoration: none;
	letter-spacing: 2px
}
.alert-btn:hover {
	background-color: #6BC2FF
}
.alert-footer {
	margin: 0 auto;
	height: 42px;
	width: 120px
}
.alert-footer-icon {
	float: left
}
.alert-footer-text {
	float: left;
	border-left: 2px solid #EEE;
	padding: 3px 0 0 5px;
	height: 40px;
	color: #0B85CC;
	font-size: 12px;
	text-align: left
}
.alert-footer-text p {
	color: #7A7A7A;
	font-size: 22px;
	line-height: 18px
}
</style>
</head>
<body class="ie8">
<div id="js-alert-box" class="alert-box"> <svg class="alert-circle" width="234" height="234">
  <circle cx="117" cy="117" r="108" fill="#FFF" stroke="#43AEFA" stroke-width="17"></circle>
  <circle id="js-sec-circle" class="alert-sec-circle" cx="117" cy="117" r="108" fill="transparent" stroke="#F4F1F1" stroke-width="18" transform="rotate(-90 117 117)"></circle>
  <text class="alert-sec-unit" x="82" y="172" fill="#BDBDBD">secs</text>
  </svg>
  <div id="js-sec-text" class="alert-sec-text"></div>
  <div class="alert-body">
    <div id="js-alert-head" class="alert-head"></div>
    <div class="alert-concent">
		<p></p>
    </div>
    <a id="js-alert-btn" class="alert-btn" href="$url">立即跳转</a> </div>
</div>
<script>
function alertSet(e) {
    document.getElementById("js-alert-box").style.display = "block",
    document.getElementById("js-alert-head").innerHTML = e;
    var t = $time,
    n = document.getElementById("js-sec-circle");
    document.getElementById("js-sec-text").innerHTML = t,
    setInterval(function() {
        if (0 == t){
			location.href="$url";
		}else {
            t -= 1,
            document.getElementById("js-sec-text").innerHTML = t;
            var e = Math.round(t / 10 * 735);
            n.style.strokeDashoffset = e - 735
        }
    },
    970);
}
</script>
 <center>
</center>
</body>
</html>
<script>alertSet('$info');</script>
TIAOZHUAN;
			die;
		}	
	}
}