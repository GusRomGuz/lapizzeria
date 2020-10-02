<?php

/** CSS y JS  */
function lapizzeria_styles() {
  //agregar hojas de estilos

  wp_enqueue_style('normalize','https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css', array(), '8.0.1');

  wp_enqueue_style('slicknavcss', 'https://cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.10/slicknav.min.css', array(), '1.0.10' );

  wp_enqueue_style('googlefonts', 'https://fonts.googleapis.com/css2?family=Open+Sans&family=Raleway:ital,wght@0,700;0,900;1,400&display=swap', array(), '1.0' );

  wp_enqueue_style('style', get_stylesheet_uri(), array('normalize'), '1.0.0');
}

  //Scripts
  wp_enqueue_script ('jquery');

  wp_enqueue_script('slicknavjs','https://cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.10/jquery.slicknav.min.js',array('jquery'),'1.0.10',true );

  wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.10', true); 

add_action('wp_enqueue_scripts', 'lapizzeria_styles') ;


/** Menis **/
function lapizzeria_menus() {
  register_nav_menus( array (
      'header-menu' => 'Header Menu'
  ));
}
add_action ('init', 'lapizzeria_menus');
