<?php
class ArticleModel extends Model{
	/**
	 * 获取推荐文章
	 * @param  int $num 获取记录的个数
	 * @return mixed      false | array
	 */
	public function getRecommentArt($num){
		$sql = "select a.art_title,a.art_thumb,a.art_desc,a.art_author,a.art_addtime,c.cate_name from bg_article as a left join bg_category as c on a.cate_id = c.cate_id where is_delete='0' and is_recomment='1' order by a.art_addtime desc limit $num";
		return $this->dao->fetchAll($sql);
	}
	/**
	 * 获取热门文章根据点击量
	 * @param int $num 获取记录的个数
	 * @return mixed false | array
	 */
	public function getHotArtById($num){
		$sql = "select art_id,art_title,art_hits,art_addtime from bg_article where is_delete='0' order by art_hits limit $num";
		return $this->dao->fetchAll($sql);
	}
	/**
	 * 根据文章分类获取文章并分页显示
	 */
	public function getArtByCateId($cate_id,$pageNum,$rowsPerPge){
		$offset = ($pageNum-1)*$rowsPerPge;
		$sql = "select a.art_title,a.art_thumb,a.art_desc,a.art_author,a.art_addtime,c.cate_name,a.art_hits from bg_article as a left join bg_category as c on a.cate_id = c.cate_id where is_delete='0' and  a.cate_id=$cate_id order by a.art_addtime desc limit $offset,$rowsPerPge";
		return $this->dao->fetchAll($sql);
	}
	/**
	 * 根据文章分类求和总记录数
	 */
	public function getRowCountByCateId($cate_id){
		$sql = "select count(*) from bg_article where is_delete = '0' and cate_id=$cate_id";
		return $this->dao->fetchColumn($sql);
	}
}