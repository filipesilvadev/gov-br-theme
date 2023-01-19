<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="<?php bloginfo('charset');?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head();?>
  <title>GovBR</title>
</head>
<body>

<nav class="main-header">
  <div class="brand"></div>
  <div class="navigations">
    <div class="main-menu">
      <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
    </div>
  </div>
</nav>