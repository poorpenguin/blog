<?php
return array(
	'db' => array(	//数据库配置
		'dnms' => 'mysql',
		'host' => '127.0.0.1',
		'port' => '3306',
		'user' => 'root',
		'pwd' => '123456',
		'charset' => 'utf8',
		'dbname' => 'blog'
	),
	'App' => array(	//应用程序配置
		'default_module' => 'Admin',
	),
	'Test' => array(
		'default_controller' => 'Goods',
		'default_action' => 'list',
	),
	'Home' => array(
		'default_controller' => '',
		'default_action' => '',
	),
	'Admin' => array(
		'default_controller' => 'Admin',
		'default_action' => 'login',
	),
);