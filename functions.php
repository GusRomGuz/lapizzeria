<?php

/**   CSS Y JS **/
function lapizzeria_styles() {
  //agregar hojas de estilos
  wp_enqueue_style('normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css', array(), '8.0.1');

  wp_enqueue_style('googlefonts', 'https://fonts.googleapis.com/css?family=Open+Sans|Raleway:400,700,900&display=swap', array(). '1.0.0');

  wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0.0' );

}
add_action('wp_enqueue_scripts', 'lapizzeria_styles');
