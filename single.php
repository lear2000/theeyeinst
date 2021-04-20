<?php get_header(); ?>
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 	<section class="fake">
 	<article class="singlepost"><?php the_content(); ?></article>
 	<div class="singlenav">
 	<?php previous_post_link( '%link', 'Previous'); ?>
 	<?php next_post_link( '%link', 'Next'); ?>
 	</div>
 	</section>
 <?php endwhile; else : ?>
 <?php endif; ?>

<?php get_footer(); ?>