<?php
/*

    =================================
    HEADER TEMPLATE PAGE
    =================================

*/
?>
<!DOCTYPE html>
<html <?php language_attributes( );?>>
<head>
	<meta charset=<?php bloginfo( 'charset' );?>>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=1">
	<title><?php bloginfo( 'name' );?></title>
	
	<!-- This site is optimized with the Yoast SEO plugin v17.4 - https://yoast.com/wordpress/plugins/seo/ -->
	<!-- CSS only -->
	
	<!-- Bootstrap install CDN -->
	<meta name="description" content=<?php bloginfo( 'description' ); ?>>
	<link rel="canonical" href=<?php bloginfo( 'wpurl' ); ?>>
	<meta property="og:site_name" content=<?php bloginfo( 'name' );?>>
	<meta property="article:publisher" content="https://www.facebook.com/Webdesignersfrance">
	<meta property="article:modified_time" content="2021-11-01T05:00:13+00:00">
	<meta property="og:image" content="https://web-designers.fr/wp-content/uploads/2021/10/nicolas-blond-WD-DEVELOPPEMENTS.png">
	<?php wp_head(); ?>
</head>
<body <?php body_class( );?>>