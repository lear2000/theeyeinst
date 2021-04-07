<?php // temp data ?>

<?php
			$items = [
				[
					'image' => get_template_directory_uri() . '/img/new-height-1.png',
					'heading' => 'Custom Cataract Surgery',
					'copy' => 'Regain your freedom and take back your lifestyle!'
				],
				[
					'image' => get_template_directory_uri() . '/img/new-height-1.png',
					'heading' => 'LASIK/PRK',
					'copy' => 'Looking to free yourself from glasses and contacts?'
				],
				[
					'image' => get_template_directory_uri() . '/img/new-height-1.png',
					'heading' => 'Vision ICL',
					'copy' => 'A wonderful LASIK/PRK alternative'
				]
			];
		?>

<?php // TEMPLATE ?>

<section class="layout-new-heights">

	<h2 class="is-heading u-text-center"><span>How Can We</span> <span>Take Your Vision</span> To New Heights?</h2>

	<div class="layout-new-heights__items u-text-center">
		<?php foreach ($items as $itemIndex => $itemValue) { ?>
			<div class="layout-new-heights__item">
				<div class="layout-new-heights__item-image">
					<img src="<?php echo $itemValue['image'];?>" alt="">
				</div>
				<div class="layout-new-heights__item-text">
					<h3><?php echo $itemValue['heading'];?></h3>
					<div><?php echo $itemValue['copy'];?></div>
				</div>
			</div>
		<?php } ?>
	</div>

</section>
