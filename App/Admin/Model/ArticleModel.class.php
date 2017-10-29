<?php
class ArticleModel extends Model{
	/**
	 * 插入文章
	 * @param  array $art 文字内容
	 * @return false 或 记录的id
	 */
	public function insertArt($art){
		//炸开数组
		extract($art);
		$art_addtime = time();
		$sql = "insert into bg_article values (null,$cate_id,'$art_title','$art_thumb','$art_desc','$art_comment','$art_author',default,$art_addtime,default)";
		return $this->dao->exec($sql);
	}
	/**
	 * 获取所有文章信息
	 * @return [type] [description]
	 */
	public function getArticle(){
		$sql = "select a.art_id,a.art_title,c.cate_name,a.art_desc,a.art_author,a.art_hits,a.art_addtime from bg_article as a left join bg_category as c on a.cate_id = c.cate_id where is_delete = '0' order by art_addtime desc";
		return $this->dao->fetchAll($sql);
	}
	/**
	 * 获取逻辑删除的文章信息
	 * @return false | 二维数组
	 */
	public function getDeleteArticle(){
		$sql = "select a.art_id,a.art_title,c.cate_name,a.art_desc,a.art_author,a.art_hits,a.art_addtime from bg_article as a left join bg_category as c on a.cate_id = c.cate_id where is_delete = '1' order by art_addtime desc";
		return $this->dao->fetchAll($sql);	
	}
	/**
	 * 根据文章id获取文章信息
	 * @return   false 或 文章信息的一维数组
	 */
	public function getArticleById($art_id){
		$sql = "select * from bg_article where art_id = $art_id";
		return $this->dao->fetchRow($sql);
	}
	/**
	 * 更新文章数据
	 * @return false | true
	 */
	public function updateArticleById($art){
		//炸开数组
		extract($art);
		$sql = "update bg_article set cate_id=$cate_id,art_title='$art_title',art_thumb='$art_thumb',art_desc='$art_desc',art_comment='$art_comment',art_author='$art_author' where art_id=$art_id";
		return $this->dao->exec($sql);
	}
	/**
	 * 逻辑删除单个文章
	 * @return false | true
	 */
	public function deleteArticleById($art_id){
		$sql = "update bg_article set is_delete = '1' where art_id=$art_id";
		return $this->dao->exec($sql);
	}
	/**
	 * 逻辑删除批量文章
	 */
	public function deleteArticleAll($art_id){
		$sql = "update bg_article set is_delete = '1' where art_id in($art_id)";
		return $this->dao->exec($sql);
	}
	/**
	 * 回收站恢复单个文章
	 */
	public function recoveArticleById($art_id){
		$sql = "update bg_article set is_delete = '0' where art_id=$art_id";
		return $this->dao->exec($sql);
	}
	/**
	 * 彻底删除单个文章
	 */
	public function realDeleteArticleById($art_id){
		$sql = "delete from bg_article where art_id=$art_id";
		return $this->dao->exec($sql);
	}
	/**
	 * 彻底批量删除文章
	 */
	public function realDeleteArticleAll($art_id){
		$sql = "delete from bg_article where art_id in($art_id)";
		return $this->dao->exec($sql);	
	}
}