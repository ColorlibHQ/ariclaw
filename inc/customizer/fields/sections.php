<?php 
/**
 * @Packge     : Ariclaw
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 * Customizer panels and sections
 *
 */

/***********************************
 * Register customizer panels
 ***********************************/

$panels = array(
    /**
     * Theme Options Panel
     */
    array(
        'id'   => 'ariclaw_theme_options_panel',
        'args' => array(
            'priority'       => 0,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'title'          => esc_html__( 'Theme Options', 'ariclaw' ),
        ),
    )
);


/***********************************
 * Register customizer sections
 ***********************************/


$sections = array(

    /**
     * General Section
     */
    array(
        'id'   => 'ariclaw_general_section',
        'args' => array(
            'title'    => esc_html__( 'General', 'ariclaw' ),
            'panel'    => 'ariclaw_theme_options_panel',
            'priority' => 1,
        ),
    ),
    
    /**
     * Header Section
     */
    array(
        'id'   => 'ariclaw_header_section',
        'args' => array(
            'title'    => esc_html__( 'Header', 'ariclaw' ),
            'panel'    => 'ariclaw_theme_options_panel',
            'priority' => 2,
        ),
    ),

    /**
     * Blog Section
     */
    array(
        'id'   => 'ariclaw_blog_section',
        'args' => array(
            'title'    => esc_html__( 'Blog', 'ariclaw' ),
            'panel'    => 'ariclaw_theme_options_panel',
            'priority' => 3,
        ),
    ),


    /**
     * 404 Page Section
     */
    array(
        'id'   => 'ariclaw_fof_section',
        'args' => array(
            'title'    => esc_html__( '404 Page', 'ariclaw' ),
            'panel'    => 'ariclaw_theme_options_panel',
            'priority' => 6,
        ),
    ),

    /**
     * Footer Section
     */
    array(
        'id'   => 'ariclaw_footer_section',
        'args' => array(
            'title'    => esc_html__( 'Footer Page', 'ariclaw' ),
            'panel'    => 'ariclaw_theme_options_panel',
            'priority' => 7,
        ),
    ),



);


/***********************************
 * Add customizer elements
 ***********************************/
$collection = array(
    'panel'   => $panels,
    'section' => $sections,
);

Epsilon_Customizer::add_multiple( $collection );

?>