<?php
/* Smarty version 3.1.29, created on 2017-11-03 07:57:59
  from "D:\wamp\www\blog\App\Home\View\Public\footer.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59fc13772e00c2_32769606',
  'file_dependency' => 
  array (
    '4f03270290645255f66b97b27619df737db35dad' => 
    array (
      0 => 'D:\\wamp\\www\\blog\\App\\Home\\View\\Public\\footer.html',
      1 => 1509690821,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59fc13772e00c2_32769606 ($_smarty_tpl) {
?>
<!--右侧>992px显示-->
<aside class="sidebar visible-lg">
    <!--每日一句-->
    <div class="sentence"> <strong>每日一句</strong>
      <h2>2015年11月1日 星期日</h2>
      <p>你是我人生中唯一的主角，我却只能是你故事中的一晃而过得路人甲。</p>
    </div>
    <!--/每日一句-->
    <!--搜索框-->
    <div id="search" class="sidebar-block search" role="search">
      <h2 class="title"><strong>搜索</strong></h2>
      <form class="navbar-form" action="search.php" method="post">
        <div class="input-group">
          <input type="text" class="form-control" size="35" placeholder="请输入关键字">
          <span class="input-group-btn">
          <button class="btn btn-default btn-search" type="submit">搜索</button>
          </span> </div>
      </form>
    </div>
    <!--/搜索框-->
    <!--热门文章-->
    <div class="sidebar-block recommend">
      <h2 class="title"><strong>热门文章</strong></h2>
      <ul>
        <?php
$_from = $_smarty_tpl->tpl_vars['hotArt']->value;
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
        <li data-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['row']->value['art_title'];?>
">
          <a target="_blank" href=""> 
            <span class="text"><?php echo $_smarty_tpl->tpl_vars['row']->value['art_title'];?>
</span> 
            <span class="text-muted">阅读(<?php echo $_smarty_tpl->tpl_vars['row']->value['art_hits'];?>
)</span></a>
        </li>
        <?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_local_item;
}
if ($__foreach_row_0_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_item;
}
?>
      </ul>
    </div>
    <!--/热门推荐-->
    <!--最新评论-->
    <div class="sidebar-block comment">
      <h2 class="title"><strong>最新评论</strong></h2>
      <ul>
        <li data-toggle="tooltip" data-placement="top" title="站长的评论">
          <a target="_blank" href="">
            <span class="face">
              <img src="<?php echo @constant('IMAGE_DIR');?>
/icon/icon.png" alt="">
            </span> 
            <span class="text">
              <strong>个人技术博客站长</strong> (2015-10-18) 说：<br />欢迎来到个人技术博客技术博客，在这里可以看到网站前端和后端的技术等 ...
            </span>
          </a>
        </li>
      </ul>
    </div>
    <!--/最新评论-->
  </aside>
  <!--/右侧>992px显示-->
  <footer class="footer">POWERED BY &copy;<a href="#">个人技术博客 XXXXX.COM</a> ALL RIGHTS RESERVED &nbsp;&nbsp;&nbsp;<span><a href="http://www.mycodes.net/" target="_blank">源码之家</a></span> <span style="display:none"><a href="">网站统计</a></span> </footer>
</section>
<div><a href="javascript:;" class="gotop" style="display:none;"></a></div>
<!--/返回顶部--> 
<?php echo '<script'; ?>
 src="<?php echo @constant('JS_DIR');?>
/jquery-2.1.4.min.js" type="text/javascript"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="<?php echo @constant('JS_DIR');?>
/nprogress.js" type="text/javascript" ><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="<?php echo @constant('JS_DIR');?>
/bootstrap.min.js" type="text/javascript"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 type="text/javascript">
//页面加载
$('body').show();
$('.version').text(NProgress.version);
NProgress.start();
setTimeout(function() { NProgress.done(); $('.fade').removeClass('out'); }, 1000);
//标签页高亮
$(function(){
  //当前页面导航高亮显示
  var index = window.location.href.split("/").length - 1;
  var href = window.location.href.split("/")[index];
  $("header .nav>li>a[href='"+ href +"']").parent().addClass("active");
});
//返回顶部按钮
$(function(){
	$(window).scroll(function(){
		if($(window).scrollTop()>100){
			$(".gotop").fadeIn();	
		}
		else{
			$(".gotop").hide();
		}
	});
  $(".gotop").click(function(){
    $('html,body').animate({ 'scrollTop':0 },500);
  });
});
//提示插件启用
$(function () {
  $('[data-toggle="popover"]').popover();
});
$(function () {
	$('[data-toggle="tooltip"]').tooltip();
});
//鼠标滑过显示 滑离隐藏
$(function(){
	$(".carousel").hover(function(){
		$(this).find(".carousel-control").show();
	},function(){
		$(this).find(".carousel-control").hide();
	});
});
$(function(){
	$(".hot-content ul li").hover(function(){
		$(this).find("h3").show();
	},function(){
		$(this).find("h3").hide();
	});
});
//页面元素智能定位
$.fn.smartFloat = function() { 
	var position = function(element) { 
		var top = element.position().top; //当前元素对象element距离浏览器上边缘的距离 
		var pos = element.css("position"); //当前元素距离页面document顶部的距离
		$(window).scroll(function() { //侦听滚动时 
			var scrolls = $(this).scrollTop(); 
			if (scrolls > top) { //如果滚动到页面超出了当前元素element的相对页面顶部的高度 
				if (window.XMLHttpRequest) { //如果不是ie6 
					element.css({ //设置css 
						position: "fixed", //固定定位,即不再跟随滚动 
						top: 0 //距离页面顶部为0 
					}).addClass("shadow"); //加上阴影样式.shadow 
				} else { //如果是ie6 
					element.css({ 
						top: scrolls  //与页面顶部距离 
					});     
				} 
			}else { 
				element.css({ //如果当前元素element未滚动到浏览器上边缘，则使用默认样式 
					position: pos, 
					top: top 
				}).removeClass("shadow");//移除阴影样式.shadow 
			} 
		}); 
	}; 
	return $(this).each(function() { 
		position($(this));                          
	}); 
}; 
//启用页面元素智能定位
$(function(){
	$("#search").smartFloat();
});
//异步加载更多内容
jQuery("#pagination a").on("click", function ()
{
    var _url = jQuery(this).attr("href");
    var _text = jQuery(this).text();
    jQuery(this).attr("href", "javascript:viod(0);");
    jQuery.ajax(
    {
        type : "POST",
        url : _url,
        success : function (data)
        {
            //将返回的数据进行处理，挑选出class是news-list的内容块
            result = jQuery(data).find(".row .news-list");
            //newHref获取返回的内容中的下一页的链接地址
            nextHref = jQuery(data).find("#pagination a").attr("href");
            jQuery(this).attr("href", _url);
            if (nextHref != undefined)
            {
                jQuery("#pagination a").attr("href", nextHref);
            }
			else
            {
                jQuery("#pagination a").html("下一页没有了").removeAttr("href")
            }
            // 渐显新内容
            jQuery(function ()
            {
                jQuery(".row").append(result.fadeIn(300));
                jQuery("img").lazyload(
                {
                    effect : "fadeIn"
                });
            });
        }
    });
    return false;
});
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
