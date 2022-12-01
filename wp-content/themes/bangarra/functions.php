<?php
function register_style_scripts(){
    $ver = wp_get_theme()->get('Version');
    // Styles 
    wp_enqueue_style('bangarra-main', get_template_directory_uri() . '/style.css', array(), $ver, 'all');
    wp_enqueue_style('bangarra-font', get_template_directory_uri() . '/assets/fonts/fonts.css', array(), $ver, 'all');
    wp_enqueue_style('bangarra-owl', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), $ver, 'all');
    wp_enqueue_style('bangarra-owl-theme', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css', array(), $ver, 'all');
    wp_enqueue_style('bangarra-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), $ver, 'all');
    wp_enqueue_style('bangarra-style', get_template_directory_uri() . '/assets/css/style.css', array(), $ver, 'all');
    // Scripts 
    wp_enqueue_script('bangarra-jqueryjs', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), $ver, true);
    wp_enqueue_script('bangarra-owljs', get_template_directory_uri() . '/assets/js/owl.carousel.js', array(), $ver, true);
    wp_enqueue_script('bangarra-bootstrapjs', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), $ver, true);
    wp_enqueue_script('bangarra-indexjs', get_template_directory_uri() . '/assets/js/index.js', array(), $ver, true);
}
add_action('wp_enqueue_scripts', 'register_style_scripts', 20);

function theme_setup(){
    add_theme_support( 'menus');
    add_theme_support( 'custom-logo' );
}
add_action('after_setup_theme','theme_setup');

function bangarra_register_nav_menu(){
    register_nav_menus( array(
        'primary_menu' => __( 'Primary Menu', 'bangarra' ),
        'footer_menu'  => __( 'Footer Menu', 'bangarra' ),
    ) );
}
add_action( 'after_setup_theme', 'bangarra_register_nav_menu', 0 );

function add_menu_link_class($atts, $item, $args)
{
    $atts['class'] = 'nav-link';
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_menu_link_class', 1, 3);

// Allow SVG
function cc_mime_types( $mimes ){
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

function light_logo_upload_customize_register($wp_customize){
    $wp_customize->add_setting('light_logo_upload');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'light_logo_upload', array(
        'label'    => __('Light Logo', 'bangarra'),
        'section'  => 'title_tagline',
        'settings' => 'light_logo_upload',
        'priority'       => 4,
    )));
}
add_action('customize_register', 'light_logo_upload_customize_register');

if ( function_exists( 'acf_add_options_page' ) ) {
    // Add a menu page
    acf_add_options_page(
        array(
            'page_title' => 'Footer Options Page',
            'menu_title' => 'Footer Options',
            'menu_slug'  => 'footer-options',
            'redirect'   => false,
            'capability' => 'administrator',
            'position'   => 100
        )
    );    
    acf_add_options_page(
        array(
            'page_title' => 'In Number Options Page',
            'menu_title' => 'In Number Options',
            'menu_slug'  => 'in-number-options',
            'redirect'   => false,
            'capability' => 'administrator',
            'position'   => 100,
        )
    );
}
