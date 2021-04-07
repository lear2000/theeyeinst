<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css?v_=<?php echo time();?>">
</head>
<body>

	<?php include 'tmpl/snippet-header.php'; ?>

	<?php //include 'tmpl/fake.php'; ?>

	<?php include 'tmpl/layout-1-2.php'; ?>

	<?php include 'tmpl/layout-1-2-reverse.php'; ?>

	<?php include 'tmpl/layout-1-2-copy.php'; ?>

	<?php include 'tmpl/layout-physicians.php'; ?>

	<?php include 'tmpl/layout-new-heights.php'; ?>

	


	<!-- scripts	 -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="js/scripts-min.js"></script>
</body>
</html>


<?php
	//BrowserSync
	$browserSyncPort 					= 8080;
	$browserSync 			= 'http://127.0.0.1:'.$browserSyncPort;
	$browserSyncHeaders 		= @get_headers($browserSync);
	if($browserSyncHeaders): ?>
		<script async src="<?php echo $browserSync;?>/browser-sync/browser-sync-client.js?v=2.18.8"></script>
<?php endif; ?>
