<?php
/**
 * Restricted Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create class attribute allowing for custom "className" and "align" values.
$classes = '';
if( !empty($block['className']) ) {
    $classes .= sprintf( ' %s', $block['className'] );
}
if( !empty($block['align']) ) {
    $classes .= sprintf( ' align%s', $block['align'] );
}




?>

<section class="layout-1-2-alternate <?php echo esc_attr( $classes ); ?>"  id="<?php echo esc_attr( $id ); ?>">
	<?php $left_image = get_field( 'left_image' ); ?>
	<div class="layout-1-2-alternate__wrapper layout-container">
		<div class="layout-1-2-alternate__item layout-1-2-alternate__image">
			<img src="<?php echo esc_url( $left_image['url'] ); ?>" alt="<?php echo esc_attr( $left_image['alt'] ); ?>" />
		</div>
		<div class="layout-1-2-alternate__item layout-1-2-alternate__text">
			<div>
				<?php the_field( 'content_right' ); ?>
			</div>
		</div>
	</div>
</section>