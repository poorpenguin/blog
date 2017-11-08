<?php
class UserController extends BaseController{
	/**
	 * 登录页面
	 * @return mixed display
	 */
	public function login(){
		$this->display();
	}
	/**
	 * 注册
	 * @return mixed display
	 */
	public function register(){
		$userInfo = array();
		$user_name = $this->filterChar($_POST['user_name']);
		//用户名判断
		//1.1用户名是否为空
		if(empty($user_name)){
			$this->jump('index.php?m=Home&c=User&a=login',' 用户名不能为空',2);
		}
		//1.2用户名长度
		if(strlen($user_name)>20){
			$this->jump('index.php?m=Home&c=User&a=login','用户名超出长度',2);
		}
		//1.3判断用户名是否存在
		$user = Factory::M('UserModel');
		if($user->if_name_exists($user_name)){
			$this->jump('index.php?m=Home&c=User&a=login','用户名已经被注册',2);
		}
		//2.密码判断
		$user_pass1 = trim($_POST['user_pass1']);
		$user_pass2 = trim($_POST['user_pass2']);
		//2.1密码是否为空
		if(empty($user_pass1) || empty($user_pass2)){
			$this->jump('index.php?m=Home&c=User&a=login','密码不能为空',2);
		}
		//2.2两次密码是否一致
		if($user_pass1 !== $user_pass2){
			$this->jump('index.php?m=Home&c=User&a=login','两次密码不一致',2);
		}
		//注册信息入库
		$userInfo['user_name'] = $user_name;
		$userInfo['user_pass'] = md5($user_pass1);
		$userInfo['user_time'] = time();
		$res = $user->insertUserInfo($userInfo);
		if($res){
			$this->jump('index.php?m=Home&c=Index&a=index');
		}else{
			$this->jump('index.php?m=Home&c=User&a=login','发生位置错误，注册失败',2);
		}

	}
	/**
	 * 登录
	 * @return mixed display
	 */
	public function signin(){
		$userInfo = array();
		$user_name = $this->filterChar($_POST['user_name']);
		$user_pass = md5(trim($_POST['user_pass']));
		//1.验证是否为空
		if(empty($user_name) || empty($user_pass)){
			$this->jump('index.php?m=Home&c=User&a=login','用户名或密码不能为空',2);
		}
		//2.验证密码
		$userInfo['user_name'] = $user_name;
		$userInfo['user_pass'] = $user_pass;
		$user = Factory::M('UserModel');
		if($res = $user->checkUser($userInfo)){
			//将用户信息存储到session中
			$_SESSION['blog_userinfo'] = $res;
			$this->jump('index.php?m=Home&c=Index&a=index');
		}else{
			$this->jump('index.php?m=Home&c=User&a=login','用户名或密码不正确',2);
		}
	}
	/**
	 * 退出登录
	 */
	public function logout(){
		unset($_SESSION['blog_userinfo']);
		session_destroy();
		$this->jump('index.php?m=Home&c=Index&a=index');
	}
}