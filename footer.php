<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package
 */

    $url = 'https://colorlib.com/';
    $copyText = sprintf( __( 'Theme by %s colorlib %s Copyright &copy; %s  |  All rights reserved.', 'ariclaw' ), '<a target="_blank" href="' . esc_url( $url ) . '">', '</a>', date( 'Y' ) );
    $copyRight = !empty( ariclaw_opt( 'ariclaw_footer_copyright_text' ) ) ? ariclaw_opt( 'ariclaw_footer_copyright_text' ) : $copyText;
    $footer_class = ariclaw_opt( 'ariclaw_footer_widget_toggle' ) == 1 ? 'footer-area' : 'no_widget';

    ?>

    <!-- footer part start-->
    
    <footer class="footer-area">
        <?php
            if( ariclaw_opt( 'ariclaw_footer_widget_toggle' ) == 1 ) {
        ?>
        <div class="container">
            <div class="row justify-content-between">
                <?php
                    // Footer Widget 1
                    if ( is_active_sidebar( 'footer-1' ) ) {
                        echo '<div class="col-sm-6 col-xl-3">';
                            dynamic_sidebar( 'footer-1' );
                        echo '</div>';
                    }

                    // Footer Widget 2
                    if ( is_active_sidebar( 'footer-2' ) ) {
                        dynamic_sidebar( 'footer-2' );
                    }

                    // Footer Widget 3
                    if ( is_active_sidebar( 'footer-3' ) ) {
                        dynamic_sidebar( 'footer-3' );
                    }

                    // Footer Widget 4
                    if ( is_active_sidebar( 'footer-4' ) ) {
                        dynamic_sidebar( 'footer-4' );
                    }
                ?>
            </div>
        </div>
        <?php
            } 
        ?>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright_part_text text-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 col-md-12">
                                    <p class="footer-text m-0"><?php echo wp_kses_post( $copyRight ); ?></p>
                                </div>

                                <?php
                                    if(has_nav_menu('footer-menu')) {
                                        echo '<div class="col-lg-4 col-md-12">';
                                        wp_nav_menu(array(
                                            'menu'           => 'footer-menu',
                                            'theme_location' => 'footer-menu',
                                            'container_class'=> 'footer_menu',
                                        ));
                                        echo '</div>';
                                    }
                                ?>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
    </body>
</html>