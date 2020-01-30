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
 * Ariclaw elementor Team Member section widget.
 *
 * @since 1.0
 */
class Ariclaw_Team_Member extends Widget_Base {

	public function get_name() {
		return 'ariclaw-team-member';
	}

	public function get_title() {
		return __( 'Team Member', 'ariclaw' );
	}

	public function get_icon() {
		return 'eicon-person';
	}

	public function get_categories() {
		return [ 'ariclaw-elements' ];
	}

	protected function _register_controls() {

        // ----------------------------------------  Team Section ------------------------------
        $this->start_controls_section(
            'team_heading',
            [
                'label' => __( 'Team Heading', 'ariclaw' ),
            ]
        );
        $this->add_control(
            'team_header',
            [
                'label'         => esc_html__( 'Team Header', 'ariclaw' ),
                'description'   => esc_html__('Use <br> tag for line break', 'ariclaw'),
                'type'          => Controls_Manager::WYSIWYG,
                'label_block'   => true,
                'default'       => __( '<h2>Meet Our Attorneys</h2><p>Over their the abundantly every midst place thing them them winged you\'re beginning forth you. Fruit seas very does can after herb moved so was Kind </p>', 'ariclaw' )
            ]
        );

        $this->end_controls_section(); // End section top content
        
		// ----------------------------------------   Teams content ------------------------------
		$this->start_controls_section(
			'teams_block',
			[
				'label' => __( 'Teams', 'ariclaw' ),
			]
		);
		$this->add_control(
            'teams_content', [
                'label' => __( 'Create Team', 'ariclaw' ),
                'type'  => Controls_Manager::REPEATER,
                'title_field' => '{{{ label }}}',
                'fields' => [
                    [
                        'name'  => 'image',
                        'label' => __( 'Member Image', 'ariclaw' ),
                        'type'  => Controls_Manager::MEDIA,
                    ],
                    [
                        'name'  => 'email',
                        'label' => __( 'Email', 'ariclaw' ),
                        'type'  => Controls_Manager::TEXT,
                        'label_block' => true,
                        'default' => __( 'jevenmartyn@ariclaw.com', 'ariclaw' )
                    ],
                    [
                        'name'  => 'label',
                        'label' => __( 'Name', 'ariclaw' ),
                        'type'  => Controls_Manager::TEXT,
                        'label_block' => true,
                        'default' => __( 'Stephen Hockin', 'ariclaw' )
                    ],
                    [
                        'name'      => 'desg',
                        'label'     => __( 'Designation', 'ariclaw' ),
                        'type'      => Controls_Manager::TEXT,
                        'default'   => __( 'Crime Lawyer', 'ariclaw' )
                    ],
                    [
                        'name'      => 'fb',
                        'label'     => __( 'Facebook URL', 'ariclaw' ),
                        'type'      => Controls_Manager::URL,
                        'show_external' => false,
                        'default'   => [
                            'url'   => '#',
                        ]
                    ],
                    [
                        'name'      => 'tw',
                        'label'     => __( 'Twitter URL', 'ariclaw' ),
                        'type'      => Controls_Manager::URL,
                        'show_external' => false,
                        'default'   => [
                            'url'   => '#',
                        ]
                    ],
                    [
                        'name'      => 'ins',
                        'label'     => __( 'Instagram URL', 'ariclaw' ),
                        'type'      => Controls_Manager::URL,
                        'show_external' => false,
                        'default'   => [
                            'url'   => '#',
                        ]
                    ],
                ],
            ]
        );

		$this->end_controls_section(); // End Teams content

        /**
         * Style Tab
         * ------------------------------ Style Tab Content ------------------------------
         *
         */

        // Heading Style ==============================
        $this->start_controls_section(
            'color_sect', [
                'label' => __( 'Style Team Heading', 'ariclaw' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_secttitle', [
                'label'     => __( 'Section Title Color', 'ariclaw' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#161d22',
                'selectors' => [
                    '{{WRAPPER}} section.team_part .section_tittle h2' => 'color: {{VALUE}};',
                ],
            ]
        );    
        $this->add_control(
            'color_sec_txt', [
                'label'     => __( 'Section Text Color', 'ariclaw' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#666',
                'selectors' => [
                    '{{WRAPPER}} section.team_part .section_tittle p' => 'color: {{VALUE}};',
                ],
            ]
        );    
        
        $this->end_controls_section();


        // Single Item Style ==============================
        $this->start_controls_section(
            'single_item_style', [
                'label' => __( 'Single Item Style', 'ariclaw' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'single_item_bg',
                'label' => __( 'Single Item Hover BG', 'ariclaw' ),
                'types' => [ 'classic' ],
                'selector' => '{{WRAPPER}} .our_offer .single_offer_part:hover .single_offer:after',
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
                'selector' => '{{WRAPPER}} .team_part',
            ]
        );

        $this->end_controls_section();


	}

	protected function render() {

    $settings = $this->get_settings();
    $team_header = !empty( $settings['team_header'] ) ? $settings['team_header'] : '';
    $teams = !empty( $settings['teams_content'] ) ? $settings['teams_content'] : '';
    $dynamic_class = ! is_front_page() ? ' single_attorneys' : '';
    ?>

    <!-- team_part part start-->
    <section class="team_part<?php echo( $dynamic_class )?> our_offer section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-sm-10">
                    <div class="section_tittle">
                        <?php
                            // Team Header =============
                            if( $team_header ){
                                echo wp_kses_post( wpautop( $team_header ) );
                            }
                        ?>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <?php
                if( is_array( $teams ) && count( $teams ) > 0 ){
                    foreach ( $teams as $team ) {
                        $team_img   = !empty( $team['image']['id'] ) ? wp_get_attachment_image( $team['image']['id'], 'ariclaw_team_img_360x410', false, array( 'alt' => $team['label'] ) ) : '';
                        $email      = !empty( $team['email'] ) ? $team['email'] : '';
                        $name       = !empty( $team['label'] ) ? $team['label'] : '';
                        $desig      = !empty( $team['desg'] ) ? $team['desg'] : '';
                        $fb         = !empty( $team['fb']['url'] ) ? $team['fb']['url'] : '';
                        $tw         = !empty( $team['tw']['url'] ) ? $team['tw']['url'] : '';
                        $ins        = !empty( $team['ins']['url'] ) ? $team['ins']['url'] : '';
                ?>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_offer_part">
                        <div class="single_offer">
                            <?php
                                if( $team_img ){
                                    echo wp_kses_post( $team_img );
                                }
                            ?>
                            <div class="hover_text">
                                <p><?php echo esc_html( $email );?></p>
                                <div class="team_social_icon">
                                    <a href="<?php echo esc_url( $fb );?>"> <span class="ti-facebook"></span> </a>
                                    <a href="<?php echo esc_url( $tw );?>"> <span class="ti-twitter"></span> </a>
                                    <a href="<?php echo esc_url( $ins );?>"> <span class="ti-instagram"></span> </a>
                                </div>
                            </div>

                        </div>
                        <div class="team_member_info">
                            <h4><?php echo esc_html( $name );?></h4>
                            <p><?php echo esc_html( $desig );?></p>
                        </div>
                    </div>
                </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </section>
    <!-- team_part part end-->
    <?php
    }
}
