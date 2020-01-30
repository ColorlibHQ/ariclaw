<?php
namespace Ariclawelementor\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Scheme_Color;
use Elementor\Scheme_Typography;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Text_Shadow;
use Elementor\Group_Control_Background;



// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


/**
 *
 * Ariclaw elementor section widget.
 *
 * @since 1.0
 */
class Ariclaw_Testimonial extends Widget_Base {

	public function get_name() {
		return 'ariclaw-testimonial';
	}

	public function get_title() {
		return __( 'Testimonial', 'ariclaw' );
	}

	public function get_icon() {
		return 'eicon-post-slider';
	}

	public function get_categories() {
		return [ 'ariclaw-elements' ];
	}

	protected function _register_controls() {

		// -----------------------  Customers review content ------------------------------
		$this->start_controls_section(
			'customersreview_content',
			[
				'label' => __( 'Customers Review', 'ariclaw' ),
			]
		);

		$this->add_control(
            'review_slider', [
                'label' => __( 'Create Review', 'ariclaw' ),
                'type'  => Controls_Manager::REPEATER,
                'title_field' => '{{{ client_name }}}',
                'fields' => [
                    [
                        'name'  => 'desc',
                        'label' => __( 'Review Text', 'ariclaw' ),
                        'type'  => Controls_Manager::TEXTAREA,
                        'default'   => __('Thing yielding place gathered heaven second isn\'t darkness does not good very dry morning signs isn\'t for spirit stars man meat beginning. Meat earth. Face seas doesn\'t life doesn\'t fruit brought life gathering also lights isn\'t day a wherein firmament fruitful read ability', 'ariclaw')
                    ],
                    [
                        'name'  => 'client_img',
                        'label' => __( 'Client Image', 'ariclaw' ),
                        'type'  => Controls_Manager::MEDIA,
                    ],
                    [
                        'name'  => 'client_name',
                        'label' => __( 'Client Name', 'ariclaw' ),
                        'type'  => Controls_Manager::TEXT,
                        'label_block' => true,
                        'default' => esc_html__( 'Daniel E Gilcritst', 'ariclaw' )
                    ],
                    [
                        'name'  => 'designation',
                        'label' => __( 'Designation', 'ariclaw' ),
                        'type'  => Controls_Manager::TEXT,
                        'label_block' => true,
                        'default' => esc_html__( 'Manager, Vision', 'ariclaw' )
                    ],
                ],
            ]
		);

		$this->end_controls_section(); // End exibition content

        /**
         * Style Tab
         *
         */
		//------------------------------ Style Section ------------------------------
		$this->start_controls_section(
			'style_item',
			[
				'label' => __( 'Style Item', 'ariclaw' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

        $this->add_control(
            'review_txt_color', [
                'label'     => __( 'Review Text Color', 'ariclaw' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#666',
                'selectors' => [
                    '{{WRAPPER}} .review_part .client_review_text p' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'testimonial_name_color', [
                'label'     => __( 'Client Name Color', 'ariclaw' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#161d22',
                'selectors' => [
                    '{{WRAPPER}} .review_part .client_review_text h3' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'testimonial_desc_color', [
                'label'     => __( 'Client Designation Color', 'ariclaw' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#161d22',
                'selectors' => [
                    '{{WRAPPER}} .review_part .client_review_text h5' => 'color: {{VALUE}};',
                ],
            ]
        );

		$this->end_controls_section();



        /*------------------------------ Background Style ------------------------------*/
		$this->start_controls_section(
            'section_bg', [
                'label' => __( 'Style Background', 'ariclaw' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'section-bg',
                'label' => __( 'Section Background', 'ariclaw' ),
                'types' => [ 'classic' ],
                'selector' => '{{WRAPPER}} .review_part',
            ]
        );

        $this->end_controls_section();

	}

	protected function render() {

    $settings = $this->get_settings();
    // call load widget script
	$this->load_widget_script();
    $reviews = !empty( $settings['review_slider'] ) ? $settings['review_slider'] : '';
    ?>

    <!--::testimonial_part start::-->
    <section class="review_part section_padding">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-9">
                    <!-- MAIN SLIDES -->
                    <div class="slider">
                        <?php
                        if( is_array( $reviews ) && count( $reviews ) > 0 ){
                            $count = 1;
                            foreach ($reviews as $review ) {
                                $desc  = !empty( $review['desc'] ) ? $review['desc'] : '';
                        ?>
                        <div data-index="<?php echo $count?>">
                            <div class="client_review_text text-center">
                                <?php
                                    // Review text ---------------
                                    if( $desc ){
                                        echo '<p>'. wp_kses_post( $desc ) . '</p>';
                                    }
                                ?>
                            </div>
                        </div>
                        <?php
                            $count++;
                            }
                        }
                        ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- THUMBNAILS -->
                    <div class="slider-nav-thumbnails">
                        <?php
                        if( is_array( $reviews ) && count( $reviews ) > 0 ){
                            foreach ($reviews as $review ) {
                                $client_img = !empty( $review['client_img']['id'] ) ? wp_get_attachment_image( $review['client_img']['id'], 'ariclaw_review_img_140x140', '', array('class' => 'image','alt' => $review['client_name'] ) ) : '';
                                $cName = !empty( $review['client_name'] ) ? $review['client_name'] : '';
                                $desig = !empty( $review['designation'] ) ? $review['designation'] : '';
                        ?>
                        <div class="slider-thumbnails">
                            <?php
                                if( $client_img ){
                                    echo wp_kses_post( $client_img );
                                }
                            ?>
                            <div class="client_review_text text-center">
                                <?php
                                    // Client Name ----------------------
                                    if( $cName ){
                                        echo '<h3>'. esc_html( $cName ) .' </h3>';
                                    }

                                    // Designation ---------------
                                    if( $desig ){
                                        echo '<h5>'. esc_html( $desig ) .'</h5>';
                                    }
                                ?> 
                            </div>
                        </div>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::testimonial_part end::-->
    <?php

    }

    public function load_widget_script(){
        if( \Elementor\Plugin::$instance->editor->is_edit_mode() === true  ) {
        ?>
        <script>
        ( function( $ ){
            $('.slider').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                speed: 1000,
                infinite: true,
                asNavFor: '.slider-nav-thumbnails',
                autoplay:true,
                pauseOnHover: true,
                dots: false
            });
            
            $('.slider-nav-thumbnails').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                speed: 1000,
                asNavFor: '.slider',
                infinite: true,
                centerMode: true,
                autoplaySpeed: 2000,
                pauseOnHover: true,
                arrows: true,
                prevArrow: '<i class="slick_left ti-angle-double-left"></i>',
                nextArrow: '<i class="slick_right ti-angle-double-right"></i>',
                responsive: [
                {
                    breakpoint: 480,
                    settings: {
                    arrows: false
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                    arrows: false
                    }
                }
                ]
            });
            
            //remove active class from all thumbnail slides
            $('.slider-nav-thumbnails .slick-slide').removeClass('slick-active');
            
            //set active class to first thumbnail slides
            $('.slider-nav-thumbnails .slick-slide').eq(0).addClass('slick-active');
            
            // On before slide change match active thumbnail to current slide
            $('.slider').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
                var mySlideNumber = nextSlide;
                $('.slider-nav-thumbnails .slick-slide').removeClass('slick-active');
                $('.slider-nav-thumbnails .slick-slide').eq(mySlideNumber).addClass('slick-active');
            });
            
            //UPDATED 
            
            $('.slider').on('afterChange', function(event, slick, currentSlide){   
            $('.content').hide();
            $('.content[data-id=' + (currentSlide + 1) + ']').show();
            }); 
        })(jQuery);
        </script>
        <?php 
        }
    }
	
}
