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

<div class="container-fluid">
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

<nav class="navbar navbar-expand-md navbar-primary bg-light ">
    <div class="container wd-navbar">
        <a class="navbar-brand " href="<?php bloginfo( 'wpurl' ); ?>"><?php bloginfo( 'name' )?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
			<img src=<?php bloginfo( 'logo' ); ?> alt="" width="30" height="24" class="d-inline-block align-text-top">

			</span>
        </button>
        
        <div class="collapse navbar-collapse" id="main-menu">
            <?php
			wp_nav_menu( array(
				'theme_location' => 'primary',
				'container' => false,
				'menu_class' => 'nav navbar-nav',
				'walker'          => new WP_Bootstrap_Navwalker(),
			) );
            ?>
        </div>
    </div>
</nav>

