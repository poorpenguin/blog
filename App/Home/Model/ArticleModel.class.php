<?php
class ArticleModel extends Model{
	public function getRecommentArt($num){
		$sql = "select a.art_title,a.art_thumb,a.art_desc,a.art_author,a.art_addtime,c.cate_name from bg_article as a left join bg_category as c on a.cate_id = c.cate_id where is_delete='0' and is_recomment='1' order by a.art_addtime desc limit $num";
		return $this->dao->fetchAll($sql);
	}
}