<section class="layout-physicians">

<div class="layout-physicians__wrapper">
	
<h2 class="is-heading">Our Physicians:</h2>

	<ul class="layout-physicians__list">
		
	<?php for ( $i=0; $i < 6; $i++ ) { ?>
		
		<li class="layout-physicians__list-item">
			<div class="layout-physicians__list-item-image">
				<img src="<?php echo get_template_directory_uri();?>/img/doc-photo.jpg" alt="[replace me]">
			</div>
			<div class="layout-physicians__list-item-text u-text-center">
				<span>Randy B. Carter, OD, FAAO</span>
				<span>Dry Eye,  Comprehensive Eye Care</span>
			</div>
		</li>

	<?php } ?>
	
</ul>

</div>

</section>
