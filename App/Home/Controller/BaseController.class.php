<?php
class BaseController extends Controller{
	public function __construct(){
		parent::__construct();
		$this->auto();
	}
	/**
	 * 需要在自动执行的方法
	 */
	public function auto(){
		$this->getCateInfo();
	}
	/**
	 * 获取主分类
	 */
	public function getCateInfo(){
		$category = Factory::M('CategoryModel');
		$cateInfo = $category->getCategory();

		$this->assign('cateInfo',$cateInfo);
	}
}