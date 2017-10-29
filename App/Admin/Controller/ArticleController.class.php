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
		if(empty($_POST)){
			//展示表单
			$category = Factory::M('CategoryModel');
			$cateInfo = $category->getCategory();//分类列表信息

			$this->assign('cateInfo',$cateInfo);
			$this->display();
		}else{
			//添加文章
			$art = array();
			//过滤非法字符 
			$art['art_title'] = $this->filterChar($_POST['art_title']);
			$art['art_desc'] = $this->filterChar($_POST['art_desc']);
			$art['art_comment'] = addslashes($_POST['art_comment']);	//使用addslashes对符号进行转义
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
	/**
	 * 展示 修改文章表单 和 提交文章修改
	 */
	public function update(){
		if(empty($_POST)){
			//展示表单
			$art_id = $_GET['art_id'];
			$article = Factory::M('ArticleModel');
			$res = $article->getArticleById($art_id);
			if(!$res){
				$this->jump("index.php?m=Admin&c=Article&a=update&art_id=$art_id",'发生位置错误！',2);
			}
			//查询分类
			$category = Factory::M('CategoryModel');
			$cateInfo = $category->getCategory();//分类列表信息

			$this->assign('cateInfo',$cateInfo);
			$this->assign('article',$res);
			$this->display();
		}else{
			//提交修改
			$art = array();
			//过滤非法字符 
			$art['art_id'] = $_POST['art_id'];
			$art['art_title'] = $this->filterChar($_POST['art_title']);
			$art['art_desc'] = $this->filterChar($_POST['art_desc']);
			$art['art_comment'] = addslashes($_POST['art_comment']);	//使用addslashes对符号进行转义
			$art['art_author'] = $this->filterChar($_POST['art_author']);
			$art['cate_id'] = $_POST['cate_id'];
			//判断数据的合法性
			if(empty($art['art_title']) || empty($art['art_desc']) || empty($art['art_comment']) || empty($art['art_author'])){
				$this->jump("index.php?m=Admin&c=Article&a=update&art_id={$art['art_id']}",'填写内容不完整',2);
			}
			if(empty($art['cate_id'])){
				$this->jump("index.php?m=Admin&c=Article&a=update&art_id={$art['art_id']}",'请选择文章类型',2);
			}
			//缩略图判断
			if($_FILES['art_thumb']['error'] != 4){
				//缩略图不为空
				$allow = array('image/jpeg','image/png','image/gif','image/jpg');
				$path = UPLOADS_DIR . 'thumb';
				$maxsize = 512000;
				$upload = Factory::M('Upload');
				$res = $upload->uploadFile($_FILES['art_thumb'],$allow,$path,$maxsize);
				if($res){
					//删除原始缩略图
					unlink($_POST['art_thumb_bak']);
					$art['art_thumb'] = $res;
				}else{
					$error = $upload->getError();
					$this->jump("index.php?m=Admin&c=Article&a=update&art_id={$art['art_id']}",$error,2);
				}
			}else{
				//缩略图为空
				$art['art_thumb'] = $_POST['art_thumb_bak'];
			}
			//更新数据
			$article = Factory::M('ArticleModel');
			$res = $article->updateArticleById($art);
			if($res){
				//更新成功
				$this->jump('index.php?m=Admin&c=Article&a=index');
			}else{
				//更新失败
				$this->jump("index.php?m=Admin&c=Article&a=update&art_id={$art['art_id']}",'未知错误',2);
			}
		}
	}
	/**
	 * 逻辑删除单个文章
	 */
	public function delete(){
		$art_id = $_GET['art_id'];
		//实例化模型 
		$article = Factory::M('ArticleModel');
		$res = $article->deleteArticleById($art_id);
		if($res){
			$this->jump('index.php?m=Admin&c=Article&a=index');
		}else{
			$this->jump('index.php?m=Admin&c=Article&a=index','发生未知错误,删除文章失败',2);
		}
	}
	/**
	 * 逻辑删除批量文章
	 */
	public function deleteAll(){
		if(isset($_POST['id'])){
			$art_id = implode(',',$_POST['id']);
			//实例化模型 
			$article = Factory::M('ArticleModel');
			$res = $article->deleteArticleAll($art_id);
			if($res){
				$this->jump('index.php?m=Admin&c=Article&a=index');
			}else{
				$this->jump('index.php?m=Admin&c=Article&a=index','发生未知错误,删除文章失败',2);
			}
		}else{
			$this->jump('index.php?m=Admin&c=Article&a=index','请选择删除项',2);
		}
	}
	/**
	 * 回收站页面
	 * @return display
	 */
	public function recycle(){
		//实例化模型，提取所有文章
		$article = Factory::M('ArticleModel');
		$artInfo = $article->getDeleteArticle();

		$this->assign('artInfo',$artInfo);
		$this->display();
	}
	/**
	 * 恢复单个文章
	 * 
	 */
	public function recove(){
		$art_id = $_GET['art_id'];
		//实例化
		$article = Factory::M('ArticleModel');
		$res = $article->recoveArticleById($art_id);
		if($res){
			$this->jump('index.php?m=Admin&c=Article&a=recycle');
		}else{
			$this->jump('index.php?m=Admin&c=Article&a=recycle','发生未知错误,恢复文章失败',2);
		}
	}
	/**
	 * 彻底删除单个文章
	 * 
	 */
	public function realDelete(){
		$art_id = $_GET['art_id'];
		//实例化模型 
		$article = Factory::M('ArticleModel');
		$res = $article->realDeleteArticleById($art_id);
		if($res){
			$this->jump('index.php?m=Admin&c=Article&a=recycle');
		}else{
			$this->jump('index.php?m=Admin&c=Article&a=recycle','发生未知错误,彻底删除文章失败',2);
		}
	}
	/**
	 * 批量彻底删除文章
	 * 
	 */
	public function realDeleteAll(){
		if($_POST['id']){
			$art_id = implode(',',$_POST['id']);
			//实例化模型 
			$article = Factory::M('ArticleModel');
			$res = $article->realDeleteArticleAll($art_id);
			if($res){
				$this->jump('index.php?m=Admin&c=Article&a=recycle');
			}else{
				$this->jump('index.php?m=Admin&c=Article&a=recycle','发生未知错误,侧地删除文章失败',2);
			}
		}else{
			$this->jump('index.php?m=Admin&c=Article&a=recycle','请选择要彻底删除项',2);
		}
	}

}