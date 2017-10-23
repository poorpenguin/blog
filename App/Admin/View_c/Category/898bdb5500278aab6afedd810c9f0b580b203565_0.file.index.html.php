<?php
/* Smarty version 3.1.29, created on 2017-10-23 11:20:54
  from "D:\wamp\www\blog\App\Admin\View\Category\index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59edb476d4a7f2_29729175',
  'file_dependency' => 
  array (
    '898bdb5500278aab6afedd810c9f0b580b203565' => 
    array (
      0 => 'D:\\wamp\\www\\blog\\App\\Admin\\View\\Category\\index.html',
      1 => 1508750452,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Public/head.html' => 1,
    'file:../Public/footer.html' => 1,
  ),
),false)) {
function content_59edb476d4a7f2_29729175 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../Public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-lg-10 col-md-offset-2 main" id="main">
  <div class="row">
    <!--添加分类表单-->
    <div class="col-md-4">
      <h1 class="page-header">添加</h1>
      <form action="index.php?m=Admin&c=Category&a=add" method="post" autocomplete="off">
        <!--分类名称-->
        <div class="form-group">
          <label for="category-name">分类名称</label>
          <input type="text" id="category-name" name="cate_name" class="form-control" placeholder="在此处输入栏目名称" required autocomplete="off">
          <span class="prompt-text">这将是它在站点上显示的名字。</span> 
        </div>
        <!--父节点-->
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
          <span class="prompt-text">分类是有层级关系的，您可以有一个“音乐”分类目录，在这个目录下可以有叫做“流行”和“古典”的子目录，主分类是顶级的。</span> 
        </div>
        <!--分类顺序-->
        <div class="form-group">
          <label for="category-sort">分类顺序</label>
          <input type="text" id="category-sort" name="cate_sort" class="form-control" placeholder="在此处输入分类顺序" required autocomplete="off">
          <span class="prompt-text">直接输入数字即可。</span> 
        </div>
        <!--分类描述-->
        <div class="form-group">
          <label for="category-describe">分类描述</label>
          <textarea class="form-control" id="category-describe" name="cate_desc" rows="4" required autocomplete="off"></textarea>
          <span class="prompt-text">对分类的描述。</span> 
        </div>
        <!--提交按钮-->
        <button class="btn btn-primary" type="submit">添加新栏目</button>
      </form>
    </div>

    <!--分类展示列表-->
    <div class="col-md-8">
      <h1 class="page-header">管理 <span class="badge">3</span></h1>
      <div class="table-responsive">
        <form action="index.php?m=Admin&c=Category&a=deleteAll" method="post">
          <a class="btn btn-default" onClick="select()">全选</a> 
          <a class="btn btn-default" onClick="reverse()">反选</a> 
          <a class="btn btn-default" onClick="noselect()">不选</a>
          <input type="submit" class="btn btn-warning btn-sm" onclick="return confirm('此操作不可逆，是否确认批量删除？')" value="批量删除"/>
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th><span class="glyphicon glyphicon-paperclip"></span> <span class="visible-lg">选择</span></th>
                <th><span class="glyphicon glyphicon-file"></span> <span class="visible-lg">类别</span></th>
                <th><span class="glyphicon glyphicon-list-alt"></span> <span class="visible-lg">名称</span></th>
                <th><span class="glyphicon glyphicon-pushpin"></span> <span class="visible-lg">描述</span></th>
                <th><span class="glyphicon glyphicon-pencil"></span> <span class="visible-lg">操作</span></th>
              </tr>
            </thead>
            <tbody>
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
              <tr>
                <td><input type="checkbox" name="id[]" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['cate_id'];?>
"></td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['cate_pid'];?>
</td>
                <td><?php echo preg_replace('!^!m',str_repeat("--",$_smarty_tpl->tpl_vars['row']->value['level']),$_smarty_tpl->tpl_vars['row']->value['cate_name']);?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['cate_desc'];?>
</td>
                <td>
                  <a class="btn btn-info btn-xs" href="index.php?m=Admin&c=Category&a=update&cate_id=<?php echo $_smarty_tpl->tpl_vars['row']->value['cate_id'];?>
">修改</a> 
                  <a class="btn btn-danger btn-xs" href="index.php?m=Admin&c=Category&a=delete&cate_id=<?php echo $_smarty_tpl->tpl_vars['row']->value['cate_id'];?>
" onclick="return confirm('此操作不可逆，是否确认删除？')">删除</a>
                </td>
              </tr>
            <?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_1_saved_local_item;
}
if ($__foreach_row_1_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_1_saved_item;
}
?>
            </tbody>
          </table>
        </form>
        <span class="prompt-text"><strong>注：</strong>删除一个栏目也会删除栏目下的文章和子栏目,请谨慎删除!</span> </div>
    </div>
  </div>
</div>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../Public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
