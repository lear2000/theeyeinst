<?php $header_background_image = get_field( 'header_background_image' ); ?>
<header class="fw-header">
	<div class="fw-headerbg" style="background-image: url(<?php echo esc_url( $header_background_image['url'] ); ?>);">

				<div class="fake">
					<div class="fwcnt" style="">
								<img src="<?php bloginfo('template_directory');?>/img/logo-white.svg" alt="The Eye Institute Of Utah Logo" />
								<h1><?php the_field( 'heading_tag' ); ?></h1>
								<p><?php the_field( 'sub_heading' ); ?></p>
					</div>
					<div class="fw-form">
						<h2>888-611-0070<span>Call Now or Fill Out the Form Below</span></h2>
						<?php $which_form = get_field( 'which_form' ); ?>
						<?php echo do_shortcode( '[aform name="'.$which_form->post_name.'"]'); ?>
					</div>
			 </div>
	</div>
</header>
<section class="landingcnt">
<div class="fake">
	<div class="lchalf">
		<?php the_field( 'half_section' ); ?>
	</div>
	<div class="lcfull">
	<?php the_field( 'full_section' ); ?>
	</div>
</div>
</section>