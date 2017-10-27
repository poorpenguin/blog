<?php
/* Smarty version 3.1.29, created on 2017-10-27 02:58:30
  from "D:\wamp\www\blog\App\Admin\View\Public\head.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59f284b6b8c638_03932449',
  'file_dependency' => 
  array (
    'beda6860961c15684ada141f7b3080f6498a6a33' => 
    array (
      0 => 'D:\\wamp\\www\\blog\\App\\Admin\\View\\Public\\head.html',
      1 => 1508813603,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f284b6b8c638_03932449 ($_smarty_tpl) {
?>
<!doctype html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>poorpenguin博客管理</title>
<link rel="stylesheet" type="text/css" href="<?php echo @constant('CSS_DIR');?>
/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo @constant('CSS_DIR');?>
/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo @constant('CSS_DIR');?>
/font-awesome.min.css">
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
<section class="container-fluid">
  <header>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">切换导航</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <a class="navbar-brand" href="/">PoorPenguinCMS</a> </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="">消息 <span class="badge">1</span></a></li>
            <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['pp_blog_admininfo']['admin_name'];?>
<span class="caret"></span></a>
              <ul class="dropdown-menu dropdown-menu-left">
                <li><a title="查看或修改个人信息" data-toggle="modal" data-target="#seeUserInfo">个人信息</a></li>
                <li><a title="查看您的登录记录" data-toggle="modal" data-target="#seeUserLoginlog">登录记录</a></li>
              </ul>
            </li>
            <li><a href="index.php?m=Admin&c=Admin&a=loginOut" onClick="if(!confirm('是否确认退出？'))return false;">退出登录</a></li>
            <li><a data-toggle="modal" data-target="#WeChat">帮助</a></li>
          </ul>
          <form action="" method="post" class="navbar-form navbar-right" role="search">
            <div class="input-group">
              <input type="text" class="form-control" autocomplete="off" placeholder="键入关键字搜索" maxlength="15">
              <span class="input-group-btn">
              <button class="btn btn-default" type="submit">搜索</button>
              </span> </div>
          </form>
        </div>
      </div>
    </nav>
  </header>
  <div class="row">
    <aside class="col-sm-3 col-md-2 col-lg-2 sidebar">
      <ul class="nav nav-sidebar">
        <li><a href="index.php?m=Admin&c=Index&a=index">报告</a></li>
      </ul>
      <ul class="nav nav-sidebar">
        <li><a href="index.php?m=Admin&c=Article&a=index">文章</a></li>
        <li><a href="notice.html">公告</a></li>
        <li><a href="comment.html">评论</a></li>
        <li><a data-toggle="tooltip" data-placement="bottom" title="网站暂无留言功能">留言</a></li>
      </ul>
      <ul class="nav nav-sidebar">
        <li><a href="index.php?m=Admin&c=Category&a=index">分类</a></li>
        <li><a class="dropdown-toggle" id="otherMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">其他</a>
          <ul class="dropdown-menu" aria-labelledby="otherMenu">
            <li><a href="flink.html">友情链接</a></li>
            <li><a data-toggle="modal" data-target="#areDeveloping">访问记录</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav nav-sidebar">
        <li><a class="dropdown-toggle" id="userMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">用户</a>
          <ul class="dropdown-menu" aria-labelledby="userMenu">
            <li><a data-toggle="modal" data-target="#areDeveloping">管理用户组</a></li>
            <li><a href="manage-user.html">管理用户</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="loginlog.html">管理登录日志</a></li>
          </ul>
        </li>
        <li><a class="dropdown-toggle" id="settingMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">设置</a>
          <ul class="dropdown-menu" aria-labelledby="settingMenu">
            <li><a href="setting.html">基本设置</a></li>
            <li><a href="readset.html">阅读设置</a></li>
            <li role="separator" class="divider"></li>
            <li><a data-toggle="modal" data-target="#areDeveloping">安全配置</a></li>
            <li role="separator" class="divider"></li>
            <li class="disabled"><a>扩展菜单</a></li>
          </ul>
        </li>
      </ul>
    </aside><?php }
}
