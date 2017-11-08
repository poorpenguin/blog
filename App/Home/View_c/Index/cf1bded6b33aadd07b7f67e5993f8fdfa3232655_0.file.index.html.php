<?php
/* Smarty version 3.1.29, created on 2017-11-06 03:22:26
  from "D:\wamp\www\blog\App\Home\View\Index\index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59ffc762d2c546_78416200',
  'file_dependency' => 
  array (
    'cf1bded6b33aadd07b7f67e5993f8fdfa3232655' => 
    array (
      0 => 'D:\\wamp\\www\\blog\\App\\Home\\View\\Index\\index.html',
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
function content_59ffc762d2c546_78416200 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'D:\\wamp\\www\\blog\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_truncate')) require_once 'D:\\wamp\\www\\blog\\Vendor\\Smarty\\plugins\\modifier.truncate.php';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../Public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <div class="content-wrap"><!--内容-->
    <div class="content">
      <!--热门文章-->
      <div class="content-block hot-content hidden-xs">
        <h2 class="title"><strong>本周热门排行</strong></h2>
        <ul>
          <li class="large"><a href="content.html" target="_blank"><img src="images/img3.jpg" alt="">
            <h3>PoorpenguinBlog上线 </h3>
            </a></li>
          <li><a href="content.html" target="_blank"><img src="images/logo.jpg" alt="">
            <h3>PoorpenguinBlog上线,在这里可以看到网站前端和后端的技术等 </h3>
            </a></li>
          <li><a href="content.html" target="_blank"><img src="images/img2.jpg" alt="">
            <h3>PoorpenguinBlog上线,在这里可以看到网站前端和后端的技术等 </h3>
            </a></li>
          <li><a href="content.html" target="_blank"><img src="images/img1.jpg" alt="">
            <h3>PoorpenguinBlog上线，在这里可以看到网站前端和后端的技术等 </h3>
            </a></li>
          <li><a href="content.html" target="_blank"><img src="images/logo.jpg" alt="">
            <h3>PoorpenguinBlog上线，在这里可以看到网站前端和后端的技术等 </h3>
            </a></li>
        </ul>
      </div>
      <!--推荐文章-->
      <div class="content-block new-content">
        <h2 class="title"><strong>推荐文章</strong></h2>
        <div class="row">
          <?php
$_from = $_smarty_tpl->tpl_vars['artInfo']->value;
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
          <div class="news-list">
            <div class="news-img col-xs-5 col-sm-5 col-md-4"> 
              <a target="_blank" href="">
                <img src="<?php echo $_smarty_tpl->tpl_vars['row']->value['art_thumb'];?>
" alt="">
              </a> 
            </div>
            <div class="news-info col-xs-7 col-sm-7 col-md-8">
              <dl>
                <dt> 
                  <a href="index.php?m=Home&c=Article&a=content&art_id=<?php echo $_smarty_tpl->tpl_vars['row']->value['art_id'];?>
" target="_blank" ><?php echo $_smarty_tpl->tpl_vars['row']->value['art_title'];?>
</a> 
                </dt>
                <dd>
                  <span class="name">
                    <a href="" title="<?php echo $_smarty_tpl->tpl_vars['row']->value['art_author'];?>
" rel="author"><?php echo $_smarty_tpl->tpl_vars['row']->value['art_author'];?>
</a>
                  </span> 
                  <span class="identity"></span> 
                  <span class="time"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['art_addtime'],'%Y-%m-%d');?>
</span>
                </dd>
                <dd class="text">
                  <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['row']->value['art_desc'],100,'...');?>

                </dd>
              </dl>
              <div class="news_bot col-sm-7 col-md-8"> 
                <span class="tags visible-lg visible-md"> 
                  <a href=""><?php echo $_smarty_tpl->tpl_vars['row']->value['cate_name'];?>
</a> 
                </span> 
                <!-- <span class="look">
                 共 <strong>2126</strong> 人围观，发现 <strong> 12 </strong> 个不明物体 
                </span> --> 
              </div>
            </div>
          </div>
          <?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['row']->_loop) {
?>
          <div class="news-list">
            <div class="news-img col-xs-5 col-sm-5 col-md-4"> 
              <a target="_blank" href=""><img src="<?php echo @constant('IMAGE_DIR');?>
/img1.jpg" alt=""> </a> 
            </div>
            <div class="news-info col-xs-7 col-sm-7 col-md-8">
              暂时无文章推荐
            </div>
          </div>
          <?php
}
if ($__foreach_row_0_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_item;
}
?>
        </div>
      </div>
    </div>
  </div>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../Public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
