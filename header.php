<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title><?php echo get_bloginfo( 'name' ); ?></title> <!-- CAŁY HEAD JEST ROBOCZY -->
		<link href="<?php bloginfo('template_directory');?>/style.css" rel="stylesheet">
		<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/fontello.css">
		<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/animation.css">
		<?php wp_head();?>
	</head>
	<body>
		<div class="top">
			<div class="logo">
				<a href="<?php bloginfo('wpurl');?>"><img src="<?php bloginfo('template_directory');?>/images/logo.jpg" alt="logo" width="520" hight="140" /></a>
			</div>
			<div class="top-right">
				<div class="user">
					<div class="input-boxes">
					<input type="text" name="login" value="Login">
					<input type="text" name="password" value="Hasło">
					</div>
					<div class="clear"></div>
					<input type="button" name="log-in" value="Zaloguj się">
				</div>
				<div class="clear"></div>
				<div class="nav">
					<ul>
						<li><a href="<?php bloginfo('wpurl');?>"><i class="demo-icon icon-home"></i></a></li>
						<?php wp_list_pages( '&title_li='); ?>
					</ul>
				</div>
			</div>
			<div class="clear"></div>
		</div>