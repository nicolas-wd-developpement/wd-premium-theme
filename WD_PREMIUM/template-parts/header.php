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

<h1 class="visually-hidden">Headers examples</h1>
  <div class="container">
	<div class="row">
		<div class="col-xs-12 vertical-align">
			<div class="header-container background-image text-center flex-container" style="background-image: url(<?php header_image(); ?>);">
			 <div class="flex-container">
			 	<h1 class="site-title"><?php bloginfo( 'name' )?></h1>
				<h2 class="site-description"><?php bloginfo( 'description' )?></h2>
			 </div>
			</div><!--.header-container-->

		</div><!--.col-xs-12-->
	</div><!--.row-->
  
  </div> <!-- .container-fluid -->
	
  <div class="container-fluid">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
        <span class="fs-4">Simple header</span>
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Home</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Features</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Pricing</a></li>
        <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li>
        <li class="nav-item"><a href="#" class="nav-link">About</a></li>
      </ul>
    </header>
  </div>