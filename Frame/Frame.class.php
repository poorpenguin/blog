<?php
/**
 * 框架初始化类，入口文件需要引入并调用静态方法run()
 */
class Frame {
	/**
	 * 项目的入口方法
	 */
	public static function run(){
		//1.定义基础目录常量
		self::initConst();
		//2.初始化配置
		self::initConfig();
		//3.确定分发参数
		self::initDistributeParam();
		//4.定义当前平台（分组）下的相关目录常量
		self::initModuleConst();
		//5.注册自动加载类文件的方法
		self::initAutoload();
		//6.请求分发
		self::initDistribute();
	}
	/**
	 * 定义基础目录常量
	 */
	private static function initConst(){
		define('ROOT_DIR', str_replace('\\', '/', getCWD() . '/'));	//根目录getCWD()得到的路径是当前代码工作的路径,而_ROOT_是当前代码所在的路径受到include的影响
		define('APP_DIR', ROOT_DIR . 'App/');	//应用程序目录
		define('FRAME_DIR', ROOT_DIR . 'Frame/');//框架目录
		define('CONFIG_DIR', APP_DIR . 'Config/');//配置文件目录
		define('VEBDOR_DIR', ROOT_DIR . 'Vendor/');//插件目录
		define('PUBLIC_DIR', ROOT_DIR . 'Public/');//公共资源目录
		define('UPLOADS_DIR', ROOT_DIR . 'Uploads/');//用户上传目录
	}
	/**
	 * 初始化配置
	 */
	private static function initConfig(){
		//将配置文件存储到超全局变量中去，以便整个项目使用
		$GLOBALS['config'] = include CONFIG_DIR . 'config.php';
	}
	/**
	 * 确定方法参数，定义当前分组、控制器、模型名字的值
	 */
	private static function initDistributeParam(){
		//确定分发参数m（分组module）
		$default_module = $GLOBALS['config']['App']['default_module'];
		define('MODULE',isset($_GET['m']) ? $_GET['m'] : $default_module );
		//确定分发参数c（控制器controller）
		$default_controller = $GLOBALS['config'][MODULE]['default_controller'];
		define('CONTROLLER',isset($_GET['c']) ? $_GET['c'] : $default_controller);
		//确定分发参数a（动作action）
		$default_action = $GLOBALS['config'][MODULE]['default_action'];
		define('ACTION',isset($_GET['a']) ? $_GET['a'] : $default_action);
	}
	/**
	 * 定义当前平台（分组）下的相关目录常量
	 */
	private static function initModuleConst(){
		define('CURRENT_MODULE_DIR', APP_DIR . MODULE .'/');	//当前平台（分组）目录
		define('CURRENT_CONTROLLER_DIR', CURRENT_MODULE_DIR . 'Controller/');	//当前控制器目录
		define('CURRENT_MODEL_DIR', CURRENT_MODULE_DIR . 'Model/');	//当前模型目录
		define('CURRENT_VIEW_DIR', CURRENT_MODULE_DIR . 'View/');	//当前视图目录
		define('CURRENT_PUBLIC_DIR','/blog/Public/' . MODULE);	//当前平台的public目录
		define('CSS_DIR', '/blog/Public/' . MODULE . '/css');
		define('JS_DIR', '/blog/Public/' . MODULE . '/js');
		define('IMAGE_DIR', '/blog/Public/' . MODULE . '/images');
	}
	/**
	 * 注册自动加载类文件方法
	 */
	private static function initAutoload(){
		spl_autoload_register('self::autoload');
	}
	/**
	 * 定义自动加载类文件方法
	 */
	public static function autoload($class_name){
		//先把已经确定的核心框架类放到一个数组中
		$frame_class_list = array(
			//类名 => 路径
			'Controller' => FRAME_DIR . 'Controller.class.php',
			'Model'		 => FRAME_DIR . 'Model.class.php',
			'Factory' 	 => FRAME_DIR . 'Factory.class.php',
			'MyPDO' 	 => FRAME_DIR . 'MyPDO.class.php',
			'I_DAO'		 => FRAME_DIR . 'I_DAO.interface.php',
			'Smarty'	 => VEBDOR_DIR . 'Smarty/Smarty.class.php',
			'Captcha'	 =>	VEBDOR_DIR . 'Captcha.class.php',
			'Upload'	 => VEBDOR_DIR . 'Upload.class.php',
		);
		//判断是否是框架核心类
		if(isset($frame_class_list[$class_name])){
			include $frame_class_list[$class_name];
		}
		//若不是框架核心类，判断是否是控制器类，取后10个字符匹配
		elseif(substr($class_name, -10) == 'Controller'){
			include CURRENT_CONTROLLER_DIR . $class_name . '.class.php';
		}
		//若不是上面两个，判断是否是模型类，取后5个字符匹配
		elseif(substr($class_name, -5) == 'Model'){
			include CURRENT_MODEL_DIR . $class_name . '.class.php';
		}
	}	
	/**
	 * 请求分发
	 */
	private static function initDistribute(){
		//拼凑出需要实例化的控制器名称 
		$controller_name = CONTROLLER.'Controller';
		$controller = new $controller_name();
		//拼凑出方法名称
		$action_name = ACTION;
		//调用方法 
		$controller->$action_name();
	}
}