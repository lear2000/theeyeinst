<?php
/**
 * Block template file: tmpl/layout-fullbgcenter.php
 *
 * Fullbgcenter Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'fullbgcenter-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-fullbgcenter';
if ( ! empty( $block['className'] ) ) {
    $classes .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $classes .= ' align' . $block['align'];
}
?>
<?php $background_image = get_field( 'background_image' ); ?>
<section class="layout-full-background-1-2 <?php echo esc_attr( $classes ); ?>" style="background-image:url(<?php echo esc_url( $background_image['url'] ); ?>)" id="<?php echo esc_attr( $id ); ?>" >
	<div class="layout-full-background-1-2__wrapper layout-container">
		<div class="layout-full-background-1-2__items">
			<?php if ( have_rows( 'left_content' ) ) : ?>
					<?php while ( have_rows( 'left_content' ) ) : the_row(); ?>


						<div class="layout-full-background-1-2__item">
							<div class="layout-full-background-1-2__item-img">
								<?php $left_image = get_sub_field( 'left_image' ); ?>
											<?php if ( $left_image ) : ?>
												<img src="<?php echo esc_url( $left_image['url'] ); ?>" alt="<?php echo esc_attr( $left_image['alt'] ); ?>" />
											<?php endif; ?>
							</div>
							<div class="layout-full-background-1-2__item-text">
								<h2 class="is-heading u-font-semibold"><?php the_sub_field( 'heading' ); ?></h2>
								<?php the_sub_field( 'content' ); ?>
							</div>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>


				<?php if ( have_rows( 'right_content' ) ) : ?>
						<?php while ( have_rows( 'right_content' ) ) : the_row(); ?>
							<?php $right_image = get_sub_field( 'right_image' ); ?>
							<div class="layout-full-background-1-2__item">
								<div class="layout-full-background-1-2__item-img">
									<?php if ( $right_image ) : ?>
											<img src="<?php echo esc_url( $right_image['url'] ); ?>" alt="<?php echo esc_attr( $right_image['alt'] ); ?>" />
									<?php endif; ?>
								</div>
								<div class="layout-full-background-1-2__item-text">
									<h2 class="is-heading u-font-semibold"><?php the_sub_field( 'heading' ); ?></h2>
									<?php the_sub_field( 'content' ); ?>
								</div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
		</div>
	</div>
</section>