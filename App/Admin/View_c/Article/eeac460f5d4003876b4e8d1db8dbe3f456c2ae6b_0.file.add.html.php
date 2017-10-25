<?php
/* Smarty version 3.1.29, created on 2017-10-25 04:57:34
  from "D:\wamp\www\blog\App\Admin\View\Article\add.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59effd9e733696_59677312',
  'file_dependency' => 
  array (
    'eeac460f5d4003876b4e8d1db8dbe3f456c2ae6b' => 
    array (
      0 => 'D:\\wamp\\www\\blog\\App\\Admin\\View\\Article\\add.html',
      1 => 1508827802,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Public/head.html' => 1,
    'file:../Public/footer.html' => 1,
  ),
),false)) {
function content_59effd9e733696_59677312 ($_smarty_tpl) {
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
            <textarea class="form-control" name="art_comment" autocomplete="off"></textarea>
          </div>
        </div>
        <!-- <div class="form-group">
          <label for="article-content" class="sr-only">内容</label>
          <?php echo '<script'; ?>
 id="article-content" name="content" type="text/plain"><?php echo '</script'; ?>
>
        </div> -->
        
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
            <a class="btn btn-default">返回</a>
          </div>
        </div>

      </div>
    </form>
  </div>
</div>
<?php echo '<script'; ?>
 src="<?php echo @constant('CURRENT_PUBLIC_DIR');?>
/lib/ueditor/ueditor.config.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="<?php echo @constant('CURRENT_PUBLIC_DIR');?>
/lib/ueditor/ueditor.all.min.js"> <?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="<?php echo @constant('CURRENT_PUBLIC_DIR');?>
/lib/ueditor/lang/zh-cn/zh-cn.js"><?php echo '</script'; ?>
>  
<?php echo '<script'; ?>
 id="uploadEditor" type="text/plain" style="display:none;"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
var editor = UE.getEditor('article-content');
window.onresize=function(){
    window.location.reload();
}
var _uploadEditor;
$(function () {
    //重新实例化一个编辑器，防止在上面的editor编辑器中显示上传的图片或者文件
    _uploadEditor = UE.getEditor('uploadEditor');
    _uploadEditor.ready(function () {
        //设置编辑器不可用
        //_uploadEditor.setDisabled();
        //隐藏编辑器，因为不会用到这个编辑器实例，所以要隐藏
        _uploadEditor.hide();
        //侦听图片上传
        _uploadEditor.addListener('beforeInsertImage', function (t, arg) {
            //将地址赋值给相应的input,只去第一张图片的路径
            $("#pictureUpload").attr("value", arg[0].src);
            //图片预览
            //$("#imgPreview").attr("src", arg[0].src);
        })
        //侦听文件上传，取上传文件列表中第一个上传的文件的路径
        _uploadEditor.addListener('afterUpfile', function (t, arg) {
            $("#fileUpload").attr("value", _uploadEditor.options.filePath + arg[0].url);
        })
    });
});
//弹出图片上传的对话框
$('#upImage').click(function () {
    var myImage = _uploadEditor.getDialog("insertimage");
    myImage.open();
});
//弹出文件上传的对话框
function upFiles() {
    var myFiles = _uploadEditor.getDialog("attachment");
    myFiles.open();
}
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../Public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
