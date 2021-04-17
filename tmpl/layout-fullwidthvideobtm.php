<?php
/**
 * Block template file: tmpl/layout-fullwidthvideobtm.php
 *
 * Fullbgvid Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'fullbgvid-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-fullbgvid';
if ( ! empty( $block['className'] ) ) {
    $classes .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $classes .= ' align' . $block['align'];
}
?>
<?php $background_image = get_field( 'background_image' ); ?>
<section id="<?php echo esc_attr( $id ); ?>" class="layout-full-background-text layout-wider-text u-mb-none <?php echo esc_attr( $classes ); ?>" style="background-image:url(<?php echo esc_url( $background_image['url'] ); ?>);">
	<div class="layout-full-background-text__wrapper">
		<div class="layout-full-background-text__text">
			<h2 class="is-heading u-text-center u-font-semibold"><?php the_field( 'heading' ); ?></h2>
			<div class="layout-full-background-text__text-text">
				<?php the_field( 'content' ); ?>
			</div>
		</div>
	</div>
</section>

<?php if ( get_field( 'add_video' ) == 1 ) : ?>
<section class="layout-heading-video-text">
	<div class="layout-heading-video-text__wrapper">
		<div class="layout-heading-video-text__heading">
				<h3 class="is-heading u-font-semibold u-text-center"><?php the_field( 'video_heading' ); ?></h3>
		</div>
		<div class="layout-heading-video-text__video">
			<?php $videotype = get_field( 'video_type' ); ?>
			<?php if ($videotype == "upload") {
						$upload = get_field( 'upload_video' );
						$upload = esc_html( $upload['url'] );
						$poster_for_upload = get_field( 'video_poster' );
						$poster_for_upload = esc_url( $poster_for_upload['url'] );
						$attr = array(
								'mp4'      => $upload,
								'poster'   => $poster_for_upload,
								'preload'  => 'auto'
						);
						echo wp_video_shortcode(  $attr );


			} ?>
			<?php if ($videotype == "embed") {

									$iframe = get_field('embed_video');

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
									$attributes .= 'loading="lazy"';
									$iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);

									// Display customized HTML.
									echo $iframe;
			} ?>
				<?php if ($videotype == "iframe") {

					 $iframe = get_field('iframe_video');

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
					 $attributes .= 'loading="lazy"';
					 $iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);

					 // Display customized HTML.
					 echo $iframe;
				}
				?>


		</div>
		<?php $cite = get_field( 'cite' ); ?>
		<?php if ($cite):?>
		<div class="layout-heading-video-text__text u-text-center">
			<p><?php echo $cite; ?></p>
		</div>
		<?php endif; ?>
	</div>

</section>
<?php endif; ?>