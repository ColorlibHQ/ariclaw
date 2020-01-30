<?php 
/**
 * @Packge     : Ariclaw
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 * Customizer section fields
 *
 */

/***********************************
 * General Section Fields
 ***********************************/

 // Theme color field
Epsilon_Customizer::add_field(
    'ariclaw_theme_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Theme Color', 'ariclaw' ),
        'description' => esc_html__( 'Select the theme color.', 'ariclaw' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'ariclaw_general_section',
        'default'     => '#ab7636',
    )
);
 
// Header background color field
Epsilon_Customizer::add_field(
    'ariclaw_header_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Sticky Header BG Color', 'ariclaw' ),
        'description' => esc_html__( 'Select the header background color.', 'ariclaw' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'ariclaw_header_section',
        'default'     => '#fff',
    )
);

// Header nav menu color field
Epsilon_Customizer::add_field(
    'ariclaw_header_menu_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header menu color', 'ariclaw' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'ariclaw_header_section',
        'default'     => '#000',
    )
);

// Header nav menu hover color field
Epsilon_Customizer::add_field(
    'ariclaw_header_menu_hover_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header menu hover color', 'ariclaw' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'ariclaw_header_section',
        'default'     => '#ab7636',
    )
);

// Header dropdown menu bg color field
Epsilon_Customizer::add_field(
    'ariclaw_header_drop_menu_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Dropdown menu BG color', 'ariclaw' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'ariclaw_header_section',
        'default'     => '#ab7636',
    )
);

// Header dropdown menu color field
Epsilon_Customizer::add_field(
    'ariclaw_header_drop_menu_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Dropdown menu color', 'ariclaw' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'ariclaw_header_section',
        'default'     => '#ffffff',
    )
);

// Header dropdown menu hover color field
Epsilon_Customizer::add_field(
    'ariclaw_header_drop_menu_hover_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Dropdown menu hover color', 'ariclaw' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'ariclaw_header_section',
        'default'     => '#ffffff',
    )
);


// Header right button toggle section
Epsilon_Customizer::add_field(
    'ariclaw_header_button_section_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Header right button toggle Section', 'ariclaw' ),
        'section'     => 'ariclaw_header_section',

    )
);


// Header right button toggle
Epsilon_Customizer::add_field(
	'ariclaw_header_right_button',
	array(
		'type'        => 'epsilon-toggle',
		'label'       => esc_html__( 'Header right button show/hide', 'ariclaw' ),
		'section'     => 'ariclaw_header_section',
		'default'     => true
	)
);

// Header right button toggle
Epsilon_Customizer::add_field(
	'ariclaw_header_right_button_lbl',
	array(
		'type'              => 'text',
		'label'             => esc_html__( 'Header right button label', 'ariclaw' ),
		'section'           => 'ariclaw_header_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Let\'s Talk'
	)
);

// Header right button toggle
Epsilon_Customizer::add_field(
	'ariclaw_header_right_button_url',
	array(
		'type'              => 'url',
		'label'             => esc_html__( 'Header right button URL', 'ariclaw' ),
		'section'           => 'ariclaw_header_section',
        'sanitize_callback' => 'esc_url_raw'
	)
);

// Header right button bg color field
Epsilon_Customizer::add_field(
    'ariclaw_header_right_btn_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header right button text color', 'ariclaw' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'ariclaw_header_section',
        'default'     => '#ab7636'
    )
);

// Header right button hover bg color field
Epsilon_Customizer::add_field(
    'ariclaw_header_right_btn_hover_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header right button hover bg color', 'ariclaw' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'ariclaw_header_section',
        'default'     => '#ab7636'
    )
);




/***********************************
 * Blog Section Fields
 ***********************************/
 
// Post excerpt length field
Epsilon_Customizer::add_field(
    'ariclaw_excerpt_length',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Set post excerpt length', 'ariclaw' ),
        'description' => esc_html__( 'Set post excerpt length.', 'ariclaw' ),
        'section'     => 'ariclaw_blog_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'     => '30',
    )
);

