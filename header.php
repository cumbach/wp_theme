<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>63.</title>
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


		<?php wp_nav_menu( array(
			'theme_location' => 'primary',
			'container'     => '',
			'container_class' => 'nav'
		) ); ?>
