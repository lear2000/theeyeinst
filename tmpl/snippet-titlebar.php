<div class="fake">
<div class="titlebar">
	<?php  $blog_title = get_the_title( get_option('page_for_posts', true) ); ?>
	<?php
		$iscat = get_queried_object();
		$iscatname = $iscat->name;
	 ?>
	<?php if ($blog_title && !is_category()): ?>
	<h1><?php echo $blog_title; ?></h1>
	<?php elseif($iscatname): ?>
		<h1><?php echo $iscatname; ?></h1>
	<?php else: ?>
		<h1><?php the_title(); ?></h1>
	<?php endif ?>

</div>
</div>