<!doctype html>
<html lang="en">
<head>
  <meta charset="<?php bloginfo('charset');?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head();?>
  <script src="https://kit.fontawesome.com/4481c5b817.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;500;800&display=swap" rel="stylesheet">
  <title>GovBR</title>
</head>
<body>

<nav class="main-header gov-wrapper">
  <h1 class="brand">
    <?php
        if ( function_exists( 'the_custom_logo' ) ) {
          the_custom_logo();
        }
      ?>
  </h1>
  <div class="menu-wrapper">
    <div class="navigations">
        <div class="main-menu">
          <span class="trigger"></span>
          <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
        </div>
      </div>
      <a href="https://sso.acesso.gov.br/login" target="_blank" class="login">
        <i class="fa-solid fa-user"></i>
        Entrar com o <strong>gov.br</strong>
      </a>
    </div>
  </div>
</nav>

<section class="row-context gov-wrapper">
  <div class="col1-nav">
    <i id="menu-trigger" class="fa-solid fa-bars"></i>
    <a class="description" href="<?php echo get_home_url(); ?>"><?php bloginfo('description');?></a>
  </div>
  <div class="col2-search">
    <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
      <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'O que você procura?', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
      <input type="submit" class="search-submit" value="<?php echo esc_attr_x( 's', 'submit button' ) ?>" />
      <span class="sTrigger"></span>
    </form>
  </div>
</section>

<section class="general-menu-wrapper">
  <div class="gov-wrapper">
    <nav class="nav-gov-categories">
        <?php wp_nav_menu(array('theme_location' => 'secondary')); ?>
    </nav>  
  </div>
</section>
