<?php get_header(); ?>

	<div class="row">
		<div class="col-md-9">

			<?php
				if ( have_posts() ) : while ( have_posts() ) : the_post();
					get_template_part( 'content', get_post_format() );
				endwhile; endif;
			 posts_nav_link(); ?> 
		</div> <!-- /.col -->
		<?php get_sidebar(); ?>
	</div> <!-- /.row -->
	
	</div><!--container -->

<?php get_footer(); ?>
