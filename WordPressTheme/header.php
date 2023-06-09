<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php bloginfo( 'name' ); ?></title>
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/reset.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/sp_style.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<body>
<header>
	<div class="header">
		<div class="header__logo">
			<a href="<?php echo esc_url( home_url('/') ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="logo"></a>
		</div>
		<div class="sp-menu">
			<span class="material-icons" id="open">menu</span>
		</div>
		<div class="top--menu">
			<?php get_template_part('template/global_nav'); ?>
		</div>
	</div>

</header>