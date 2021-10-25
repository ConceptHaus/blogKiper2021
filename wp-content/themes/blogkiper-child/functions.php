<?php
function Blog_Kiper_child_setup() {
  //Campos personalizdo Generales
  if( function_exists('acf_add_options_page') ) {
	
    acf_add_options_page(array(
      'page_title' 	=> 'Theme General Settings',
      'menu_title'	=> 'Theme Settings',
      'menu_slug' 	=> 'theme-general-settings',
      'capability'	=> 'edit_posts',
      'redirect'		=> false
    ));
    
    // acf_add_options_sub_page(array(
    //   'page_title' 	=> 'Campos Header',
    //   'menu_title'	=> 'Header',
    //   'parent_slug'	=> 'theme-general-settings',
    // ));
    acf_add_options_sub_page(array(
      'page_title' 	=> 'Campos Footer',
      'menu_title'	=> 'Footer',
      'parent_slug'	=> 'theme-general-settings',
    ));
    
  }

  //Lenguajes
  load_child_theme_textdomain( 'Blog_Kiper-child', get_stylesheet_directory() . '/languages/' );
  //Corte de imágenes
  add_theme_support( 'post-thumbnails' );
  if ( function_exists( 'add_image_size' ) ) {
    add_image_size( 'homepage-twitter', 280, 150, true );
    add_image_size( 'homepage-facebook', 470, 246, true );
    add_image_size( 'img-slider', 1440, 600, false );
  }
  //Registro de Menús
  register_nav_menus( array(
      'menu-main' => esc_html__( 'Menu Principal', 'Blog_Kiper-child' ),
      'menu-footer' => esc_html__( 'Menu Footer', 'Blog_Kiper-child' ),
  ) );
  //Función para cargar logo
  add_theme_support( 'custom-logo', array(
    'flex-width' => true,
    'flex-height' => true,
  ) );
  //función para activar extensiones extras al WP
  function bp_mime_type ( $mime_types ) {
    $mime_types['svg'] = 'image/svg+xml';
    return $mime_types;
  }   
   add_filter('upload_mimes', 'bp_mime_type', 1, 1);
}
add_action( 'after_setup_theme', 'Blog_Kiper_child_setup' );
//Se agregan recursos CSS & JS del tema hijo.
function Blog_Kiper_head() {
  $versionFiles = rand();
  // wp_enqueue_style( 'google-Blog_Kiper-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap', array(), null );
  // CSS
	wp_enqueue_style('bootstrap',  get_stylesheet_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css', array(), $versionFiles);
	wp_enqueue_style('style-min',  get_stylesheet_directory_uri() . '/assets/css/stylemain.min.css', array(), $versionFiles);
	wp_enqueue_style('stylecompress-min',  get_stylesheet_directory_uri() . '/assets/css/stylehome.css', array(), $versionFiles);
  wp_enqueue_style('animate',  get_stylesheet_directory_uri() . '/assets/css/animate.css', array(), $versionFiles);
  // wp_enqueue_style('slick',  get_stylesheet_directory_uri() . '/assets/css/slick.css', array(), $versionFiles);

  
  // jQuery
  wp_deregister_script( 'jquery' );
  wp_register_script( 'jquery', get_stylesheet_directory_uri() . '/assets/js/jquery.min.js' );
  wp_enqueue_script('jquery');
  // AJAX
  // wp_register_script('script_handle', get_stylesheet_directory_uri().'/assets/js/scripts/ajaxScriptPost.min.js', array('jquery'), $versionFiles, true);
  // wp_localize_script('script_handle', 'ajx_objt', array('ajax_url'=>admin_url('admin-ajax.php')));
  // wp_enqueue_script('script_handle');
  //ScripsS
	wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . '/assets/bootstrap/js/bootstrap.bundle.min.js', array(), $versionFiles, true);
	wp_enqueue_script( 'tweenmax', get_stylesheet_directory_uri() . '/assets/js/TweenMax.min.js', array(), $versionFiles, true);
   wp_enqueue_script( 'validate.min', get_stylesheet_directory_uri() . '/assets/js/jquery.validate.min.js', array(), $versionFiles, true);
	wp_enqueue_script( 'wow.min', get_stylesheet_directory_uri() . '/assets/js/wow.min.js', array(), $versionFiles, true);
	wp_enqueue_script( 'slick.min', get_stylesheet_directory_uri() . '/assets/js/slick.min.js', array(), $versionFiles, true);
	wp_enqueue_script( 'layout.min', get_stylesheet_directory_uri() . '/assets/js/layoutscritps.min.js', array(), $versionFiles, true);
	//wp_enqueue_script( 'formularios.min', get_stylesheet_directory_uri() . '/assets/js/scripts/frmsBlog_Kiper.min.js', array(), $versionFiles, true);
}
add_action( 'wp_enqueue_scripts', 'Blog_Kiper_head' );

add_filter( 'pre_option_link_manager_enabled', '__return_true' );
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

add_action('after_setup_theme', 'remove_admin_bar');
 
function remove_admin_bar() {
if (!current_user_can('editor')) {
  show_admin_bar(false);
}
}

/**
 * Post ajax
 */
// require get_stylesheet_directory() . '/inc/post-ajax.php';

/**
 * Customizer additions.
 */
// require get_stylesheet_directory() . '/inc/cutomizer.php';

/**
 * Mailings
 */
// require get_stylesheet_directory() . '/inc/mail-contact.php';

add_shortcode('incrementor', 'incrementor');
function incrementor() {
  static $i = 0;
  $incrementoBox = $i ++;
  if( $incrementoBox % 2 ) {
    return 'order-md-1';
  }
}

// Shortcode Super indices [superIndice id="aqui_el_numero_del_super_indice"]
// function super_indice_shortcode($atts) {
//   extract(shortcode_atts( array(
//     'id' => ''
//   ), $atts ));
//   $linkWeb = get_site_url();
//   $divSuper = '<a class="linkRef" href="'.$linkWeb.'/referencias/#'.$id.'" target="_blank">('.$id.')</a>';
//   return $divSuper;
// }
// add_shortcode( 'superIndice', 'super_indice_shortcode' );
