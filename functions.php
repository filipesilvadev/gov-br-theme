<?php
  // add_theme_support( 'post-formats', array( 'link' ) );

  add_action('after_setup_theme', 'gov_br_theme'); 
  function gov_br_theme(){
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    
    register_nav_menus(
      array(
        'primary' => 'Menu Principal',
        'secondary' => 'Menu Geral',
        'fourth' => 'Mais Acessados',
        'fifth' => 'Em Destaque'
      )
    );
  }

// Custom Image Size and Crops
  $squareThumb = "512-512";
  $width = 512;
  $height = 512;
  $crop = true;

  add_image_size($squareThumb, $width, $height, $crop);


  add_action('wp_enqueue_scripts', 'gov_br_scripts');
  function gov_br_scripts(){
    wp_enqueue_style('reset-style', get_template_directory_uri() . '/assets/css/reset.css');
    wp_enqueue_style('gov-br-style', get_template_directory_uri() . '/assets/css/gov-br.css');
  }

  add_action('widgets_init', 'gov_br_widgets');
  function gov_br_widgets(){
    register_sidebar(array(
      'id' => 'primary',
      'name' => 'Primeiro Banner',
      'before_widget' => '<div id="%1$s" class="banner %2$s">',
      'after_widget' => '</div>'
    ));
    register_sidebar(array(
      'id' => 'second',
      'name' => 'Segundo Banner',
      'before_widget' => '<div id="%1$s" class="banner %2$s">',
      'after_widget' => '</div>'
    ));
    register_sidebar(array(
      'id' => 'inst_1',
      'name' => 'Texto do Institucional',
      'before_widget' => '<div id="%1$s" class="inst_txt %2$s">',
      'after_widget' => '</div>'
    ));
  }

  function institutional(){
    register_post_type('institutional',
      array(
        'labels' => array(
          'name' => 'Institucionais',
          'singular_name' => 'Institucional'
        ),
        'public' => true,
        'supports' => array('title', 'thumbnail','excerpt'),
        'menu_icon' => 'dashicons-editor-table'
      ),
    );
  }
  add_action('init', 'institutional');

  function channels(){
    register_post_type('channels',
      array(
        'labels' => array(
          'name' => 'Canais',
          'singular_name' => 'Canal'
        ),
        'public' => true,
        'supports' => array('title', 'thumbnail','excerpt'),
        'menu_icon' => 'dashicons-format-chat'
      ),
    );
  }
  add_action('init', 'channels');