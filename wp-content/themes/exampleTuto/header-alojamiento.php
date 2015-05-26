<!DOCTYPE html>
<html <?php language_attributes(); ?>> 
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header id="yo" class="Header">
	<figure class="Header-imageContainer">
                <img src="http://localhost/wordpress/wp-content/uploads/2015/05/logo.png" alt="Imagen personal" class="Header-image"/>
                <figcaption class="Header-imageDescription">
                    <a class="Header-link" href="http://twitter.com/Uplace.co/" target="_black">@Uplace</a>
                </figcaption>
    </figure>
    <b class="Header-name" >Uplace</b>
 </header>
<div class="container">

	
<header class="site-header">		

	<nav class="site-nav">
	<?php
		$args = array (

				'theme_location' => 'primary'
			);
	?>

		<?php wp_nav_menu( $args ); ?>
	</nav>

</header>