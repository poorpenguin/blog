<?php
class AdminModel extends Model{
	public function __construct(){
		parent::__construct();
	}

	public function check($admin_name, $admin_pass){
		$sql = "select * from bg_admin where admin_name='$admin_name' and admin_pass=md5('$admin_pass')";
		return $this->dao->fetchRow($sql);
	}

	public function updateUserInfo($id){
		$login_ip = $_SERVER['REMOTE_ADDR'];
		$login_time = time();
		$sql = "update bg_admin set login_ip = '$login_ip',login_time = $login_time,login_nums = login_nums+1 where admin_id = $id";
		return $this->dao->exec($sql);
	}
}