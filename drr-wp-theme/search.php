		<?php get_header(); ?>
		<div class="container primary">
			<aside class="side-module one-third column" id="search-column">
				<?php get_search_form(); ?>
			</aside>
			<div class="two-thirds column">
				<h2><?php printf( __( 'Search Results for: %s'), '<span>' . get_search_query() . '</span>' ); ?></h2>
	            <?php if ( have_posts() ) : ?>
 
                <?php /* Start the Loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'content', 'search' ); ?>
                <?php endwhile; ?>

 
            <?php else : ?>
 
                <?php get_template_part( 'no-results', 'search' ); ?>
 
            <?php endif; ?>
			</div>
			<?php get_sidebar(); ?>
		</div>
	<?php get_footer(); ?>