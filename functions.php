<?php

  add_action('after_setup_theme', 'gov_br_theme'); 
  function gov_br_theme(){
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    
    register_nav_menus(
      array(
        'primary' => 'Menu Principal',
        'secondary' => 'Menu Geral',
        'tertiary' => 'Gov.br',
        'fourth' => 'Mais Acessados',
        'fifth' => 'Em Destaque'
      )
    );
  }


  add_action('wp_enqueue_scripts', 'gov_br_scripts');
  function gov_br_scripts(){
    wp_enqueue_style('reset-style', get_template_directory_uri() . '/assets/css/reset.css');
    wp_enqueue_style('gov-br-style', get_template_directory_uri() . '/assets/css/gov-br.css');

    wp_enqueue_script('gov-br-script', get_template_directory_uri() . '/assets/js/govbr-scripts.js');
  }

  add_action('widgets_init', 'gov_br_widgets');
  function gov_br_widgets(){
    register_sidebar(array(
      'id' => 'primary',
      'name' => 'Primeiro Banner',
      'before_widget' => '<div id="%1$s" class="banner %2$s">',
      'after_widget' => '</div>'
    ));
  }