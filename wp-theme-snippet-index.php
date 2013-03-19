				<?php get_header(); ?>
	<div id="content">

		<div id="normalcontent">
		  <div class="contentarea">
			  <!-- Normal content area start -->

			  <img src="images/roediger_david_1.jpg" class="left" alt="David Roediger" />
	      <p><strong>David Roediger</strong> teaches history   and African American Studies at <a href="http://www.history.illinois.edu/people/droedige">University of Illinois</a>. He was born   in southern Illinois and educated in public schools in that state, with   a B.S. in Ed from Northern Illinois University.&nbsp; He completed a   doctorate in History at Northwestern in 1979.&nbsp; Roediger has taught   labor and Southern history at Northwestern, University of Missouri and   University of Minnesota.&nbsp; He has also worked as an editor of the   Frederick Douglass Papers at Yale University. He has written on U.S.   movements for a shorter working day, on labor and poetry, on the history   of radicalism, and on the racial identities of white workers and of   immigrants.&nbsp; His books include <em>Our Own Time</em> , <i>The Wages   of Whiteness</i>, <i>How Race Survived U.S. History</i>, and <i>Towards   the Abolition of Whiteness</i>, all from Verso, <i>Colored White</i> (California), and <i>Working Towards Whiteness</i> (Basic).&nbsp; His   edited books include an edition of Covington Hall&rsquo;s<i> Labor Struggles   in the Deep South</i> (Kerr), and another of W.E.B. Du Bois&rsquo;s<i> John   Brown</i> (Random House/Modern Library) as well as <i>Black on White:&nbsp;   Black Writers on What It Means to Be White</i> (Schocken).&nbsp; The   former chair of the editorial committee of the Charles H. Kerr Company,   the world&rsquo;s oldest radical publisher, he has been active in the surrealist   movement, labor support and anti-racist organizing.</p>
				<!-- Normal content area end -->
			</div>
		</div>

	
		<div class="divider1"></div>


		<!-- Primary content -->
		<div id="primarycontainer">
			<div id="primarycontent">
				<!-- Primary content area start -->
<?php /* Top post navigation */ ?>
<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
				<div id="nav-above" class="navigation">
					<div class="nav-previous"><?php next_posts_link(__( '<span class="meta-nav">&laquo;</span> Older posts', 'your-theme' )) ?></div>
					<div class="nav-next"><?php previous_posts_link(__( 'Newer posts <span class="meta-nav">&raquo;</span>', 'your-theme' )) ?></div>
				</div><!-- #nav-above -->
<?php } ?>
<?php /* The Loop — with comments! */ ?>			
<?php while ( have_posts() ) : the_post() ?>
 
<?php /* Create a div with a unique ID thanks to the_ID() and semantic classes with post_class() */ ?>		
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>				
<?php /* an h2 title */ ?>			
<div class="post">				
					<h4 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( __('Permalink to %s', 'your-theme'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a></h4><br />
<div class="contentarea">
 
<?php /* Microformatted, translatable post meta */ ?>										
					<div class="entry-meta">
						<div class="details"><span class="meta-prep meta-prep-author"><?php _e('Posted by ', 'your-theme'); ?></span>
						<span class="author vcard"><a class="url fn n" href="<?php echo get_author_link( false, $authordata->ID, $authordata->user_nicename ); ?>" title="<?php printf( __( 'View all posts by %s', 'your-theme' ), $authordata->display_name ); ?>"><?php the_author(); ?></a></span>
						<span class="meta-prep meta-prep-entry-date"><?php _e('on ', 'your-theme'); ?></span>
						<span class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time( get_option( 'date_format' ) ); ?></abbr></span>
						<?php edit_post_link( __( 'Edit', 'your-theme' ), "<span class=\"meta-sep\">|</span>\n\t\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t" ) ?>
					</div><!-- .entry-meta --></div>
 
<?php /* The entry content */ ?>					
					<div class="entry-content">	
<?php the_content( __( 'Continue reading <span class="meta-nav">&raquo;</span>', 'your-theme' )  ); ?>
<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'your-theme' ) . '&after=</div>') ?>
					</div><!-- .entry-content -->
 
<?php /* Microformatted category and tag links along with a comments link */ ?>					
					<div class="entry-utility">
						<span class="cat-links"><span class="entry-utility-prep entry-utility-prep-cat-links"><?php _e( 'Posted in ', 'your-theme' ); ?></span><?php echo get_the_category_list(', '); ?></span>
						<span class="meta-sep"> | </span>
						<?php the_tags( '<span class="tag-links"><span class="entry-utility-prep entry-utility-prep-tag-links">' . __('Tagged ', 'your-theme' ) . '</span>', ", ", "</span>\n\t\t\t\t\t\t<span class=\"meta-sep\">|</span>\n" ) ?>
						<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'your-theme' ), __( '1 Comment', 'your-theme' ), __( '% Comments', 'your-theme' ) ) ?></span>
						<?php edit_post_link( __( 'Edit', 'your-theme' ), "<span class=\"meta-sep\">|</span>\n\t\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t\n" ) ?>
					</div><!-- #entry-utility -->	
				</div><!-- #post-<?php the_ID(); ?> -->
</div>
</div>
 
<?php /* Close up the post div and then end the loop with endwhile */ ?>		
 
<?php endwhile; ?>
<?php /* Bottom post navigation */ ?>
<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
				<div id="nav-below" class="navigation">
					<div class="nav-previous"><?php next_posts_link(__( '<span class="meta-nav">&laquo;</span> Older posts', 'your-theme' )) ?></div>
					<div class="nav-next"><?php previous_posts_link(__( 'Newer posts <span class="meta-nav">&raquo;</span>', 'your-theme' )) ?></div>
				</div><!-- #nav-below -->
<?php } ?>
		<!-- Primary content area end -->
			</div>
		</div>

		
		<!-- Secondary content-->
		<div id="secondarycontent">
			<!-- Secondary content area start -->
			<div class="box">
				<h4>Latest Book</h4>
				<h2><i>How Race Survived U.S. History:</i></h2>
                <h5><i>From Settlement and Slavery to the Obama Phenomenon</i></h5>
				<div class="contentarea">
				  <img src="images/latest_book.jpg" class="left" alt="How Race Survived U.S. History"/>
				  <p>A staggering re-interpretation of the whole course of American history in which the skeletons in the closet walk abroad again.<a href="how_race_survived_us_history.html">>> more</a>.</p>
				</div>
			</div>
<div>
<?php get_sidebar(); ?>
			</div>

	</div>
</div>


<?php get_footer(); ?>