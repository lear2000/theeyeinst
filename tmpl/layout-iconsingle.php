<?php
/**
 * Block template file: tmpl/layout-iconsingle.php
 *
 * Iconsandtext Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'iconsandtext-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-iconsandtext';
if ( ! empty( $block['className'] ) ) {
    $classes .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $classes .= ' align' . $block['align'];
}
?>
<section class="icon_text_below layout-surgery-highlights" id="<?php echo esc_attr( $id ); ?>">
		<div class="layout-surgery-highlights__2">
			<div class="layout-surgery-highlights__2-items">


				<?php if ( have_rows( 'icons_with_text_below' ) ) : ?>
						<?php while ( have_rows( 'icons_with_text_below' ) ) : the_row(); ?>
							<?php $icon = get_sub_field( 'icon' ); ?>
							<div class="layout-surgery-highlights__2-item">
								<div class="layout-surgery-highlights__2-item-img">
									<?php if ( $icon ) : ?>
													<img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
												<?php endif; ?>
								</div>
								<div class="layout-surgery-highlights__2-item-text">
									<?php the_sub_field( 'content' ); ?>
								</div>
							</div>
						<?php endwhile; ?>
 				<?php endif; ?>


			</div>
		</div>
</section>