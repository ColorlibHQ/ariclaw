<?php 
/**
 * @Packge 	   : Colorlib
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
	// Block direct access
	if( !defined( 'ABSPATH' ) ){
		exit( 'Direct script access denied.' );
	}

	/**
	 *
	 * Define constant
	 *
	 */
	
	 
	// Base URI
	if( !defined( 'ARICLAW_DIR_URI' ) )
		define( 'ARICLAW_DIR_URI', get_template_directory_uri().'/' );
	
	// assets URI
	if( !defined( 'ARICLAW_DIR_ASSETS_URI' ) )
		define( 'ARICLAW_DIR_ASSETS_URI', ARICLAW_DIR_URI.'assets/' );
	
	// Css File URI
	if( !defined( 'ARICLAW_DIR_CSS_URI' ) )
		define( 'ARICLAW_DIR_CSS_URI', ARICLAW_DIR_ASSETS_URI .'css/' );
	
	// Js File URI
	if( !defined( 'ARICLAW_DIR_JS_URI' ) )
		define( 'ARICLAW_DIR_JS_URI', ARICLAW_DIR_ASSETS_URI .'js/' );
	
	// Icon Images
	if( !defined('ARICLAW_DIR_ICON_IMG_URI') )
		define( 'ARICLAW_DIR_ICON_IMG_URI', ARICLAW_DIR_ASSETS_URI.'img/icon/' );
	
	//DIR inc
	if( !defined( 'ARICLAW_DIR_INC' ) )
		define( 'ARICLAW_DIR_INC', ARICLAW_DIR_URI.'inc/' );

	//Elementor Widgets Folder Directory
	if( !defined( 'ARICLAW_DIR_ELEMENTOR' ) )
		define( 'ARICLAW_DIR_ELEMENTOR', ARICLAW_DIR_INC.'elementor-widgets/' );

	// Base Directory
	if( !defined( 'ARICLAW_DIR_PATH' ) )
		define( 'ARICLAW_DIR_PATH', get_parent_theme_file_path().'/' );
	
	//Inc Folder Directory
	if( !defined( 'ARICLAW_DIR_PATH_INC' ) )
		define( 'ARICLAW_DIR_PATH_INC', ARICLAW_DIR_PATH.'inc/' );
	
	//Colorlib framework Folder Directory
	if( !defined( 'ARICLAW_DIR_PATH_LIB' ) )
		define( 'ARICLAW_DIR_PATH_LIB', ARICLAW_DIR_PATH_INC.'libraries/' );
	
	//Classes Folder Directory
	if( !defined( 'ARICLAW_DIR_PATH_CLASSES' ) )
		define( 'ARICLAW_DIR_PATH_CLASSES', ARICLAW_DIR_PATH_INC.'classes/' );

	
	//Widgets Folder Directory
	if( !defined( 'ARICLAW_DIR_PATH_WIDGET' ) )
		define( 'ARICLAW_DIR_PATH_WIDGET', ARICLAW_DIR_PATH_INC.'widgets/' );
		
	//Elementor Widgets Folder Directory
	if( !defined( 'ARICLAW_DIR_PATH_ELEMENTOR_WIDGETS' ) )
		define( 'ARICLAW_DIR_PATH_ELEMENTOR_WIDGETS', ARICLAW_DIR_PATH_INC.'elementor-widgets/' );
	

		
	/**
	 * Include File
	 *
	 */
	
	// Breadcrumbs file include
	require_once( ARICLAW_DIR_PATH_INC . 'ariclaw-breadcrumbs.php' );
	// Sidebar register file include
	require_once( ARICLAW_DIR_PATH_INC . 'widgets/ariclaw-widgets-reg.php' );
	// Post widget file include
	require_once( ARICLAW_DIR_PATH_INC . 'widgets/ariclaw-recent-post-thumb.php' );
	// News letter widget file include
	require_once( ARICLAW_DIR_PATH_INC . 'widgets/ariclaw-newsletter-widget.php' );
	//Social Links
	require_once( ARICLAW_DIR_PATH_INC . 'widgets/ariclaw-social-links.php' );
	// Instagram Widget
	require_once( ARICLAW_DIR_PATH_INC . 'widgets/ariclaw-instagram.php' );
	// Nav walker file include
	require_once( ARICLAW_DIR_PATH_INC . 'wp_bootstrap_navwalker.php' );
	// Theme function file include
	require_once( ARICLAW_DIR_PATH_INC . 'ariclaw-functions.php' );

	// Theme Demo file include
	require_once( ARICLAW_DIR_PATH_INC . 'demo/demo-import.php' );

	// Post Like
	require_once( ARICLAW_DIR_PATH_INC . 'post-like.php' );
	// Theme support function file include
	require_once( ARICLAW_DIR_PATH_INC . 'support-functions.php' );
	// Html helper file include
	require_once( ARICLAW_DIR_PATH_INC . 'wp-html-helper.php' );
	// Pagination file include
	require_once( ARICLAW_DIR_PATH_INC . 'wp_bootstrap_pagination.php' );
	// Elementor Widgets
	require_once( ARICLAW_DIR_PATH_ELEMENTOR_WIDGETS . 'elementor-widget.php' );
	//
	require_once( ARICLAW_DIR_PATH_CLASSES . 'Class-Enqueue.php' );
	
	require_once( ARICLAW_DIR_PATH_CLASSES . 'Class-Config.php' );
	// Customizer
	require_once( ARICLAW_DIR_PATH_INC . 'customizer/customizer.php' );
	// Class autoloader
	require_once( ARICLAW_DIR_PATH_INC . 'class-epsilon-dashboard-autoloader.php' );
	// Class ariclaw dashboard
	require_once( ARICLAW_DIR_PATH_INC . 'class-epsilon-init-dashboard.php' );
	// Common css
	require_once( ARICLAW_DIR_PATH_INC . 'ariclaw-commoncss.php' );

	// Admin Enqueue Script
	function ariclaw_admin_script(){
		wp_enqueue_style( 'ariclaw-admin', get_template_directory_uri().'/assets/css/ariclaw_admin.css', false, '1.0.0' );
		wp_enqueue_script( 'ariclaw_admin', get_template_directory_uri().'/assets/js/ariclaw_admin.js', false, '1.0.0' );
	}
	add_action( 'admin_enqueue_scripts', 'ariclaw_admin_script' );

	 
	// WooCommerce style desable
	add_filter( 'woocommerce_enqueue_styles', '__return_false' );


	/**
	 * Instantiate Ariclaw object
	 *
	 * Inside this object:
	 * Enqueue scripts, Google font, Theme support features, Ariclaw Dashboard .
	 *
	 */
	
	$Ariclaw = new Ariclaw();
	
