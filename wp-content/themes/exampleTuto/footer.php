<footer class="site-footer">

	<nav class="site-nav">
	<?php
		$args = array (
				'theme_location' => 'footer'
			);
	?>

		<?php wp_nav_menu( $args ); ?>
		<a href="http://www.instagram.com/uplace.co" target="_blank">  <i class="wp-svg-instagram instagram"></i></a>
		<a href="http://www.twitter.com/uplace.co" target="_blank"> <i class="wp-svg-twitter twitter"></i>   </a>
		<a href="http://www.facebook.com/uplace.co" target="_blank"> <i class="wp-svg-facebook facebook"></i>   </a>
	</nav>

	<p><?php bloginfo('name'); ?> - &copy; <?php echo date('Y');?></p>



</footer>
</div><!-- Container -->


<?php wp_footer(); ?>

</body>
</html>