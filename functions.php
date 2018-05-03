<?php
/*
        ===================================
        Include scripts
        ===================================
*/
  function ecommerce_script_enqueue() {

    wp_enqueue_style("customstyle", get_template_directory_uri() . "/css/ecommerce.css", array(), "1.0.0", "all");
    wp_enqueue_script('customjs', get_template_directory_uri() . "/js/ecommerce.js", array(), '1.0.0', true);
    wp_enqueue_script('jquery');
  }

  add_action('wp_enqueue_scripts', "ecommerce_script_enqueue");

  /*
        ===================================
        Activate Menus
        ===================================
  */

  function ecommerce_theme_setup() {

    add_theme_support('menus');

    register_nav_menu('primary','Primary Header Navigation');
    register_nav_menu('secondary','Footer Navigation');

  }

  add_action('init', 'ecommerce_theme_setup');

  /*
        ===================================
        Theme support functions
        ===================================
  */

  add_theme_support('custom-background');
  add_theme_support('custom-header');
  add_theme_support('post-thumbnails');

  add_theme_support('post-formats',array('aside','image','video'));
