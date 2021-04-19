<?php
/**
 * Block template file: tmpl/layout-mapblock.php
 *
 * Contactmaps Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'contactmaps-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-contactmaps';
if ( ! empty( $block['className'] ) ) {
    $classes .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $classes .= ' align' . $block['align'];
}
?>
<section class="locmap <?php echo esc_attr( $classes ); ?>" id="<?php echo esc_attr( $id ); ?>">
	<div class="fake">
		<div class="locmapcnt">
			<h2><?php the_field( 'heading' ); ?></h2>
			<div class="locad"><?php the_field( 'address' ); ?>
						<?php $address_link = get_field( 'address_link' ); ?>
			 		<a class="btn primary" href="<?php echo esc_url( $address_link['url'] ); ?>" target="<?php echo esc_attr( $address_link['target'] ); ?>"><?php echo esc_html( $address_link['title'] ); ?></a>
			</div>
			<div class="locad">
				Phone: <a href="<?php echo telly_link(get_field( 'phone' )); ?>"><?php the_field( 'phone' ); ?></a><br>
				Fax: <?php the_field( 'fax' ); ?>
				<?php $virtual_button_link = get_field( 'virtual_button_link' ); ?>
				<a class="btn primary" href="<?php echo esc_url( $virtual_button_link['url'] ); ?>" target="<?php echo esc_attr( $virtual_button_link['target'] ); ?>"><?php echo esc_html( $virtual_button_link['title'] ); ?></a>
			</div>
		</div>
</div>
	<div class="mapblock">
		<?php $mapbox_image = get_field( 'mapbox_image' ); ?>
		<?php $mapbox_image_mobile = get_field( 'mapbox_image_mobile' ); ?>
		<picture>
		  <source media="(max-width: 767px)" srcset="<?php echo esc_url( $mapbox_mobile['url'] ); ?>">

		  <source media="(min-width: 768px)" srcset="<?php echo esc_url( $mapbox_image['url'] ); ?>">
		  <img src="<?php echo esc_url( $mapbox_image['url'] ); ?>" alt="<?php echo esc_attr( $mapbox_image['alt'] ); ?>" / loading="lazy" />
		</picture>

	</div>

	<div class="virtualbox"></div>
</section>