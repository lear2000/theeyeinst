<section class="layout-candidates">
	<div class="layout-candidates__wrapper layout-container">

		<div class="layout-candidates__text u-text-center">
			<h2 class="is-heading layout-candidates__text-heading">Am I a Candidate?</h2>
			<div class="layout-candidates__text-text">
				<p>The best way to determine if Visian ICL or Visian Toric ICL can give you the visual freedom you’ve always wanted is to schedule a consultation with an ICL surgeon at The Eye Institute of Utah. You may be a candidate if you:</p>
			</div>
		</div>

		<div class="layout-candidates__types">
			<?php foreach($candidateTypes as $index => $candidate) { ?>
				<div class="layout-candidates__types-type">
					<div class="layout-candidates__types-type-image u-text-center"><img src="<?php echo $candidate['image'];?>" alt="{replace me}"></div>
					<div class="layout-candidates__types-type-copy"><?php echo $candidate['copy'];?></div>
				</div>
			<?php } ?>
		</div>

	</div>
</section>