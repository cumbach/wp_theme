<?php
/*
Template Name: Large Backdrop
*/
get_header(); ?>
  <div class="backdrop backdrop-large"></div>
	<div class="page page-large"><?php

	if( have_posts() ):

		while( have_posts() ): the_post(); ?>

			<p><?php the_content(); ?></p>

		<?php endwhile;

	endif;

	?></div>

<?php get_footer(); ?>
