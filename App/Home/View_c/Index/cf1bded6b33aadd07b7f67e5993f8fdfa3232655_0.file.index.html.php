<?php
/* Smarty version 3.1.29, created on 2017-10-31 08:08:40
  from "D:\wamp\www\blog\App\Home\View\Index\index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59f82178012678_83290280',
  'file_dependency' => 
  array (
    'cf1bded6b33aadd07b7f67e5993f8fdfa3232655' => 
    array (
      0 => 'D:\\wamp\\www\\blog\\App\\Home\\View\\Index\\index.html',
      1 => 1509433716,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Public/head.html' => 1,
    'file:../Public/footer.html' => 1,
  ),
),false)) {
function content_59f82178012678_83290280 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../Public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <div class="content-wrap"><!--内容-->
    <div class="content">
      <!--幻灯片-->
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> 
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="item active"> <a href="content.html" target="_blank"><img src="<?php echo @constant('IMAGE_DIR');?>
/img1.jpg" alt="" /></a>
            <div class="carousel-caption"> PoorpenguinBlog上线，在这里可以看到网站前端和后端的技术等 </div>
            <span class="carousel-bg"></span> </div>
          <div class="item"> <a href="content.html" target="_blank"><img src="<?php echo @constant('IMAGE_DIR');?>
/img2.jpg" alt="" /></a>
            <div class="carousel-caption"> PoorpenguinBlog上线，在这里可以看到网站前端和后端的技术等 </div>
            <span class="carousel-bg"></span> </div>
          <div class="item"> <a href="content.html" target="_blank"><img src="<?php echo @constant('IMAGE_DIR');?>
/img3.jpg" alt="" /></a>
            <div class="carousel-caption"> PoorpenguinBlog上线，在这里可以看到网站前端和后端的技术等 </div>
            <span class="carousel-bg"></span> </div>
        </div>
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> 
      </div>
      <!--幻灯片end-->
      <!--推荐文章-->
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
      <!-- -->
      <div class="content-block new-content">
        <h2 class="title"><strong>推荐文章</strong></h2>
        <div class="row">
          <div class="news-list">
            <div class="news-img col-xs-5 col-sm-5 col-md-4"> 
             
            </div>
            <div class="news-info col-xs-7 col-sm-7 col-md-8">
              <dl>
                <dt> 
                  <a href="" target="_blank" > PoorpenguinBlog上线正式上线！ </a> 
                </dt>
                <dd>
                  <span class="name">
                    <a href="" title="由 个人技术博客 发布" rel="author">个人技术博客</a>
                  </span> 
                  <span class="identity"></span> 
                  <span class="time"> 2015-10-19 </span>
                </dd>
                <dd class="text">
                  欢迎来到PoorpenguinBlog上线，在这里可以看到网站前端和后端的技术，还有CMS内容管理系统，包括但不限于这些还有CMS内容管理系统，包括但不限于这些。
                </dd>
              </dl>
              <div class="news_bot col-sm-7 col-md-8"> 
                <span class="tags visible-lg visible-md"> 
                  <a href="">本站</a> 
                  <a href="">个人技术博客</a> 
                </span> 
                <span class="look">
                 共 <strong>2126</strong> 人围观，发现 <strong> 12 </strong> 个不明物体 
                </span> 
              </div>
            </div>
          </div>

          <div class="news-list">
            <div class="news-img col-xs-5 col-sm-5 col-md-4"> <a target="_blank" href=""><img src="<?php echo @constant('IMAGE_DIR');?>
/img1.jpg" alt=""> </a> </div>
            <div class="news-info col-xs-7 col-sm-7 col-md-8">
              <dl>
                <dt> <a href="" target="_blank" > PoorpenguinBlog上线正式上线！ </a> </dt>
                <dd><span class="name"><a href="" title="由 个人技术博客 发布" rel="author">个人技术博客</a></span> <span class="identity"></span> <span class="time"> 2015-10-19 </span></dd>
                <dd class="text">欢迎来到PoorpenguinBlog上线，在这里可以看到网站前端和后端的技术，还有CMS内容管理系统，包括但不限于这些还有CMS内容管理系统，包括但不限于这些。</dd>
              </dl>
              <div class="news_bot col-sm-7 col-md-8"> <span class="tags visible-lg visible-md"> <a href="">本站</a> <a href="">个人技术博客</a> </span> <span class="look"> 共 <strong>2126</strong> 人围观，发现 <strong> 12 </strong> 个不明物体 </span> </div>
            </div>
          </div>
          <div class="news-list">
            <div class="news-img col-xs-5 col-sm-5 col-md-4"> <a target="_blank" href=""><img src="<?php echo @constant('IMAGE_DIR');?>
/img2.jpg" alt=""> </a> </div>
            <div class="news-info col-xs-7 col-sm-7 col-md-8">
              <dl>
                <dt> <a href="" target="_blank" > PoorpenguinBlog上线正式上线！ </a> </dt>
                <dd><span class="name"><a href="" title="由 个人技术博客 发布" rel="author">个人技术博客</a></span> <span class="identity"></span> <span class="time"> 2015-10-19 </span></dd>
                <dd class="text">欢迎来到PoorpenguinBlog上线，在这里可以看到网站前端和后端的技术，还有CMS内容管理系统，包括但不限于这些还有CMS内容管理系统，包括但不限于这些。</dd>
              </dl>
              <div class="news_bot col-sm-7 col-md-8"> <span class="tags visible-lg visible-md"> <a href="">本站</a> <a href="">个人技术博客</a> </span> <span class="look"> 共 <strong>2126</strong> 人围观，发现 <strong> 12 </strong> 个不明物体 </span> </div>
            </div>
          </div>
          <div class="news-list">
            <div class="news-img col-xs-5 col-sm-5 col-md-4"> <a target="_blank" href=""><img src="<?php echo @constant('IMAGE_DIR');?>
/img3.jpg" alt=""> </a> </div>
            <div class="news-info col-xs-7 col-sm-7 col-md-8">
              <dl>
                <dt> <a href="" target="_blank" > PoorpenguinBlog上线正式上线！ </a> </dt>
                <dd><span class="name"><a href="" title="由 个人技术博客 发布" rel="author">个人技术博客</a></span> <span class="identity"></span> <span class="time"> 2015-10-19 </span></dd>
                <dd class="text">欢迎来到PoorpenguinBlog上线，在这里可以看到网站前端和后端的技术，还有CMS内容管理系统，包括但不限于这些还有CMS内容管理系统，包括但不限于这些。</dd>
              </dl>
              <div class="news_bot col-sm-7 col-md-8"> <span class="tags visible-lg visible-md"> <a href="">本站</a> <a href="">个人技术博客</a> </span> <span class="look"> 共 <strong>2126</strong> 人围观，发现 <strong> 12 </strong> 个不明物体 </span> </div>
            </div>
          </div>
          <div class="news-list">
            <div class="news-img col-xs-5 col-sm-5 col-md-4"> <a target="_blank" href=""><img src="<?php echo @constant('IMAGE_DIR');?>
/logo.jpg" alt=""> </a> </div>
            <div class="news-info col-xs-7 col-sm-7 col-md-8">
              <dl>
                <dt> <a href="" target="_blank" > PoorpenguinBlog上线正式上线！ </a> </dt>
                <dd><span class="name"><a href="" title="由 个人技术博客 发布" rel="author">个人技术博客</a></span> <span class="identity"></span> <span class="time"> 2015-10-19 </span></dd>
                <dd class="text">欢迎来到PoorpenguinBlog上线，在这里可以看到网站前端和后端的技术，还有CMS内容管理系统，包括但不限于这些还有CMS内容管理系统，包括但不限于这些。</dd>
              </dl>
              <div class="news_bot col-sm-7 col-md-8"> <span class="tags visible-lg visible-md"> <a href="">本站</a> <a href="">个人技术博客</a> </span> <span class="look"> 共 <strong>2126</strong> 人围观，发现 <strong> 12 </strong> 个不明物体 </span> </div>
            </div>
          </div>
          <div class="news-list">
            <div class="news-img col-xs-5 col-sm-5 col-md-4"> <a target="_blank" href=""><img src="<?php echo @constant('IMAGE_DIR');?>
/logo.jpg" alt=""> </a> </div>
            <div class="news-info col-xs-7 col-sm-7 col-md-8">
              <dl>
                <dt> <a href="" target="_blank" > PoorpenguinBlog上线正式上线！ </a> </dt>
                <dd><span class="name"><a href="" title="由 个人技术博客 发布" rel="author">个人技术博客</a></span> <span class="identity"></span> <span class="time"> 2015-10-19 </span></dd>
                <dd class="text">欢迎来到PoorpenguinBlog上线，在这里可以看到网站前端和后端的技术，还有CMS内容管理系统，包括但不限于这些还有CMS内容管理系统，包括但不限于这些。</dd>
              </dl>
              <div class="news_bot col-sm-7 col-md-8"> <span class="tags visible-lg visible-md"> <a href="">本站</a> <a href="">个人技术博客</a> </span> <span class="look"> 共 <strong>2126</strong> 人围观，发现 <strong> 12 </strong> 个不明物体 </span> </div>
            </div>
          </div>
          <div class="news-list">
            <div class="news-img col-xs-5 col-sm-5 col-md-4"> <a target="_blank" href=""><img src="<?php echo @constant('IMAGE_DIR');?>
/logo.jpg" alt=""> </a> </div>
            <div class="news-info col-xs-7 col-sm-7 col-md-8">
              <dl>
                <dt> <a href="" target="_blank" > PoorpenguinBlog上线正式上线！ </a> </dt>
                <dd><span class="name"><a href="" title="由 个人技术博客 发布" rel="author">个人技术博客</a></span> <span class="identity"></span> <span class="time"> 2015-10-19 </span></dd>
                <dd class="text">欢迎来到PoorpenguinBlog上线，在这里可以看到网站前端和后端的技术，还有CMS内容管理系统，包括但不限于这些还有CMS内容管理系统，包括但不限于这些。</dd>
              </dl>
              <div class="news_bot col-sm-7 col-md-8"> <span class="tags visible-lg visible-md"> <a href="">本站</a> <a href="">个人技术博客</a> </span> <span class="look"> 共 <strong>2126</strong> 人围观，发现 <strong> 12 </strong> 个不明物体 </span> </div>
            </div>
          </div>
          <div class="news-list">
            <div class="news-img col-xs-5 col-sm-5 col-md-4"> <a target="_blank" href=""><img src="<?php echo @constant('IMAGE_DIR');?>
/logo.jpg" alt=""> </a> </div>
            <div class="news-info col-xs-7 col-sm-7 col-md-8">
              <dl>
                <dt> <a href="" target="_blank" > PoorpenguinBlog上线正式上线！ </a> </dt>
                <dd><span class="name"><a href="" title="由 个人技术博客 发布" rel="author">个人技术博客</a></span> <span class="identity"></span> <span class="time"> 2015-10-19 </span></dd>
                <dd class="text">欢迎来到PoorpenguinBlog上线，在这里可以看到网站前端和后端的技术，还有CMS内容管理系统，包括但不限于这些还有CMS内容管理系统，包括但不限于这些。</dd>
              </dl>
              <div class="news_bot col-sm-7 col-md-8"> <span class="tags visible-lg visible-md"> <a href="">本站</a> <a href="">个人技术博客</a> </span> <span class="look"> 共 <strong>2126</strong> 人围观，发现 <strong> 12 </strong> 个不明物体 </span> </div>
            </div>
          </div>
        </div>
        <!--<div class="news-more" id="pagination">
        	<a href="">查看更多</a>
        </div>-->
        <div class="quotes" style="margin-top:15px">
          <span class="disabled">首页</span>
          <span class="disabled">上一页</span>
          <span class="current">1</span>
          <a href="">2</a>
          <a href="">下一页</a>
          <a href="">尾页</a>
        </div>
      </div>
    </div>
  </div>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../Public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
