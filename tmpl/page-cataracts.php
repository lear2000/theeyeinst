<section class="layout-1-2 layout-1-2-type__inner">
	<div class="layout-1-2__image" style="background-image:url(<?php echo get_template_directory_uri( )?>/img/section-hiker.jpg);"></div>
	<div class="layout-1-2__text">
		<h1 class="is-heading">See What You’ve Been Missing - Cataract Surgery</h1>
		<p>Cataracts are a very common eye condition that affects many people as they age. Luckily, cataract surgery has advanced to be highly effective, safe, and successful. We understand that cataracts can be a frustrating part of the aging process, but we’re here to help improve your vision.</p>
		<br>
		<p>At The Eye Institute of Utah, you have access to some of the most well-known and respected cataract surgeons in the ophthalmic community. Our cataract specialists are all certified on the most advanced surgical technology and intraocular lens implant (IOL) options available to help our patients obtain the best post-operative vision possible!</p>
	</div>
</section>


<section class="layout-text-only layout-text-with-heading">
	<div class="layout-text-only__wrapper layout-container">
		<h2 class="is-heading u-text-center u-font-semibold">What Are Cataracts?</h2>
		<p>There is a clear lens in your eye, behind your iris, that focuses light to the retina at the back of your eye, which in turn transmits images to the optic nerve. Vision is crisp and clear when each of these components is working properly. A cataract occurs when the lens hardens and becomes cloudy. Cataracts are progressive, with mild symptoms at first, that can advance slowly or quickly to eventually distort or debilitate eyesight. While aging eyes are the most common cause of cataracts, they may also develop due to certain medications, injuries, or genetic factors.</p>
	</div>
</section>


<section class="layout-full-background-1-2" style="background-image:url(<?php echo get_template_directory_uri( );?>/img/1-2_AdobeStock_298566264.jpg)">
	<div class="layout-full-background-1-2__wrapper layout-container">
		<div class="layout-full-background-1-2__items">	
			<div class="layout-full-background-1-2__item">
				<div class="layout-full-background-1-2__item-img">
					<img src="<?php echo get_template_directory_uri()?>/img/cataract-normal-eye.png" alt="{replace me}">
				</div>
				<div class="layout-full-background-1-2__item-text">
					<h2 class="is-heading u-font-semibold">Normal Lens</h2>
					<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero</p>
				</div>
			</div>
			<div class="layout-full-background-1-2__item">
				<div class="layout-full-background-1-2__item-img">
					<img src="<?php echo get_template_directory_uri()?>/img/cataract-affected-eye-2.png" alt="{replace me}">
				</div>
				<div class="layout-full-background-1-2__item-text">
					<h2 class="is-heading u-font-semibold">Lens Affected by Cataracts</h2>
					<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero</p>
				</div>
			</div>
		</div>
	</div>
</section>


<?php
	$syptoms = [
		[
			'image' => get_template_directory_uri() . '/img/cat-symptom-1.png',
			'copy' => 'Cloudy Or Blurry Vision'
		],
		[
			'image' => get_template_directory_uri() . '/img/cat-symptom-2.png',
			'copy' => 'Trouble Seeing/Driving At Night'
		],
		[
			'image' => get_template_directory_uri() . '/img/cat-symptom-3.png',
			'copy' => 'Light Sensitivity'
		],
		[
			'image' => get_template_directory_uri() . '/img/cat-symptom-4.png',
			'copy' => 'Seeing Halos Or Glare'
		],
		[
			'image' => get_template_directory_uri() . '/img/cat-symptom-5.png',
			'copy' => 'Colors May Appear Dull'
		],
		[
			'image' => get_template_directory_uri() . '/img/cat-symptom-6.png',
			'copy' => 'Regular Changes To Prescriptions For Eyeglasses And/Or Contact Lenses'
		]
		
	];
?>

