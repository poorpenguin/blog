<?php
class CategoryModel extends Model{
	/**
	 * 根据id获取分类名称
	 */
	public function getCategoryById($cate_id){
		$sql = "select cate_name from bg_category where cate_id=$cate_id";
		return $this->dao->fetchColumn($sql);
	}
	/**
	 * 获取主分类信息
	 */
	public function getCategory(){
		$sql = "select * from bg_category where cate_pid=0 order by cate_sort";
		return $this->dao->fetchAll($sql);
	}
}