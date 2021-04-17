<?php
/**
 * Block template file: tmpl/layout-gridheading.php
 *
 * Symptoms Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'symptoms-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-symptoms';
if ( ! empty( $block['className'] ) ) {
    $classes .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $classes .= ' align' . $block['align'];
}
?>
<section class="layout-syptoms-1-3 <?php echo esc_attr( $classes ); ?>" id="<?php echo esc_attr( $id ); ?>">
	<div class="layout-syptoms-1-3__wrapper">
		<div class="layout-syptoms-1-3__text u-text-center">
			<h2 class="u-font-semibold"><?php the_field( 'heading' ); ?></h2>
			<?php the_field( 'content' ); ?>
		</div>
		<div class="layout-syptoms-1-3__items">
			<?php if ( have_rows( 'icon_grid' ) ) : ?>
					<?php while ( have_rows( 'icon_grid' ) ) : the_row(); ?>
						<?php $icon = get_sub_field( 'icon' ); ?>
						<div class="layout-syptoms-1-3__item u-text-center">
							<div class="layout-syptoms-1-3__item-img">
							<?php if ( $icon ) : ?>
										<img  loading="lazy" src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
							<?php endif; ?>
							</div>
							<div class="layout-syptoms-1-3__item-text">
								<p><?php the_sub_field( 'text' ); ?></p>
							</div>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
		</div>
	</div>
</section>