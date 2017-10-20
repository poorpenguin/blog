<?php
class CategoryModel extends Model{
	public function getCateGory(){
		$sql = 'select * from category';
		return $this->dao->fetchAll($sql);
	}
}