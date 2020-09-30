<?php

/** CSS y JS  */
function lapizzeria_styles() {
  //agregar hojas de estilos

  wp_enqueue_style('normalize','https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css', array(), '8.0.1');

  wp_enqueue_style('googlefonts', 'https://fonts.googleapis.com/css2?family=Open+Sans&family=Raleway:ital,wght@0,700;0,900;1,400&display=swap', array(), '1.0' );

  wp_enqueue_style('style', get_stylesheet_uri(), array('normalize'), '1.0.0');

}

add_action('wp_enqueue_scripts', 'lapizzeria_styles') ;
