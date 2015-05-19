<?php

get_header();

if (have_posts()) :
	while (have_posts()) : the_post(); ?>
		<article class="post">
		<h2><a href="<?php the_permalink(); ?>">
		<?php 
		the_title();
		echo "</a></h2>";
		the_content();?>
		</article>
	<?php
	endwhile;
	else :
		echo "<p>No se encontro contenido</p>";
	endif;

get_footer();
