<?php
/**
 * DAO层操作接口
 */
interface I_DAO {
	public static function getInstance($config);
	public function exec($sql);
	public function fetchAll($sql);
	public function fetchRow($sql);
	public function fetchColumn($sql);
}