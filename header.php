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
      <h1 class="seven columns"><a href="<?php echo bloginfo('url'); ?>"><?php echo bloginfo('name'); ?></a></h1>
      <h2 class="five columns"><?php echo bloginfo('description'); ?></h2>
    </div>
  </header>
