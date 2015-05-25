<?php

/*
Template Name: Alojamiento Layout
*/


get_header("alojamiento");

if (have_posts()) :
	while (have_posts()) : the_post(); ?>
		<article class="post page">

		<nav class="site-nav children-links clearfix">

		<span class="parent-link"><a href="<?php echo get_the_permalink(get_top_ancestor_id()); ?>"><?php echo get_the_title(get_top_ancestor_id()); ?>(AQUI IRIA ID DE LA CASA)</a></span>
			
			<ul>
			<?php 

			$args = array(
					'child_of' => get_top_ancestor_id(),
					'title_li' => ''
				);

			wp_list_pages($args); ?>

			</ul>
		</nav>

		<div class="column-container clearfix">
			
			<div class="title-column">
				<h2><?php the_title(); ?></h2>	
			</div>

			<div class="text-column">
				 <?php the_content();?>
			</div>

		</div>

		</article>
	<?php
	endwhile;
	else :
		echo "<p>No se encontro contenido</p>";
	endif;

get_footer();

