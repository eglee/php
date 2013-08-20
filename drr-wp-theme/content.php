					<article>
					<?php $attachments = new Attachments( 'attachments' ); ?>
					<?php if( $attachments->exist() ) : ?>
						<?php $my_index = 0; ?>
						<?php if( $attachment = $attachments->get_single( $my_index ) ) : ?>
						<?php endif; ?>
					<?php endif; ?>
						<img class="img border scale-with-grid" src="<?php echo $attachments->url( $my_index ); ?>" title="<?php echo $attachments->field( 'title',  $my_index); ?>" alt="<?php echo $attachments->field( 'title',  $my_index); ?>"/>
						<h3 class="remove-bottom wp-title"><?php the_title(); ?></h3>
						<h5><img class="no-border img icon" src="images/calendar-icon.png"/><?php the_time( get_option( 'date_format' ) ); ?></h5>
						<p>
						<?php the_content(); ?>
						</p>
					</article>