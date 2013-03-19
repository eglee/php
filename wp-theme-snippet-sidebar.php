
				<h4>Blog</h4>
				<div class="contentarea">
					<ul class="linklist">
						<li>
<form id="searchform" method="get" action="<?php bloginfo('home'); ?>">
	<div>
		<input type="text" name="s" id="s" size="15" /><br />
		<input type="submit" value="<?php esc_attr_e('Search'); ?>" />
	</div>
	</form> 
</li>
						<li><?php wp_loginout(); ?> </li>
<li><a href="http://www.davidroediger.org/wp-admin/index.php">Dashboard</a></li>

					</ul>
				</div>
<br></br>
				<h4>Archives</h4>
				<div class="contentarea">
					<ul class="linklist">
	<li><?php wp_get_archives('type=monthly'); ?></li>
					</ul>
				</div>