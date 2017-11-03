<?php
/* Smarty version 3.1.29, created on 2017-11-03 07:41:50
  from "D:\wamp\www\blog\App\Home\View\Article\index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59fc0fae48acd3_17854599',
  'file_dependency' => 
  array (
    '7f6750b69245488781c8dd1f3cfdbd847e4510f8' => 
    array (
      0 => 'D:\\wamp\\www\\blog\\App\\Home\\View\\Article\\index.html',
      1 => 1509691308,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Public/head.html' => 1,
    'file:../Public/footer.html' => 1,
  ),
),false)) {
function content_59fc0fae48acd3_17854599 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'D:\\wamp\\www\\blog\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_truncate')) require_once 'D:\\wamp\\www\\blog\\Vendor\\Smarty\\plugins\\modifier.truncate.php';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../Public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!--内容-->
<div class="content-wrap">
    <div class="content">
      	<div class="content-block new-content">
	        <h2 class="title"><strong><?php echo $_smarty_tpl->tpl_vars['cateName']->value;?>
</strong></h2>
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
" alt="<?php echo $_smarty_tpl->tpl_vars['row']->value['art_title'];?>
">
			        	</a> 
			        </div>
			        <div class="news-info col-xs-7 col-sm-7 col-md-8">
			          	<dl>
				            <dt> 
				            	<a href="" target="_blank" ><?php echo $_smarty_tpl->tpl_vars['row']->value['art_title'];?>
</a>
				            </dt>
				            <dd>
				            	<span class="name">
				            		<a href="" title="由 个人技术博客 发布" rel="author"><?php echo $_smarty_tpl->tpl_vars['row']->value['art_author'];?>
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
				          	<span class="look"> 共 <strong><?php echo $_smarty_tpl->tpl_vars['row']->value['art_hits'];?>
</strong> 人围观
				        </div>
			        </div>
			    </div>
			<?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['row']->_loop) {
?>
				<h1>暂无文章更新</h1> 
			<?php
}
if ($__foreach_row_0_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_item;
}
?>    
	        </div>
	        <div class="quotes" style="margin-top:15px">
	        	<?php echo $_smarty_tpl->tpl_vars['page']->value;?>

	        </div>
      	</div>
    </div>
</div>
  <!--/内容-->
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../Public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
