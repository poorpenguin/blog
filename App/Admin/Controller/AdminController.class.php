<?php
class AdminController extends Controller{
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
		$admin_name = strip_tags(trim($_POST['admin_name']));
		$admin_pass = strip_tags(trim($_POST['admin_pass']));
		//实例化bg_admin模型 
		$admin_mobj = Factory::M('AdminModel');
		$res = $admin_mobj->check($admin_name, $admin_pass);
		if(!empty($res)){
			//如果合法，将用户信息存入session,并跳转到后台首页
			@session_start();	//开启session机制
			$_SESSION['pp_blog_admininfo'] = $res[0];
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
		$_SESSION = array();
		header('location:index.php?');
	}
}
