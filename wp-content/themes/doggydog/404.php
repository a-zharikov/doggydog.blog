<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="https://gmpg.org/xfn/11">

		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ?>/images/favicon/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri() ?>/images/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri() ?>/images/favicon/favicon-16x16.png">
		<link rel="manifest" href="<?php echo get_template_directory_uri() ?>/images/favicon/site.webmanifest">
		<link rel="mask-icon" href="<?php echo get_template_directory_uri() ?>/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="theme-color" content="#ffffff">

		<?php wp_head(); ?>
	</head>

	<body class="page-404">

		<img src="<?php echo get_template_directory_uri() ?>/images/svg/404.svg">
		<a href="<?php echo get_home_url() ?>"><span>пофиксить</span></a>

	<?php wp_footer(); ?>
	</body>
</html>



