<?php
class IndexController extends BaseController{
	public function index(){
		//实例化获取推荐文章
		$article = Factory::M('ArticleModel');
		$artInfo = $article->getRecommentArt(5);

		$this->assign('artInfo',$artInfo);
		$this->display();
	}
	/**
	 * 测试获取微信access_token
	 * 
	 */
	public function getWXAccessToken(){
		$appId = 'wxb2eddeddccc99398';
		$appSecret = 'bd7d60cf5e7b74b30f1d971f37c2ab2c';
		$url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=$appId&secret=$appSecret";
		$res = $this->curlRequest($url,false,true);
		var_dump(json_decode($res,true));
	}
	/**
	 * 获取微信服务器IP
	 */
	public function getWXServerIP(){
		$access_token = '_AYedYueuQIcyngQ99UXn8qquJiGhR6xRtnJS3dxDju5DiQp5c7_kT4ZdMIdQ7g0vvV22RqlxD_kBBKc4wxTPk3-70elUnkbPfwvOLRMf89a97EUDu4tjrfvkvYWy2FZILAdADABET';
		$url = "https://api.weixin.qq.com/cgi-bin/getcallbackip?access_token=$access_token";
		$res = $this->curlRequest($url,false,true);
		var_dump(json_decode($res,true));
	}
	/**
	 * curl请求(可发起post或者get请求)	
	 * @param  string  	$url  	请求地址
	 * @param  boolean 	$post 	是否为post请求
	 * @param  boolean 	$http 	是否是https协议
	 * @param  array  	$data 	post请求时所带的参数（必须是数组）
	 * @return mixed  	请求的返回值
	 */
	public function curlRequest($url,$post=true,$https=false,$data=null){
		//1.初始化（创建链接）
		$ch = curl_init($url);
		//2.设置参数
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);	//请求结果不输出，而是接收
			//2.1判断是否是post请求
		if( $post===true ){
			curl_setopt($ch, CURLOPT_POST, true);	//设置请求类型为POST
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data); //设置请求POST参数,$data必须是数组
		}
			//2.2判断是否是https请求
		if( $https===true ){
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); //禁止验证对等证书
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); //禁止验证主机证书
		}
		//3.发送请求 和 接收数据
		$res = curl_exec($ch);
		//4.关闭连接
		curl_close($ch);

		//5.返回数据
		return $res;
	}
}