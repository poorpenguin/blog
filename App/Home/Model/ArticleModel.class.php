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
}