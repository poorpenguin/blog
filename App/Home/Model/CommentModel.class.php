<?php
class CommentModel extends Model{
	/**
	 * 提交用户评论
	 */
	public function insertComment($cmtInfo){
		extract($cmtInfo);
		$sql = "insert into bg_comment values(null,$art_id,'$user_name','$cmt_content',$cmt_time)";
		return $this->dao->exec($sql);
	}
	/**
	 * 获取指定文章评论总记录数
	 */
	public function getCommentCount($art_id){
		$sql = "select count(*) from bg_comment where art_id=$art_id";
		return $this->dao->fetchColumn($sql);
	}
	/**
	 * 获取指定文章的评论内容
	 */
	public function getPageComment($art_id,$pageNum,$rowsPerPge){
		$offset = ($pageNum-1)*$rowsPerPge;
		$sql = "select * from bg_comment where art_id=$art_id order by cmt_time desc limit $offset,$rowsPerPge";
		return $this->dao->fetchAll($sql);
	}
}