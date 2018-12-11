<?php get_header(); ?>

<div class="row">
  
  <div class="col-md-9 blog-main">
 
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
    get_template_part( 'content', get_post_format() );
    echo edit_post_link('[edit post]', '<sub>', '</sub>', '', 'post-edit-link'); 
    endwhile; 
    endif; 
    ?>

    <div class="blog-pager">
      <?php posts_nav_link( ); ?> 
    </div>

</div> <!-- /.blog-main -->

<?php get_sidebar(); ?>

</div> <!-- /.row -->

<?php get_footer(); ?>
