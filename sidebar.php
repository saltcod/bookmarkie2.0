<div class="header">
	<h1 class="site-title"><a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></h1>
</div>


<div class="page-menu nano">
	<div class="nano-content">
		<ul>
			<ul id="blog-tags">
				<?php
				$tags = get_tags();
				if ( $tags ) {
					foreach ( $tags as $tag ) {
						echo '<li>';

						if ( (int) $tag->term_id === get_queried_object_id() )
							echo "<span class='current-page-item'>$tag->name</span>";
						else
							printf(
								'<a href="%1$s">%2$s</a>',
								get_tag_link( $tag->term_id ),
								$tag->name
								);

						echo '</li>';
					}
				}
				?>
			</ul>
		</ul>	
	</div>
</div>
</div>