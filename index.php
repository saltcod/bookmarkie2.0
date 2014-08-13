<?php get_header(); ?>

<div id="content">

	<?php get_sidebar(); ?>

	<div id="inner-content" class="wrap group">
		<div id="main" class="col8 group" role="main">
			
			<div class="mobile-header">
				<a href="#" class="toggle-menu">
					<img src="<?php echo get_template_directory_uri();?>/library/images/hamburger.svg" alt="Menu">
				</a> 
				<h1 class="mobile-site-title"><a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></h1>
			</div>




			<?php if(is_tag()): ?>
			<h1 class="archive-title h2">
				<span><?php _e( '', 'bonestheme' ); ?> <?php single_tag_title(); ?></span>
			</h1>
		<?php endif; ?>



		<?php while ( have_posts() ) : the_post(); ?>


		<article id="post-<?php the_ID(); ?>" <?php post_class( 'group' ); ?> role="article">

			<section class="entry-content group">
				<?php the_content(); ?>
			</section> <?php // end article section ?>

			<span class="tags"><?php the_tags( '<span class="tags-title">' . __( '', 'bonestheme' ) . '</span> ', ', ', '' ); ?></span>


			<?php // comments_template(); // uncomment if you want to use them ?>

		</article> <?php // end article ?>

		<?php endwhile; // end of the loop. ?>




	<?php if ( function_exists( 'bones_page_navi' ) ) { ?>
	<?php bones_page_navi(); ?>
	<?php } else { ?>
	<nav class="wp-prev-next">
		<ul class="group">
			<li class="prev-link"><?php next_posts_link( __( '&laquo; Older Entries', 'bonestheme' )) ?></li>
			<li class="next-link"><?php previous_posts_link( __( 'Newer Entries &raquo;', 'bonestheme' )) ?></li>
		</ul>
	</nav>
	<?php } ?>

</div> <?php // end #main ?>
</div> <?php // end #inner-content ?>

</div> <?php // end #content ?>

<?php get_footer(); ?>
