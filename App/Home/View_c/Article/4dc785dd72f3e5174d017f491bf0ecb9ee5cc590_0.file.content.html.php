<?php
/* Smarty version 3.1.29, created on 2017-11-06 03:23:04
  from "D:\wamp\www\blog\App\Home\View\Article\content.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59ffc788ebe0f6_72669947',
  'file_dependency' => 
  array (
    '4dc785dd72f3e5174d017f491bf0ecb9ee5cc590' => 
    array (
      0 => 'D:\\wamp\\www\\blog\\App\\Home\\View\\Article\\content.html',
      1 => 1509933967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Public/head.html' => 1,
    'file:../Public/footer.html' => 1,
  ),
),false)) {
function content_59ffc788ebe0f6_72669947 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'D:\\wamp\\www\\blog\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_truncate')) require_once 'D:\\wamp\\www\\blog\\Vendor\\Smarty\\plugins\\modifier.truncate.php';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../Public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <div class="content-wrap"><!--内容-->
    <div class="content">
      <!--面包屑导航-->
      <div class="row">
            <ol class="breadcrumb">
            <?php
$_from = $_smarty_tpl->tpl_vars['treeCateInfo']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_value_0_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$__foreach_value_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$__foreach_value_0_iteration=0;
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$__foreach_value_0_iteration++;
$_smarty_tpl->tpl_vars['value']->last = $__foreach_value_0_iteration == $__foreach_value_0_total;
$__foreach_value_0_saved_local_item = $_smarty_tpl->tpl_vars['value'];
?>
              <?php if ($_smarty_tpl->tpl_vars['value']->last) {?>
            <li class="active">
              <?php echo $_smarty_tpl->tpl_vars['value']->value;?>

            </li>
            <?php } else { ?>
            <li>
              <a href="index.php?m=Home&c=Article&a=index&cate_id=<?php echo $_smarty_tpl->tpl_vars['value']->key;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</a>
            </li>
            <?php }?>
          <?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_0_saved_local_item;
}
if ($__foreach_value_0_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_0_saved_item;
}
?>
        </ol>
        <!-- <h2 class="title"><strong><?php echo $_smarty_tpl->tpl_vars['cateParentInfo']->value['cate_name'];?>
</strong></h2> -->
      </div>
      <!--/面包屑导航-->
      <!--文章内容-->
      <header class="news_header">
        <h2><?php echo $_smarty_tpl->tpl_vars['artInfo']->value['art_title'];?>
</h2>
        <ul>
          <li><?php echo $_smarty_tpl->tpl_vars['artInfo']->value['art_author'];?>
 发布于 <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['artInfo']->value['art_addtime'],'%Y-%m-%d');?>
</li>
          <li>分类：<a href="" title="" target="_blank"><?php echo $_smarty_tpl->tpl_vars['artInfo']->value['cate_name'];?>
</a></li>
          <li>来源：<a href="" title="" target="_blank">互联网</a></li>
          <li>浏览： <strong><?php echo $_smarty_tpl->tpl_vars['artInfo']->value['art_hits'];?>
</strong></li>
        </ul>
      </header>
      <article class="news_content">
        <?php echo $_smarty_tpl->tpl_vars['artInfo']->value['art_comment'];?>

      </article>
      <!--/文章内容-->
      <!--赞-->
      <div class="zambia"><a href="javascript:;" name="zambia" rel=""><span class="glyphicon glyphicon-thumbs-up"></span> 赞（0）</a>
      </div>
      <!--/赞-->
      <div class="tags news_tags">标签： 
        <span data-toggle="tooltip" data-placement="bottom" title="<?php echo $_smarty_tpl->tpl_vars['artInfo']->value['cate_name'];?>
">
          <a href=""><?php echo $_smarty_tpl->tpl_vars['artInfo']->value['cate_name'];?>
</a>
        </span> 
      </div>
      <!--上一篇和下一篇-->
      <nav class="page-nav"> 
        <span class="page-nav-prev">上一篇:
          <a href="index.php?m=Home&c=Article&a=content&art_id=<?php echo (($tmp = @$_smarty_tpl->tpl_vars['prev']->value['art_id'])===null||$tmp==='' ? $_GET['art_id'] : $tmp);?>
" title="<?php echo $_smarty_tpl->tpl_vars['prev']->value['art_title'];?>
" rel="prev">
            <?php echo (($tmp = @smarty_modifier_truncate($_smarty_tpl->tpl_vars['prev']->value['art_title'],20,'...'))===null||$tmp==='' ? '没有上一篇了!' : $tmp);?>

          </a>
        </span> 
        <span class="page-nav-next">下一篇:
          <a href="index.php?m=Home&c=Article&a=content&art_id=<?php echo (($tmp = @$_smarty_tpl->tpl_vars['next']->value['art_id'])===null||$tmp==='' ? $_GET['art_id'] : $tmp);?>
" title="<?php echo $_smarty_tpl->tpl_vars['next']->value['art_title'];?>
" rel="prev">
            <?php echo (($tmp = @smarty_modifier_truncate($_smarty_tpl->tpl_vars['next']->value['art_title'],20,'...'))===null||$tmp==='' ? '没有下一篇了!' : $tmp);?>

          </a>
        </span> 
      </nav>
      <!--/上一篇和下一篇-->
      <!--评论-->
      <div class="content-block comment">
        <h2 class="title"><strong>评论</strong></h2>
        <form action="comment.php" method="post" class="form-inline" id="comment-form">
          <div class="comment-title">
            <div class="form-group">
              <label for="commentName">昵称：</label>
              <input type="text" name="commentName" class="form-control" id="commentName" placeholder="技术博客">
            </div>
            <div class="form-group">
              <label for="commentEmail">邮箱：</label>
              <input type="email" name="commentEmail" class="form-control" id="commentEmail" placeholder="admin@xxxx.com">
            </div>
          </div>
          <div class="comment-form">
            <textarea placeholder="你的评论可以一针见血" name="commentContent"></textarea>
            <div class="comment-form-footer">
              <div class="comment-form-text">请先 <a href="javascript:;">登录</a> 或 <a href="javascript:;">注册</a>，也可匿名评论 </div>
              <div class="comment-form-btn">
                <button type="submit" class="btn btn-default btn-comment">提交评论</button>
              </div>
            </div>
          </div>
        </form>
        <div class="comment-content">
          <ul>
            <li><span class="face"><img src="<?php echo @constant('IMAGE_DIR');?>
/icon/icon.png" alt=""></span> <span class="text"><strong>技术博客站长</strong> (2015-10-18) 说：<br />
              欢迎来到个人技术博客，在这里可以看到网站前端和后端的技术等在这里可以看到网站前端和后端的技术等在这里可以看到网站前端和后端的技术等 ...</span></li>
            <li><span class="face"><img src="<?php echo @constant('IMAGE_DIR');?>
/icon/icon.png" alt=""></span> <span class="text"><strong>技术博客编辑</strong> (2015-10-18) 说：<br />
              欢迎来到个人技术博客，在这里可以看到网站前端和后端的技术等 ...</span></li>
            <li><span class="face"><img src="<?php echo @constant('IMAGE_DIR');?>
/icon/icon.png" alt=""></span> <span class="text"><strong>令狐冲</strong> (2015-10-18) 说：<br />
              欢迎来到个人技术博客，在这里可以看到网站前端和后端的技术等在这里可以看到网站前端和后端的技术等在这里可以看到网站前端和后端的技术等在这里可以看到网站前端和后端的技术等在这里可以看到网站前端和后端的技术等在这里可以看到网站前端和后端的技术等 ...</span></li>
            <li><span class="face"><img src="<?php echo @constant('IMAGE_DIR');?>
/icon/icon.png" alt=""></span> <span class="text"><strong>任盈盈</strong> (2015-10-18) 说：<br />
              欢迎来到个人技术博客，在这里可以看到网站前端和后端的技术等在这里可以看到网站前端和后端的技术等在这里可以看到网站前端和后端的技术等 ...欢迎来到个人技术博客，在这里可以看到网站前端和后端的技术等在这里可以看到网站前端和后端的技术等在这里可以看到网站前端和后端的技术等 ...欢迎来到个人技术博客，在这里可以看到网站前端和后端的技术等在这里可以看到网站前端和后端的技术等在这里可以看到网站前端和后端的技术等 ...</span></li>
            <li><span class="face"><img src="<?php echo @constant('IMAGE_DIR');?>
/icon/icon.png" alt=""></span> <span class="text"><strong>技术博客站长</strong> (2015-10-18) 说：<br />
              欢迎来到个人技术博客，在这里可以看到网站前端和后端的技术等 ...</span></li>
          </ul>
        </div>
      </div>
      <!--/评论-->
    </div>
  </div>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../Public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
