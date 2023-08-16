<?php
add_action( 'after_setup_theme', 'thejitu_fn_setup', 50 );

function thejitu_fn_setup(){
    add_action( 'wp_enqueue_scripts', 'thejitu_scripts' );
    add_action('wp_enqueue_scripts', 'thejitu_styles');

    // This theme uses post thumbnails
    add_theme_support( 'post-thumbnails' );
    
    // CONSTANT
    $my_theme 		= wp_get_theme( 'thejitu' );
    $version		= '1.0.0';
    if ( $my_theme->exists() ){
        $version 	= (string)$my_theme->get( 'Version' );
    }
    $version		= 'ver_'.$version;
    define('thejitu_VERSION', $version);
    define('thejitu_THEME_URL', get_template_directory_uri());
    
}

// =============================================================
//     ENQUEUE SCRIPTS
// =============================================================
function thejitu_scripts() {
    wp_enqueue_script('thejitu-jquery', 'https://code.jquery.com/jquery-2.2.0.min.js', array('jquery'), TRUE);
    wp_enqueue_script('thejitu-slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js', array('jquery'), TRUE);
    wp_enqueue_script('jitu-customjs', get_template_directory_uri().'/assets/js/custom.js', array('simplebar-js'), thejitu_VERSION, 'all');
    wp_enqueue_script('jitu-bootstrapjs', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js', array(), TRUE);
    wp_enqueue_script('fontawesomejs', 'https://kit.fontawesome.com/d7df1dae6c.js', array(), TRUE);
    wp_enqueue_script('simplebar-js', 'https://cdn.jsdelivr.net/npm/simplebar@6.2.5/dist/simplebar.min.js', array('jquery'), TRUE);
    wp_enqueue_script('simplebar-js', 'https://cdn.jsdelivr.net/npm/simplebar@6.2.5/dist/simplebar.min.js', array('jquery'), TRUE);
    wp_enqueue_script('OwlCarousel2', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array('jquery'), TRUE);

}


// ===========================================================
//     ENQUEUE STYLES
// ===========================================================
function thejitu_styles(){
    wp_enqueue_style('jitu-about', get_template_directory_uri().'/assets/css/about.css', array(), thejitu_VERSION, 'all');
    wp_enqueue_style('jitu-customcss', get_template_directory_uri().'/assets/css/custom.css', array(), thejitu_VERSION, 'all');
    wp_enqueue_style('jitu-base', get_template_directory_uri().'/assets/css/style.css', array(), thejitu_VERSION, 'all');
    wp_enqueue_style('jitu-home', get_template_directory_uri().'/assets/css/home.css', array(), thejitu_VERSION, 'all');
    wp_enqueue_style('jitu-training', get_template_directory_uri().'/assets/css/training.css', array(), thejitu_VERSION, 'all');
    wp_enqueue_style('jitu-bpo', get_template_directory_uri().'/assets/css/bpo.css', array(), thejitu_VERSION, 'all');
    wp_enqueue_style('jitu-technology', get_template_directory_uri().'/assets/css/technology.css', array(), thejitu_VERSION, 'all');
    wp_enqueue_style('jitu-remix', 'https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css', array(), thejitu_VERSION, 'all');
    wp_enqueue_style('jitu-bootstrapcss', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css', array() , 'all');
    wp_enqueue_style('jitu-404', get_template_directory_uri().'/assets/css/404.css', array(), thejitu_VERSION, 'all');
    wp_enqueue_style('jitu-process', get_template_directory_uri().'/assets/css/process.css', array(), thejitu_VERSION, 'all');
    wp_enqueue_style('jitu-career', get_template_directory_uri().'/assets/css/career.css', array(), thejitu_VERSION, 'all');
    wp_enqueue_style('jitu-navigation', get_template_directory_uri().'/assets/css/navigation.css', array(), thejitu_VERSION, 'all');
    wp_enqueue_style('jitu-services', get_template_directory_uri().'/assets/css/services.css', array(), thejitu_VERSION, 'all');
    wp_enqueue_style('jitu-contact', get_template_directory_uri().'/assets/css/contact.css', array(), thejitu_VERSION, 'all');
    wp_enqueue_style('jitu-responsive', get_template_directory_uri().'/assets/css/responsive.css', array(), thejitu_VERSION, 'all');
    wp_enqueue_style('owlcarousel2css', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css', array() , 'all');
    wp_enqueue_style('owlthemedefault', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css', array() , 'all');
}


add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo', array(
    'height' => 480,
    'width'  => 720,
) );

add_theme_support('automatic-feed-links');


// ===========================================================
//      REGISTER CUSTOM NAVIGATION WALKER
// ===========================================================

function register_navwalker(){
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
    // File does not exist... return an error.
    return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
    // File exists... require it.
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

register_nav_menus( 
    array(
    'top-menu' => __( 'Primary Menu', 'thejitu' ),
    'top-bar' => __( 'Topbar Menu', 'thejitu' ),
    'footer-menu' => __('Footer Menu', 'thejitu')
    )
);

add_filter( 'nav_menu_link_attributes', 'prefix_bs5_dropdown_data_attribute', 20, 3 );
/**
 * Use namespaced data attribute for Bootstrap's dropdown toggles.
 *
 * @param array    $atts HTML attributes applied to the item's `<a>` element.
 * @param WP_Post  $item The current menu item.
 * @param stdClass $args An object of wp_nav_menu() arguments.
 * @return array
 */
function prefix_bs5_dropdown_data_attribute( $atts, $item, $args ) {
    if ( is_a( $args->walker, 'WP_Bootstrap_Navwalker' ) ) {
        if ( array_key_exists( 'data-toggle', $atts ) ) {
            unset( $atts['data-toggle'] );
            $atts['data-bs-toggle'] = 'dropdown';
        }
    }
    return $atts;
}