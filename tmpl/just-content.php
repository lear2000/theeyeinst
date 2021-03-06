<?php
/**
 * Block template file: tmpl/just-content.php
 *
 * Justcontent Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'justcontent-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-justcontent';
if ( ! empty( $block['className'] ) ) {
    $classes .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $classes .= ' align' . $block['align'];
}
?>

	<section class="layout-text-only <?php echo esc_attr( $classes ); ?>" id="<?php echo esc_attr( $id ); ?>">
		<div class="layout-text-only__wrapper layout-container">
			<?php the_field( 'content' ); ?>
		</div>
	</section>