<?php
class CategoryController extends BaseController{
	/**
	 * 展示添加 分页表单 和 已添加分类列表
	 * @return  display
	 */
	public function index(){
		$category = Factory::M('CategoryModel');
		$cateInfo = $category->getCategory();

		$this->assign('cateInfo',$cateInfo);
		$this->display();
	}
	/**
	 * 添加分类功能
	 */
	public function add(){
		//接收前台post的数据并过滤非法字符防止sql注入
		$cate = array();
		$cate['cate_name'] = $this->filterChar($_POST['cate_name']);
		$cate['cate_pid'] = $_POST['cate_pid'];
		$cate['cate_sort'] = $this->filterChar($_POST['cate_sort']);
		$cate['cate_desc'] = $this->filterChar($_POST['cate_desc']);
		//判断数据是否合法
		//1.非空
		if(empty($cate['cate_name']) || empty($cate['cate_sort']) || empty($cate['cate_desc'])){
			$this->jump('index.php?m=Admin&c=Category&a=index','填写的信息有误',2);
		}
		//2.判断数字是否合法
		if(!is_numeric($cate['cate_sort']) || (int)($cate['cate_sort'])!= $cate['cate_sort'] || $cate['cate_sort'] < 0){
			$this->jump('index.php?m=Admin&c=Category&a=index','排序为1-50数字',2);
		}

		//数据入库，调用数据模型
		$category = Factory::M('CategoryModel');
		$res = $category->insertCategory($cate);
		if(!$res){
			$this->jump('index.php?m=Admin&c=Category&a=index','未知错误',2);
		}else{
			$this->jump('index.php?m=Admin&c=Category&a=index');
		}
	}
	/**
	 * 展示更新分类表单 和 更新分类操作
	 * @return display
	 */
	public function update(){
		$cate_id = $_GET['cate_id'];
		if(empty($_POST)){
			//实例化模型
			$category = Factory::M('CategoryModel');
			$cateInfoById = $category->getCateInfoById($cate_id);//分类信息

			$cateInfo = $category->getCategory();//分类列表信息

			$this->assign('cateInfoById',$cateInfoById);
			$this->assign('cateInfo',$cateInfo);
			$this->display();
		}else{
			$cate = array();
			//过滤表单提交的信息
			$cate['cate_id'] = $_POST['cate_id'];
			$cate['cate_name'] = $this->filterChar($_POST['cate_name']);
			$cate['cate_pid'] = $_POST['cate_pid'];
			$cate['cate_sort'] = $this->filterChar($_POST['cate_sort']);
			$cate['cate_desc'] = $this->filterChar($_POST['cate_desc']);
			//判断数据合法性
			//1.非空
			if(empty($cate['cate_name']) || empty($cate['cate_sort']) || empty($cate['cate_desc'])){
				$this->jump("index.php?m=Admin&c=Category&a=update&cate_id=$cate_id",'填写的信息有误',2);
			}
			//2.判断数字是否合法
			if(!is_numeric($cate['cate_sort']) || (int)($cate['cate_sort'])!= $cate['cate_sort'] || $cate['cate_sort'] < 0){
				$this->jump("index.php?m=Admin&c=Category&a=update&cate_id=$cate_id",'排序为1-50数字',2);
			}
			//更新分类
			$category = Factory::M('CategoryModel');
			$res = $category->updateCateInfo($cate);
			if(!$res){
				//失败
				$this->jump("index.php?m=Admin&c=Category&a=update&cate_id=$cate_id",'未知错误',2);
			}else{
				//成功
				$this->jump('index.php?m=Admin&c=Category&a=index');
			}
		}	
	}
	/**
	 * 删除分类
	 */
	public function delete(){
		$cate_id = $_GET['cate_id'];
		$category = Factory::M('CategoryModel');
		$res = $category->deleteCateInfo($cate_id);
		if($res){
			//成功
			$this->jump('index.php?m=Admin&c=Category&a=index');
		}else{
			//失败
			$this->jump('index.php?m=Admin&c=Category&a=index','发生未知错误',2);
		}
	}
	/**
	 * 批量删除分类
	 */
	public function deleteAll(){
		if(!isset($_POST['id'])){
			$this->jump('index.php?m=Admin&c=Category&a=index','请选择要删除的分类',2);
		}
		$cate_id = $_POST['id'];
		$category = Factory::M('CategoryModel');
		$res = $category->deleteAllCateInfo($cate_id);
		if($res){
			//成功
			$this->jump('index.php?m=Admin&c=Category&a=index');
		}else{
			//失败
			$this->jump('index.php?m=Admin&c=Category&a=index','发生未知错误',2);
		}
	}
}