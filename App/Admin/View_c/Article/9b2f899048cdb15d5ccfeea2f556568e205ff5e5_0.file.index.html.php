<?php
/* Smarty version 3.1.29, created on 2017-10-23 09:59:29
  from "D:\wamp\www\blog\App\Admin\View\Article\index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59eda161b96416_33573419',
  'file_dependency' => 
  array (
    '9b2f899048cdb15d5ccfeea2f556568e205ff5e5' => 
    array (
      0 => 'D:\\wamp\\www\\blog\\App\\Admin\\View\\Article\\index.html',
      1 => 1508745105,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Public/head.html' => 1,
    'file:../Public/footer.html' => 1,
  ),
),false)) {
function content_59eda161b96416_33573419 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../Public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-lg-10 col-md-offset-2 main" id="main">
  <form action="/Article/checkAll" method="post" >
    <h1 class="page-header">操作</h1>
    <ol class="breadcrumb">
      <li><a class="btn btn-primary btn-sm" href="index.php?m=Admin&c=Article&a=add">添加文章</a></li>
      <li><a class="btn btn-danger btn-sm" href="add-article.html">批量删除</a></li>
      <li><a class="btn btn-success btn-sm" href="add-article.html">回收站</a></li>
    </ol>
    <h1 class="page-header">管理 <span class="badge">7</span></h1>
    <div class="table-responsive">
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th><span class="glyphicon glyphicon-th-large"></span> <span class="visible-lg">选择</span></th>
            <th><span class="glyphicon glyphicon-file"></span> <span class="visible-lg">标题</span></th>
            <th><span class="glyphicon glyphicon-list"></span> <span class="visible-lg">栏目</span></th>
            <th class="hidden-sm"><span class="glyphicon glyphicon-tag"></span> <span class="visible-lg">标签</span></th>
            <th class="hidden-sm"><span class="glyphicon glyphicon-comment"></span> <span class="visible-lg">评论</span></th>
            <th><span class="glyphicon glyphicon-time"></span> <span class="visible-lg">日期</span></th>
            <th><span class="glyphicon glyphicon-pencil"></span> <span class="visible-lg">操作</span></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input type="checkbox" class="input-control" name="checkbox[]" value="" /></td>
            <td class="article-title">这是测试的文章标题这是测试的文章标题这是测试的文章标题这是测试的文章标题</td>
            <td>这个是栏目</td>
            <td class="hidden-sm">PHP、JavaScript</td>
            <td class="hidden-sm">0</td>
            <td>2015-12-03</td>
            <td><a href="update-article.html">修改</a> <a rel="6">删除</a></td>
          </tr>
          <tr>
            <td><input type="checkbox" class="input-control" name="checkbox[]" value="" /></td>
            <td class="article-title">这是测试的文章标题这是测试的文章标题这是测试的文章标题这是测试的文章标题</td>
            <td>这个是栏目</td>
            <td class="hidden-sm">PHP、JavaScript</td>
            <td class="hidden-sm">0</td>
            <td>2015-12-03</td>
            <td><a href="">修改</a> <a rel="6">删除</a></td>
          </tr>
          <tr>
            <td><input type="checkbox" class="input-control" name="checkbox[]" value="" /></td>
            <td class="article-title">这是测试的文章标题这是测试的文章标题这是测试的文章标题这是测试的文章标题</td>
            <td>这个是栏目</td>
            <td class="hidden-sm">PHP、JavaScript</td>
            <td class="hidden-sm">0</td>
            <td>2015-12-03</td>
            <td><a href="">修改</a> <a rel="6">删除</a></td>
          </tr>
          <tr>
            <td><input type="checkbox" class="input-control" name="checkbox[]" value="" /></td>
            <td class="article-title">这是测试的文章标题这是测试的文章标题这是测试的文章标题这是测试的文章标题</td>
            <td>这个是栏目</td>
            <td class="hidden-sm">PHP、JavaScript</td>
            <td class="hidden-sm">0</td>
            <td>2015-12-03</td>
            <td><a href="">修改</a> <a rel="6">删除</a></td>
          </tr>
          <tr>
            <td><input type="checkbox" class="input-control" name="checkbox[]" value="" /></td>
            <td class="article-title">这是测试的文章标题这是测试的文章标题这是测试的文章标题这是测试的文章标题</td>
            <td>这个是栏目</td>
            <td class="hidden-sm">PHP、JavaScript</td>
            <td class="hidden-sm">0</td>
            <td>2015-12-03</td>
            <td><a href="">修改</a> <a rel="6">删除</a></td>
          </tr>
          <tr>
            <td><input type="checkbox" class="input-control" name="checkbox[]" value="" /></td>
            <td class="article-title">这是测试的文章标题这是测试的文章标题这是测试的文章标题这是测试的文章标题</td>
            <td>这个是栏目</td>
            <td class="hidden-sm">PHP、JavaScript</td>
            <td class="hidden-sm">0</td>
            <td>2015-12-03</td>
            <td><a href="">修改</a> <a rel="6">删除</a></td>
          </tr>
          <tr>
            <td><input type="checkbox" class="input-control" name="checkbox[]" value="" /></td>
            <td class="article-title">这是测试的文章标题这是测试的文章标题这是测试的文章标题这是测试的文章标题</td>
            <td>这个是栏目</td>
            <td class="hidden-sm">PHP、JavaScript</td>
            <td class="hidden-sm">0</td>
            <td>2015-12-03</td>
            <td><a href="">修改</a> <a rel="6">删除</a></td>
          </tr>
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
        <ul class="pagination pagenav">
          <li class="disabled"><a aria-label="Previous"> <span aria-hidden="true">&laquo;</span> </a> </li>
          <li class="active"><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li><a href="#" aria-label="Next"> <span aria-hidden="true">&raquo;</span> </a> </li>
        </ul>
      </nav>
    </footer>
  </form>
</div>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../Public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}