<?php /*Template Name: Home Page Template*/ ?>
<?php get_header(); ?>

<div class="container space-updown">
    <div class="row">
      <div class="six columns">
        <?php dynamic_sidebar('left-home'); ?>
      </div>
      <div class="six columns">
        <?php dynamic_sidebar('right-home'); ?>
      </div>
    </div>
</div>

<?php get_footer(); ?>
