<?php /* Smarty version Smarty-3.1.6, created on 2014-10-31 13:39:43
         compiled from "./Application/Home/View\Index\owner.html" */ ?>
<?php /*%%SmartyHeaderCode:1151254531d285fa223-31093624%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1feb889e5f69f6200bf5b2939bea54d6318d48d' => 
    array (
      0 => './Application/Home/View\\Index\\owner.html',
      1 => 1414733975,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1151254531d285fa223-31093624',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_54531d287f5ff',
  'variables' => 
  array (
    'user_info' => 0,
    'image_info' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54531d287f5ff')) {function content_54531d287f5ff($_smarty_tpl) {?><!DOCTYPE html><!--[if lt IE 7 ]><html class="ie6"><![endif]--><!--[if IE 7 ]><html class="ie7"><![endif]--><!--[if IE 8 ]><html class="ie8"><![endif]--><!--[if IE 9 ]><html class="ie9"><![endif]--><!--[if (gt IE 9)|!(IE)]><!--><html class=""><!--<![endif]-->
<head>
<meta charset="utf-8">
<title>个人页面</title>
<link rel="stylesheet" href="http://s0.qhimg.com/static/8da31adea42c6392.css" />
<link rel="stylesheet" href="../Public/css/common.css" />
<script src="http://s2.qhimg.com/!827a72ed/_360so_ob_loader.js"></script>
<script src="http://s0.qhimg.com/lib/jquery/183.js"></script>
<style>
.back{
	position: absolute;
	right: 20px;
	top: 20px;
	width: 60px;
	height: 50px;
	text-indent: -9999px;
	background: url('http://p0.qhimg.com/t0114568e589ba1bded.png') no-repeat -70px 0px;
}
.back:hover{
	background-position: 0 0;
}
.owner-bd{
	width: 600px;
	margin: 0 auto;
}
#owner{
	background: #dce9e7;
}
.aside{
	position: fixed;
	top: 0;
	left: 0;
	width: 70px;
	padding: 20px;
	text-align: center;
}
.aside .nav,
.post-info .nav{
	width: 60px;
	height: 60px;
	background: #fff;
	border-radius: 50%;
	margin: 0 auto 20px auto;
	overflow: hidden;
}
.top{
	padding: 20px 0;
}
.top h1{
	font-weight: bold;
	font-size: 45px;
	line-height: 60px;
	text-align: center;
	text-shadow: 2px 2px 2px #fff;
}
.post-item{
	position: relative;
	margin-bottom: 20px;
	padding: 20px;
	border: 1px solid #fff;
	border-radius: 5px;
	background: #fff;
	box-shadow: 2px 3px 10px #888;
}
.post-info{
	position: absolute;
	left: -30px;
	top: 20px;
	width: 60px;
}
.post-info .nav{
	background: yellow;
}
.post-bd{
	float: right;
}
.img-wrap{
	position: relative;
	display: block;
	width: 540px;
	height: 535px;
	margin-bottom: 20px;
	overflow: hidden;
}
.post-info .nav-small{
	width: 40px;
	height: 40px;
}
.post-bd p{
	text-align: left;
	font-size: 12px;
	color: #666;
	margin-left: 22px;
}
.post-bd .theme-info{
	display: inline-block;
	max-width: 100px;
	padding: 2px 8px;
	background: #eee;
	border-radius: 10px;
	margin-right: 5px;
	text-align: center;
}
.post-bd .photo-share{
	float: right;
}
.post-bd a.photo-share{
	color: #666;
}
.post-bd a.photo-share:hover{
	color: #7594b3;
}
.cover-all-wrap{
	position: absolute;
	left: 0;
	top: 0;
	display: none;
}
.cover-mask{
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background: #000;
	opacity: 0.8;
}
.cover-cont{
	z-index: 10;
	position: absolute;
	top: 0;
	width: 723px;
	overflow: hidden;
	margin-top: 30px;
	margin-left: auto;
	margin-right: auto;
}
.img-big-info{
	width: 100%;
	height: 100px;
	background: yellow;
}
</style>
</head>
<body>
<div id="owner">
	<div class="aside">
		<div class="nav">
			<img src="../../Public/img/user/<?php echo $_smarty_tpl->tpl_vars['user_info']->value['icon'];?>
" />
		</div>
		<div class="nav">
			赞过的照片
		</div>
		<div class="nav">
			个人设置
		</div>
		<div class="nav">
			主题投稿
		</div>
	</div>
	<a href="##home" class="back">返回首页</a>
	<div class="top owner-bd">
		<h1><?php echo $_smarty_tpl->tpl_vars['user_info']->value['name'];?>
</h1>
	</div>
	<div class="doc owner-bd">
		<ol>
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['image_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
			<li class="post-item gclearfix">
				<div class="post-info">
					<div class="nav">点赞</div>
					<div class="nav nav-small">分享</div>
				</div>
				<div class="post-bd">
					<a href="####" target="_blank" class="img-wrap">
						<img src="../Public/img/uploads/<?php echo $_smarty_tpl->tpl_vars['value']->value['imageInfo']['image_url'];?>
" width="556" class="js-img"/>
					</a>
					<p class="gclearfix">
						<span class="theme-info photo-tips"><?php echo $_smarty_tpl->tpl_vars['value']->value['themeInfo']['name'];?>
</span>
						<span class="photo-tips"><?php echo $_smarty_tpl->tpl_vars['value']->value['imageInfo']['updated_at'];?>
</span>
						<span><a href="##share" class="photo-share photo-tips" data-id="<?php echo $_smarty_tpl->tpl_vars['value']->value['imageInfo']['id'];?>
"> 删除</a></span>
					</p>
				</div>
				<div class="share-cont">
					
				</div>
			</li>
		<?php } ?>
		</ol>
		<div class="pager">
		</div>
	</div>
	<div id="footer">
		<a class="scrollUp">返回顶部</a>
		<p>Copyright&copy;五碗牛肉面</p>
	</div>
	<div class="cover-all-wrap js-cover-all-wrap">
		<div class="cover-cont js-cover-cont">
			<img src="img/photo1.png" class="img-big"/>
		</div>
		<div class="cover-mask"></div>
	</div>
</div>
</body>
<script type="text/javascript">
_loader.add('scrollUp', 'js/common.js');
_loader.use('jquery, scrollUp',function(){
	var $context = $('#owner'),
		$cover = $('.js-cover-all-wrap',$context),
		$coverCont = $('.js-cover-cont',$context);

	function computWH(){
		var clientWidth = $(window).width() > document.body.clientWidth ? $(window).width() : document.body.clientWidth,
			clientHeight = $(window).height() > document.body.clientHeight ? $(window).height() : document.body.clientHeight;
		var contLeft = (clientWidth - 723) / 2;
		$cover.css({
				"width" :clientWidth,
				"height" : clientHeight
			});
		$coverCont.css({
				"left" :contLeft
			});
	}
	computWH();
	$('.js-img').on('click',function(e){
		e.preventDefault();
		computWH();
		$cover.show();
		$(window).on('resize',computWH);
	});
	$cover.on('click',function(){
		$cover.hide();
	});
});
</script>
</html><?php }} ?>