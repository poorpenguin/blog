<?php
/* Smarty version 3.1.29, created on 2017-10-31 09:45:05
  from "D:\wamp\www\blog\App\Admin\View\Article\index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59f83811d9cc69_55668324',
  'file_dependency' => 
  array (
    '9b2f899048cdb15d5ccfeea2f556568e205ff5e5' => 
    array (
      0 => 'D:\\wamp\\www\\blog\\App\\Admin\\View\\Article\\index.html',
      1 => 1509439502,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Public/head.html' => 1,
    'file:../Public/footer.html' => 1,
  ),
),false)) {
function content_59f83811d9cc69_55668324 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'D:\\wamp\\www\\blog\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../Public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-lg-10 col-md-offset-2 main" id="main">
  <form action="index.php?m=Admin&c=Article&a=deleteAll" method="post" >
    <h1 class="page-header">文章</h1>
    <ol class="breadcrumb">
      <li><a class="btn btn-primary btn-sm" href="index.php?m=Admin&c=Article&a=add">添加文章</a></li>
      <li>
        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('确实删除？')">批量删除</button>
      </li>
      <li><a class="btn btn-success btn-sm" href="index.php?m=Admin&c=Article&a=recycle">回收站</a></li>
    </ol>
    <h1 class="page-header">管理 <span class="badge">7</span></h1>
    <div class="table-responsive">
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th>
              <span class="glyphicon glyphicon-th-large"></span> 
              <span class="visible-lg">选择</span>
            </th>
            <th>
              <span class="glyphicon glyphicon-file"></span> 
              <span class="visible-lg">标题</span>
            </th>
            <th>
              <span class="glyphicon glyphicon-list"></span> 
              <span class="visible-lg">分类</span>
            </th>
            <th class="hidden-sm">
              <span class="glyphicon glyphicon-tag"></span> 
              <span class="visible-lg">作者</span>
            </th>
            <th class="hidden-sm">
              <span class="glyphicon glyphicon-comment"></span> 
              <span class="visible-lg">描述</span>
            </th>
            <th>
              <span class="glyphicon glyphicon-time"></span> 
              <span class="visible-lg">点击量</span>
            </th>
            <th>
              <span class="glyphicon glyphicon-time"></span> 
              <span class="visible-lg">添加时间</span>
            </th>
            <th>
              <span class="glyphicon glyphicon-pencil"></span> 
              <span class="visible-lg">是否推荐</span>
            </th>
            <th>
              <span class="glyphicon glyphicon-pencil"></span> 
              <span class="visible-lg">操作</span>
            </th>
          </tr>
        </thead>
        <tbody>
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
          <tr>
            <td><input type="checkbox" class="input-control" name="id[]" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['art_id'];?>
"/></td>
            <td class="article-title"><?php echo $_smarty_tpl->tpl_vars['row']->value['art_title'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['cate_name'];?>
</td>
            <td class="hidden-sm"><?php echo $_smarty_tpl->tpl_vars['row']->value['art_author'];?>
</td>
            <td class="hidden-sm"><?php echo $_smarty_tpl->tpl_vars['row']->value['art_desc'];?>
</td>
            <td class="hidden-sm"><?php echo $_smarty_tpl->tpl_vars['row']->value['art_hits'];?>
</td>
            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['art_addtime'],'%Y-%m-%d %H:%M:%S');?>
</td>
            <td align="center">
              <a class="btn btn-warning  btn-xs" href="index.php?m=Admin&c=Article&a=recomment&art_id=<?php echo $_smarty_tpl->tpl_vars['row']->value['art_id'];?>
">未推荐</a>
            </td>
            <td>
              <a class="btn btn-primary btn-xs" href="index.php?m=Admin&c=Article&a=update&art_id=<?php echo $_smarty_tpl->tpl_vars['row']->value['art_id'];?>
">修改</a> 
              <a class="btn btn-danger btn-xs" href="index.php?m=Admin&c=Article&a=delete&art_id=<?php echo $_smarty_tpl->tpl_vars['row']->value['art_id'];?>
" onclick="return confirm('确定删除文章？')">删除</a>
            </td>
          </tr>
          <?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_local_item;
}
if ($__foreach_row_0_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_item;
}
?>
        </tbody>
      </table>
    </div>
    <footer class="message_footer">
      <nav>
        <div class="btn-toolbar operation" role="toolbar">
          <div class="btn-group" role="group"> <a class="btn btn-default" onClick="select()">全选</a> <a class="btn btn-default" onClick="reverse()">反选</a> <a class="btn btn-default" onClick="noselect()">不选</a> </div>
          <div class="btn-group" role="group">
            <button type="submit" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="删除全部选中" name="checkbox_delete">删除</button>
          </div>
        </div>
        <!--输出分页-->
        <?php echo $_smarty_tpl->tpl_vars['page']->value;?>

        <!--输出分页-->
      </nav>
    </footer>
  </form>
</div>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../Public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
