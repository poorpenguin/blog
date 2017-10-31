<?php
class CategoryModel extends Model{
	public function getCategory(){
		$sql = "select * from bg_category where cate_pid=0 order by cate_sort";
		return $this->dao->fetchAll($sql);
	}
}