<?php
/**
 * 分组下的基础类
 */
class BaseController extends Controller{
	/**
	 * 构造方法
	 */
	public function __construct(){
		parent::__construct();
		$this->checkLogin();
	}
	/**
	 * 判断用户是否登录防止用户翻墙
	 */
	protected function checkLogin(){
		//列出当前分组下不需要验证登陆的控制器和动作
		$no_login = array(
			//控制器名 => 该控制器下不需要验证的动作列表
			'Admin' => array('login', 'check', 'captcha'),
			'Index' => array('test'),
		);
		if(isset($no_login[CONTROLLER]) && in_array(ACTION, $no_login[CONTROLLER])){
			return ;//结束checkLogin方法
		}
		@session_start();
		if(!isset($_SESSION['pp_blog_admininfo'])){
			$this->jump('index.php',':(请先登录');
		}

	}
}