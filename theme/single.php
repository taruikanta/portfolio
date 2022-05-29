<?php get_header(); ?>
  <div class="container single">
    <div class="contents-wrap">
      <h1 class="title">WORKS</h1>
      <div class="contents">
        <div class="thumbnail">
          <a class=""><?php the_post_thumbnail();?></a>
        </div>
        <h2 class="title"><?php the_title();?></h2>
        <div class="text-wrap">
          <?php the_content( );?>
        </div>
      </div>
    </div>
  </div>
<?php get_footer();?>
