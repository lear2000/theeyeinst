<?php
/**
 * Block template file: tmpl/layout-videoright.php
 *
 * Videoright Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'videoright-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-videoright';
if ( ! empty( $block['className'] ) ) {
    $classes .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $classes .= ' align' . $block['align'];
}

$videotype = get_field( 'video_type' );
?>
<section class="layout-1-2-video layout-1-2-video-reverse <?php echo esc_attr( $classes ); ?>" id="<?php echo esc_attr( $id ); ?>">
	<div class="layout-1-2-video__wrapper layout-container">

		<div class="layout-1-2-video__item layout-1-2-video__text">
			<h3 class="layout-1-2-video__text-heading is-heading"><?php the_field( 'heading' ); ?></h3>
			<div class="layout-1-2-video__text-text"><?php the_field( 'content' ); ?></div>
		</div>
		<div class="layout-1-2-video__item layout-1-2-video__video">
			<div class="layout-1-2-video__video-object">
				<?php if ($videotype == "upload") {
					$upload = get_field( 'upload' );
					$upload = esc_html( $upload['url'] );
					$poster_for_upload = get_field( 'poster_for_upload' );
					$poster_for_upload = esc_url( $poster_for_upload['url'] );
					$attr = array(
							'mp4'      => $upload,
							'poster'   => $poster_for_upload,
							'preload'  => 'auto'
					);
					echo wp_video_shortcode(  $attr );
				} ?>
				<?php if ($videotype == "embed") {
					// Load value.
					$iframe = get_field('embed');

					// Use preg_match to find iframe src.
					preg_match('/src="(.+?)"/', $iframe, $matches);
					$src = $matches[1];

					// Add extra parameters to src and replcae HTML.
					$params = array(
					    'controls'  => 1,
					    'hd'        => 1,
					    'autohide'  => 1
					);
					$new_src = add_query_arg($params, $src);
					$iframe = str_replace($src, $new_src, $iframe);

					// Add extra attributes to iframe HTML.
					$attributes = 'frameborder="0"';
					$attributes .= 'class="max-iframe"';
					$iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);

					// Display customized HTML.
					echo $iframe;
				}?>

			</div>
		</div>
	</div>
</section>

