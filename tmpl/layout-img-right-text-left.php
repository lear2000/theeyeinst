<?php
/**
 * Block template file: tmpl/layout-img-right-text-left.php
 *
 * Imgrtxtl Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'imgrtxtl-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-imgrtxtl';
if ( ! empty( $block['className'] ) ) {
    $classes .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $classes .= ' align' . $block['align'];
}
?>
<section class="layout-1-2 layout-1-2-type__inner layout-1-2-wide-text <?php echo esc_attr( $classes ); ?>" id="<?php echo esc_attr( $id ); ?>">
	<?php $backgroung_image = get_field( 'backgroung_image' ); ?>
	<div class="layout-1-2__image" style="background-image:url(<?php echo esc_url( $backgroung_image['url'] ); ?>);"></div>
	<div class="layout-1-2__text">
		<h2 class="is-heading u-text-medium u-font-semibold"><?php the_field( 'heading' ); ?></h2>
		<?php the_field( 'content' ); ?>
	</div>
</section>