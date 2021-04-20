<?php $pageID_blog = get_option( 'page_for_posts' ); ?>
<?php $header_image_post = get_field( 'header_image' ,$pageID_blog); ?>
<?php if ($header_image_post) :?>
<header class="wideheader">
	<div class="wh-bg" style="background-image: url(<?php echo esc_url( $header_image_post['url'] ); ?>);"></div>
</header>
<?php else: ?>
	<?php $wideheader =  get_field( 'header_image'); ?>
	<header class="wideheader">
		<div class="wh-bg" style="background-image: url(<?php echo esc_url( $wideheader['url'] ); ?>);"></div>
	</header>
<?php endif; ?>