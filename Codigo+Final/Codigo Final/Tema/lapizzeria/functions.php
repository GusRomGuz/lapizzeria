<?php 

function lapizzeria_setup() {

    /*** Titulos para SEO */
    add_theme_support('title-tag');

    /** Gutenberg */

    // Soporte a estilos por default de gutenberg en tu tema
    add_theme_support('wp-block-styles');

    // Soporte a contenido completo
    add_theme_support('align-wide');

    // Paleta de Colores
    add_theme_support('editor-color-palette', array(
        array(
            'name' => 'Rojo',
            'slug' => 'rojo',
            'color' => '#a61206'
        ), 
        array(
            'name' => 'Naranja',
            'slug' => 'naranja',
            'color' => '#F19F30'
        ), 
        array(
            'name' => 'Verde',
            'slug' => 'verde',
            'color' => '#127427'
        ), 
        array(
            'name' => 'Blanco',
            'slug' => 'blanco',
            'color' => '#FFFFFF'
        ), 
        array(
            'name' => 'Negro',
            'slug' => 'negro',
            'color' => '#000000'
        ), 
    ));

    // Deshabilita los colores personalizados
    add_theme_support('disable-custom-colors');

    // Imagenes destacadas
    add_theme_support('post-thumbnails');

    // Tamaños de imagenes
    add_image_size('nosotros', 437, 291, true);
    add_image_size('especialidades', 768,515, true);
    add_image_size('especialidades_portrait', 435, 526, true);
}
add_action('after_setup_theme', 'lapizzeria_setup');

/** CSS y JS */
function lapizzeria_styles() {
    // agregar hojas de estilos
    wp_enqueue_style('normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css', array(), '8.0.1');


    wp_enqueue_style('slicknavcss', 'https://cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.10/slicknav.min.css', array('normalize'), '1.0.10');
    wp_enqueue_style('googlefonts', 'https://fonts.googleapis.com/css?family=Open+Sans|Raleway:400,700,900&display=swap', array(), '1.0.0');
    
    wp_enqueue_style('style' , get_stylesheet_uri(), array('normalize'), '1.0.0');

    // Scripts
    wp_enqueue_script('slicknavjs', 'https://cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.10/jquery.slicknav.min.js', array('jquery'), '1.0.10', true);

    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'lapizzeria_styles');


/** Menus */
function lapizzeria_menus() {
    register_nav_menus( array(
        'header-menu' => 'Header Menu',
        'redes-sociales' => 'Redes Sociales'
    ));
}
add_action('init', 'lapizzeria_menus');

/** Zona de Widgets */
function lapizzeria_widgets() {
    register_sidebar( array(
        'name' => 'Blog Sidebar',
        'id' => 'blog_sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ) );
}
add_action('widgets_init', 'lapizzeria_widgets');


/** Agregar botones a paginador */

function lapizzeria_botones_paginador() {
    return 'class="boton boton-secundario"';
}
add_filter('next_posts_link_attributes', 'lapizzeria_botones_paginador');
add_filter('previous_posts_link_attributes', 'lapizzeria_botones_paginador');