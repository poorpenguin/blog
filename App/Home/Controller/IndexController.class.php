<?php
class IndexController extends BaseController{
	public function index(){
		//实例化获取推荐文章
		$article = Factory::M('ArticleModel');
		$artInfo = $article->getRecommentArt(5);

		$this->assign('artInfo',$artInfo);
		$this->display();
	}
}