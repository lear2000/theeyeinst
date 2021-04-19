<?php
/**
 * Block template file: tmpl/snippet-button.php
 *
 * Btnprimary Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'btnprimary-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-btnprimary';
if ( ! empty( $block['className'] ) ) {
    $classes .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $classes .= ' align' . $block['align'];
}
$alignme = get_field( 'align' );
?>
<style type="text/css">
	<?php	echo '#' . $id.'.align-center' ?> {
			display:flex;
			justify-content:center;
	}
	<?php	echo '#' . $id.'.align-right' ?> {
		display:flex;
		justify-content:flex-end;
	}
</style>
<div class="fake primary-btn-wrap <?php echo esc_attr( $classes ); echo ' align-'.$alignme; ?>" id="<?php echo esc_attr( $id ); ?>">
	<?php $primary_button = get_field( 'primary_button' ); ?>
	<a class="button btn primary" href="<?php echo esc_url( $primary_button['url'] ); ?>" target="<?php echo esc_attr( $primary_button['target'] ); ?>"><?php echo esc_html( $primary_button['title'] ); ?></a>
</div>