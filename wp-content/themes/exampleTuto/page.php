<?php

get_header();

if (have_posts()) :
	while (have_posts()) : the_post(); ?>
		<article class="post page">
		<h2>
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