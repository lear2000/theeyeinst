<div class="fake">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
	<article class="b-article">
	<div class="fimg">
		<?php $fimage = get_the_post_thumbnail($post->ID,array( 150, 150) ) ?>
		<?php if ($fimage): ?>
			<?php echo $fimage; ?>
		<?php else: ?>
			<img src="<?php bloginfo('template_directory');?>/img/placeholder.svg" loading="lazy" />
		<?php endif ?>

	</div>
	<div class="b-cnt">
		<h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
		<span class="meta">Posted on <?php echo get_the_date( 'l F j, Y' ); ?> in
			<?php
			$categories = get_the_category();
			$separator = ', ';
			$output = '';
			if ( ! empty( $categories ) ) {
			    foreach( $categories as $category ) {
			        $output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
			    }
			    echo trim( $output, $separator );
			}
			 ?>
		</span>
		<?php the_excerpt(); ?>
		<a href="<?php the_permalink();?>" class="btn primary">Read More</a>
	</div>
	</article>
		<?php endwhile; ?>
		<div class="navigation"><p><?php posts_nav_link(' ','Previous','Next'); ?></p></div>
	<?php endif; ?>
</div>