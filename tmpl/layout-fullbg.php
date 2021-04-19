<?php
/**
 * Block template file: tmpl/layout-fullbg.php
 *
 * Full Background With Text   Acf Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'full-background-with-text---acf-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-full-background-with-text---acf';
if ( ! empty( $block['className'] ) ) {
    $classes .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $classes .= ' align' . $block['align'];
}
?>
<?php $background_image = get_field( 'background_image' ); ?>
<section id="<?php echo esc_attr( $id ); ?>" class="layout-full-background-text <?php echo esc_attr( $classes ); ?>" style="background-image:url(<?php echo esc_url( $background_image['url'] ); ?>);">
	<div class="layout-full-background-text__wrapper">
		<div class="layout-full-background-text__text">
			<h2 class="is-heading u-text-center u-font-semibold"><?php the_field( 'heading' ); ?></h2>
			<div class="layout-full-background-text__text-text">
				<?php the_field( 'content' ); ?>
			</div>
		</div>
	</div>
</section>