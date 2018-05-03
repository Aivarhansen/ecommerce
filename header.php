<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>E-commerce Theme</title>
    <?php wp_head(); ?>
  </head>

  <?php
    if (is_front_page() ):
      $ecommerce_classes = array( 'ecommerce-class', 'my-class' );
    else:
      $ecommerce_classes = array( 'no-ecommerce-class' );
    endif;
   ?>

  <body <?php body_class( $ecommerce_classes ); ?>>

    <?php wp_nav_menu(array('theme_location'=>'primary'));

    ?>

    <img src="<?php header_image(); ?>" height="<?php get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt=""/>
