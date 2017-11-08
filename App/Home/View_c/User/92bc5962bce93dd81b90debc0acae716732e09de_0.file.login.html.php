<?php
/* Smarty version 3.1.29, created on 2017-11-08 07:40:41
  from "D:\wamp\www\blog\App\Home\View\User\login.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a02a6e90ebca7_64359313',
  'file_dependency' => 
  array (
    '92bc5962bce93dd81b90debc0acae716732e09de' => 
    array (
      0 => 'D:\\wamp\\www\\blog\\App\\Home\\View\\User\\login.html',
      1 => 1510123062,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a02a6e90ebca7_64359313 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>

<!-- Head -->
<head>
	<title>登录注册</title>
	<!-- Meta-Tags -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<?php echo '<script'; ?>
 type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } <?php echo '</script'; ?>
>
	<!-- //Meta-Tags -->
	<!-- Style --> 
	<link rel="stylesheet" href="<?php echo @constant('CSS_DIR');?>
/login.css" type="text/css" media="all">
	<link rel="shortcut icon" href="<?php echo @constant('IMAGE_DIR');?>
/icon/favicon.ico">
</head>
<!-- //Head -->

<!-- Body -->
<body>
	<h1>登录注册</h1>
	<div class="container w3layouts agileits">
		<div class="login w3layouts agileits">
			<h2>登 录</h2>
			<form action="index.php?m=Home&c=User&a=signin" method="post">
				<input type="text" name="user_name" placeholder="用户名" required="">
				<input type="password" name="user_pass" placeholder="密码" required="">
				<ul class="tick w3layouts agileits">
					<li>
						<input type="checkbox" id="brand1" value="">
						<label for="brand1"><span></span>记住我</label>
					</li>
				</ul>
				<div class="send-button w3layouts agileits">
					<input type="submit" value="登 录">
				</div>
			</form>
			<a href="#">忘记密码?</a>
			<div class="social-icons w3layouts agileits">
				<p>- 其他方式登录 -</p>
				<ul>
					<li class="qq"><a href="#">
					<span class="icons w3layouts agileits"></span>
					<span class="text w3layouts agileits">QQ</span></a></li>
					<li class="weixin w3ls"><a href="#">
					<span class="icons w3layouts"></span>
					<span class="text w3layouts agileits">微信</span></a></li>
					<li class="weibo aits"><a href="#">
					<span class="icons agileits"></span>
					<span class="text w3layouts agileits">微博</span></a></li>
					<div class="clear"> </div>
				</ul>
			</div>
			<div class="clear"></div>
		</div>
		<div class="register w3layouts agileits">
			<h2>注 册</h2>
			<form action="index.php?m=Home&c=User&a=register" method="post">
				<input type="text" name="user_name" placeholder="用户名" required="">
				<!-- <input type="text" Name="Email" placeholder="邮箱" required=""> -->
				<input type="password" name="user_pass1" placeholder="密码" required="">
				<input type="password" name="user_pass2" placeholder="重复密码" required="">
				<!-- <input type="text" Name="Phone Number" placeholder="手机号码" required=""> -->
				<div class="send-button w3layouts agileits">
					<input type="submit" value="免费注册">
				</div>
			</form>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
	</div>
</body>
<!-- //Body -->
</html><?php }
}
