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
 * elementor reservation section widget.
 *
 * @since 1.0
 */
class Ariclaw_Reservation extends Widget_Base {

	public function get_name() {
		return 'ariclaw-reservation';
	}

	public function get_title() {
		return __( 'Reservation', 'ariclaw' );
	}

	public function get_icon() {
		return 'eicon-calendar';
	}

	public function get_categories() {
		return [ 'ariclaw-elements' ];
	}

	protected function _register_controls() {

        // ----------------------------------------  Reservation Content ------------------------------
        $this->start_controls_section(
            'menu_tab_sec',
            [
                'label' => __( 'Reservation', 'ariclaw' ),
            ]
        );
        $this->add_control(
			'resrv_txt',
			[
				'label'         => __( 'Reservation Text', 'ariclaw' ),
                'type'          => Controls_Manager::TEXTAREA,
                'label_block'   => true,
				'default'       => __( 'Their was of wherein darkness tree them own it firmament fourth you whose void grass gree', 'ariclaw' ),
			]
		);
        $this->add_control(
			'btn_label',
			[
				'label'         => __( 'Button Label', 'ariclaw' ),
                'type'          => Controls_Manager::TEXT,
                'label_block'   => true,
				'default'       => __('Request Free Consultation', 'ariclaw'),
			]
		);
		$this->add_control(
			'btn_url', [
				'label'         => __( 'Button URL', 'ariclaw' ),
                'type'          => Controls_Manager::URL,
                'label_block'   => true,
				'default'   => [
                    'url'   => '#',
                ]
			]
        );

        $this->end_controls_section(); // End reservation content

        //------------------------------ Color Settings ------------------------------
        $this->start_controls_section(
            'color_settings', [
                'label' => __( 'Color Settings', 'ariclaw' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'sec_title_color', [
                'label'     => __( 'Section Title Color', 'ariclaw' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} section.cta_area h2' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'btn_bg_color', [
                'label'     => __( 'Button BG Color', 'ariclaw' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} section.cta_area a.cta_btn' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'btn_txt_color', [
                'label'     => __( 'Button Text Color', 'ariclaw' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#161d22',
                'selectors' => [
                    '{{WRAPPER}} section.cta_area a.cta_btn' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'btn_hvr_bg_color', [
                'label'     => __( 'Button Hover BG Color', 'ariclaw' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} section.cta_area a.cta_btn:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'btn_hvr_txt_color', [
                'label'     => __( 'Button Hover Text Color', 'ariclaw' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#ab7636',
                'selectors' => [
                    '{{WRAPPER}} section.cta_area a.cta_btn:hover' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();

        // Background Style ==============================
        $this->start_controls_section(
            'section_bg', [
                'label' => __( 'Style Background', 'ariclaw' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'sectionbg',
                'label' => __( 'Background', 'ariclaw' ),
                'types' => [ 'classic' ],
                'selector' => '{{WRAPPER}} section.cta_area',
            ]
        );

        $this->end_controls_section();

	}

	protected function render() {

    $settings  = $this->get_settings();
    $resrv_txt = !empty( $settings['resrv_txt'] ) ? $settings['resrv_txt'] : '';
    $btn_label = !empty( $settings['btn_label'] ) ? $settings['btn_label'] : '';
    $btn_url   = !empty( $settings['btn_url']['url'] ) ? $settings['btn_url']['url'] : '';
    ?>

    <!-- cta_part part start-->
    <section class="cta_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="cta_text">
                        <h2><?php echo wp_kses_post($resrv_txt)?></h2>
                        <a href="<?php echo esc_url($btn_url)?>" class="cta_btn"><?php echo esc_html($btn_label)?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cta_part part end-->
    <?php

    }
}
