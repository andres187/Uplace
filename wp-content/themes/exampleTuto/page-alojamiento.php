<?php

/*
Template Name: Alojamiento Layout
*/


get_header("alojamiento");

if (have_posts()) :
	while (have_posts()) : the_post(); ?>
		
		<article class="post page">

		<nav class="site-nav children-links clearfix">

		<span class="parent-link"><a href="<?php echo get_the_permalink(get_top_ancestor_id()); ?>"><?php echo get_the_title(get_top_ancestor_id()); ?>(Ua0011)</a></span>
			
			<ul>	
			<a href="#album"> Albúm </a>		
			<a href="#especificaciones"> Especificaciones | &nbsp;</a>
			<a href="#informacion">Información | &nbsp; </a>
			
			</ul>
		</nav>

		<div id="informacion" style="border-bottom: 4px dotted #DDD">

			<h2 style="float: right; color:red"> <i class="wp-svg-coin coin"></i> 500k</h2>
			<h2><i class="wp-svg-file file"></i> Información</h2>	
			<p><?php
			$page_id=49;

			$page_data = get_page($page_id);

			echo apply_filters('the_content', $page_data->post_content);

			?></p>
		</div>
		<div id="especificaciones" style="border-bottom: 4px dotted #DDD">
			<h2> <i class="wp-svg-list list"></i> Especificaciones</h2>	
			<p><?php
			$page_id=47;

			$page_data = get_page($page_id);

			echo apply_filters('the_content', $page_data->post_content);

			?></p>
		</div>

			<div id="album" class="slider">
			<h2> <i class="wp-svg-camera camera"></i> Albúm</h2>
				 <?php 
    echo do_shortcode("[metaslider id=67]"); 
?>
			</div>

		</article>
	<?php
	endwhile;
	else :
		echo "<p>No se encontro contenido</p>";
	endif;

get_footer();

