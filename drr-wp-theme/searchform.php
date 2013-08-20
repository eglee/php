				<!--<form method="get" action="<?php bloginfo('home'); ?>">
					<input id="search" type="search" placeholder="Search">
					<input type="submit" value="<?php esc_attr_e('Search'); ?>" />
				</form>-->
		 <form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
			<input type="text" class="field" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="search" placeholder="Search" />
			<input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search'); ?>" />
		</form>