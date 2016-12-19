<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Total Creative</title>
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
		<?php wp_head(); ?>
	</head>

	<?php

		if( is_front_page() ):
			$body_classes = array( 'front-page');
		else:
			$body_classes = array( 'not-front-page' );
		endif;

	?>

	<body <?php body_class( $body_classes ); ?>>

		<div class="header-holder"></div>

		<header class="nav-down">
			<a href="/totalcreative"><img src="<?php header_image(); ?>" id="header_image" alt="" /></a>

			<div type="button"
				class="menu-btn"
				data-toggle="collapse"
				data-target=".nav-collapse"
				title="Open the menu">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</div>

			<svg version="1.1" id="close-x" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				 width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
				<rect x="-83.198" y="233.16" transform="matrix(0.7071 0.7071 -0.7071 0.7071 256.0001 -106.0388)" fill="#EBEBE9" width="678.397" height="45.681"/>
				<rect x="233.16" y="-83.199" transform="matrix(0.7071 0.7071 -0.7071 0.7071 255.9973 -106.0388)" fill="#EBEBE9" width="45.681" height="678.397"/>
			</svg>

		</header>

		<?php wp_nav_menu( array(
			'theme_location' => 'primary',
			'container'     => '',
			'container_class' => 'nav'
		) ); ?>
