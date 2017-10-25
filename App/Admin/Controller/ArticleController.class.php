<?php
class ArticleController extends BaseController{
	/**
	 * 展示文章管理首页
	 * @return display
	 */
	public function index(){
		//实例化模型，提取所有文章
		$article = Factory::M('ArticleModel');
		$artInfo = $article->getArticle();

		$this->assign('artInfo',$artInfo);
		$this->display();
	}
	/**
	 * 添加展示文章表单 和 添加文章
	 * @return display 
	 */
	public function add(){
		//实例化模型
		if(empty($_POST)){
			//展示表单
			$category = Factory::M('CategoryModel');
			$cateInfo = $category->getCategory();//分类列表信息

			$this->assign('cateInfo',$cateInfo);
			$this->display();
		}else{
			$art = array();
			//过滤非法字符 
			$art['art_title'] = $this->filterChar($_POST['art_title']);
			$art['art_desc'] = $this->filterChar($_POST['art_desc']);
			$art['art_comment'] = $this->filterChar($_POST['art_comment']);
			$art['art_author'] = $this->filterChar($_POST['art_author']);
			$art['cate_id'] = $_POST['cate_id'];
			//判断数据合法性
			if(empty($art['art_title']) || empty($art['art_desc']) || empty($art['art_comment']) || empty($art['art_author'])){
				$this->jump('index.php?m=Admin&c=Article&a=add','填写文章信息不完整',2);
			}
			if(empty($art['cate_id'])){
				$this->jump('index.php?m=Admin&c=Article&a=add','请选择文章类型',2);
			}
			//判断是否有缩略图上传(要在数据插入前判断)
			if($_FILES['art_thumb']['error'] != 4){
				//允许上传文件的格式
				$allow = array('image/jpeg','image/png','image/gif','image/jpg');
				$path = UPLOADS_DIR . 'thumb';
				$maxsize = 512000;
				$upload = Factory::M('Upload');
				$res = $upload->uploadFile($_FILES['art_thumb'],$allow,$path,$maxsize);
				if($res){
					$art['art_thumb'] = $res;
				}else{
					$error = $upload->getError();
					$this->jump('index.php?m=Admin&c=Article&a=add',$error,2);
				}
			}

			//添加文章
			$article = Factory::M('ArticleModel');
			$res = $article->insertArt($art);
			if($res){
				$this->jump('index.php?m=Admin&c=Article&a=index');
			}else{
				$this->jump('index.php?m=Admin&c=Article&a=add','发生未知错误',2);
			}
		}
	}

	public function test(){
		var_dump(getCWD());
	}
}