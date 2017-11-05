<?php
class CategoryModel extends Model{
	/**
	 * 根据id获取面包屑的分类树
	 */
	public function getCategoryTreeById($cate_id){
		$sql = "select cate_pid,cate_name from bg_category where cate_id=$cate_id";
		$cateInfo = $this->dao->fetchRow($sql);
		static $list = array();
		$list[$cate_id] = $cateInfo['cate_name'];
		if($cateInfo['cate_pid'] != 0){
			$this->getCategoryTreeById($cateInfo['cate_pid']);
		}
		return array_reverse($list,true);
	}
	/**
	 * 获取主分类信息
	 */
	public function getCategory(){
		$sql = "select * from bg_category where cate_pid=0 order by cate_sort";
		return $this->dao->fetchAll($sql);
	}
	/**
	 * 获取当前分类下的子分类
	 */
	public function getSonCategoryById($cate_id){
		$sql = "select * from bg_category where cate_pid=$cate_id order by cate_sort";
		return $this->dao->fetchAll($sql);
	}
}