<?php
return array(
	'db' => array(	//数据库配置
		'dnms' => 'mysql',
		'host' => '127.0.0.1',
		'port' => '3306',
		'user' => 'root',
		'pwd' => 'root',
		'charset' => 'utf8',
		'dbname' => 'blog'
	),
	'App' => array(	//应用程序配置
		'default_module' => 'Home',
	),
	'Test' => array(
		'default_controller' => 'Goods',
		'default_action' => 'list',
	),
	'Home' => array(
		'default_controller' => 'Index',
		'default_action' => 'index',
	),
	'Admin' => array(
		'default_controller' => 'Admin',
		'default_action' => 'login',
	),
	//验证吗配置
	'Captcha' =>array(
		'width'		=>	80,
		'height'	=>	32,
		'pixelnum'	=>	0.03,
		'linenum'	=>	5,
		'stringnum'	=>	4,
	),
	//分页配置
	'Page'	=>array(
		'rowsPerPage' => 8,	//每页显示的记录数
		'maxNum'	=> 5,	//最多显示多少个页面的页码
	),
);