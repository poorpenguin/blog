<?php
/* Smarty version 3.1.29, created on 2017-10-31 04:16:45
  from "D:\wamp\www\blog\App\Admin\View\Category\update.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59f7eb1d869b28_10180201',
  'file_dependency' => 
  array (
    'de0eb71854201e2110635857c2f223dce2205a6a' => 
    array (
      0 => 'D:\\wamp\\www\\blog\\App\\Admin\\View\\Category\\update.html',
      1 => 1508805985,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Public/head.html' => 1,
    'file:../Public/footer.html' => 1,
  ),
),false)) {
function content_59f7eb1d869b28_10180201 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../Public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-lg-10 col-md-offset-2 main" id="main">
  <h1 class="page-header">修改栏目</h1>
  <form action="index.php?m=Admin&c=Category&a=update&cate_id=<?php echo $_smarty_tpl->tpl_vars['cateInfoById']->value['cate_id'];?>
" method="post">

    <div class="form-group">
      <label for="category-name">分类名称</label>
      <input type="text" id="category-name" name="cate_name" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['cateInfoById']->value['cate_name'];?>
" placeholder="在此处输入栏目名称" required autocomplete="off">
      <span class="prompt-text">这将是它在站点上显示的名字。</span> 
    </div>

    <div class="form-group">
      <label for="category-pid">父节点</label>
      <select id="category-pid" class="form-control" name="cate_pid">
        <option value="0" selected>主分类</option>
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
" <?php if ($_smarty_tpl->tpl_vars['cateInfoById']->value['cate_pid'] == $_smarty_tpl->tpl_vars['row']->value['cate_id']) {?>selected="selected"<?php }?>><?php echo preg_replace('!^!m',str_repeat("--",$_smarty_tpl->tpl_vars['row']->value['level']),$_smarty_tpl->tpl_vars['row']->value['cate_name']);?>
</option>
        <?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_local_item;
}
if ($__foreach_row_0_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_item;
}
?>
      </select>
      <span class="prompt-text">栏目是有层级关系的，您可以有一个“音乐”分类目录，在这个目录下可以有叫做“流行”和“古典”的子目录，主分类是顶级的。</span> 
    </div>

    <div class="form-group">
      <label for="category-desc">分类排序</label>
      <input type="text" id="category-desc" name="cate_sort" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['cateInfoById']->value['cate_sort'];?>
" placeholder="在此处输入栏目关键字" required autocomplete="off">
      <span class="prompt-text">直接输入数字即可。</span> 
    </div>

    <div class="form-group">
      <label for="category-describe">分类描述</label>
      <textarea class="form-control" id="category-describe" name="cate_desc" rows="4" required autocomplete="off"><?php echo $_smarty_tpl->tpl_vars['cateInfoById']->value['cate_desc'];?>
</textarea>
      <span class="prompt-text">对分类的描述。</span> 
    </div>
	
	<input type="hidden" name="cate_id" value="<?php echo $_smarty_tpl->tpl_vars['cateInfoById']->value['cate_id'];?>
"/>
    <button class="btn btn-primary" type="submit">更新</button>
    <a class="btn btn-primary" href="index.php?m=Admin&c=Category
    &a=index">返回</a>
  </form>
</div>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../Public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
