<?php
/**
 * Defines customizer options
 *
 * @package Customizer Library Satori
 */

function customizer_library_satori_options() {
	
	$primary_color = '#8E7A50';
	$secondary_color = '#675738';
	
	$body_font_color = '#3C3C3C';
	$heading_font_color = '#000000';

	// Stores all the controls that will be added
	$options = array();

	// Stores all the sections to be added
	$sections = array();

	// Stores all the panels to be added
	$panels = array();

	// Adds the sections to the $options array
	$options['sections'] = $sections;
    
	
	// Site Layout Options
	$section = 'satori-site-layout-section';

	$sections[] = array(
		'id' => $section,
		'title' => __( 'Layout Options', 'satori' ),
		'priority' => '30'
	);
    
    
    $options['satori-banner-titles'] = array(
        'id' => 'satori-banner-titles',
        'label'   => __( 'Remove Banner Titles', 'satori' ),
        'section' => $section,
        'type'    => 'checkbox',
        'description' => __( 'Select this box to hide the page titles in the top banner on pages', 'satori' ),
        'default' => 0,
    );
    $options['satori-content-titles'] = array(
        'id' => 'satori-content-titles',
        'label'   => __( 'Remove Content Titles', 'satori' ),
        'section' => $section,
        'type'    => 'checkbox',
        'description' => __( 'Select this box to hide the page titles in the content area', 'satori' ),
        'default' => 0,
    );
	
	
	// Header Layout Options
	$section = 'satori-header-section';

	$sections[] = array(
		'id' => $section,
		'title' => __( 'Header Options', 'satori' ),
		'priority' => '30'
	);
	
    $choices = array(
        'satori-header-layout-one' => __( 'Header Layout One', 'satori' ),
        'satori-header-layout-two' => __( 'Header Layout Two', 'satori' )
    );
    $options['satori-header-layout'] = array(
        'id' => 'satori-header-layout',
        'label'   => __( 'Header Layout', 'satori' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'satori-header-layout-one'
    );
    $choices = array(
        'satori-navigation-down' => __( 'Downwards', 'satori' ),
        'satori-navigation-up' => __( 'Upwards', 'satori' )
    );
    $options['satori-navigation-up-down'] = array(
        'id' => 'satori-navigation-up-down',
        'label'   => __( 'Navigation Direction', 'satori' ),
        'section' => $section,
        'type'    => 'radio',
        'choices' => $choices,
        'default' => 'satori-navigation-down'
    );
	$options['satori-header-menu-text'] = array(
		'id' => 'satori-header-menu-text',
		'label'   => __( 'Menu Button Text', 'satori' ),
		'section' => $section,
		'type'    => 'text',
		'default' => 'menu',
		'description' => __( 'This is the text for the mobile menu button', 'satori' )
	);
	$options['satori-header-search'] = array(
        'id' => 'satori-header-search',
        'label'   => __( 'Hide Search', 'satori' ),
        'section' => $section,
        'type'    => 'checkbox',
        'description' => __( 'Select this box to hide the site search', 'satori' ),
        'default' => 0,
    );
    $options['satori-remove-phone'] = array(
        'id' => 'satori-remove-phone',
        'label'   => __( 'Remove Phone Number', 'satori' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    
    if ( satori_is_woocommerce_activated() ) :
        
        $options['satori-header-cart'] = array(
            'id' => 'satori-header-cart',
            'label'   => __( 'Remove WooCommerce Cart', 'satori' ),
            'section' => $section,
            'type'    => 'checkbox',
            'default' => 0,
        );
    
    endif;
    
    
    // Slider Settings
    $section = 'satori-slider-section';

    $sections[] = array(
        'id' => $section,
        'title' => __( 'Slider Options', 'satori' ),
        'priority' => '35'
    );
    
    $choices = array(
        'satori-slider-default' => __( 'Default Slider', 'satori' ),
        'satori-meta-slider' => __( 'Slider Shortcode', 'satori' ),
        'satori-no-slider' => __( 'None', 'satori' )
    );
    $options['satori-slider-type'] = array(
        'id' => 'satori-slider-type',
        'label'   => __( 'Choose a Slider', 'satori' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'satori-no-slider'
    );
    $options['satori-slider-cats'] = array(
        'id' => 'satori-slider-cats',
        'label'   => __( 'Slider Categories', 'satori' ),
        'section' => $section,
        'type'    => 'text',
        'description' => __( 'Enter the ID\'s of the post categories you want to display in the slider. Eg: "13,17,19" (no spaces and only comma\'s)<br /><a href="http://kairaweb.com/support/topic/setting-up-the-default-slider/" target="_blank"><b>Follow instructions here</b></a>', 'satori' )
    );
    $options['satori-meta-slider-shortcode'] = array(
        'id' => 'satori-meta-slider-shortcode',
        'label'   => __( 'Slider Shortcode', 'satori' ),
        'section' => $section,
        'type'    => 'text',
        'description' => __( 'Enter the shortcode give by meta slider or any other slider', 'satori' )
    );
    $choices = array(
        'satori-slider-size-small' => __( 'Small Slider', 'satori' ),
        'satori-slider-size-medium' => __( 'Medium Slider', 'satori' ),
        'satori-slider-size-screen' => __( 'Screen Size Slider', 'satori' )
    );
    $options['satori-slider-size'] = array(
        'id' => 'satori-slider-size',
        'label'   => __( 'Slider Size', 'satori' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'description' => __( 'This sizing is also adjusted to the <b>Page Banner</b> to keep the pages looking the same', 'satori' ),
        'default' => 'satori-slider-size-medium'
    );


	// Colors
	$section = 'colors';

	$sections[] = array(
		'id' => $section,
		'title' => __( 'Colors', 'satori' ),
		'priority' => '80'
	);

	$options['satori-primary-color'] = array(
		'id' => 'satori-primary-color',
		'label'   => __( 'Primary Color', 'satori' ),
		'section' => $section,
		'type'    => 'color',
		'default' => $primary_color,
	);

	$options['satori-secondary-color'] = array(
		'id' => 'satori-secondary-color',
		'label'   => __( 'Secondary Color', 'satori' ),
		'section' => $section,
		'type'    => 'color',
		'default' => $secondary_color,
	);

	// Font Options
	$section = 'satori-typography-section';
	$font_choices = customizer_library_get_font_choices();

	$sections[] = array(
		'id' => $section,
		'title' => __( 'Font Options', 'satori' ),
		'priority' => '80'
	);

	$options['satori-body-font'] = array(
		'id' => 'satori-body-font',
		'label'   => __( 'Body Font', 'satori' ),
		'section' => $section,
		'type'    => 'select',
		'choices' => $font_choices,
		'default' => 'Open Sans'
	);
	$options['satori-body-font-color'] = array(
		'id' => 'satori-body-font-color',
		'label'   => __( 'Body Font Color', 'satori' ),
		'section' => $section,
		'type'    => 'color',
		'default' => $body_font_color,
	);

	$options['satori-heading-font'] = array(
		'id' => 'satori-heading-font',
		'label'   => __( 'Heading Font', 'satori' ),
		'section' => $section,
		'type'    => 'select',
		'choices' => $font_choices,
		'default' => 'Kaushan Script'
	);
	$options['satori-heading-font-color'] = array(
		'id' => 'satori-heading-font-color',
		'label'   => __( 'Heading Font Color', 'satori' ),
		'section' => $section,
		'type'    => 'color',
		'default' => $heading_font_color,
	);
	
	
	// Blog Settings
    $section = 'satori-blog-section';

    $sections[] = array(
        'id' => $section,
        'title' => __( 'Blog Options', 'satori' ),
        'priority' => '50'
    );
    
    $options['satori-blog-cats'] = array(
        'id' => 'satori-blog-cats',
        'label'   => __( 'Exclude Blog Categories', 'satori' ),
        'section' => $section,
        'type'    => 'text',
        'description' => __( 'Enter the ID\'s of the post categories you\'d like to EXCLUDE from the Blog, enter only the ID\'s with a minus sign (-) before them, separated by a comma (,)<br />Eg: "-13, -17, -19"<br />If you enter the ID\'s without the minus then it\'ll show ONLY posts in those categories.', 'satori' )
    );
	
	
	// Footer Settings
    $section = 'satori-footer-section';

    $sections[] = array(
        'id' => $section,
        'title' => __( 'Footer Layout Options', 'satori' ),
        'priority' => '85'
    );
    
    $options['satori-footer-bottombar'] = array(
        'id' => 'satori-footer-bottombar',
        'label'   => __( 'Remove the Bottom Bar', 'satori' ),
        'section' => $section,
        'type'    => 'checkbox',
        'description' => __( 'Click this to hide the bottom bar of the footer', 'satori' ),
        'default' => 0,
    );
	
	
	// Site Text Settings
    $section = 'satori-website-section';

    $sections[] = array(
        'id' => $section,
        'title' => __( 'Website Text', 'satori' ),
        'priority' => '50'
    );
    
    $options['satori-website-site-add'] = array(
        'id' => 'satori-website-site-add',
        'label'   => __( 'Header Address', 'satori' ),
        'section' => $section,
        'type'    => 'text',
        'default' => __( 'Cape Town, South Africa', 'satori' ),
        'description' => __( 'This is the address in the header top bar and the social footer', 'satori' )
    );
    $options['satori-website-head-no'] = array(
        'id' => 'satori-website-head-no',
        'label'   => __( 'Header Phone Number', 'satori' ),
        'section' => $section,
        'type'    => 'text',
        'default' => __( 'Call Us: +2782 444 YEAH', 'satori' ),
        'description' => __( 'This is the phone number in the header top bar', 'satori' )
    );
    
    $options['satori-website-error-head'] = array(
        'id' => 'satori-website-error-head',
        'label'   => __( '404 Error Page Heading', 'satori' ),
        'section' => $section,
        'type'    => 'text',
        'default' => __( 'Oops! <span>404</span>', 'satori'),
        'description' => __( 'Enter the heading for the 404 Error page', 'satori' )
    );
    $options['satori-website-error-msg'] = array(
        'id' => 'satori-website-error-msg',
        'label'   => __( 'Error 404 Message', 'satori' ),
        'section' => $section,
        'type'    => 'textarea',
        'default' => __( 'It looks like that page does not exist. <br />Return home or try a search', 'satori'),
        'description' => __( 'Enter the default text on the 404 error page (Page not found)', 'satori' )
    );
    $options['satori-website-nosearch-msg'] = array(
        'id' => 'satori-website-nosearch-msg',
        'label'   => __( 'No Search Results', 'satori' ),
        'section' => $section,
        'type'    => 'textarea',
        'default' => __( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'satori'),
        'description' => __( 'Enter the default text for when no search results are found', 'satori' )
    );
	
	
	// Social Settings
    $section = 'satori-social-section';

    $sections[] = array(
        'id' => $section,
        'title' => __( 'Social Links', 'satori' ),
        'priority' => '80'
    );
    
    $options['satori-social-email'] = array(
        'id' => 'satori-social-email',
        'label'   => __( 'Email Address', 'satori' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['satori-social-skype'] = array(
        'id' => 'satori-social-skype',
        'label'   => __( 'Skype Name', 'satori' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['satori-social-linkedin'] = array(
        'id' => 'satori-social-linkedin',
        'label'   => __( 'LinkedIn', 'satori' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['satori-social-tumblr'] = array(
        'id' => 'satori-social-tumblr',
        'label'   => __( 'Tumblr', 'satori' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['satori-social-flickr'] = array(
        'id' => 'satori-social-flickr',
        'label'   => __( 'Flickr', 'satori' ),
        'section' => $section,
        'type'    => 'text',
    );
	

	// Adds the sections to the $options array
	$options['sections'] = $sections;

	// Adds the panels to the $options array
	$options['panels'] = $panels;

	$customizer_library = Customizer_Library::Instance();
	$customizer_library->add_options( $options );

	// To delete custom mods use: customizer_library_remove_theme_mods();

}
add_action( 'init', 'customizer_library_satori_options' );
