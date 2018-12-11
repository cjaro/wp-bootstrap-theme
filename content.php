<div class="blog-post">
	<h5 class="blog-post-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h5>
	<p class="blog-post-meta">Posted on <?php the_date(); ?> by <?php the_author_posts_link(); ?></p>
	
 <?php the_content(); ?>
 <!-- <a href="<?php echo get_permalink(); ?>"><sub>More</sub></a> -->

</div><!--blog-post-->
