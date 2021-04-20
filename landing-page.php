<?php
//Template Name: LANDING PAGE
?>
<?php get_header(); ?>

<?php get_template_part( 'tmpl/landing', 'header' ); ?>
<div class="mtns"></div>
<footer class="landingfooter">
	<div class="fake">
		<h2><?php the_field( 'footer_area_heading' ); ?></h2>
		<div class="olsurg">
			<?php if ( have_rows( 'doctors_grid' ) ) : ?>
				<?php while ( have_rows( 'doctors_grid' ) ) : the_row(); ?>
					<?php $doctor_image = get_sub_field( 'doctor_image' ); ?>
					<div class="ssurg">
						<img  loading="lazy" src="<?php echo esc_url( $doctor_image['url'] ); ?>" alt="<?php echo esc_attr( $doctor_image['alt'] ); ?>" />
						<p><?php the_sub_field( 'doctor_text' ); ?></p>
					</div>

				<?php endwhile; ?>
			<?php else : ?>
				<?php // no rows found ?>
			<?php endif; ?>


		</div>
		<div class="footercopy">
		<?php the_field( 'footer_copy_right' ); ?>
	  </div>
	</div>
</footer>

<?php get_footer(); ?>