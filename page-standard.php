<?php

/*
Template Name: Standard
*/
get_header(); ?>

	<!-- <div class="backdrop backdrop-small"></div> -->
	<div class="page page-small"><?php

	if( have_posts() ):

		while( have_posts() ): the_post(); ?>

			<p><?php the_content(); ?></p>

		<?php endwhile;

	endif;

	?></div>

<?php get_footer(); ?>
