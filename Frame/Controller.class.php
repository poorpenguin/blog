<?php
/**
 * 基础控制器类
 */
class Controller {
	//保存smarty模板对象
	protected $smarty;

	/**
	 * 构造方法
	 */
	public function __construct(){
		$this->initCode();
		$this->initSmarty();
	}
	/**
	 * 设置编码
	 */
	protected function initCode(){
		header('Content-type:text/html;charset=utf-8');
	}
	/**
	 * 初始化smarty模板
	 */
	protected function initSmarty(){
		$this->smarty = new Smarty();
		//设置默认模板目录（我们设置为当前分组下的View中对应控制器的子目录）
		$this->smarty->setTemplateDir(CURRENT_VIEW_DIR . CONTROLLER . '/');
		//设置模板编译文件保存位置 (我们设置在当前分组下的View_c对应控制器的子目录中)
		$this->smarty->setCompileDir(CURRENT_MODULE_DIR . 'View_c/' . CONTROLLER . '/');
	}
	/**
	 * 封装smarty中assign方法
	 */
	protected function assign($name, $value){
		$this->smarty->assign($name, $value);
	}
	/**
	 * 封装smarty中display方法
	 */
	protected function display(){
		$this->smarty->display(ACTION . '.html');
	}
}