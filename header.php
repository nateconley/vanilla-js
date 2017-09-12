<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php echo body_class(); ?>>
<header>
	<h1 class="page-name"><?php bloginfo(  ); ?></h1>
	<?php
		wp_nav_menu( array(
			'container'       => 'nav',
			'menu'            => 'primary',
			'container-class' => 'main-menu',
		) );
	?>
</header>
