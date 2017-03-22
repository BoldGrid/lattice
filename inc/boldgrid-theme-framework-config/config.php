<?php
function boldgrid_theme_framework_config( $boldgrid_framework_configs ) {

	// Text domain.
	$boldgrid_framework_configs['theme_name'] = 'boldgrid-lattice';

	// Enable Sticky Footer.
	$boldgrid_framework_configs['scripts']['boldgrid-sticky-footer'] = true;

	// Enable typography controls.
	$boldgrid_framework_configs['customizer-options']['typography']['enabled'] = true;

	// Enable attribution links.
	$boldgrid_framework_configs['temp']['attribution_links'] = true;

	// Enable template wrapper.
	$boldgrid_framework_configs['boldgrid-parent-theme'] = true;

	define('BOLDGRID_THEME_HELPER_SCSS_COMPILE', true);

	// Specify the parent theme's name.
	$boldgrid_framework_configs['parent-theme-name'] = 'prime';

	// Background. Need to change before release
	$boldgrid_framework_configs['customizer-options']['background']['defaults']['background_image'] = false;

	// Select the header template to use.
	$boldgrid_framework_configs['template']['header'] = 'generic';

	// Assign Locations for Generic Header.
	$boldgrid_framework_configs['template']['locations']['header'] = array(
		'1' => array( '[menu]secondary' ),
		'5' => array( '[menu]tertiary' ),
		'6' => array( '[action]boldgrid_site_identity' ),
		'7' => array( '[menu]social' ),
		'8' => array( '[action]boldgrid_primary_navigation' ),
		'9' => array( '[widget]boldgrid-widget-1' ),
		'10' => array( '[widget]boldgrid-widget-2' ),
	);

	// Select the footer template to use.
	$boldgrid_framework_configs['template']['footer'] = 'generic';

	// Assign Locations for Generic Footer.
	$boldgrid_framework_configs['template']['locations']['footer'] = array(
		'1' => array( '[menu]footer_center' ),
		'11' => array( '[widget]boldgrid-widget-3', '[action]boldgrid_display_attribution_links' ),
	);

	// Menu Locations.
	$boldgrid_framework_configs['menu']['locations']['primary'] = "Main Menu";
	$boldgrid_framework_configs['menu']['locations']['social'] = 'Right of Site Title';
	$boldgrid_framework_configs['menu']['locations']['secondary'] = 'Above Site Title - Left';
	$boldgrid_framework_configs['menu']['locations']['tertiary'] = 'Above Site Title - Center';
	$boldgrid_framework_configs['menu']['locations']['footer_center'] = 'Footer Center';

	// Name Widget Areas.
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-1']['name'] = 'Below Site Title - Left';
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-2']['name'] = 'Below Site Title - Right';

	/**
	 * Customizer Configs
	 */
	$boldgrid_framework_configs['customizer-options']['colors']['enabled'] = true;
	$boldgrid_framework_configs['customizer-options']['colors']['defaults'] = array (
		array (
			'default' => true,
			'format' => 'palette-primary',
			'colors' => array(
				'#c7dfc5',
				'#ffe5d9',
				'#9590a8',
				'#302f4d',
				'#e5e5e5',
				'#9590a8',
			)
		),	
		array (
			'format' => 'palette-primary',
			'colors' => array(
				'#73956f',
				'#c95c62',
				'#ffffff',
				'#f2f0ea',
				'#333333',
				'#ffffff',
			)
		),			
		array (
			'format' => 'palette-primary',
			'colors' => array(
				'#e5d4c0',
				'#bfdbf7',
				'#006e71',
				'#022b3a',
				'#ffffff',
				'#006e71',
			)
		),
		array (
			'format' => 'palette-primary',
			'colors' => array(
				'#99d5c9',
				'#87bcde',
				'#545454',
				'#3d3d3d',
				'#ffffff',
				'#545454',
			)
		),
		array (
			'format' => 'palette-primary',
			'colors' => array(
				'#ff331f',
				'#d5ac4e',
				'#191919',
				'#000000',
				'#ffffff',
				'#191919',
			)
		),
	);

	// Text Contrast Colors.
	$boldgrid_framework_configs['customizer-options']['colors']['light_text'] = '#ffffff';
	$boldgrid_framework_configs['customizer-options']['colors']['dark_text'] = '#333333';

	// Typography Headings.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_font_family'] = 'Josefin Slab';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_font_size'] = 20;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_text_transform'] = 'none';

	// Typography Alternate Headings.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_font_family'] = 'Josefin Slab';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_font_size'] = 13;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_text_transform'] = 'none';

	// Typography Navigation.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_font_family'] = 'Josefin Sans';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_font_size'] = 15;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_text_transform'] = 'uppercase';

	// Typography Body.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_font_family'] = 'Open Sans';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_font_size'] = 16;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_line_height'] = 200;

	// Typography Tagline Classes.
	$boldgrid_framework_configs['template']['tagline-classes'] = 'h3 alt-font';

	// Icons.
	$boldgrid_framework_configs['social-icons']['size'] = 'large';
	$boldgrid_framework_configs['social-icons']['type'] = 'icon-sign';

	// Configs above will override framework defaults
	return $boldgrid_framework_configs;
}
add_filter( 'boldgrid_theme_framework_config', 'boldgrid_theme_framework_config' );

/**
 * Site Title & Logo Controls
 */
function filter_logo_controls( $controls ) {
	$controls['logo_font_family']['default'] = 'Julius Sans One';
	$controls['logo_font_size']['default'] = 50;
	$controls['logo_margin_top']['default'] = 20;
	$controls['logo_margin_bottom']['default'] = 0;
	$controls['logo_margin_left']['default'] = 0;
	$controls['logo_line_height']['default'] = 100;
	$controls['logo_letter_spacing']['default'] = 1;
	$controls['logo_text_transform']['default'] = 'none';

	// Controls above will override framework defaults
	return $controls;
}
add_filter( 'kirki/fields', 'filter_logo_controls' );