<section class="layout-syptoms-1-3">
	<div class="layout-syptoms-1-3__wrapper">
		<div class="layout-syptoms-1-3__text u-text-center">
			<h2 class="u-font-semibold">Cataract Symptoms</h2>
			<p>Symptoms may vary among individual patients and may be mild or unnoticed in the early stages of a cataract.</p>
		</div>
		<div class="layout-syptoms-1-3__items">
			<?php foreach($syptoms as $index => $syptom) { ?>
				<div class="layout-syptoms-1-3__item u-text-center">
					<div class="layout-syptoms-1-3__item-img">
						<img src="<?php echo $syptom['image'];?>" alt="{replace me}">
					</div>
					<div class="layout-syptoms-1-3__item-text">
						<p><?php echo $syptom['copy'];?></p>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</section>

<section class="layout-1-2 layout-1-2-reverse layout-1-2-type__inner layout-1-2-wide-text">
	<div class="layout-1-2__image layout-1-2-reverse__image" style="background-image:url(<?php echo get_template_directory_uri( )?>/img/section-lady.jpg);"></div>
	<div class="layout-1-2__text layout-1-2-reverse__text">
		<h2 class="is-heading u-text-medium u-font-semibold">Treatment For Cataracts</h2>
		<p>In the early stages of a cataract, an updated eyeglasses or contact lens prescription may compensate for any visual deterioration. However, this approach does not cure the condition and as a cataract progresses, an increased prescription will no longer be adequate. Cataracts will eventually affect your ability to safely perform everyday tasks, such as driving and cooking, as well as prevent you from enjoying hobbies such as reading, sewing, exercising, art, or gardening. The only effective treatment for cataracts is surgery.</p>
	</div>
</section>


<section class="layout-full-background-text layout-wider-text u-mb-none" style="background-image:url(<?php echo get_template_directory_uri( )?>/img/what-are-cataracts-man.jpg);">
	<div class="layout-full-background-text__wrapper">
		<div class="layout-full-background-text__text">
			<h2 class="is-heading u-text-center u-font-semibold">How Does Cataract Surgery Work?</h2>
			<div class="layout-full-background-text__text-text">
				<p>During cataract surgery, your surgeon will remove the cataract and replace your natural lens with an intraocular lens (IOL). An IOL is a lens implant that can improve your vision and sometimes even eliminate your need to wear eyeglasses or contact lenses after surgery.</p>
				
				<p>Cataract surgery is one of the most commonly performed surgeries in the United States, it is a very safe procedure with an extremely low complication rate and high rate of success1. At The Eye Institute of Utah, you can rest assured that our surgeons are widely regarded to be among the most skilled and respected cataract specialists. Any type of surgery carries a range of benefits and risks, and your eye doctor will discuss details with you during a thorough cataract examination prior to surgery.</p>
			</div>
		</div>
	</div>
</section>




<section class="layout-heading-video-text">
	<div class="layout-heading-video-text__wrapper">
		<div class="layout-heading-video-text__heading">
				<h3 class="is-heading u-font-semibold u-text-center">Cataract Surgery Process</h3>
		</div>
		<div class="layout-heading-video-text__video">
			<img src="<?php echo get_template_directory_uri();?>/img/video-preview-2.jpg" alt="{replace me}">
		</div>
		<div class="layout-heading-video-text__text u-text-center">
			<p>This video details the steps of cataract surgery, available at our cataract treatment facility in Salt Lake City, Utah.</p>
		</div>
	</div>
</section>

<section class="layout-1-2 layout-1-2-type__inner layout-1-2-wide-text">
	<div class="layout-1-2__image" style="background-image:url(<?php echo get_template_directory_uri( )?>/img/man-in-car.jpg);"></div>
	<div class="layout-1-2__text">
		<h2 class="is-heading u-text-medium u-font-semibold">Cataract Surgery Recovery</h2>
		<p>Cataract surgery is an outpatient procedure and does not require an overnight hospital stay. Cataract surgery patients generally experience very little downtime, and vision is typically noticeably improved by the next day and continues to improve for several weeks. The majority of patients are back to their regular activities and even driving within 24-48 hours after surgery. Patients will need to take a regimen of prescription drops to help prevent infection and regulate healing for several weeks after surgery, and your eye doctor will review post-operative care instructions with you.</p>
	</div>
</section>


<?php
	$highlights = [
		[
			'image' => get_template_directory_uri() . '/img/pick-eye.svg',
			'copy' => 'We utilize the LenSx® Laser System, which studies show delivers a 59% better chance at seeing 20/20 or better when cvompared to manual blade surgery techniques.2'
		],
		[
			'image' => get_template_directory_uri() . '/img/lens-implant.svg',
			'copy' => 'We offer a range of Advanced Lens Implants (IOLs) that can correct astigmatism as well as vision at all distances, helping patients reduce or eliminate their dependence on corrective eyewear.'
		],
		[
			'image' => get_template_directory_uri() . '/img/ora.svg',
			'copy' => 'Our ORA Warranty backs our real-time measurement technology used to ensure your IOL lens power and placement, which means that should enhancements be needed after surgery, they are included in your original cost.'
		],
	];
?>

<section class="layout-surgery-highlights">
	<div class="layout-surgery-highlights__wrapper layout-container">
		<div class="layout-surgery-highlights__1">
			<div class="layout-surgery-highlights__1-1">
				<div class="layout-surgery-highlights__1-1-img">
					<img src="<?php echo get_template_directory_uri();?>/img/ribbon-2.png" alt="ribbon">
				</div>
				<div class="layout-surgery-highlights__1-1-text">
					<p>The Eye Institute of Utah was among the first practices in the nation to offer Laser Cataract Surgery.</p>
				</div>
			</div>
			<div class="layout-surgery-highlights__1-2">
				<div class="layout-surgery-highlights__1-2-heading">
					<h2 class="is-heading u-font-semibold">Achieve LASIK-Like Results with Custom Cataract Surgery</h2>
				</div>
				<div class="layout-surgery-highlights__1-2-text">
					<p>At The Eye Institute of Utah, we are committed to bringing the most advanced options to Salt Lake City. Our practice was among the first in the United States, and worldwide, to offer laser cataract surgery commercially. We combine state-of-the-art technology with our specialized experience to give cataract patients the opportunity to significantly improve their vision, beyond standard cataract removal. Some of our dynamic options include:</p>
				</div>
			</div>
		</div>
		<div class="layout-surgery-highlights__2">
			<div class="layout-surgery-highlights__2-items"> 
				<?php foreach($highlights as $index => $highlight) { ?>
					<div class="layout-surgery-highlights__2-item">
						<div class="layout-surgery-highlights__2-item-img">
							<img src="<?php echo $highlight['image'];?>" alt="{replace me}">
						</div>
						<div class="layout-surgery-highlights__2-item-text">
							<p><?php echo $highlight['copy'];?></p>
						</div>	
					</div>
				<?php } ?>
			</div>
		</div>
		<div class="layout-surgery-highlights__3 u-text-center">
			<p><a href="#" class="u-uppercase">Learn More About Custom Cataract Surgery</a></p>
			<br>
			<p><small>2 Guttman Krader C. Study: Effective lens position advances accuracy Femtosecond laser brings greater refractive predictability into hands of cataract surgeons. Ophthalmology Times. January 2012</small></p>
		</div>
	</div>
</section>

<section class="layout-full-background-text" style="background-image:url(<?php echo get_template_directory_uri( )?>/img/slots-canyon-1.jpg);">
	<div class="layout-full-background-text__wrapper">
		<div class="layout-full-background-text__text">
			<h2 class="is-heading u-text-center u-font-semibold">Why Choose The Eye Institute of Utah For Cataract Treatment?</h2>
			<div class="layout-full-background-text__text-text">
				<p>EXPERIENCE Our surgeons have performed over 80,000 cataract procedures, and doctors worldwide refer their patients to us for cataract surgery.</p>
				<p>KNOWLEDGE Our surgeons have been featured as experts, recognized with awards, and invited to lecture and instruct internationally on cataract surgery.</p>
				<p>TECHNOLOGY We were among the first to offer Custom Laser Cataract Surgery in Utah, and we continue involvement in numerous clinical trials that bring advanced technologies to our patients first.</p>
				<p>PERSONALIZATION We are proud to serve our community and we take the time to explain all options and help the patient decide what’s best for them. No pressure!</p>
			</div>
		</div>
	</div>
</section>

<section class="layout-1-2 layout-1-2-reverse layout-1-2-type__inner layout-1-2-wide-text">
	<div class="layout-1-2__image layout-1-2-reverse__image" style="background-image:url(<?php echo get_template_directory_uri( )?>/img/couple-smiling.jpg);"></div>
	<div class="layout-1-2__text layout-1-2-reverse__text">
		<h2 class="is-heading u-text-medium u-font-semibold">Does Insurance Pay For Cataract Surgery?</h2>
		<p>In the early stages of a cataract, an updated eyeglasses or contact lens prescription may compensate for any visual deterioration. However, this approach does not cure the condition and as a cataract progresses, an increased prescription will no longer be adequate. Cataracts will eventually affect your ability to safely perform everyday tasks, such as driving and cooking, as well as prevent you from enjoying hobbies such as reading, sewing, exercising, art, or gardening. The only effective treatment for cataracts is surgery.</p>
	</div>
</section>
