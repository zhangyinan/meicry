<?php /* Smarty version Smarty-3.1.6, created on 2014-10-30 14:50:34
         compiled from "./Application/Home/View\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:13356545045b9f114d7-90826561%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8378b70862d866fede2c1372bd9cfe4821690da8' => 
    array (
      0 => './Application/Home/View\\Index\\index.html',
      1 => 1414651830,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13356545045b9f114d7-90826561',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_545045ba3b727',
  'variables' => 
  array (
    'themes' => 0,
    'theme' => 0,
    'images' => 0,
    'themeId' => 0,
    'templateId' => 0,
    'templates' => 0,
    'template' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545045ba3b727')) {function content_545045ba3b727($_smarty_tpl) {?><!DOCTYPE html><!--[if lt IE 7 ]><html class="ie6"><![endif]--><!--[if IE 7 ]><html class="ie7"><![endif]--><!--[if IE 8 ]><html class="ie8"><![endif]--><!--[if IE 9 ]><html class="ie9"><![endif]--><!--[if (gt IE 9)|!(IE)]><!--><html class=""><!--<![endif]-->
<head>
<meta charset="utf-8">
<title>首页</title>
<link rel="stylesheet" href="http://s0.qhimg.com/static/8da31adea42c6392.css" />
<script src="http://s2.qhimg.com/!827a72ed/_360so_ob_loader.js"></script>
<script src="http://s0.qhimg.com/lib/jquery/183.js"></script>
<style>
body{
	text-align: center;
	background-color: #ededef;
	font-family: 'Microsoft Yahei';
}
.gclearfix:after{
	clear: both;
	content: '';
	display: block;
	height: 0;
	visibility: hidden;
	*zoom: 1;
}
.bd{
	margin: 0 auto;
	width: 928px;
}
header{
	width: 100%;
	height: 82px;
	margin-bottom: 30px;
	background: #000;
	color: #fff;
}
a{
	text-decoration: none;
}
a:hover{
	text-decoration: none;
}
.logo{
	float: left;
	position: relative;
	width: 220px;
	height: 44px;
	margin-top: 18px;
}
.title{
	position: relative;
	color: #fff;
	font-size: 42px;
}
.title:active{
	left: 1px;
	top: 1px;
}
.main-nav{
	float: left;
	margin-top: 22px;
	height: 50px;
	line-height: 50px;
}
.main-nav a{
	display: inline-block;
	font-size: 16px;
	color: #999;
	margin: 0 0 0 30px;
}
.main-nav a:hover,
.main-nav a.nav-active{
	color: #fff;
}
.slide-wrap{
	width: 100%;
	height: 568px;
	margin: 0 0 30px 0;
	overflow: hidden;
}
#mohe-meicry .mh-ui-img-slide {
	position: relative;
	height: 568px;
}
#mohe-meicry .mh-ui-img-slide li {
	position: absolute;
	left: 0;
	right: 0;
	height: 568px;
	opacity: 0;
	visibility: hidden;
	-webkit-transition: all 0.5s ease 0s;
	-moz-transition: all 0.5s ease 0s;
	-o-transition: all 0.5s ease 0s;
	transition: all 0.5s ease 0s;
}
#mohe-meicry .mh-ui-img-slide li.mh-ui-img-cur {
	opacity: 1;
	visibility: visible;
}
#mohe-meicry .mh-ui-img-slide .mh-ui-img-op {
	position: absolute;
	bottom: 0;
	right: 0;
	width: 100%;
	height: 30px;
	z-index: 2;
}
#mohe-meicry .mh-ui-img-op a {
	display: inline-block;
	width: 28px;
	height: 28px;
	background: url(http://p7.qhimg.com/t0137d347d46b725f30.png) -16px -30px no-repeat;
}
#mohe-meicry .mh-ui-img-op a.mh-ui-img-cur {
	background-position: -16px -70px;
}
.sub-nav{
	/* height: 90px; */
	margin-bottom: 30px;
	display: -webkit-box;
	display: -webkit-flex;
	display: flex;
}
.sub-nav-item{
	display: block;
	-webkit-box-flex: 1;
	-moz-box-flex: 1;
	-webkit-flex: 1;
	-ms-flex: 1;
	flex: 1;
	width: 1%;
	text-align: center;
}
.sub-nav-item{
	height: 85px;
	margin-right: 1px;
	background: #fff;
	border-bottom: 5px solid #fff;
	font-size: 20px;
	color: #333;
	line-height: 84px;
	text-align: center;
	letter-spacing: 6px;
}
.sub-nav-active{
	border-bottom: 5px solid #9AC600;
}
.tpl-list-wrap{
	position: relative;
	border: 1px solid #eee;
	background: #fff;
	margin-bottom: 30px;
}
.tpl-list-wrap h3{
	height: 59px;
	border-bottom: 1px solid #eee;
	line-height: 60px;
	font-size: 18px;
	font-weight: bold;
	color: #333;
	letter-spacing: 6px;
}
.tpl-list-cont{
	padding: 32px 0 0 0;
}
.first-view{
	margin-left: 32px;
}
.tpl{
	float: left;
	width: 338px;
	height: 338px;
	margin-right: 10px;
	overflow: hidden;
	background: #f9f9f9;
}
.tpl .img-wrap {
	display: block;
	width: 338px;
	height: 300px;
	overflow: hidden;
}
.tpl .tpl-des{
	height: 40px;
	line-height: 40px;
}
.photo-list{
	float: left;
	width: 522px;
}
.photo-list-later{
	margin: 5px 0 0 32px;
	display: none;
}
.photo-item{
	float: left;
	margin-right: 10px;
	margin-bottom: 10px;
}
.photo-item a{
	display: block;
	position: relative;
	width: 164px;
	height: 164px;
	overflow: hidden;
}
.photo-item .tit{
	position: absolute;
	left: 10px;
	bottom: 10px;
	height: 24px;
	padding: 0 .6em;
	border-radius: 5px;
	text-align: center;
	color: #fff;
	line-height: 23px;
	font-size: 14px;
	background: #000;
	opacity: .8;
	filter: alpha(opacity=80);
	z-index: 1;
}
.cover-all{
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background: #5A8DCD;
	opacity: 0;
	z-index: 2;
	-webkit-transition: all 0.5s ease 0s;
	-moz-transition: all 0.5s ease 0s;
	-o-transition: all 0.5s ease 0s;
	transition: all 0.5s ease 0s;
}
.photo-item a:hover .cover-all{
	opacity: 0.4;
}
#mohe-meicry .mh-ui-btn-more{
	text-align: center;
	background: #f9f9f9;
	margin-top: 10px;
}
#mohe-meicry .mh-ui-btn-more a {
	display: inline-block;
	height: 60px;
	width: 100%;
	color: #898989;
	text-decoration: none;
	line-height: 60px;
	outline: 0;
}
.scrollUp{
	position: fixed;
	bottom: 50px;
	right: 50px;
	display: none;
	width: 48px;
	height: 48px;
	text-indent: -9999px;
	cursor: pointer;
	z-index: 10;
	background: url('http://p5.qhimg.com/t0144c584a2fad3d11d.png') no-repeat 0 0;
}
.scrollUp:hover{
	background-position: 0 -50px;
}
#footer p{
	color: #333;
}
</style>
</head>
<body link="#0000cc">
<div id="mohe-meicry">
	<header class="gclearfix">
		<div class="bd gclearfix">
			<h2 class="logo">
				<a href="##" class="title">MeiCry</a>
			</h2>
			<nav class="main-nav">
				<a href="##" class="nav-item nav-active">首页</a>
				<a href="##" class="nav-item">个人主页</a>
				<a href="##" class="nav-item">xx</a>
			</nav>
		</div>
	</header>
	<div class="slide-wrap">
		<!-- start: onebox内容 -->
		<div class="mh-ui-img-slide bd">
			<ul>
				<li class="mh-ui-img-cur">
					<a href="###" target="_blank">
						<img src="http://p9.qhimg.com/t010500d877d876aaa3.jpg" width="928" height="568">
					</a>						
				</li>
				<li class="">
					<a href="###" target="_blank">
						<img src="http://p8.qhimg.com/d/inn/826512dd/t01a8744b79a3820997.jpg" width="928" height="568">
					</a>							
				</li>
				<li class="">
					<a href="###" target="_blank">
						<img src="http://p4.qhimg.com/d/inn/0d6ad07c/t0184aa8ff4779d9ef3.jpg" width="928" height="568">
					</a>						
				</li>
			</ul>
			<div class="mh-ui-img-op">					
				<a href="###slide" target="_self" class="mh-ui-img-cur"></a>
				<a href="###slide" target="_self" class=""></a>
				<a href="###slide" target="_self" class=""></a>
			</div>					
		</div>
		<!-- end: onebox内容 -->
	</div>
	
	<nav class="sub-nav bd">
	 <?php  $_smarty_tpl->tpl_vars['theme'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['theme']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['themes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['theme']->key => $_smarty_tpl->tpl_vars['theme']->value){
$_smarty_tpl->tpl_vars['theme']->_loop = true;
?>
		<a href="##" class="sub-nav-item  <?php if ($_smarty_tpl->tpl_vars['theme']->value['id']==1){?>sub-nav-active<?php }?>" data-target="<?php echo $_smarty_tpl->tpl_vars['theme']->value['id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['theme']->value['name'];?>
</a>
		
	<?php } ?>	
	</nav>
	<?php  $_smarty_tpl->tpl_vars['theme'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['theme']->_loop = false;
 $_smarty_tpl->tpl_vars['themeId'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['theme']->key => $_smarty_tpl->tpl_vars['theme']->value){
$_smarty_tpl->tpl_vars['theme']->_loop = true;
 $_smarty_tpl->tpl_vars['themeId']->value = $_smarty_tpl->tpl_vars['theme']->key;
?>
	<div class="tpl-list-wrap bd" data-target="<?php echo $_smarty_tpl->tpl_vars['themeId']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['themeId']->value==1){?>style="display: block;"<?php }else{ ?>style="display: none;"<?php }?>>
		<?php  $_smarty_tpl->tpl_vars['template'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['template']->_loop = false;
 $_smarty_tpl->tpl_vars['templateId'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['theme']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['template']->key => $_smarty_tpl->tpl_vars['template']->value){
$_smarty_tpl->tpl_vars['template']->_loop = true;
 $_smarty_tpl->tpl_vars['templateId']->value = $_smarty_tpl->tpl_vars['template']->key;
?>
		<h3><?php echo $_smarty_tpl->tpl_vars['templates']->value[$_smarty_tpl->tpl_vars['templateId']->value]['name'];?>
</h3>
		<div class="tpl-list-cont">
			<div class="first-view gclearfix">
				<div class="tpl">
					<a href="##" target="_blank" class="img-wrap">
						<img src="../Public/img/template/<?php echo $_smarty_tpl->tpl_vars['templates']->value[$_smarty_tpl->tpl_vars['templateId']->value]['logo'];?>
" width="320" height="320">
					</a>
					<p class="tpl-des"><?php echo $_smarty_tpl->tpl_vars['templates']->value[$_smarty_tpl->tpl_vars['templateId']->value]['name'];?>
</p>
				</div>
				<ul class="photo-list">
				 <?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['template']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value){
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
					<li class="photo-item">
						<a href="###" target="_blank">
							<img src="../Public/img/uploads/<?php echo $_smarty_tpl->tpl_vars['image']->value['image_url'];?>
" width="164" height="164">
							<span class="tit"><?php echo $_smarty_tpl->tpl_vars['image']->value['image_desc'];?>
</span>
							<span class="cover-all"></span>	
						</a>
					</li>
				<?php } ?>
				</ul>
			</div>
			<ul class="photo-list-later gclearfix">
			 	<?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value){
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
				<li class="photo-item">
					<a href="###" target="_blank">
						<img src="../Public/img/uploads/<?php echo $_smarty_tpl->tpl_vars['image']->value['image_url'];?>
" width="164" height="164">
						<span class="tit"><?php echo $_smarty_tpl->tpl_vars['image']->value['image_desc'];?>
</span>
						<span class="cover-all"></span>	
					</a>
				</li>
				<?php } ?>
			</ul>
			<div class="mh-ui-btn-more">
				<a href="##"><span class="mh-ui-btn-txt" data-html="更多照片&gt;&gt;">更多照片&gt;&gt;</span></a>		
			</div>
		</div>
	<?php } ?>
	</div>
	
<?php } ?>
	<div id="footer">
		<a class="scrollUp">返回顶部</a>
		<p>Copyright&copy;Meicry</p>
	</div>
</div>
</body>
 
<script>
_loader.use('jquery',function(){
	var $context = $('#mohe-meicry'),
		$imgSlide = $context.find('.mh-ui-img-op a'),
		_imgTotal = $imgSlide.length,
		pageScrollTimer,
		_playing = true,
		cur_page = 0;
	/*功能：单击图片轮转*/
	$imgSlide.click(function(e){
		e.preventDefault();
		sliderPage($(this).index());
	});
	/*功能：翻页*/
	function sliderPage( nextPage ){
			nextPage = (nextPage==_imgTotal?0:nextPage);
			$context.find('.mh-ui-img-op a').removeClass('mh-ui-img-cur').eq(nextPage).addClass('mh-ui-img-cur');
			$context.find('.mh-ui-img-slide li').removeClass('mh-ui-img-cur').eq(nextPage).addClass('mh-ui-img-cur');
			cur_page = nextPage;
		}
	/*功能：自动翻页*/
		function initPagescroll(){
			pageScrollTimer = setInterval(function(){
				if (_playing) {
					sliderPage(cur_page+1);
				}
			}, 2000);
		}
		initPagescroll();
		/*mouseenter后不自动翻页；mouseleave自动翻页*/
		$context.find('.mh-ui-img-slide').hover(function(){
			_playing = false;
		}, function(){
			_playing = true;
		}); 


		// 查看更多
		var btn_more = $('.mh-ui-btn-more',$context);
		$(".mh-ui-btn-more").on("click",function(e){
			e.preventDefault();
			var me = $(this),
				btn_txt = $('.mh-ui-btn-txt', me),
				photo_later = me.siblings('.photo-list-later');

			if(!me.hasClass("mh-ui-btn-open")){
				me.addClass("mh-ui-btn-open");
				btn_txt.text("收起");
				photo_later.show();
			}else{
				me.removeClass("mh-ui-btn-open");
				btn_txt.text(btn_txt.attr("data-html"));
				photo_later.hide();
			}
		});

		//返回顶部
		var elem = $(".scrollUp"),
			height = $(window).height(),
			scrollTimer = null;
		
		$(window).on("scroll", function () {
			if(scrollTimer){
				clearTimeout(scrollTimer);
			}
			scrollTimer = setTimeout(function(){
				var top = $(document).scrollTop();
				
				if(top > 300){
					elem.show();
				}else{
					elem.hide();
				}
			},200);
		});
		//定义返回顶部点击向上滚动的动画
		$(".scrollUp").click(function(){
			console.log($('html, body'));
			$('html, body').animate({scrollTop:0},200);
		});
});

</script>
 
</html><?php }} ?>