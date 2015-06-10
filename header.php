<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=<?php $this->options->charset(); ?>" />
<title><?php if($this->is('post')): ?><?php $this->title() ?> - <?php $this->category(' - ', false); ?> - <?php elseif($this->is('category')): ?><?php $this->category(' - ', false); ?> - <?php else: ?><?php $this->archiveTitle(' - ', '', ' - '); ?><?php endif; ?><?php $this->options->title(); ?></title>
<meta name="description" content="<?php $this->options->description() ?>" />
<meta name="keywords" content="<?php $this->options->keywords() ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('style.css'); ?>" />

<link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('css/css3.css'); ?>" />
<script src="http://lib.sinaapp.com/js/jquery/1.8/jquery.min.js" type="text/javascript"></script>		
<script src="<?php $this->options->themeUrl('js/jqFancyTransitions.1.8.min.js'); ?>" type="text/javascript"></script>
<script src="<?php $this->options->themeUrl('js/setup.js'); ?>" type="text/javascript"></script>
<script src="<?php $this->options->themeUrl('js/png.js'); ?>" type="text/javascript"></script>

<!-- 使用360公共库引入google fonts -->
<link href='http://fonts.googleapis.com/css?family=Black+Ops+One' rel='stylesheet' type='text/css'>

<!--[if IE]>			
<link href="<?php $this->options->themeUrl('css/jphotogrid.ie.css'); ?>" rel="stylesheet" type="text/css" media="screen" />
<![endif]--> 
</head>

<body>
<div class="menu radius_4">
	 <ul>
		 <li <?php if($this->is('index')): ?> class="current"<?php endif; ?>><a href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a></li>
         <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
         <?php while($pages->next()): ?>
         <li <?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?>><a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a></li>
         <?php endwhile; ?>
		 <li><a href="<?php $this->options->siteUrl(); ?>feed/" class="menu-rss" target="_blank" title="订阅本站">订阅本站</a></li>
	 </ul>

	 <!--<span>轻敲键盘，静候回音</span>-->
	 <form action="/search" class="head-search" method="get"><input id="search-input" type="text" name="s" class="inputbox" value="搜索..." onfocus="if (value =='搜索...'){value =''}" onblur="if (value ==''){value='搜索...'}" />	</form>
 </div>		

<div id="container" class="radius_4">	
<div id="container_top" class=" radius_t">

<?php if (!empty($this->options->logoWidth) && in_array('ChangWidth', $this->options->logoWidth)): ?>
<div id="logo" style="width:550px">
<a href="<?php $this->options->siteurl(); ?>"><?php $this->options->title(); ?></a>
</div>
<?php else : ?>
<div id="logo">
<a href="<?php $this->options->siteurl(); ?>"><?php $this->options->title(); ?></a>
</div>
<?php endif; ?>

<?php if (!empty($this->options->hiddenHead) && in_array('ShowAbout', $this->options->hiddenHead)): ?>
<div id="head_about"><span>ABOUT</span>
<p><b><?php $this->author(); ?></b>，是我在这个网站的标签</p>
<p><?php $this->options->description() ?></p>
</div>
<?php endif; ?>

<?php if (!empty($this->options->hiddenHead) && in_array('ShowContact', $this->options->hiddenHead)): ?>
<div id="head_contact">
<span>CONTACT ME</span>
<ul>	
<li><a href="http://weibo.com/" target="_blank" title="关注我的新浪微博"><i class="iconfont">&#xe631;</i></a></li>	
<li><a href="http://t.qq.com/" target="_blank" title="关注我的腾讯微博"><i class="iconfont">&#xe607;</i></a></li>
<li><a href="https://github.com/" target="_blank" title="关注我的GitHub"><i class="iconfont">&#xe611;</i></a></li>
<li><a href="https://twitter.com/" target="_blank" title="关注我的Twitter"><i class="iconfont">&#xe622;</i></a></li>
<li><a href="http://www.douban.com/" target="_blank" title="关注我的豆瓣"><i class="iconfont">&#xe670;</i></a></li>
<li><a href="http://xfuny.com/" target="_blank" title="访问我的网站"><i class="iconfont">&#xe606;</i></a></li>
<li><a href="http://c-light.taobao.com/" target="_blank" title="光顾我的网店"><i class="iconfont">&#xe63c;</i></a></li>
<li><a href='adimn@gmail.com' title="给我发邮件"><i class="iconfont">&#xe646;</i></a></li>
</ul>
</div>
<?php endif; ?>
</div>