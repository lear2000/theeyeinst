<?php
/**
 * Block template file: tmpl/snippet-buttonsecond.php
 *
 * Btnsecondary Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'btnsecondary-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-btnsecondary';
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

<div id="<?php echo esc_attr( $id ); ?>" class="fake secondary-btn-wrap <?php echo esc_attr( $classes );echo ' align-'.$alignme; ?>">
	<?php $button_secondary = get_field( 'button_secondary' ); ?>
	<a class="button btn secondary" href="<?php echo esc_url( $button_secondary['url'] ); ?>" target="<?php echo esc_attr( $button_secondary['target'] ); ?>"><?php echo esc_html( $button_secondary['title'] ); ?></a>
</div>