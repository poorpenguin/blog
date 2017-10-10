<?php
class AdminModel extends Model{
	public function __construct(){
		parent::__construct();
	}

	public function check($admin_name, $admin_pass){
		$sql = "select * from bg_admin where admin_name='$admin_name' and admin_pass=md5('$admin_pass')";
		return $this->dao->fetchRow($sql);
	}
}