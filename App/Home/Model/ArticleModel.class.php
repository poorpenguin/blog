<?php
class ArticleModel extends Model{
	/**
	 * 获取推荐文章
	 * @param  int $num 获取记录的个数
	 * @return mixed      false | array
	 */
	public function getRecommentArt($num){
		$sql = "select a.art_id,a.art_title,a.art_thumb,a.art_desc,a.art_author,a.art_addtime,a.	art_hits,a.reply_nums,c.cate_name from bg_article as a left join bg_category as c on a.cate_id = c.cate_id where is_delete='0' and is_recomment='1' order by a.art_addtime desc limit $num";
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
	 * 根据当前分类获取所有子分类和本身id字符串
	 */
	public function getAllSubIds($cate_id){
		$sql = "select cate_id from bg_category where cate_pid=$cate_id";
		$id = $this->dao->fetchAll($sql);
		static $ids = '';
		foreach ($id as $row) {
			$ids .= $row['cate_id'] . ',';
			$this->getAllSubIds($row['cate_id']);
		}
		//加上当前分类本身
		return $ids;
	}
	/**
	 * 根据文章分类获取文章并分页显示
	 */
	public function getArtByCateId($cate_ids,$pageNum,$rowsPerPge){
		$offset = ($pageNum-1)*$rowsPerPge;
		$sql = "select a.art_id,a.art_title,a.art_thumb,a.art_desc,a.art_author,a.art_addtime,c.cate_name,a.art_hits,a.reply_nums from bg_article as a left join bg_category as c on a.cate_id = c.cate_id where is_delete='0' and  a.cate_id in($cate_ids) order by a.art_addtime desc limit $offset,$rowsPerPge";
		return $this->dao->fetchAll($sql);
	}
	/**
	 * 根据文章分类求和总记录数
	 */
	public function getRowCountByCateId($cate_id){
		$sql = "select count(*) from bg_article where is_delete = '0' and cate_id in($cate_id)";
		return $this->dao->fetchColumn($sql);
	}
	/**
	 * 获取一篇文章详细信息 
	 */
	public function getOneArticle($art_id){
		$sql = "select a.*,c.cate_name from bg_article as a left join bg_category as c on a.cate_id = c.cate_id where a.art_id=$art_id";
		return $this->dao->fetchRow($sql);
	}
	/**
	 * 更新浏览次数
	 */
	public function updateHitsById($art_id){
		$sql = "update bg_article set art_hits = art_hits+1 where art_id=$art_id";
		return $this->dao->exec($sql);
	}
	/**
	 * 获取上一篇文章
	 */
	public function getPrevArt($art_id,$cate_id){
		$sql = "select art_id,art_title from bg_article where cate_id=$cate_id and art_id<$art_id order by art_id desc limit 1";
		return $this->dao->fetchRow($sql);
	}
	/**
	 * 获取下一篇文章
	 */
	public function getNextArt($art_id,$cate_id){
		$sql = "select art_id,art_title from bg_article where cate_id=$cate_id and art_id>$art_id order by art_id limit 1";
		return $this->dao->fetchRow($sql);
	}
	/**
	 * 指定文章评论自增
	 */
	public function updateReplyNumsBuId($art_id){
		$sql = "update bg_article set reply_nums = reply_nums+1 where art_id=$art_id";
		return $this->dao->exec($sql);
	}
}