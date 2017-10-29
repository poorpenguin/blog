<?php
/**
 * 分页类
 */
class Page {
	//分页类的相关属性
	private $rowsPerPge;	//每页显示的记录数
	private $maxNum;		//页面显示最大页码的个数
	private $rowCount;		//总记录数
	private $url;			//固定url连接
	/**
	 * 构造方法
	 */
	public function __construct($rowsPerPge, $maxNum, $rowCount, $url){
		$this->rowsPerPge = $rowsPerPge;
		$this->maxNum = $maxNum;
		$this->rowCount = $rowCount;
		$this->url = $url;
	}
	/**
	 * 核心方法，返回页面字符串
	 */
	public function getStrPage(){
		//计算总页数
		$pages = ceil($this->rowCount / $this->rowsPerPge);
		//当前选中的页码数
		$pageNum = isset($_GET['pageNum']) ? $_GET['pageNum'] : 1;

		//分页字符串
		$strPage = "<ul class='pagination'>";
		//1.拼凑出首页
		$strPage .= "<li><a href='{$this->$url}&pageNum=1'>首页</a></li>";
		//2.拼凑出上一页
		$preNum = $pageNum-1;
		if($pageNum == 1){
			//当前选中页数为1，禁用上一页
			$strPage .= "<li class='disabled'><a href='#'>上一页</a></li>";
		}else{
			//不为1，正常
			$strPage .= "<li><a href='{$this->$url}&pageNum={$preNum}'>上一页</a></li>";
		}
		//3.拼凑出要显示的页码
		//3.1确定显示起始页的页码
		if($pageNum <= (ceil($this->maxNum / 2)+1)){
			$startNum = 1;	//如果当前页 小于等于 (最多显示页码输/2)+1
		}else{
			$startNum = $pageNum - ceil($this->maxNum / 2);
		}
		//3.2接近尾端，确定显示初始页的最大页码
		if($startNum >= $pages - $maxNum + 1){
			$startNum = $pages - $maxNum + 1;
		}
		//3.3防止页码出现负值
		if($startNum <= 1){
			$startNum = 1;
		}
		//4.确定最后一页的页码
		$endNum = $startNum + $this->maxNum -1;
		//4.1防止最后一页页码越界
		if($endNum >$pages){
			$endNum = $pages;
		}
		//5.根据$startNum 和 $endNum拼凑出中间页码
		for($i=$startNum; $i <= $endNum; $i++){
			//选中当前页展现激活状态
			if($i == $pageNum){
				$strPage .= "<li class='active'><a href='{$this->url}&pageNum={$i}'>{$i}</a></li>";
			}else{
				$strPage .= "<li><a href='{$this->url}&pageNum={$i}'>{$i}</a></li>";
			}
		}
		//6.拼凑出 下一页 
		$nextPage = $pageNum + 1;
		if($pageNum == $pages){
			//当前页就是最大的页码数，禁用下一页
			$strPage .= "<li class='disabled'><a href='#'>下一页</a></li>";
		}else{
			$strPage .= "<li><a href='{$this->url}&pageNum={$nextPage}'>下一页</a></li>";
		}
		//7.拼凑出 尾页
		$strPage .= "<li><a href='{$this->$url}&pageNum={$pages}'>尾页</a></li>";
		//8.拼凑出 总页数
		$strPage .= "<li><a>共{$pages}页</a></li>";
		//9.收尾
		$strPage .= "</ul>";

		//返回分页字符串
		return $strPage;
	}

}