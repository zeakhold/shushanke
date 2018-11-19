<!--
*                            _ooOoo_
*                           o8888888o
*                           88" · "88
*                           (| ^.^ |)
*                            O\ = /O
*                        ____/`---'\____
*                        . ' \\| |// `.
*                       / \\||| : |||// \
*                     / _||||| -:- |||||- \
*                       | | \\\ - /// | |
*                     | \_| ''\---/'' | |
*                      \ .-\__ `-` ___/-. /
*                   ___`. .' /--.--\ `. . __
*                ."" '< `.___\_<|>_/___.' >'"".
*               | | : `- \`.;`\ _ /`;.`/ - `: | |
*                 \ \ `-. \_ __\ /__ _/ .-` / /
*                `.____`-.___\_____/___.-`____.-'
*                 ⌒⌒⌒⌒⌒⌒⌒⌒⌒⌒⌒⌒⌒⌒⌒⌒⌒
*
*         .............................................
*                  佛祖保佑            代码无BUG
-->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<?php include('includes/seo.php'); ?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/tooltipster.css" />
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/style.min.css" />
		<?php wp_head();?>
	</head>
	<body>
		<div class="nav-bar">
			<div class="nav-bar-inner">
				<a href="<?php echo home_url();?>" class="logo">
					<span><?php echo get_bloginfo('name');?></span>
				</a>
				
				<button class="toggle-menu tooltip" type="button">
					<i class="fa fa-bars"></i>
				</button>
				<?php 
				$option=get_option('erlsimple_theme_options');
				if($option['logoimg']){?>
				<style>
				.logo-s{
					background-image: url(<?php echo $option['logoimg'];?>);
					background-repeat: no-repeat;
					background-position: center center;
					width: 160px;
					text-indent: -9999px;
					display: block;
				}
				</style>					
				<?php }
				?>

				<a href="<?php echo home_url();?>" class="logo-s"><?php echo get_bloginfo('name');?></a>
				<?php
				if(function_exists('wp_nav_menu')) {
					wp_nav_menu(array('theme_location'=>'primary','menu_class'=>'menu','container'=>'nav'));
				}
				?>
				
				<form method="get" action="<?php bloginfo('url'); ?>" class="top_form">
					<i class="fa fa-search searchpro"></i><input class="input-search-index" type="text" name="s" value="" placeholder="Search……" autocomplete="off"/>
				</form>
				<button class="toggle-search tooltip" type="button" title="搜索">
					<i class="fa fa-search"></i>
				</button>
				
			</div>
		</div>
		<nav class="site-nav">
			<div> <?php
				if(function_exists('wp_nav_menu')) {
					wp_nav_menu(array('theme_location'=>'secondery','menu_class'=>'pages','container'=>'ul'));
				}
				?>
			</div>    
		</nav>
    
		<form method="get" class="search-form" action="<?php echo home_url();?>/">
	          <input class="input-search" type="text" name="s" value="" placeholder="输入关键字后按回车键搜索……" autocomplete="off" autofocus>
		</form>