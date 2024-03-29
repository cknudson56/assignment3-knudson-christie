<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <!-- link CSS file -->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
  <link href="https://fonts.googleapis.com/css?family=Francois+One|Oswald&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body>

  <header>
    <div class="row">
      <div class="five columns">
        <h1 class=""><a href="<?php echo bloginfo('url'); ?>"><?php echo bloginfo('name'); ?></a></h1>
        <h2 class=""><?php echo bloginfo('description'); ?></h2>
      </div>

      <div class="seven columns">
        <?php wp_nav_menu(array(
          'theme_location' => 'header-menu',
          'container-class' => 'menu-header'
          ));
        ?>
      </div>
    </div>
  </header>
