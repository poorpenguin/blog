<?php
/**
 * 操作数据库的基础模型类
 */
class Model{
	//用来存储实例化的数据库操作对象(data access object)
	protected $dao;	
	/**
	 * 构造方法 
	 */
	public function __construct(){
		$this->initDAO();
	}
	/**
	 * 实例化并初始化dao
	 */
	private function initDAO(){
		//初始化数据库配置文件
		$config = $GLOBALS['config']['db'];
		//调用MySQLDB类静态方法实例化
		$this->dao = MyPDO::getInstance($config);
	}

}