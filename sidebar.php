<div class="col-md-3 blog-sidebar">
  <div class="sidebar-module sidebar-module-inset sidebar-about">
    <h4>About</h4>
    <p> <?php the_author_meta( 'description' ); ?> </p>
  </div>
  <!-- <div id="sidebarDivFlex">
    <div class="sidebar-module">
      <h4>Helpful Shit</h4>
      <ol class="list-unstyled">
        <li><a href="https://www.reddit.com/r/raisedbynarcissists/">RBN</a></li>
        <li><a href="https://www.findlaw.com/">FindLaw</a></li>
        <li><a href="https://www.thebalance.com/">TheBalance</a></li>
        <li><a href="https://www.depressioncenter.org/depression-toolkit">Depression Toolkit</a></li>
        <li><a href="https://www.storiedmind.com/depression-work/getting-to-work-when-depressed/">Depression at Work</a></li>
        <li><a href="https://www.reddit.com/r/AskReddit/comments/8pks1u/suicide_prevention_megathread/">Reddit Suicide Prevention Megathread</a></li>
        <li><a href=""></a></li>
      </ol>
    </div>
    <div class="sidebar-module">
      <h4>Archives</h4>
      <ol class="list-unstyled">
        <?php wp_get_archives( 'type=monthly' ); ?>
      </ol>
    </div>
  </div> -->
  <?php if ( is_active_sidebar( 'home_right_1' ) ) : ?>
	<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'home_right_1' ); ?>
	</div><!-- #primary-sidebar -->
<?php endif; ?>
</div><!-- /.blog-sidebar -->
