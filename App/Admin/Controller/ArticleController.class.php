<?php
class ArticleController extends BaseController{
	/**
	 * 展示文章管理首页
	 * @return display
	 */
	public function index(){
		$this->display();
	}
	/**
	 * 添加文章页展示 和 添加文章
	 * @return display 
	 */
	public function add(){
		//实例化模型
		$category = Factory::M('CategoryModel');
		$cateInfo = $category->getCategory();//分类列表信息

		$this->assign('cateInfo',$cateInfo);
		$this->display();
	}
}