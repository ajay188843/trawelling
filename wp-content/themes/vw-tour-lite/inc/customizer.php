<?php
/**
 * VW Tour Lite Theme Customizer
 *
 * @package VW Tour Lite
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function vw_tour_lite_customize_register( $wp_customize ) {

	//add home page setting pannel
	$wp_customize->add_panel( 'vw_tour_lite_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'VW Settings', 'vw-tour-lite' ),
	    'description' => __( 'Description of what this panel does.', 'vw-tour-lite' ),
	) );

	$wp_customize->add_section('vw_tour_lite_headercont_section',array(
		'title'	=> __('Topbar Contact','vw-tour-lite'),
		'description'	=> __('Add topbar contact details here','vw-tour-lite'),
		'priority'	=> null,
		'panel' => 'vw_tour_lite_panel_id'
	));
	
	$wp_customize->add_setting('vw_tour_lite_cont_phone',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('vw_tour_lite_cont_phone',array(
		'label'	=> __('Add contact number','vw-tour-lite'),
		'section'	=> 'vw_tour_lite_headercont_section',
		'setting'	=> 'vw_tour_lite_cont_phone',
		'type'	=> 'text'
	));
	
	$wp_customize->add_setting('vw_tour_lite_cont_email',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('vw_tour_lite_cont_email',array(
		'label'	=> __('Add email address here','vw-tour-lite'),
		'section'	=> 'vw_tour_lite_headercont_section',
		'setting'	=> 'vw_tour_lite_cont_email',
		'type'		=> 'text'
	));
	
	//social pannel
	$wp_customize->add_section('vw_tour_lite_social_section',array(
        'title' => __('Social Links','vw-tour-lite'),
        'description'   => '',
        'panel' => 'vw_tour_lite_panel_id',
    ));
	
	$wp_customize->add_setting('vw_tour_lite_facebook_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	
	$wp_customize->add_control('vw_tour_lite_facebook_url',array(
		'label'	=> __('Facebook URL','vw-tour-lite'),
		'section'	=> 'vw_tour_lite_social_section',
		'type'		=> 'text'
	));
	
	$wp_customize->add_setting('vw_tour_lite_twitter_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	
	$wp_customize->add_control('vw_tour_lite_twitter_url',array(
		'label'	=> __('Twitter URL','vw-tour-lite'),
		'section'	=> 'vw_tour_lite_social_section',
		'type'		=> 'text'
	));
	
	$wp_customize->add_setting('vw_tour_lite_rss_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	
	$wp_customize->add_control('vw_tour_lite_rss_url',array(
		'label'	=> __('RSS URL','vw-tour-lite'),
		'section'	=> 'vw_tour_lite_social_section',
		'type'		=> 'text'
	));
	
	$wp_customize->add_setting('vw_tour_lite_youtube_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	
	$wp_customize->add_control('vw_tour_lite_youtube_url',array(
		'label'	=> __('Youtube URL','vw-tour-lite'),
		'section'	=> 'vw_tour_lite_social_section',
		'type'		=> 'text'
	));

	$wp_customize->add_section('slider_section',array(
		'title'	=> __('Slider Settings','vw-tour-lite'),
		'description'	=> __('Add slider images here.','vw-tour-lite'),
		'priority'	=> null,
		'panel' => 'vw_tour_lite_panel_id',
	));

	$wp_customize->add_setting('slide_number',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));	

	$wp_customize->add_control('slide_number',array(
		'label'	=> __('Number of slide to show','vw-tour-lite'),
		'section'	=> 'slider_section',
		'type'		=> 'number'
	));

	$count =  get_theme_mod('slide_number', 3);

	for($i=1;$i<=$count;$i++) {

		$wp_customize->add_setting('slide_image'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'esc_url_raw',
		));		

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'slide_image'.$i,array(
            'label' => __('Slide Image ','vw-tour-lite').$i.__(' (1440x700)','vw-tour-lite'),
            'section' => 'slider_section',
            'settings' => 'slide_image'.$i
		)));

		$wp_customize->add_setting('slide_title'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field',

		));		

		$wp_customize->add_control('slide_title'.$i,array(
			'label'	=> __('Slide Title ','vw-tour-lite').$i,
			'section'	=> 'slider_section',
			'type'	=> 'text'
		));		

		$wp_customize->add_setting('slide_desc'.$i,array(
			'default'	=>'',
			'sanitize_callback'	=> 'wp_kses_post',
		));		

		$wp_customize->add_control('slide_desc'.$i,array(
			'label' => __('Slide Description ','vw-tour-lite').$i,
			'section' => 'slider_section',
			'setting'	=> 'slide_desc'.$i,
			'type'	=> 'textarea'

		));	

		$wp_customize->add_setting('slide_link'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'esc_url_raw',
		));	

		$wp_customize->add_control('slide_link'.$i,array(
			'label'	=> __('Slide Link ','vw-tour-lite').$i,
			'section'	=> 'slider_section',
			'type'		=> 'text'
		));
	}

	//OUR services
	$wp_customize->add_section('vw_tour_lite_our_services',array(
		'title'	=> __('Why Choose Us','vw-tour-lite'),
		'description'	=> __('Add homepage sections content here.','vw-tour-lite'),
		'panel' => 'vw_tour_lite_panel_id',
	));

	$wp_customize->add_setting('vw_tour_lite_service_number',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));	

	$wp_customize->add_control('vw_tour_lite_service_number',array(
		'label'	=> __('Number of Services to show','vw-tour-lite'),
		'section'	=> 'vw_tour_lite_our_services',
		'type'		=> 'number'
	));

	$wp_customize->add_setting('vw_tour_lite_main_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	

	$wp_customize->add_control('vw_tour_lite_main_title',array(
		'label'	=> __('Title','vw-tour-lite'),
		'section'	=> 'vw_tour_lite_our_services',
		'setting'	=> 'vw_tour_lite_main_title',
		'type'		=> 'text'
	));

	$service_number_count =  get_theme_mod('vw_tour_lite_service_number', 3);

	for($i=1;$i<=$service_number_count;$i++) {

		$wp_customize->add_setting('vw_tour_lite_service_image'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'esc_url_raw',

		));		

		$wp_customize->add_control(
		    new WP_Customize_Image_Control(
		        $wp_customize,
		        'vw_tour_lite_service_image'.$i,array(
		            'label' => __('Service image ','vw-tour-lite'),
		            'section' => 'vw_tour_lite_our_services',
		            'settings' => 'vw_tour_lite_service_image'.$i
		)));

		$wp_customize->add_setting('vw_tour_lite_service_title'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field',
		));		

		$wp_customize->add_control('vw_tour_lite_service_title'.$i,array(
			'label'	=> __('service Name ','vw-tour-lite'),
			'section'	=> 'vw_tour_lite_our_services',
			'type'	=> 'text'
		));

		$wp_customize->add_setting('vw_tour_lite_service_subcontent'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'wp_kses_post',
		));		

		$wp_customize->add_control('vw_tour_lite_service_subcontent'.$i,array(
			'label'	=> __('Content','vw-tour-lite'),
			'section'	=> 'vw_tour_lite_our_services',
			'type'	=> 'textarea'
		));
	}

	/*Contact Us*/
	$wp_customize->add_section('vw_tour_lite_contact_us',array(
		'title'	=> __('Contact Us','vw-tour-lite'),
		'description'	=> __('Add contact page sections content here.','vw-tour-lite'),
		'panel' => 'vw_tour_lite_panel_id'
	));
	
	$wp_customize->add_setting('vw_tour_lite_our_address',array(
		'default'	=> '',
		'sanitize_callback'	=> 'wp_kses_post'
	));
	
	$wp_customize->add_control('vw_tour_lite_our_address',array(
		'label'	=> __('Add Address here.','vw-tour-lite'),
		'section'	=> 'vw_tour_lite_contact_us',
		'setting'	=> 'vw_tour_lite_our_address',
		'type'		=> 'textarea'
	));
	$wp_customize->add_setting('vw_tour_lite_contact',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('vw_tour_lite_contact',array(
		'label'	=> __('Add Number here.','vw-tour-lite'),
		'section'	=> 'vw_tour_lite_contact_us',
		'setting'	=> 'vw_tour_lite_contact',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('vw_tour_lite_email',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('vw_tour_lite_email',array(
		'label'	=> __('Add Email address here.','vw-tour-lite'),
		'section'	=> 'vw_tour_lite_contact_us',
		'setting'	=> 'vw_tour_lite_email',
		'type'		=> 'text'
	));

	/*footer*/
	$wp_customize->add_section('vw_tour_lite_footer_section',array(
		'title'	=> __('Footer Text','vw-tour-lite'),
		'description'	=> __('Add some text for footer like copyright etc.','vw-tour-lite'),
		'priority'	=> null,
		'panel' => 'vw_tour_lite_panel_id'
	));
	
	$wp_customize->add_setting('vw_tour_lite_footer_copy',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	
	$wp_customize->add_control('vw_tour_lite_footer_copy',array(
		'label'	=> __('Copyright Text','vw-tour-lite'),
		'section'	=> 'vw_tour_lite_footer_section',
		'type'		=> 'text'
	));

}
add_action( 'customize_register', 'vw_tour_lite_customize_register' );


/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function vw_tour_lite_customize_preview_js() {
	wp_enqueue_script( 'vw_tour_lite_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'vw_tour_lite_customize_preview_js' );

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class vw_tour_lite_customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		require_once( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'vw_tour_lite_customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new vw_tour_lite_customize_Section_Pro(
				$manager,
				'example_1',
				array(
					'title'    => esc_html__( 'VW Tour Pro Theme', 'vw-tour-lite' ),
					'pro_text' => esc_html__( 'Go Pro', 'vw-tour-lite' ),
					'pro_url'  => 'http://www.vwthemes.com/product/vw-tour-theme/'
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'vw-tour-lite-customize-controls', trailingslashit( get_template_directory_uri() ) . '/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'vw-tour-lite-customize-controls', trailingslashit( get_template_directory_uri() ) . '/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
vw_tour_lite_customize::get_instance();