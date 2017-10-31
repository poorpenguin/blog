<?php
/* Smarty version 3.1.29, created on 2017-10-31 04:29:57
  from "D:\wamp\www\blog\App\Home\View\Public\head.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59f7ee35e6c579_19930994',
  'file_dependency' => 
  array (
    'b0e5f4e0ee53479fd33d652b694b98bb20ba33a5' => 
    array (
      0 => 'D:\\wamp\\www\\blog\\App\\Home\\View\\Public\\head.html',
      1 => 1509420592,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f7ee35e6c579_19930994 ($_smarty_tpl) {
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>个人技术博客</title>
<link href="<?php echo @constant('CSS_DIR');?>
/bootstrap.min.css" type="text/css" rel="stylesheet">
<link href="<?php echo @constant('CSS_DIR');?>
/style.css" type="text/css" rel="stylesheet">
<link type="text/css" href="<?php echo @constant('CSS_DIR');?>
/nprogress.css" rel="stylesheet">
<!--[if lt IE 9]>
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
<link rel="apple-touch-icon-precomposed" href="<?php echo @constant('IMAGE_DIR');?>
/icon/icon.png">
<link rel="shortcut icon" href="<?php echo @constant('IMAGE_DIR');?>
/icon/favicon.ico">
<meta name="Keywords" content="" />
<meta name="description" content="" />
<?php echo '<script'; ?>
 type="text/javascript">
//判断浏览器是否支持HTML5
window.onload = function() {
	if (!window.applicationCache) {
		window.location.href="ie.html";
	}
}
<?php echo '</script'; ?>
>
</head>

<body>
<section class="container user-select">
  <header>
    <div class="hidden-xs header"><!--超小屏幕不显示-->
      <h1 class="logo"> <a href="index.html" title="个人技术博客"></a> </h1>
      <ul class="nav hidden-xs-nav">
        <li class="active">
          <a href="index.html"><span class="glyphicon glyphicon-home"></span>网站首页</a>
        </li>
        <?php
$_from = $_smarty_tpl->tpl_vars['cateInfo']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_row_0_saved_item = isset($_smarty_tpl->tpl_vars['row']) ? $_smarty_tpl->tpl_vars['row'] : false;
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$__foreach_row_0_saved_local_item = $_smarty_tpl->tpl_vars['row'];
?>
        <li>
          <a href="index.html"><span class="glyphicon glyphicon-home"></span><?php echo $_smarty_tpl->tpl_vars['row']->value['cate_name'];?>
</a>
        </li>
        <?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_local_item;
}
if ($__foreach_row_0_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_item;
}
?>
<!--         <li><a href=""><span class="glyphicon glyphicon-erase"></span>网站前端</a></li>
        <li><a href=""><span class="glyphicon glyphicon-inbox"></span>后端技术</a></li>
        <li><a href=""><span class="glyphicon glyphicon-globe"></span>管理系统</a></li>
        <li><a href="about.html"><span class="glyphicon glyphicon-user"></span>关于我们</a></li>
        <li><a href="friendly.html"><span class="glyphicon glyphicon-tags"></span>友情链接</a></li> -->
      </ul>
      <div class="feeds"> <a class="feed feed-xlweibo" href="" target="_blank"><i></i>新浪微博</a> <a class="feed feed-txweibo" href="" target="_blank"><i></i>腾讯微博</a> <a class="feed feed-rss" href="" target="_blank"><i></i>订阅本站</a> <a class="feed feed-weixin" data-toggle="popover" data-trigger="hover" title="微信扫一扫" data-html="true" data-content="<img src='<?php echo @constant('IMAGE_DIR');?>
/weixin.jpg' alt=''>" href="javascript:;" target="_blank"><i></i>关注微信</a> </div>
      <div class="wall"><a href="readerWall.html" target="_blank">读者墙</a> | <a href="tags.html" target="_blank">标签云</a></div>
    </div>
    <!--/超小屏幕不显示-->
    <div class="visible-xs header-xs"><!--超小屏幕可见-->
      <div class="navbar-header header-xs-logo">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-xs-menu" aria-expanded="false" aria-controls="navbar"><span class="glyphicon glyphicon-menu-hamburger"></span></button>
      </div>
      <div id="header-xs-menu" class="navbar-collapse collapse">
        <ul class="nav navbar-nav header-xs-nav">
          <li class="active"><a href="index.html"><span class="glyphicon glyphicon-home"></span>网站首页</a></li>
          <li><a href=""><span class="glyphicon glyphicon-erase"></span>网站前端</a></li>
          <li><a href=""><span class="glyphicon glyphicon-inbox"></span>后端技术</a></li>
          <li><a href=""><span class="glyphicon glyphicon-globe"></span>管理系统</a></li>
          <li><a href="about.html"><span class="glyphicon glyphicon-user"></span>关于我们</a></li>
          <li><a href="friendly.html"><span class="glyphicon glyphicon-tags"></span>友情链接</a></li>
        </ul>
        <form class="navbar-form" action="search.php" method="post" style="padding:0 25px;">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="请输入关键字">
            <span class="input-group-btn">
            <button class="btn btn-default btn-search" type="submit">搜索</button>
            </span> </div>
        </form>
      </div>
    </div>
  </header>
  <!--/超小屏幕可见--><?php }
}
