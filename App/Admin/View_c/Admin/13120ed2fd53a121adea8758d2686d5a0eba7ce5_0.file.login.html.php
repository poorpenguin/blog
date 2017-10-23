<?php
/* Smarty version 3.1.29, created on 2017-10-23 08:06:59
  from "D:\wamp\www\blog\App\Admin\View\Admin\login.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59ed87034dacd2_14453974',
  'file_dependency' => 
  array (
    '13120ed2fd53a121adea8758d2686d5a0eba7ce5' => 
    array (
      0 => 'D:\\wamp\\www\\blog\\App\\Admin\\View\\Admin\\login.html',
      1 => 1507794358,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ed87034dacd2_14453974 ($_smarty_tpl) {
?>
<!doctype html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>个人博客后台</title>
<link rel="stylesheet" type="text/css" href="<?php echo @constant('CSS_DIR');?>
/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo @constant('CSS_DIR');?>
/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo @constant('CSS_DIR');?>
/login.css">
<link rel="apple-touch-icon-precomposed" href="<?php echo @constant('IMAGE_DIR');?>
/icon/icon.png">
<link rel="shortcut icon" href="<?php echo @constant('IMAGE_DIR');?>
/icon/favicon.ico">
<?php echo '<script'; ?>
 src="<?php echo @constant('JS_DIR');?>
/jquery-2.1.4.min.js"><?php echo '</script'; ?>
>
<!--[if gte IE 9]>
  <?php echo '<script'; ?>
 src="<?php echo @constant('JS_DIR');?>
/jquery-1.11.1.min.js" type="text/javascript"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo @constant('JS_DIR');?>
/html5shiv.min.js" type="text/javascript"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo @constant('JS_DIR');?>
/respond.min.js" type="text/javascript"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo @constant('JS_DIR');?>
/selectivizr-min.js" type="text/javascript"><?php echo '</script'; ?>
>
<![endif]-->
<!--[if lt IE 9]>
  <?php echo '<script'; ?>
>window.location.href='upgrade-browser.html';<?php echo '</script'; ?>
>
<![endif]-->
</head>

<body class="user-select">
<div class="container">

    <div class="siteIcon">
        <img src="<?php echo @constant('IMAGE_DIR');?>
/icon/icon.png" alt="" data-toggle="tooltip" data-placement="top" title="个人博客后台" draggable="false" />
    </div>

    <form action="index.php?m=<?php echo @constant('MODULE');?>
&c=<?php echo @constant('CONTROLLER');?>
&a=check" method="post" autocomplete="off" class="form-signin">
        <h2 class="form-signin-heading">管理员登录</h2>

        <label for="userName" class="sr-only">用户名</label>
        <input type="text" id="userName" name="admin_name" class="form-control" placeholder="请输入用户名" required autofocus autocomplete="off" maxlength="12">

        <label for="userPwd" class="sr-only">密码</label>
        <input type="password" id="userPwd" name="admin_pass" class="form-control" placeholder="请输入密码" required autocomplete="off" maxlength="18">

        <label for="captcha" class="sr-only">验证码</label>
        <input type="captcha" id="captcha" name="admin_captcha" class="form-control" style="width: 45%;" placeholder="请输入验证码" required autocomplete="off" maxlength="18">
        <img src="index.php?m=<?php echo @constant('MODULE');?>
&c=<?php echo @constant('CONTROLLER');?>
&a=captcha" onclick="this.src='index.php?m=<?php echo @constant('MODULE');?>
&c=<?php echo @constant('CONTROLLER');?>
&a=captcha&n='+Math.random()" width="80" height="32"/>

        <a href="main.html"><button class="btn btn-lg btn-primary btn-block" type="submit" id="signinSubmit">登录</button></a>
    </form>

    <!-- <div class="footer">
        <p>
          <a href="index.html" data-toggle="tooltip" data-placement="left" title="不知道自己在哪?">回到后台 →</a>
        </p>
    </div> -->
</div>
<?php echo '<script'; ?>
 src="<?php echo @constant('JS_DIR');?>
/bootstrap.min.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
>
$('[data-toggle="tooltip"]').tooltip();
window.oncontextmenu = function(){
	//return false;
};
$('.siteIcon img').click(function(){
	window.location.reload();
});
$('#signinSubmit').click(function(){
	if($('#userName').val() === ''){
		$(this).text('用户名不能为空');
	}else if($('#userPwd').val() === ''){
		$(this).text('密码不能为空');
	}else{
		$(this).text('请稍后...');
	}
});
<?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
