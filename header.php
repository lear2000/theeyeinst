<!DOCTYPE html>
<html>
<head>
	<title><?php wp_title(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory');?>/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory');?>/favicon/favicon-16x16.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory');?>/favicon//apple-touch-icon.png">
	<link rel="manifest" href="<?php bloginfo('template_directory');?>/favicon/site.webmanifest">

	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?> >
	<?php get_template_part( 'tmpl/snippet', 'header' ); ?>