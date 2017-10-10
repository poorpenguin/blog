<?php
/**
 * 项目中的单例工厂
 */
class Factory{
	/**
	 * 生产模型类的单例工厂
	 * @param string class_name 类名
	 * @return object
	 */
	public static function M($class_name){
		//定义静态变量，用来保存已经实例化好的对象列表
		//下标是类名
		static $obj_list = array();
		//判断当前模型是否被实例化
		if(!isset($obj_list[$class_name])){
			//没有实例化
			$obj_list[$class_name] = new $class_name();	//可变类	
		}
		return $obj_list[$class_name];
	}
}