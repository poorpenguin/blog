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
		$this->getPublicInfo();
	}
	/**
	 * 获取公共部分内容
	 */
	public function getPublicInfo(){
		/*获取右侧导航分类*/
		$category = Factory::M('CategoryModel');
		$cateInfo = $category->getCategory();
		$this->assign('cateInfo',$cateInfo);
		/*获取热门文章*/
		$article = Factory::M('ArticleModel');
		$hotArt = $article->getHotArtById(8);
		$this->assign('hotArt',$hotArt);
	}
}