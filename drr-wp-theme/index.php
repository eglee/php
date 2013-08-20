		<?php get_header(); ?>
		<div class="container primary">
			<aside class="side-module one-third column" id="search-column">
				 <?php get_search_form(); ?>
			</aside>
			<div class="two-thirds column">
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php
						  /* Include the Post-Format-specific template for the content.
						  * If you want to overload this in a child theme then include a file
						  * called content-___.php (where ___ is the Post Format name) and    that will be used instead.
						  */
						get_template_part( 'content', get_post_format() );
					?>
				<?php endwhile; ?>
				<span class="wp-nav-left"><?php previous_posts_link(); ?></span>
				<span class="wp-nav-right"><?php next_posts_link(); ?></span>
			</div>
			<?php get_sidebar(); ?>
		</div>
	<?php get_footer(); ?>