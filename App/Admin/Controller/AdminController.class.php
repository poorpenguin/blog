<?php
class AdminController extends BaseController{
	/**
	 * 显示登陆界面
	 */
	public function login(){
		
		$this->display();
	}
	/**
	 * 验证登陆信息
	 */
	public function check(){
		$admin_name = $this->filterChar($_POST['admin_name']);
		$admin_pass = $this->filterChar($_POST['admin_pass']);
		$admin_captcha = trim($_POST['admin_captcha']);
		//判断验证码
		$captcha = Factory::M('Captcha');
		if(!$captcha->checkCaptcha($admin_captcha)){
			$this->jump('index.php?m=Admin&c=Admin&a=login','验证码错误');
		}

		//实例化bg_admin模型 
		$admin_mobj = Factory::M('AdminModel');
		$res = $admin_mobj->check($admin_name, $admin_pass);
		if(!empty($res)){
			//如果合法，将用户信息存入session,并跳转到后台首页
			//@session_start();	//开启session机制
			$_SESSION['pp_blog_admininfo'] = $res;
			//更新用户登录信息
			$admin_mobj->updateUserInfo($res['admin_id']);
			//立即跳转
			$this->jump('index.php?m=Admin&c=Index&a=index');
		}
		else{
			$this->jump('index.php?m=Admin&c=Admin&a=login', '用户名或密码错误,返回登陆页!');
		}
	}
	/**
	 * 退出登录
	 */
	public function loginOut(){
		//删除相关会话数据
		unset($_SESSION['pp_blog_admininfo']);
		//删除会话数据区
		session_destroy();
		header('location:index.php');
	}
	/**
	 * 生成验证码
	 */
	public function captcha(){
		$captcha = Factory::M('Captcha');
		$captcha->setWidth(80);
		$captcha->setHeight(30);
		$captcha->produce();
	}
}
