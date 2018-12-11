<?php /*Template Name: About & Contact*/
?>
<?php get_header(); ?>
<h3>Contact</h3>
	<div class="row">
	
		<div class="col-md-9">
			<div class="contact-div">

			<?php
				if ( have_posts() ) : while ( have_posts() ) : the_post();

				the_content();

				endwhile; endif;
			?>

			</div> <!-- .contact-div -->

		</div> <!-- /.col -->
		
		<?php get_sidebar(); ?>

	</div> <!-- /.row -->

<?php get_footer(); ?>