// Blog single page social share icon
Epsilon_Customizer::add_field(
    'ariclaw_blog_meta',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog page post meta show/hide', 'ariclaw' ),
        'section'     => 'ariclaw_blog_section',
        'default'     => true
    )
);
Epsilon_Customizer::add_field(
    'ariclaw_like_btn',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog Single Page Like Button show/hide', 'ariclaw' ),
        'section'     => 'ariclaw_blog_section',
        'default'     => true
    )
);
Epsilon_Customizer::add_field(
    'ariclaw_blog_share',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog Single Page Share show/hide', 'ariclaw' ),
        'section'     => 'ariclaw_blog_section',
        'default'     => true
    )
);

/***********************************
 * 404 Page Section Fields
 ***********************************/

// 404 text #1 field
Epsilon_Customizer::add_field(
    'ariclaw_fof_titleone',
    array(
        'type'              => 'text',
        'label'             => esc_html__( '404 Text #1', 'ariclaw' ),
        'section'           => 'ariclaw_fof_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Say Hello.'
    )
);
// 404 text #2 field
Epsilon_Customizer::add_field(
    'ariclaw_fof_titletwo',
    array(
        'type'              => 'text',
        'label'             => esc_html__( '404 Text #2', 'ariclaw' ),
        'section'           => 'ariclaw_fof_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Say Hello.'
    )
);
// 404 text #1 color field
Epsilon_Customizer::add_field(
    'ariclaw_fof_textone_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Text #1 Color', 'ariclaw' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'ariclaw_fof_section',
        'default'     => '#000000',
    )
);
// 404 text #2 color field
Epsilon_Customizer::add_field(
    'ariclaw_fof_texttwo_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Text #2 Color', 'ariclaw' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'ariclaw_fof_section',
        'default'     => '#656565',
    )
);
// 404 background color field
Epsilon_Customizer::add_field(
    'ariclaw_fof_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Page Background Color', 'ariclaw' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'ariclaw_fof_section',
        'default'     => '#fff',
    )
);

/***********************************
 * Footer Section Fields
 ***********************************/

// Footer Widget section
Epsilon_Customizer::add_field(
    'footer_widget_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Footer Widget Section', 'ariclaw' ),
        'section'     => 'ariclaw_footer_section',

    )
);

// Footer widget toggle field
Epsilon_Customizer::add_field(
    'ariclaw_footer_widget_toggle',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Footer widget show/hide', 'ariclaw' ),
        'description' => esc_html__( 'Toggle to display footer widgets.', 'ariclaw' ),
        'section'     => 'ariclaw_footer_section',
        'default'     => true,
    )
);

// Footer Copyright section
Epsilon_Customizer::add_field(
    'ariclaw_footer_copyright_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Footer Copyright Section', 'ariclaw' ),
        'section'     => 'ariclaw_footer_section',
        'default'     => true,

    )
);

// Footer copyright text field
// Copy right text
$url = 'https://colorlib.com/';
$copyText = sprintf( __( 'Theme by %s colorlib %s Copyright &copy; %s  |  All rights reserved.', 'ariclaw' ), '<a target="_blank" href="' . esc_url( $url ) . '">', '</a>', date( 'Y' ) );
Epsilon_Customizer::add_field(
    'ariclaw_footer_copyright_text',
    array(
        'type'        => 'epsilon-text-editor',
        'label'       => esc_html__( 'Footer copyright text', 'ariclaw' ),
        'section'     => 'ariclaw_footer_section',
        'default'     => wp_kses_post( $copyText ),
    )
);

// Footer widget background color field
Epsilon_Customizer::add_field(
    'ariclaw_footer_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Background Color', 'ariclaw' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'ariclaw_footer_section',
        'default'     => '#162b45',
    )
);

// Footer widget text color field
Epsilon_Customizer::add_field(
    'ariclaw_footer_widget_text_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Text Color', 'ariclaw' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'ariclaw_footer_section',
        'default'     => '#abb2ba',
    )
);

// Footer widget title color field
Epsilon_Customizer::add_field(
    'ariclaw_footer_widget_title_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Widget Title Color', 'ariclaw' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'ariclaw_footer_section',
        'default'     => '#ffffff',
    )
);

// Footer widget anchor color field
Epsilon_Customizer::add_field(
    'ariclaw_footer_widget_anchor_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Anchor Color', 'ariclaw' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'ariclaw_footer_section',
        'default'     => '#999999',
    )
);

// Footer widget anchor hover color field
Epsilon_Customizer::add_field(
    'ariclaw_footer_widget_anchor_hover_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Anchor Hover Color', 'ariclaw' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'ariclaw_footer_section',
        'default'     => '#ab7636',
    )
);

