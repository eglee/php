		<?php get_header(); ?>
		<div class="container primary">
			<aside class="side-module one-third column" id="search-column">
				<?php get_search_form(); ?>
			</aside>
			<div class="two-thirds column">
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<article>
					<?php $attachments = new Attachments( 'attachments' ); ?>
					<?php if( $attachments->exist() ) : ?>
						<?php $my_index = 0; ?>
						<?php if( $attachment = $attachments->get_single( $my_index ) ) : ?>
						<?php endif; ?>
					<?php endif; ?>
						<img class="img border scale-with-grid" src="<?php echo $attachments->url( $my_index ); ?>" title="<?php echo $attachments->field( 'title',  $my_index); ?>" alt="<?php echo $attachments->field( 'title',  $my_index); ?>"/>
						<h3 class="remove-bottom"><?php the_title(); ?></h3>
						<h5><img class="no-border img icon" src="images/calendar-icon.png"/><?php the_time( get_option( 'date_format' ) ); ?></h5>
						<p>
						<?php the_content(); ?>
						</p>
					</article>
					<span class="wp-nav-left"><?php previous_post_link(); ?></span>
					<span class="wp-nav-right"><?php next_post_link(); ?></span>
				<?php endwhile; ?>
			</div>
			<?php get_sidebar(); ?>
		</div>
	<?php get_footer(); ?>