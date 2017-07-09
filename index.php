<?php
	get_header();
	<nav class="site_nav">
		<?php
		$args = array('theme_location'=> "prime");
		?>
	<?php wp_nav_menu( $args ); ?>
  </nav>
	if (have_posts()):
		while(have_posts()) : the_post();
?>
<article class=" col-3 post">
	<h2>
		<a href="<?php the_permalink(); ?>">
			<?php the_title(); ?>
		</a>
	</h2>
</article>
<?php the_content(); ?>
<?php endwhile;
	else:
		echo '<p> No content found</p>';
	endif;
get_footer();
 ?>
