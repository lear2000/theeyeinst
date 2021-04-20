<?php
/**
 * Block template file: tmpl/layout-chart.php
 *
 * Comparisonchart Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'comparisonchart-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-comparisonchart';
if ( ! empty( $block['className'] ) ) {
    $classes .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $classes .= ' align' . $block['align'];
}
?>
<?php $grid_image_1 = get_field( 'grid_image_1' ); ?>
<?php $grid_image_2 = get_field( 'grid_image_2' ); ?>
<?php $grid_image_3 = get_field( 'grid_image_3' ); ?>
<?php $grid_image_4 = get_field( 'grid_image_4' ); ?>
<section class="compchart <?php echo esc_attr( $classes ); ?>" id="<?php echo esc_attr( $id ); ?>">
	<h2>Comparison Chart</h2>
	<p>See how the most popular vision correction options compare.</p>

	<div class="cgrid-wrap">
		<div class="cgrid bgwhite">
			&nbsp;
		</div>

		<div class="cgrid bgdark">
			<img src="<?php echo esc_url( $grid_image_1['url'] ); ?>" />
		</div>
	<div class="cnote-wrap">
		<?php if ( have_rows( 'chart_data' ) ) : ?>
				<?php while ( have_rows( 'chart_data' ) ) : the_row(); ?>
					<div class="cgrid cnotes">
						<span><div><?php the_sub_field( 'heading' ); ?></div></span>
						<span><div><?php the_sub_field( 'data' ); ?></div></span>
					</div>
				<?php endwhile; ?>
			<?php else : ?>
				<?php // no rows found ?>
			<?php endif; ?>
	</div>


		<div class="cgrid bglight">
			<img src="<?php echo esc_url( $grid_image_2['url'] ); ?>" />
		</div>
		<div class="cnote-wrap">
				<?php if ( have_rows( 'chart_data_mobile_2' ) ) : ?>
				<?php while ( have_rows( 'chart_data_mobile_2' ) ) : the_row(); ?>
					<div class="cgrid cnotes">
						<span><div><?php the_sub_field( 'heading' ); ?></div></span>
						<span><div><?php the_sub_field( 'data' ); ?></div></span>
					</div>
				<?php endwhile; ?>
			<?php else : ?>
				<?php // no rows found ?>
			<?php endif; ?>
	</div>




		<div class="cgrid bgdark">
			<img src="<?php echo esc_url( $grid_image_3['url'] ); ?>" />
		</div>
	<div class="cnote-wrap">
					<?php if ( have_rows( 'chart_data_mobile_3' ) ) : ?>
				<?php while ( have_rows( 'chart_data_mobile_3' ) ) : the_row(); ?>
					<div class="cgrid cnotes">
						<span><div><?php the_sub_field( 'heading' ); ?></div></span>
						<span><div><?php the_sub_field( 'data' ); ?></div></span>
					</div>
				<?php endwhile; ?>
			<?php else : ?>
				<?php // no rows found ?>
			<?php endif; ?>
	</div>



		<div class="cgrid bglight no-b">
			<img src="<?php echo esc_url( $grid_image_4['url'] ); ?>" />
		</div>
	<div class="cnote-wrap">
					<?php if ( have_rows( 'chart_data_mobile_4' ) ) : ?>
				<?php while ( have_rows( 'chart_data_mobile_4' ) ) : the_row(); ?>
					<div class="cgrid cnotes">
						<span><div><?php the_sub_field( 'heading' ); ?></div></span>
						<span><div><?php the_sub_field( 'data' ); ?></div></span>
					</div>
				<?php endwhile; ?>
			<?php else : ?>
				<?php // no rows found ?>
			<?php endif; ?>
	</div>


	<?php if ( have_rows( 'chart_data_desktop' ) ) : ?>

			<?php while ( have_rows( 'chart_data_desktop' ) ) : the_row(); ?>
				<div class="d-gridwrap">
				<?php if ( have_rows( 'text_blocks' ) ) : ?>
					<?php while ( have_rows( 'text_blocks' ) ) : the_row(); ?>
						<span><?php the_sub_field( 'text' ); ?></span>
					<?php endwhile; ?>

				<?php endif; ?>
				</div>
			<?php endwhile; ?>

		<?php endif; ?>




	</div>



</section>