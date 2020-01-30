<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <!-- For Resposive Device -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php echo ariclaw_site_icon();?>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>

    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <?php
                            echo ariclaw_theme_logo( 'navbar-brand' );
                        ?>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <?php
                            if(has_nav_menu('primary-menu')) {
                                wp_nav_menu(array(
                                    'menu'           => 'primary-menu',
                                    'theme_location' => 'primary-menu',
                                    'menu_id'        => 'menu-main-menu',
                                    'container_class'=> 'collapse navbar-collapse main-menu-item',
                                    'container_id'   => 'navbarSupportedContent',
                                    'menu_class'     => 'navbar-nav',
                                    'walker'         => new ariclaw_bootstrap_navwalker,
                                    'depth'          => 3
                                ));
                            }
                        
                            if( ariclaw_opt( 'ariclaw_header_right_button' ) == 1 ){
                                $btn_lbl = !empty( ariclaw_opt( 'ariclaw_header_right_button_lbl' ) ) ? ariclaw_opt( 'ariclaw_header_right_button_lbl' ) : '';
                                $btn_url = !empty( ariclaw_opt( 'ariclaw_header_right_button_url' ) ) ? ariclaw_opt( 'ariclaw_header_right_button_url' ) : '';
                            ?>
                                <a class="d-none d-sm-block menu_btn" href="<?php echo esc_url( $btn_url )?>"><?php echo esc_html( $btn_lbl )?></a>
                            <?php } ?>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <?php
    //Page Title Bar
    if( function_exists( 'ariclaw_page_titlebar' ) ){
	    ariclaw_page_titlebar();
    }

