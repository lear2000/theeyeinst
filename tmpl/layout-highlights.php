<?php
/**
 * Block template file: tmpl/layout-highlights.php
 *
 * Highlights Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'highlights-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-highlights';
if ( ! empty( $block['className'] ) ) {
    $classes .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $classes .= ' align' . $block['align'];
}
?>
<?php $background_image = get_field( 'background_image' ); ?>
<section class="layout-surgery-highlights <?php echo esc_attr( $classes ); ?>" id="<?php echo esc_attr( $id ); ?>" style="background-image:url(<?php echo esc_url( $background_image['url'] ); ?>);">
	<div class="layout-surgery-highlights__wrapper layout-container">
		<div class="layout-surgery-highlights__1">
			<div class="layout-surgery-highlights__1-1">
				<div class="layout-surgery-highlights__1-1-img">
					<?php $icon = get_field( 'icon' ); ?>
					<?php if ( $icon ) : ?>
							<img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
						<?php endif; ?>
				</div>
				<div class="layout-surgery-highlights__1-1-text">
					<p><?php the_field( 'icon_text' ); ?></p>
				</div>
			</div>
			<div class="layout-surgery-highlights__1-2">
				<div class="layout-surgery-highlights__1-2-heading">
					<h2 class="is-heading u-font-semibold"><?php the_field( 'heading' ); ?></h2>
				</div>
				<div class="layout-surgery-highlights__1-2-text">
					<?php the_field( 'content' ); ?>
				</div>
			</div>
		</div>
	</div>
</section>