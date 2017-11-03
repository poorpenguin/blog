<?php
class ArticleController extends BaseController{
	/**
	 * 文章分类主页
	 * @return display 
	 */
	public function index(){
		//获取文章分类
		$cate_id = $_GET['cate_id'];
		$category = Factory::M('CategoryModel');
		$cateName = $category->getCategoryById($cate_id);

		$article = Factory::M('ArticleModel');
		//分页部分
		$pageNum = isset($_GET['pageNum']) ? $_GET['pageNum'] : 1;
		$rowsPerPge = 7;	//每页显示记录数
		$maxNum = 5;
		$rowCount = $article->getRowCountByCateId($cate_id);	//获得指定分页的总记录数
		$url = "index.php?m=Home&c=Article&a=index&cate_id=$cate_id";
		//实例化分页类
		$page = new Page($rowsPerPge, $maxNum, $rowCount, $url);
		$strPage = $page->getStrPage();

		//获取指定分类分页文章信息
		$artInfo = $article->getArtByCateId($cate_id,$pageNum,$rowsPerPge);

		$this->assign('cateName',$cateName);
		$this->assign('page',$strPage);
		$this->assign('artInfo',$artInfo);
		$this->display();
	}
	/**
	 * 详细文章内容
	 * @return display
	 */
	public function content(){
		$category = Factory::M('CategoryModel');
		$cateInfo = $category->getCategory();

		$this->assign('cateInfo',$cateInfo);
		$this->display();
	}
}