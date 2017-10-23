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
	 * 添加文章页
	 * @return display 
	 */
	public function add(){
		$this->display();
	}

}