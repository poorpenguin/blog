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
			//
		}
		else{
			//如果不合法，提示错误，并返回登陆页
		}
	}
}
