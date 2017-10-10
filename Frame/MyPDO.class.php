<?php
/**
 * PDO类的单例模式MyPDO类
 */
class MyPDO implements I_DAO{
	/**
	 * 定义相关的属性
	 */
	private $dbms; // 数据库类型
	private $host; //主机地址
	private $port; //端口地址
	private $user; //用户名
	private $pwd;  //密码
	private $dbname; //数据库名
	private $charset; //字符集
	private $dsn; //数据源名称
	private $pdo; //存放PDO类的对象
	//1.私有化静态属性保存对象
	private static $instance;

	//2.私有化构造方法
	private function __construct($config){
		$this->initParams($config);
		$this->initDsn();
		$this->initPdo();
		$this->initAttribute();
	}

	//3.获得单例对象的公开静态方法
	public static function getInstance($config){
		if(!self::$instance instanceof self){
			self::$instance = new self($config);
		}
		return self::$instance;
	}
	//4.私有化克隆方法
	private function __clone(){

	}
	/**
	 * 初始化属性
	 */
	private function initParams($config){
		$this->dbms = isset($config['dbms']) ? $config['dbms'] : 'mysql'; //数据库类型
		$this->host = isset($config['host']) ? $config['host'] : '127.0.0.1'; //主机地址
		$this->port = isset($config['port']) ? $config['port'] : '3306'; //端口地址
		$this->user = isset($config['user']) ? $config['user'] : 'root'; //用户名
		$this->pwd = isset($config['pwd']) ? $config['pwd'] : '';  //密码
		$this->dbname = isset($config['dbname']) ? $config['dbname'] : ''; //数据库名
		$this->charset = isset($config['charset']) ? $config['charset'] : 'utf8'; //字符集
	}
	/**
	 * 初始化dsn
	 */
	private function initDsn(){
		$this->dsn = "$this->dbms:host=$this->host;port=$this->port;dbname=$this->dbname;charset=$this->charset";
	}
	/**
	 * 实例化PDO对象，实例化PDO对象的时候不需要设置自动走异常模式
	 */
	private function initPdo(){
		try {
			$this->pdo = new PDO($this->dsn, $this->user, $this->pwd);
		} catch (PDOException $e) {
			$this->error($e);
		}
	}
	/**
	 * 初始化PDO对象属性
	 */
	private function initAttribute(){
		//把错误模式修改为异常模式
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	}
	/**
	 * 提示错误
	 */
	private function error($e){
		echo 'SQL执行失败<br />';
		echo '错误的信息为：',$e->getmessage(),'<br />';
		echo '错误的代码为：',$e->getCode(),'<br />';
		echo '错误的脚本为：',$e->getFile(),'<br />';
		echo '错误的行号为：',$e->getLine(),'<br />';
		return false;
	}
//****************************************************************************
	/**
	 * sql查询，增删改
	 * @param  string $sql sql语句
	 * @return mixed      操作影响的行数
	 */
	public function exec($sql){
		try {
			$result = $this->pdo->exec($sql);
		} catch (PDOException $e) {
			$this->error($e);
		}
		return $result;
	}
	/**
	 * sql查询返回多行多列
	 * @param  string $sql sql语句
	 * @return array      返回一个二维数组
	 */
	public function fetchAll($sql){
		try {
			$stmt = $this->pdo->query($sql);
			$result = $stmt->fetchAll();
			//释放资源
			$stmt->closeCursor();
		} catch (PDOException $e) {
			$this->error($e);
		}
		return $result;
	}
	/**
	 * sql查询，返回一行多列 		
	 * @param  string $sql sql语句
	 * @return mixed   返回一个数组
	 */
	public function fetchRow($sql){
		try {
			$stmt = $this->pdo->query($sql);
			$result = $stmt->fetch(PDO::FETCH_ASSOC);
			//释放资源
			$stmt->closeCursor();
		} catch (PDOException $e) {
			$this->error($e);
		}
		return $result;
	}
	/**
	 * sql查询，返回一行列列 		
	 * @param  string $sql sql语句
	 * @return mixed   返回一个值
	 */
	public function fetchColumn($sql){
		try {
			$stmt = $this->pdo->query($sql);
			$result = $stmt->fetchColumn();
			//释放资源
			$stmt->closeCursor();
		} catch (PDOException $e) {
			$this->error($e);
		}
		return $result;
	}

}