
<?php
/**
 * Block template file: tmpl/snippet-inlinequote.php
 *
 * Inlinequote Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'inlinequote-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-inlinequote';
if ( ! empty( $block['className'] ) ) {
    $classes .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $classes .= ' align' . $block['align'];
}
?>

<style type="text/css">
	<?php echo '#' . $id; ?> {
		/* Add styles that use ACF values here */
	}
</style>

<div class="fake">
<div id="<?php echo esc_attr( $id ); ?>" class="inline-quote <?php echo esc_attr( $classes ); ?>">
	<div class="qimg">
		<img src="<?php bloginfo('template_directory');?>/img/quote.svg" alt="Quote tag"  loading="lazy" />
	</div>
	<div class="qcnt">
	<p><?php the_field( 'quote' ); ?>	</p>
	<p class="cite"><?php the_field( 'cite' ); ?></p>
	</div>


</div>
</div>