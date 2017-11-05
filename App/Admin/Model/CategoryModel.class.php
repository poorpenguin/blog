<?php
class CategoryModel extends Model{
	/**
	 * 获取分类
	 * @return array 返回分类数组
	 */
	public function getCategory(){
		$sql = 'select * from bg_category order by cate_sort';
		$list = $this->dao->fetchAll($sql);
		return $this->getCateTree($list);
	}
	/**
	 * 处理分类数组
	 * @param array $list 原始分类数组
	 * @param int $pid=0 父分类
	 * @param int $level=0 缩进级别
	 * @return  array $cate_list 格式化后的分类列表
	 */
	private function getCateTree($list, $pid=0, $level=0){
		//定义静态数组变量用于存放格式化之后的数组
		static $cate_list = array();
		//遍历处理分类的排序
		foreach ($list as $row) {
			if($row['cate_pid'] == $pid){
				$row['level'] = $level;
				$cate_list[] = $row;
				//递归出 当前分类的id 是 哪个分类的pid
				$this->getCateTree($list,$row['cate_id'],$level+1);
			}
		}
		//返回结果
		return $cate_list;
	}
	/**
	 * 添加分类
	 * @param array $data 分类信息的数组
	 * @return 返回结果
	 */
	public function insertCategory($data){
		extract($data);	//作用：通过数字得到多个变量
		$sql = "insert into bg_category values(null,'$cate_name',$cate_pid,$cate_sort,'$cate_desc')";
		return $this->dao->exec($sql);
	}
	/**
	 * 通过cate_id获取分类信息
	 */
	public function getCateInfoById($cate_id){
		$sql = "select * from bg_category where cate_id=$cate_id";
		return $this->dao->fetchRow($sql);
	}
	/**
	 * 更新分类信息
	 */
	public function updateCateInfo($data){
		extract($data);
		$sql = "update bg_category set cate_name='$cate_name',cate_pid=$cate_pid,cate_sort=$cate_sort,cate_desc='$cate_desc' where cate_id=$cate_id";
		return $this->dao->exec($sql);
	}
	/**
	 * 删除单个分类
	 */
	public function deleteCateInfo($cate_id){
		$sql = "delete from bg_category where cate_id=$cate_id";
		return $this->dao->exec($sql);
	}
	/**
	 * 批量删除分类
	 */
	public function deleteAllCateInfo($cate_id){
		$cate_id = implode(',',$cate_id);//将数组转化为字符串
		$sql = "delete from bg_category where cate_id in ($cate_id)";
		return $this->dao->exec($sql);
	}
	
}