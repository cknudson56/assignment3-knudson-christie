<?php get_header(); ?>

<div class="container space-updown">
    <div class="row">
      <div class="nine columns page-list">
        <?php
          if(have_posts()){
            while(have_posts()){
              the_post();?>

              <h2 class="page-title"><?php the_title(); ?></h2>
              <?php the_content();
            }
          }
        ?>
      </div>
      <div class="three columns">
        <?php get_sidebar(); ?>

      </div>
    </div>
</div>

<?php get_footer(); ?>
