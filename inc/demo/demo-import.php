<?php 
/**
 * @Packge     : Ariclaw
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */

if( !defined( 'WPINC' ) ){
    die;
}

// demo import file
function ariclaw_import_files() {
	
	$demoImg = '<img src="'. ARICLAW_DIR_INC . 'demo/screen-image.png' .' " alt="'.esc_attr__( 'Demo Preview Imgae', 'ariclaw' ).'" />';
	
  return array(
    array(
      'import_file_name'             => 'Ariclaw Demo',
      'local_import_file'            => ARICLAW_DIR_PATH_INC .'demo/ariclaw-demo.xml',
      'local_import_widget_file'     => ARICLAW_DIR_PATH_INC .'demo/ariclaw-widgets.wie',
      'import_customizer_file_url'   => ARICLAW_DIR_INC . 'demo/ariclaw-customizer.dat',
      'import_notice' => $demoImg,
    ),
  );
}
add_filter( 'pt-ocdi/import_files', 'ariclaw_import_files' );
	
// demo import setup
function ariclaw_after_import_setup() {
	// Assign menus to their locations.
    $main_menu    	  = get_term_by( 'name', 'Main Menu', 'nav_menu' );
	$services_menu    = get_term_by( 'name', 'Our Service', 'nav_menu' );
	$footer_menu      = get_term_by( 'name', 'Footer Menu', 'nav_menu' );

	set_theme_mod( 'nav_menu_locations', array(
            'primary-menu' => $main_menu->term_id,
            'our-services' => $services_menu->term_id,
            'footer-menu'  => $footer_menu->term_id
		)
	);

	// Assign front page and posts page (blog page).
	$front_page_id = get_page_by_title( 'Homepage' );
	$blog_page_id  = get_page_by_title( 'Blog' );

	update_option( 'show_on_front', 'page' );
	update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );
	update_option( 'ariclaw_demodata_import', 'yes' );

}
add_action( 'pt-ocdi/after_import', 'ariclaw_after_import_setup' );

//disable the branding notice after successful demo import
add_filter( 'pt-ocdi/disable_pt_branding', '__return_true' );

//change the location, title and other parameters of the plugin page
function ariclaw_import_plugin_page_setup( $default_settings ) {
	$default_settings['parent_slug'] = 'themes.php';
	$default_settings['page_title']  = esc_html__( 'One Click Demo Import' , 'ariclaw' );
	$default_settings['menu_title']  = esc_html__( 'Import Demo Data' , 'ariclaw' );
	$default_settings['capability']  = 'import';
	$default_settings['menu_slug']   = 'ariclaw-demo-import';

	return $default_settings;
}
add_filter( 'pt-ocdi/plugin_page_setup', 'ariclaw_import_plugin_page_setup' );

// Enqueue scripts
function ariclaw_demo_import_custom_scripts(){
	
	
	if( isset( $_GET['page'] ) && $_GET['page'] == 'ariclaw-demo-import' ){
		// style
		wp_enqueue_style( 'ariclaw-demo-import', ARICLAW_DIR_INC . 'demo/css/demo-import.css', array(), '1.0', false );
	}
	
	
}
add_action( 'admin_enqueue_scripts', 'ariclaw_demo_import_custom_scripts' );



?>