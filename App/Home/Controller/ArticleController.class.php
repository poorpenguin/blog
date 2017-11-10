<?php
class ArticleController extends BaseController{
	/**
	 * 顶部面包屑
	 */
	public function getBreadcrumb($cate_id){
		$category = Factory::M('CategoryModel');
		$treeCateInfo = $category->getCategoryTreeById($cate_id);
		$this->assign('treeCateInfo',$treeCateInfo);
	}
	/**
	 * 文章分类主页
	 * @return display 
	 */
	public function index(){
		//接收分类编号
		$cate_id = $_GET['cate_id'];

		//获取顶部面包屑
		$this->getBreadcrumb($cate_id);

		$category = Factory::M('CategoryModel');
		//获取当前分类的子分类
		$cateSonInfo = $category->getSonCategoryById($cate_id);
		$this->assign('cateSonInfo',$cateSonInfo);

		$article = Factory::M('ArticleModel');
		//分页部分
		
		$pageNum = isset($_GET['pageNum']) ? $_GET['pageNum'] : 1;
		$rowsPerPge = 7;	//每页显示记录数
		$maxNum = 5;
		/*获取所有当前分类和子分类id字符串*/
		$cate_ids = $article->getAllSubIds($cate_id);
		$cate_ids .= $cate_id;
		/*/获取所有当前分类和子分类id字符串*/
		$rowCount = $article->getRowCountByCateId($cate_ids);	//获得指定分页的总记录数
		$url = "index.php?m=Home&c=Article&a=index&cate_id=$cate_id";
		//实例化分页类
		$page = new Page($rowsPerPge, $maxNum, $rowCount, $url);
		$strPage = $page->getStrPage();
		$this->assign('page',$strPage);

		//获取当前分类下所有（包括子分类，以及子分类的子分类...）分页文章信息
		$artInfo = $article->getArtByCateId($cate_ids,$pageNum,$rowsPerPge);
		$this->assign('artInfo',$artInfo);
	
		$this->display();
	}
	/**
	 * 详细文章内容
	 * @return display
	 */
	public function content(){
		//接收文章id
		$art_id = $_GET['art_id'];
		$article = Factory::M('ArticleModel');
		//在获取文章信息前浏览数自增
		$article->updateHitsById($art_id);
		//获取文章信息
		$artInfo = $article->getOneArticle($art_id);
		//获取上一篇文章信息
		$prev = $article->getPrevArt($art_id,$artInfo['cate_id']);
		$this->assign('prev',$prev);
		//获取下一篇文章信息
		$next = $article->getNextArt($art_id,$artInfo['cate_id']);
		$this->assign('next',$next);
		//获取面包屑
		$this->getBreadcrumb($artInfo['cate_id']);
		$this->assign('artInfo',$artInfo);

		//获取对文章评论分页
		$comment = Factory::M('CommentModel');

		$pageNum = isset($_GET['pageNum']) ? $_GET['pageNum'] : 1;
		$rowsPerPge = 10;	//每页显示记录数
		$maxNum = 5;
		$rowCount = $comment->getCommentCount($art_id);	//获得文章评论的总记录数
		$url = "index.php?m=Home&c=Article&a=content&art_id=$art_id";
		//实例化分页类
		$page = new Page($rowsPerPge, $maxNum, $rowCount, $url);
		$strPage = $page->getStrPage();
		$this->assign('page',$strPage);
		//获取分页处理后的评论
		$cmtInfo = $comment->getPageComment($art_id,$pageNum,$rowsPerPge);
		$this->assign('cmtInfo',$cmtInfo);


		$this->display();
	}
	/**
	 * 提交用户评论
	 */
	public function comment(){
		//1.判断用户是否登录
		if(!isset($_SESSION['blog_userinfo'])){
			$this->jump('index.php?m=Home&c=User&a=login','未登录，请先登录',1);
		}
		//2.接收数据
		$cmtInfo = array();
		$cmtInfo['cmt_content'] = $this->filterChar($_POST['cmt_content']);
		if(empty($cmtInfo['cmt_content'])){
			$this->jump("index.php?m=Home&c=Article&a=content&art_id={$_POST['art_id']}",'评论不能为空',1);
		}
		$cmtInfo['art_id'] = $_POST['art_id'];
		$cmtInfo['user_name'] = $_SESSION['blog_userinfo']['user_name'];
		$cmtInfo['cmt_time'] = time();
		//3.实例化
		$comment = Factory::M('CommentModel');
		if($comment->insertComment($cmtInfo)){
			//4.评论成功后评论自加
			$article = Factory::M('ArticleModel');
			$article->updateReplyNumsBuId($_POST['art_id']);
			$this->jump("index.php?m=Home&c=Article&a=content&art_id={$_POST['art_id']}");
		}else{
			$this->jump("index.php?m=Home&c=Article&a=content&art_id={$_POST['art_id']}",'发生未知错误，评论提交失败',2);
		}
	}
}