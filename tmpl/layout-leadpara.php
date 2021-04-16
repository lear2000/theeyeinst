<?php
/**
 * Block template file: tmpl/layout-leadpara.php
 *
 * Leadpara Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'leadpara-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-leadpara';
if ( ! empty( $block['className'] ) ) {
    $classes .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $classes .= ' align' . $block['align'];
}
?>

	<section class="layout-text-only layout-text-with-heading <?php echo esc_attr( $classes ); ?>" id="<?php echo esc_attr( $id ); ?>">
		<div class="layout-text-only__wrapper layout-container">
			<h2 class="is-heading u-text-center u-font-semibold"><?php the_field( 'heading' ); ?></h2>
			<div><?php the_field( 'content' ); ?></div>
		</div>
	</section>