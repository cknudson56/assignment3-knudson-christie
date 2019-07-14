<?php wp_footer(); ?>

<footer>
  <div class="row">
    <div class="one-third column">
      <?php wp_nav_menu(array(
        'theme_location' => 'footer-menu',
        'container-class' => 'menu-footer'
        ));
      ?>
    </div>
    <div class="one-third column">
      <?php dynamic_sidebar('middle-footer'); ?>
    </div>
    <div class="one-third column">
      <?php dynamic_sidebar('right-footer'); ?>
    </div>
  </div>

  <div>
    <p class="credits">Created by: Christie Knudson</p>
  </div>
</footer>

</body>
</html>
