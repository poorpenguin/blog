<?php
/* Smarty version 3.1.29, created on 2017-11-10 03:20:17
  from "D:\wamp\www\blog\App\Admin\View\Article\add.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a050ce18b8ba8_33486697',
  'file_dependency' => 
  array (
    'eeac460f5d4003876b4e8d1db8dbe3f456c2ae6b' => 
    array (
      0 => 'D:\\wamp\\www\\blog\\App\\Admin\\View\\Article\\add.html',
      1 => 1509345825,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Public/head.html' => 1,
    'file:../Public/footer.html' => 1,
  ),
),false)) {
function content_5a050ce18b8ba8_33486697 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../Public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-lg-10 col-md-offset-2 main" id="main">
  <div class="row">
    <form action="index.php?m=Admin&c=Article&a=add" method="post" enctype="multipart/form-data" class="add-article-form">
      <div class="col-md-9">
        <h1 class="page-header">撰写新文章</h1>
        <!--文章标题-->
        <div class="form-group">
          <label for="article-title" class="sr-only">标题</label>
          <input type="text" id="article-title" name="art_title" class="form-control" placeholder="在此处输入标题" required autofocus autocomplete="off">
        </div>
        
        <!--文章内容-->
        <div class="add-article-box">
          <h2 class="add-article-box-title"><span>文章内容</span></h2>
          <div class="add-article-box-content">
            <!--引入ckeditor插件-->
            <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('CURRENT_PUBLIC_DIR');?>
/lib/ckeditor/ckeditor.js"><?php echo '</script'; ?>
>
            <textarea id="ckeditor" name="art_comment"></textarea>
            <?php echo '<script'; ?>
 type="text/javascript">
              CKEDITOR.replace('ckeditor');
            <?php echo '</script'; ?>
>
          </div>
        </div>
      
        <!--文章描述-->
        <div class="add-article-box">
          <h2 class="add-article-box-title"><span>文章描述</span></h2>
          <div class="add-article-box-content">
          	<textarea class="form-control" name="art_desc" autocomplete="off"></textarea>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <h1 class="page-header">操作</h1>
        
        <!--文章描述-->
        <div class="add-article-box">
          <h2 class="add-article-box-title"><span>文章分类</span></h2>
          <div class="add-article-box-content">
            <div class="form-group">
              <label for="category-id">文章分类</label>
              <select id="category-id" class="form-control" name="cate_id">
                <option value="" selected></option>
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
                <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['cate_id'];?>
"><?php echo preg_replace('!^!m',str_repeat("--",$_smarty_tpl->tpl_vars['row']->value['level']),$_smarty_tpl->tpl_vars['row']->value['cate_name']);?>
</option>
                <?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_local_item;
}
if ($__foreach_row_0_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_item;
}
?>
              </select>
            </div>
          </div>
        </div>
        
        <!--文章描述-->
        <div class="add-article-box">
          <h2 class="add-article-box-title"><span>作者</span></h2>
          <div class="add-article-box-content">
            <input type="text" class="form-control" placeholder="输入作者名" name="art_author" required autocomplete="off">
          </div>
        </div>
        
        <!--缩略图-->
        <div class="add-article-box">
          <h2 class="add-article-box-title"><span>文章缩略图</span></h2>
          <div class="add-article-box-content">
            <div class="form-group">
              <label for="inputfile">文件输入</label>
              <input type="file" id="inputfile" name="art_thumb"/>
            </div>
          </div>
          <!-- <div class="add-article-box-footer">
            <button class="btn btn-default" type="button" ID="upImage">选择</button>
          </div> -->
        </div>

        <div class="add-article-box">
          <h2 class="add-article-box-title"><span>操作</span></h2>
          <div class="add-article-box-content">
          	<button class="btn btn-primary" type="submit">发布</button>
            <button class="btn btn-success">重置</button>
            <a class="btn btn-default" href="index.php?m=Admin&c=Article&a=index">返回</a>
          </div>
        </div>

      </div>
    </form>
  </div>
</div>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../Public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
