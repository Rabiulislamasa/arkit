<?php
require_once ('inc/codestar-framework/codestar-framework.php');
//require_once ('inc/tgm/class-tgm-plugin-activation.php');
//require_once ('inc/plugin-installer.php');
require_once ('inc/project-metabox.php');
require_once ('inc/profile-metabox.php');
require_once ('inc/testimonial-metabox.php');
require_once ('inc/team-metabox.php');
require_once ('inc/arkit-customizer.php');

function theme_setup(){
    load_theme_textdomain('arkit');
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
    add_theme_support( 'custom-background' );
    add_theme_support( 'custom-logo' );
    register_nav_menu('primarymenu',__('Main Menu','arkit'));
}
add_action('after_setup_theme','theme_setup');

if ( site_url() == "http://localhost/arkit/" ) {
    define( "VERSION", time() );
} else {
    define( "VERSION", wp_get_theme()->get( "Version" ) );
}

function my_theme_style_enqueue(){
    wp_enqueue_style( 'mainstyle', get_stylesheet_uri(),null,'1.1.10');
    wp_enqueue_style( 'fontawesomecss', get_template_directory_uri() . '/assets/css/fontawesome.min.css', null,VERSION);
    wp_enqueue_style( 'themifycss', get_template_directory_uri() . '/assets/css/themify-icons.css', null,VERSION);
    wp_enqueue_style( 'elegantline', get_template_directory_uri() . '/assets/css/elegant-line-icons.css', null,VERSION);
    wp_enqueue_style( 'elegantfont', get_template_directory_uri() . '/assets/css/elegant-font-icons.css', null,VERSION);
    wp_enqueue_style( 'flaticoncss', get_template_directory_uri() . '/assets/css/flaticon.css', null,VERSION);
    wp_enqueue_style( 'animatecss', get_template_directory_uri() . '/assets/css/animate.min.css', null,VERSION);
    wp_enqueue_style( 'bootstrapcss', get_template_directory_uri() . '/assets/css/bootstrap.min.css', null,VERSION);
    wp_enqueue_style( 'slicknav', get_template_directory_uri() . '/assets/css/slicknav.min.css', null,VERSION);
    wp_enqueue_style( 'slickcss', get_template_directory_uri() . '/assets/css/slick.css', null,VERSION);
    wp_enqueue_style( 'slidercss', get_template_directory_uri() . '/assets/css/slider.css', null,VERSION);
    wp_enqueue_style( 'venoboxcss', get_template_directory_uri() . '/assets/css/venobox/venobox.css', null,VERSION);
    wp_enqueue_style( 'owlcarousel', get_template_directory_uri() . '/assets/css/owl.carousel.css', null,VERSION);
    wp_enqueue_style( 'maincss', get_template_directory_uri() . '/assets/css/main.css', null,'1.24.1');
    wp_enqueue_style( 'responsivecss', get_template_directory_uri() . '/assets/css/responsive.css', null,'1.1.1');

    wp_enqueue_script(  'modernizrjs', get_template_directory_uri() . '/assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js', null,VERSION,true);
    wp_enqueue_script(  'jqueryjs', get_template_directory_uri() . '/assets/js/vendor/jquery-1.12.4.min.js', null,VERSION,true);
    wp_enqueue_script(  'bootstrapjs', get_template_directory_uri() . '/assets/js/vendor/bootstrap.min.js', null,VERSION,true);
    wp_enqueue_script(  'tetherjs', get_template_directory_uri() . '/assets/js/vendor/tether.min.js', null,VERSION,true);
    wp_enqueue_script(  'slicknavjs', get_template_directory_uri() . '/assets/js/vendor/jquery.slicknav.min.js', null,VERSION,true);
    wp_enqueue_script(  'owlcarouseljs', get_template_directory_uri() . '/assets/js/vendor/owl.carousel.min.js', null,VERSION,true);
    wp_enqueue_script(  'smoothscrolljs', get_template_directory_uri() . '/assets/js/vendor/smooth-scroll.min.js', null,VERSION,true);
    wp_enqueue_script(  'venomoxjs', get_template_directory_uri() . '/assets/js/vendor/venobox.min.js', null,VERSION,true);
    wp_enqueue_script(  'ajaxchipjs', get_template_directory_uri() . '/assets/js/vendor/jquery.ajaxchimp.min.js', null,VERSION,true);
    wp_enqueue_script(  'slickjsjs', get_template_directory_uri() . '/assets/js/vendor/slick.min.js', null,VERSION,true);
    wp_enqueue_script(  'counterupjs', get_template_directory_uri() . '/assets/js/vendor/jquery.counterup.min.js', null,VERSION,true);
    wp_enqueue_script(  'waypointjs', get_template_directory_uri() . '/assets/js/vendor/jquery.waypoints.v2.0.3.min.js', null,VERSION,true);
    wp_enqueue_script(  'ytplayerjs', get_template_directory_uri() . '/assets/js/vendor/jquery.mb.YTPlayer.min.js', null,VERSION,true);
    wp_enqueue_script(  'wowminjs', get_template_directory_uri() . '/assets/js/vendor/wow.min.js', null,VERSION,true);
    wp_enqueue_script(  'mainjs', get_template_directory_uri() . '/assets/js/main.js', null,VERSION,true);
    wp_enqueue_script(  'googleapisjs', get_template_directory_uri() . 'maps.googleapis.com/maps/api/js?key=AIzaSyCPH8h1UpcK01BdcvoZeOzq-_wJqRxN1Pc', null,VERSION,true);
}
add_action('wp_enqueue_scripts','my_theme_style_enqueue');
function theme_sidebar() {
    register_sidebar( 
        array(
        'name'          => __( 'Footer Widget 1', 'arkit' ),
        'id'            => 'widget-1',
        'description'   => __( '', 'arkit' ),
        'before_widget' => '<li id="%1s cat-link-color" class="widget %2s">',
        'before_sidebar' => '<ul class="widget-links">',
        'after_sidebar' => '</ul>',
        'after_widget'  => '</li>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
        ) );
    register_sidebar(
        array(
        'name'          => __( 'Footer Widget 2', 'arkit' ),
        'id'            => 'widget-2',
        'description'   => __( '', 'arkit' ),
        'before_widget' => '<li id="%1s cat-link-color" class="widget %2s">',
        'before_sidebar' => '<ul class="widget-links">',
        'after_sidebar' => '</ul>',
        'after_widget'  => '</li>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
        ));
    register_sidebar(
        array(
        'name'          => __( 'Footer Widget 3', 'arkit' ),
        'id'            => 'widget-3',
        'description'   => __( '', 'arkit' ),
        'before_widget' => '<li id="%1s cat-link-color" class="widget %2s">',
        'before_sidebar' => '<ul class="widget-links">',
        'after_sidebar' => '</ul>',
        'after_widget'  => '</li>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
        ));
    register_sidebar(
        array(
        'name'          => __( 'Footer Widget 4', 'arkit' ),
        'id'            => 'widget-4',
        'description'   => __( '', 'arkit' ),
        'before_widget' => '<li id="%1s cat-link-color" class="widget %2s">',
        'before_sidebar' => '<ul class="widget-links">',
        'after_sidebar' => '</ul>',
        'after_widget'  => '</li>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
        ) 
    );
    register_sidebar( array(
        'name'          => __( 'Sidebar-1', 'textdomain' ),
        'id'            => 'sidebar-5',
        'description'   => __( 'This Sidebar used for Search Form', 'textdomain' ),
        
    ) );
    register_sidebar( array(
        'name'          => __( 'Sidebar-2', 'textdomain' ),
        'id'            => 'sidebar-6',
        'description'   => __( 'This Sidebar used for category', 'textdomain' ),
        'before_widget' => '<li id="%1s" class="widget %2s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
        'before_sidebar' => '<ul class="widget-links">',
        'after_sidebar' => '</ul>',
    ) );
    
    register_sidebar( array(
        'name'          => __( 'Sidebar-3', 'textdomain' ),
        'id'            => 'sidebar-7',
        'description'   => __( 'This Sidebar used for tag', 'textdomain' ),
        'before_widget' => '<li id="%1s" class="widget %2s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
        'before_sidebar' => '<ul class="tags">',
        'after_sidebar' => '</ul>',
    ) );
}
add_action( 'widgets_init', 'theme_sidebar' );
function my_excerpt_length($length) {
    return 20;
    }
    
    add_filter('excerpt_length', 'my_excerpt_length');
    function excerpt_readmore($more) {
        if ('post' == get_post_type() ){
    return '';
    }}
    
    add_filter('excerpt_more', 'excerpt_readmore');

    function mytheme_customizer_live_preview()
    {
        wp_enqueue_script( 
              'mytheme-themecustomizer',            //Give the script an ID
                get_template_directory_uri().'/assets/js/customize.js',//Point to file
              array( 'jquery','customize-preview' ),    //Define dependencies
              time(),                       //Define a version (optional) 
              true                      //Put script in footer?
        );
    }
    add_action( 'customize_preview_init', 'mytheme_customizer_live_preview' );

    if ( is_singular() ) wp_enqueue_script( "comment-reply" );
    