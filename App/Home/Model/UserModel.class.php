<?php
class UserModel extends Model{
	/**
	 * 判读用户名是否已经被注册
	 * @param  string $user_name 用户名
	 * @return mixed            false | array
	 */
	public function if_name_exists($user_name){
		$sql = "select * from bg_user where user_name='$user_name'";
		return $this->dao->fetchRow($sql);
	}
	/**
	 * 添加用户注册的信息
	 * @param  array $userInfo 用户信息数组
	 * @return mixed        	false | id
	 */
	public function insertUserInfo($userInfo){
		extract($userInfo);
		$sql = "insert into bg_user values(null,'$user_name','$user_pass',default,$user_time)";
		return $this->dao->exec($sql);
	}
	public function checkUser($userInfo){
		extract($userInfo);
		$sql = "select * from bg_user where user_name='$user_name'";
		$user = $this->dao->fetchRow($sql);
		if($user){
			if($user['user_pass'] == $user_pass){
				return $user;
			}
		}
		return false;
	}
}