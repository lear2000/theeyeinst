<?php
/**
 * Block template file: tmpl/snippet-formdark.php
 *
 * Form Dark   Acf Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'form-dark---acf-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-form-dark---acf';
if ( ! empty( $block['className'] ) ) {
    $classes .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $classes .= ' align' . $block['align'];
}
?>
<?php $formcolor = get_field( 'form_light_or_dark' ); ?>
<?php $background_image = get_field( 'background_image' ); ?>

<style type="text/css">
	<?php echo '#' . $id; ?> {

	}
</style>
<?php if ($background_image): ?>
	<section class="inline-form <?php echo 'form'.$formcolor.' ';echo esc_attr( $classes ); ?>" id="<?php echo esc_attr( $id ); ?>" style="background-image:url(<?php echo esc_url( $background_image['url'] ); ?>);">
<?php else: ?>
	<section class="inline-form  <?php echo 'form'.$formcolor.' '; echo esc_attr( $classes ); ?>" id="<?php echo esc_attr( $id ); ?>">
<?php endif ?>

	<div class="fwrap">
			<h2><?php the_field( 'heading' ); ?></h2>
			<h3><?php the_field( 'sub_heading' ); ?></h3>
			<?php $which_form = get_field( 'which_form' ); ?>
			<?php if ( $which_form ) : ?>
			<?php $post = $which_form; ?>
			<?php setup_postdata( $post ); ?>
			<div class="formwrapper">
				<?php
						$formname = $post->post_name;
				 ?>
					<?php echo do_shortcode( '[aform name="'.$formname.'"]' ); ?>

				<?php wp_reset_postdata(); ?>
			</div>
			<?php endif; ?>
			<?php $disclaimer = get_field( 'disclaimer' ); ?>
			<?php if ($disclaimer): ?>
				<p><small><?php echo $disclaimer; ?></small></p>
			<?php else: ?>
				<p><small>By completing this contact form and providing your email address, you are opting in to receive email communications from The Eye Institute of Utah. You may choose to opt-out of future email communications at any time.</small></p>
			<?php endif ?>

		</div>
</section>