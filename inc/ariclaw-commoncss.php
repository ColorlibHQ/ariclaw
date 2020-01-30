<?php
// Block direct access
if( !defined( 'ABSPATH' ) ){
    exit( 'Direct script access denied.' );
} 
/**
 * @Packge     : ARICLAW
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
 
// enqueue css
function ariclaw_common_custom_css(){
    
    wp_enqueue_style( 'ariclaw-common', get_template_directory_uri().'/assets/css/dynamic.css' );
		$header_bg         		  = esc_url( get_header_image() );
		$header_bg_img 			  = !empty( $header_bg ) ? 'background-image: url('.esc_url( $header_bg ).')' : '';

		$themeColor     		  = ariclaw_opt( 'ariclaw_theme_color' );

		$buttonBorderColor     	  = ariclaw_opt( 'ariclaw_button_border_color' );
		$hoverColor     	  	  = ariclaw_opt( 'ariclaw_hover_color');

		$headerTop_bg     		  = ariclaw_opt( 'ariclaw_top_header_bg_color' );
		$headerTop_col     		  = ariclaw_opt( 'ariclaw_top_header_color' );

		$headerBg          		  = ariclaw_opt( 'ariclaw_header_bg_color');
		$menuColor          	  = ariclaw_opt( 'ariclaw_header_menu_color' );
		$menuHoverColor           = ariclaw_opt( 'ariclaw_header_menu_hover_color' ) != '#ab7636' ? ariclaw_opt('ariclaw_header_menu_hover_color') : $themeColor;
		$dropMenuBgColor          = ariclaw_opt( 'ariclaw_header_drop_menu_bg_color' ) != '#ab7636' ? ariclaw_opt('ariclaw_header_drop_menu_bg_color') : $themeColor;
		$dropMenuColor            = ariclaw_opt( 'ariclaw_header_drop_menu_color' );
		$dropMenuHovColor         = ariclaw_opt( 'ariclaw_header_drop_menu_hover_color' );
		
		$headerRightBtnColor      = ariclaw_opt( 'ariclaw_header_right_btn_color' ) != '#ab7636' ? ariclaw_opt('ariclaw_header_right_btn_color') : $themeColor;
		$headerRightBtnHvrColor   = ariclaw_opt( 'ariclaw_header_right_btn_hover_color' ) != '#ab7636' ? ariclaw_opt('ariclaw_header_right_btn_hover_color') : $themeColor;

		$footerwbgColor     	  = ariclaw_opt('ariclaw_footer_bg_color');
		$footerwTextColor   	  = ariclaw_opt('ariclaw_footer_widget_text_color') != '#abb2ba' ? ariclaw_opt('ariclaw_footer_widget_text_color') : '';
		$widgettitlecolor  		  = ariclaw_opt('ariclaw_footer_widget_title_color');
		$footerwanchorcolor 	  = ariclaw_opt('ariclaw_footer_widget_anchor_color');
		$footerwanchorhovcolor    = ariclaw_opt('ariclaw_footer_widget_anchor_hover_color');
		
		$fofbg					  = ariclaw_opt('ariclaw_fof_bg_color');
		$foftonecolor			  = ariclaw_opt('ariclaw_fof_textone_color');
		$fofttwocolor			  = ariclaw_opt('ariclaw_fof_texttwo_color');

		$gradientBgColor 		  = $themeColor != '#ab7636' ? $themeColor : '';
		$footerAncDefColor 		  = $footerwanchorcolor != '#999999' ? $footerwanchorcolor : $themeColor;
		$footerAncDefHovColor 	  = $footerwanchorhovcolor != '#ab7636' ? $footerwanchorhovcolor : $themeColor;

		$customcss ="
			.hero-banner{
				{$header_bg_img}
			}
			
			.btn_2
			{
				border-color: {$buttonBorderColor};
			}
			
			.dropdown .dropdown-menu
			{
				background-color: {$dropMenuBgColor};
			}

			.main_menu .menu_btn
			{
				color: {$headerRightBtnColor};
			}
			
			.main_menu .menu_btn:hover
			{
				border-color: {$headerRightBtnHvrColor};
				background-color: {$headerRightBtnHvrColor};
			}

			.banner_part .banner_text .btn_1{
				background: {$gradientBgColor};
			}

			.cta_part .cta_part_iner .cta_part_text p, .about_part .about_text h5, .our_latest_work .single_work_demo h5, .blog_part .single-home-blog .card h5:hover, .blog_part .single-home-blog .card ul li i, .review_part .slick_right:hover, .review_part .slick_left:hover, .blog_part .single-home-blog a, .blog_part .single-home-blog .time, .blog_part .single-home-blog li span, .single_single_service span.fa, section.cta_area a.cta_btn:hover
			{
				color: {$themeColor}
			}			
			.our_latest_work .single_work_demo .btn_3:hover, .team_member_section .single_team_member .single_team_text h3 a:hover, .team_member_section .single_team_member .team_member_social_icon a:hover, .blog_part .single-home-blog .card .card-body a:hover, .pre_icon a:hover, .next_icon a:hover, .review_part .section_tittle p, .banner-breadcrumb > ol > li.breadcrumb-item > a.bread-link:hover, .review_part .section_tittle p, .banner-breadcrumb .breadcrumb-item a:hover, .blog_details a:hover, .blog_right_sidebar .widget_categories ul li:hover, .blog_right_sidebar .widget_categories ul li:hover a, .blog_right_sidebar .widget_categories ul li a:hover, .blog_area a h2:hover{
				color: {$themeColor}!important;
			}

			.review_part .intro_video_bg .video-play-button, .review_part .owl-prev span:after, .review_part .owl-next span:after, .review_part .intro_video_bg .video-play-button:after, .review_part .intro_video_bg .video-play-button:before, .review_part .intro_video_bg .video-play-button:hover:after, .blog_item_img .blog_item_date, .single_sidebar_widget .tagcloud a:hover, .blog_right_sidebar .single_sidebar_widget.widget_ariclaw_newsletter .btn, .pre_icon :after, .next_icon :after, section.cta_area
			{
				background: {$themeColor}
			}

			.btn_4{
				border-color: {$themeColor};
				background-color: {$themeColor};
			}
			.btn_4:hover{
				color: {$themeColor}!important;
			}

			.blog_right_sidebar .single_sidebar_widget.widget_search .button{
				background: {$gradientBgColor}
			}

			.service_part .single_service_part:hover .single_service_part_iner span
			{
				background: {$themeColor}!important;
			}

			.btn_2:hover,
			.copyright_part .footer-social a:hover
			{
				background: {$hoverColor}!important;
			}

			.blog_part .single-home-blog .card h5:hover
			{
				color: {$hoverColor};
			}

			.about_part .about_img h2:after, .copyright_part .footer-social a
			{
				border-color: {$themeColor}
			}
			
			.sub_header{
				background: {$headerTop_bg}
			}
			.sub_header .sub_header_social_icon a,
			.sub_header .sub_header_social_icon .register_icon
			{
				color: {$headerTop_col}
			}

			.main_menu.menu_fixed
			{
				background: {$headerBg};
			}
			.main_menu .main-menu-item ul li a
			{
			   color: {$menuColor}!important;
			}
			.main_menu .main-menu-item ul li a:not(.dropdown-item):hover
			{
			   color: {$menuHoverColor}!important;
			}
			
			.dropdown .dropdown-menu .dropdown-item
			{
			   color: {$dropMenuColor}!important;
			}
			.dropdown .dropdown-menu .dropdown-item:hover
			{
			   color: {$dropMenuHovColor}!important;
			}

			.footer-area {
				background-color: {$footerwbgColor};
			}

			.footer-area .single-footer-widget p, .footer-area .widget_ariclaw_newsletter .input-group input, .footer-area .copyright_part_text p, .footer-area .footer_2 .social_icon a
			{
				color: {$footerwTextColor}
			}
			.footer-area .widget_ariclaw_newsletter .input-group, .footer-area .copyright_part_text {
				border-color: {$footerwTextColor}
			}
			.footer-area .single-footer-widget h4
			{
				color: {$widgettitlecolor}
			}

			.footer-area .copyright_part_text a, .footer-area .social_icon a, .footer-area .single-footer-widget ul li a
			{
			   color: {$footerwanchorcolor};
			}
			.footer-area .copyright_part_text .footer-text > a
			{
			   color: {$footerAncDefColor};
			}


			.footer-area .btn{
				background: {$footerwanchorcolor};
			}
			.footer-area .social_icon a:hover, .footer-area .single-footer-widget ul li a:hover
			{
			   color: {$footerAncDefHovColor};
			}
			.footer-area .copyright_part_text a:hover, .footer-area .footer_2 .social_icon a:hover
			{
			   color: {$footerAncDefHovColor}!important;
			}

			#f0f {
				background-color: {$fofbg};
			}
			.f0f-content .h1 {
				color: {$foftonecolor};
			}
			.f0f-content p {
				color: {$fofttwocolor};
			}

        ";
       
    wp_add_inline_style( 'ariclaw-common', $customcss );
    
}
add_action( 'wp_enqueue_scripts', 'ariclaw_common_custom_css', 50 );