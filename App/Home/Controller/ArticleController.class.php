<?php
class ArticleController extends BaseController{
	public function content(){
		$category = Factory::M('CategoryModel');
		$cateInfo = $category->getCategory();

		$this->assign('cateInfo',$cateInfo);
		$this->display();
	}
}