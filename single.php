<?php
/**
 * The template for displaying all single posts and attachments
 *
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="col-md-9" style="display:flex;flex-direction:column">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the single post content template.
			// get_template_part( 'template-parts/content', 'single' );
			?>
			<div class="blog-post">
			<h5 class="blog-post-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h5>
			<p class="blog-post-meta">Posted on <?php the_date(); ?> by <?php the_author_posts_link(); ?></p>
			<?php the_content(); 
			
			if ( is_singular( 'attachment' ) ) {
				// Parent post navigation.
				the_post_navigation( array(
					'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'twentysixteen' ),
				) );
			} elseif ( is_singular( 'post' ) ) {
				// Previous/next post navigation.
				the_post_navigation( array(
					'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next post:', 'twentysixteen' ) . '</span> ' .
						 '</span> ' . '<span class="post-title">%title</span>',
					'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous post:', 'twentysixteen' ) . '</span> ' . '<span class="post-title">%title</span>',
				) );
			}

			// End of the loop.
		endwhile;
		?>
		</div>
		
		<?php get_sidebar( 'content-bottom' ); ?>

	</main><!-- .site-main -->

	
</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
