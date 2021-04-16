<?php
/**
 * Block template file: tmpl/layout-andidate.php
 *
 * Candidate Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'candidate-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-candidate';
if ( ! empty( $block['className'] ) ) {
    $classes .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $classes .= ' align' . $block['align'];
}
?>

<section class="layout-candidates <?php echo esc_attr( $classes ); ?>" id="<?php echo esc_attr( $id ); ?>" >
	<div class="layout-candidates__wrapper layout-container">
		<div class="layout-candidates__text u-text-center">
			<h2 class="is-heading layout-candidates__text-heading"><?php the_field( 'heading' ); ?></h2>
			<div class="layout-candidates__text-text">
				<div><?php the_field( 'content' ); ?></div>
			</div>
		</div>
		<div class="layout-candidates__types">
			<?php if ( have_rows( 'icons' ) ) : ?>
					<?php while ( have_rows( 'icons' ) ) : the_row(); ?>
						<?php $icon = get_sub_field( 'icon' ); ?>
						<div class="layout-candidates__types-type">
							<div class="layout-candidates__types-type-image u-text-center"><img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" /></div>
							<div class="layout-candidates__types-type-copy"><?php the_sub_field( 'text' ); ?></div>
						</div>
					<?php endwhile; ?>
				<?php else : ?>
					<?php // no rows found ?>
				<?php endif; ?>
		</div>
	</div>
</section>