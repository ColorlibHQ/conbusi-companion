<?php
namespace Conbusielementor\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Scheme_Color;
use Elementor\Scheme_Typography;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Text_Shadow;
use Elementor\Utils;



// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


/**
 *
 * Conbusi elementor service section widget.
 *
 * @since 1.0
 */
class Conbusi_Services extends Widget_Base {

	public function get_name() {
		return 'conbusi-service';
	}

	public function get_title() {
		return __( 'Services', 'conbusi-companion' );
	}

	public function get_icon() {
		return 'eicon-settings';
	}

	public function get_categories() {
		return [ 'conbusi-elements' ];
	}

	protected function _register_controls() {

		// ----------------------------------------  Services content ------------------------------
		$this->start_controls_section(
			'service_content',
			[
				'label' => __( 'Services content', 'conbusi-companion' ),
			]
        );
        $this->add_control(
            'sec_title',
            [
                'label' => esc_html__( 'Section Title', 'conbusi-companion' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' => esc_html__( 'What we Do?', 'conbusi-companion' ),
            ]
        );

        $this->add_control(
            'service_settings_seperator',
            [
                'label' => esc_html__( 'Services', 'conbusi-companion' ),
                'type' => Controls_Manager::HEADING,
                'separator' => 'after'
            ]
        );

		$this->add_control(
            'services', [
                'label' => __( 'Create New', 'conbusi-companion' ),
                'type' => Controls_Manager::REPEATER,
                'title_field' => '{{{ item_title }}}',
                'fields' => [
                    [
                        'name' => 'item_icon',
                        'label' => __( 'Select Icon', 'conbusi-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::SELECT,
                        'default'     => 'icon-1',
                        'options' => conbusi_themify_icon()
                    ],
                    [
                        'name' => 'item_title',
                        'label' => __( 'Title', 'conbusi-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::TEXT,
                        'default'     => __( 'Marketing & SEO Agency', 'conbusi-companion' ),
                    ],
                    [
                        'name' => 'item_text',
                        'label' => __( 'Text', 'conbusi-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::TEXTAREA,
                        'default'     => __( 'Esteem spirit temper too say adieus who direct esteem.', 'conbusi-companion' ),
                    ],
                    [
                        'name' => 'btn_text',
                        'label' => __( 'Button Text', 'conbusi-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::TEXT,
                        'default'     => __( 'Learn More', 'conbusi-companion' ),
                    ],
                    [
                        'name' => 'btn_url',
                        'label' => __( 'Button URL', 'conbusi-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::URL,
                        'default'     => [
                            'url' => '#'
                        ],
                    ],
                ],
                'default'   => [
                    [      
                        'item_icon'    => 'icon-1',
                        'item_title'   => __( 'Marketing & SEO Agency', 'conbusi-companion' ),
                        'item_text'    => __( 'Esteem spirit temper too say adieus who direct esteem.', 'conbusi-companion' ),
                        'btn_text'    => __( 'Learn More', 'conbusi-companion' ),
                        'btn_url'    => [
                            'url' => '#'
                        ],
                    ],
                    [      
                        'item_icon'    => 'icon-2',
                        'item_title'   => __( 'Startup Agency', 'conbusi-companion' ),
                        'item_text'    => __( 'Esteem spirit temper too say adieus who direct esteem.', 'conbusi-companion' ),
                        'btn_text'    => __( 'Learn More', 'conbusi-companion' ),
                        'btn_url'    => [
                            'url' => '#'
                        ],
                    ],
                    [      
                        'item_icon'    => 'icon-3',
                        'item_title'   => __( 'Corporate Business', 'conbusi-companion' ),
                        'item_text'    => __( 'Esteem spirit temper too say adieus who direct esteem.', 'conbusi-companion' ),
                        'btn_text'    => __( 'Learn More', 'conbusi-companion' ),
                        'btn_url'    => [
                            'url' => '#'
                        ],
                    ],
                    [      
                        'item_icon'    => 'icon-4',
                        'item_title'   => __( 'Finance Solution', 'conbusi-companion' ),
                        'item_text'    => __( 'Esteem spirit temper too say adieus who direct esteem.', 'conbusi-companion' ),
                        'btn_text'    => __( 'Learn More', 'conbusi-companion' ),
                        'btn_url'    => [
                            'url' => '#'
                        ],
                    ],
                    [      
                        'item_icon'    => 'icon-5',
                        'item_title'   => __( 'Food & Restaurant', 'conbusi-companion' ),
                        'item_text'    => __( 'Esteem spirit temper too say adieus who direct esteem.', 'conbusi-companion' ),
                        'btn_text'    => __( 'Learn More', 'conbusi-companion' ),
                        'btn_url'    => [
                            'url' => '#'
                        ],
                    ],
                    [      
                        'item_icon'    => 'icon-6',
                        'item_title'   => __( 'Travel Agency', 'conbusi-companion' ),
                        'item_text'    => __( 'Esteem spirit temper too say adieus who direct esteem.', 'conbusi-companion' ),
                        'btn_text'    => __( 'Learn More', 'conbusi-companion' ),
                        'btn_url'    => [
                            'url' => '#'
                        ],
                    ],
                ]
            ]
		);
		$this->end_controls_section(); // End service content

    /**
     * Style Tab
     * ------------------------------ Style Section Heading ------------------------------
     *
     */

        $this->start_controls_section(
            'style_room_section', [
                'label' => __( 'Style Service Section', 'conbusi-companion' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'big_title_col', [
                'label' => __( 'Section Title Color', 'conbusi-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .expert_doctors_area .doctors_title h3' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'single_item_styles_seperator',
            [
                'label' => esc_html__( 'Single Item Styles', 'conbusi-companion' ),
                'type' => Controls_Manager::HEADING,
                'separator' => 'after'
            ]
        );
        $this->add_control(
            'member_name_col', [
                'label' => __( 'Member Name Color', 'conbusi-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .expert_doctors_area .single_expert .experts_name h3' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'member_desig_color', [
                'label' => __( 'Member Designation Color', 'conbusi-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .expert_doctors_area .single_expert .experts_name span' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'single_item_bg_styles_seperator',
            [
                'label' => esc_html__( 'Single Item Bg Styles', 'conbusi-companion' ),
                'type' => Controls_Manager::HEADING,
                'separator' => 'after'
            ]
        );
        $this->add_control(
            'member_bg_color', [
                'label' => __( 'Bg Color', 'conbusi-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .expert_doctors_area .single_expert .experts_name' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'hover_member_bg_color', [
                'label' => __( 'Item Hover Bg Color', 'conbusi-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .expert_doctors_area .single_expert:hover .experts_name' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_section();

	}

	protected function render() {
    $settings  = $this->get_settings();
    $sec_title = !empty( $settings['sec_title'] ) ? $settings['sec_title'] : '';
    $services = !empty( $settings['services'] ) ? $settings['services'] : '';
    ?>

    <!-- service_area_start -->
    <div class="service_area">
        <div class="container">
            <?php 
                if ( $sec_title ) { 
                    echo '
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="section_title text-center mb-50">
                                <h3>'.esc_html( $sec_title ).'</h3>
                            </div>
                        </div>
                    </div>
                    ';
                }
            ?>
            <div class="row">
                <?php 
                if( is_array( $services ) && count( $services ) > 0 ) {
                    foreach( $services as $item ) {
                        $item_icon = ( !empty( $item['item_icon'] ) ) ? CONBUSI_DIR_ICON_IMG_URI . $item['item_icon'] . '.svg' : '';
                        $item_title = ( !empty( $item['item_title'] ) ) ? $item['item_title'] : '';
                        $item_text = ( !empty( $item['item_text'] ) ) ? $item['item_text'] : '';
                        $btn_text = ( !empty( $item['btn_text'] ) ) ? $item['btn_text'] : '';
                        $btn_url = ( !empty( $item['btn_url']['url'] ) ) ? $item['btn_url']['url'] : '';
                        ?>
                        <div class="col-xl-4 col-md-6 col-lg-4">
                            <div class="single_service text-center">
                                <?php 
                                    if ( $item_icon ) { 
                                        echo '
                                        <div class="service_icon">
                                            <img src="'.esc_url( $item_icon ).'" alt="'.esc_url( $item_title ).'">
                                        </div>
                                        ';
                                    }
                                    if ( $item_title ) { 
                                        echo '<h3>'.esc_html( $item_title ).'</h3>';
                                    }
                                    if ( $item_text ) { 
                                        echo '<p>'.wp_kses_post( $item_text ).'</p>';
                                    }
                                    if ( $btn_text ) { 
                                        echo '<a href="'.esc_url( $btn_url ).'" class="learn_more">'.esc_html( $btn_text ).'</a>';
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
    <?php
    }
}