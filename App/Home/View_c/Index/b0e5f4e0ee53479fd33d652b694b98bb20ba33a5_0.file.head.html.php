<?php
/* Smarty version 3.1.29, created on 2017-11-08 09:27:00
  from "D:\wamp\www\blog\App\Home\View\Public\head.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a02bfd4733967_29374016',
  'file_dependency' => 
  array (
    'b0e5f4e0ee53479fd33d652b694b98bb20ba33a5' => 
    array (
      0 => 'D:\\wamp\\www\\blog\\App\\Home\\View\\Public\\head.html',
      1 => 1510129501,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a02bfd4733967_29374016 ($_smarty_tpl) {
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
        <li>
          <a href="index.php?m=Home&c=Index&a=index"><span class="glyphicon glyphicon-home"></span>网站首页</a>
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
          <a href="index.php?m=Home&c=Article&a=index&cate_id=<?php echo $_smarty_tpl->tpl_vars['row']->value['cate_id'];?>
"><span class="glyphicon glyphicon-home"></span><?php echo $_smarty_tpl->tpl_vars['row']->value['cate_name'];?>
</a>
        </li>
        <?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_local_item;
}
if ($__foreach_row_0_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_item;
}
?>
        <li>
          <?php if ((($tmp = @$_SESSION['blog_userinfo']['user_id'])===null||$tmp==='' ? 0 : $tmp) > 0) {?>
          <a href="index.php?m=Home&c=User&a=logout">
            <span class="glyphicon glyphicon-log-out"></span>退出登录
          </a>
          <?php } else { ?>
          <a href="index.php?m=Home&c=User&a=login">
            <span class="glyphicon glyphicon-user"></span>登录注册
          </a>
          <?php }?>
        </li>
      </ul>
      <div class="feeds"> 
        <a class="feed feed-xlweibo" href="" target="_blank"><i></i>新浪微博</a> 
        <a class="feed feed-txweibo" href="" target="_blank"><i></i>腾讯微博</a> 
        <a class="feed feed-rss" href="" target="_blank"><i></i>订阅本站</a> 
        <a class="feed feed-weixin" data-toggle="popover" data-trigger="hover" title="微信扫一扫" data-html="true" data-content="<img src='<?php echo @constant('IMAGE_DIR');?>
/weixin.jpg' alt=''>" href="javascript:;" target="_blank"><i></i>关注微信</a> 
      </div>
      <!--分享按钮-->
      <div class="wall">
        <div class="bdsharebuttonbox">
          <a href="#" class="bds_more" data-cmd="more"></a>
          <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
          <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
          <a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
          <a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a>
          <a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
        </div>
        
        <?php echo '<script'; ?>
>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"24"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
        <?php echo '</script'; ?>
>
        
      </div>
      <!--/分享按钮-->
    </div>
    <!--/超小屏幕不显示-->
    <!--超小屏幕可见-->
    <div class="visible-xs header-xs">
      <div class="navbar-header header-xs-logo">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-xs-menu" aria-expanded="false" aria-controls="navbar"><span class="glyphicon glyphicon-menu-hamburger"></span></button>
      </div>
      <div id="header-xs-menu" class="navbar-collapse collapse">
        <ul class="nav navbar-nav header-xs-nav">
          <li>
            <a href="index.php?m=Home&c=Index&a=index"><span class="glyphicon glyphicon-home"></span>网站首页</a>
          </li>
          <?php
$_from = $_smarty_tpl->tpl_vars['cateInfo']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_row_1_saved_item = isset($_smarty_tpl->tpl_vars['row']) ? $_smarty_tpl->tpl_vars['row'] : false;
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$__foreach_row_1_saved_local_item = $_smarty_tpl->tpl_vars['row'];
?>
          <li>
            <a href="index.php?m=Home&c=Article&a=index&cate_id=<?php echo $_smarty_tpl->tpl_vars['row']->value['cate_id'];?>
"><span class="glyphicon glyphicon-home"></span><?php echo $_smarty_tpl->tpl_vars['row']->value['cate_name'];?>
</a>
          </li>
          <?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_1_saved_local_item;
}
if ($__foreach_row_1_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_1_saved_item;
}
?>
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
