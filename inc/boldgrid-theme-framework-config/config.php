<?php
function boldgrid_theme_framework_config( $boldgrid_framework_configs ) {

	// Text domain.
	$boldgrid_framework_configs['theme_name'] = 'boldgrid-lattice';

	// Enable sticky footer.
	$boldgrid_framework_configs['scripts']['boldgrid-sticky-footer'] = true;

	// Enable typography controls.
	$boldgrid_framework_configs['customizer-options']['typography']['enabled'] = true;

	// Enable attribution links.
	$boldgrid_framework_configs['temp']['attribution_links'] = true;

	// Enable template wrapper.
	$boldgrid_framework_configs['boldgrid-parent-theme'] = true;

	// Specify the parent theme's name.
	$boldgrid_framework_configs['parent-theme-name'] = 'prime';

	// Assign locations for generic header.
	$boldgrid_framework_configs['template']['locations']['header'] = array(
		'1' => array( '[menu]secondary' ),
		'5' => array( '[menu]tertiary' ),
		'6' => array( '[action]boldgrid_site_identity' ),
		'7' => array( '[menu]social' ),
		'8' => array( '[action]boldgrid_primary_navigation' ),
		'9' => array( '[widget]boldgrid-widget-1' ),
		'10' => array( '[widget]boldgrid-widget-2' ),
	);

	// Assign locations for generic footer.
	$boldgrid_framework_configs['template']['locations']['footer'] = array(
		'1' => array( '[menu]footer_center' ),
		'8' => array( '[widget]boldgrid-widget-3' , '[action]boldgrid_display_contact_block' ),
		'11' => array( '[action]boldgrid_display_attribution_links' ),
	);

	// Menu Locations.
	$boldgrid_framework_configs['menu']['locations'] = array(
		'primary' => 'Primary Menu',
		'secondary' => 'Header Top Left',
		'tertiary' => 'Header Top Center',
		'social' => 'Header Right',
		'footer_center' => 'Footer Center',
	);

	// Name Widget Areas.
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-1']['name'] = 'Header Left';
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-2']['name'] = 'Header Right';


	 // Customizer Configs
	$boldgrid_framework_configs['customizer-options']['colors']['enabled'] = true;
	$boldgrid_framework_configs['customizer-options']['colors']['defaults'] = array (
		array (
			'default' => true,
			'format' => 'palette-primary',
			'neutral-color' => '#f2f0ea',
			'colors' => array(
				'#c95c62',
				'#73956f',
				'#ffffff',
				'#ffffff',
				'#333333',
			),
		),	
		array (
			'format' => 'palette-primary',
			'neutral-color' => '#302f4d',
			'colors' => array(
				'#ffe5d9',
				'#c7dfc5',
				'#9590a8',
				'#9590a8',
				'#e5e5e5',
			),
		),
		array (
			'format' => 'palette-primary',
			'neutral-color' => '#022b3a',
			'colors' => array(
				'#bfdbf7',
				'#e5d4c0',
				'#006e71',
				'#006e71',
				'#ffffff',
			),
		),
		array (
			'format' => 'palette-primary',
			'neutral-color' => '#3d3d3d',
			'colors' => array(
				'#87bcde',
				'#99d5c9',
				'#545454',
				'#545454',
				'#ffffff',
			),
		),
		array (
			'format' => 'palette-primary',
			'neutral-color' => '#000000',
			'colors' => array(
				'#d5ac4e',
				'#ff331f',
				'#191919',
				'#191919',
				'#ffffff',
			),
		),
	);

	// Override customizer options per subcategory.
	switch ( $boldgrid_framework_configs['inspiration']['subcategory_key'] ) {
		case 'Fitness':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][1]['default'] = true;
			break;
		case 'Real Estate':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][1]['default'] = true;
			break;
		case 'Consulting':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][2]['default'] = true;
			break;
		case 'Marketing':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][2]['default'] = true;
			break;
		case 'Design':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][3]['default'] = true;
			break;
		case 'Photography':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][3]['default'] = true;
			break;
		case 'Music':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][4]['default'] = true;
			break;
		case 'Restaurant':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][4]['default'] = true;
			break;

	// Default
		default:
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][0]['default'] = true;
			break;
	}

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


// Site Title & Logo Controls
function filter_logo_controls( $controls ) {
	$controls['logo_font_family']['default'] = 'Julius Sans One';
	$controls['logo_font_size']['default'] = 50;
	$controls['logo_margin_top']['default'] = 5;
	$controls['logo_margin_bottom']['default'] = 10;
	$controls['logo_margin_left']['default'] = 0;
	$controls['logo_line_height']['default'] = 100;
	$controls['logo_letter_spacing']['default'] = 1;
	$controls['logo_text_transform']['default'] = 'none';

	// Controls above will override framework defaults
	return $controls;
}
add_filter( 'kirki/fields', 'filter_logo_controls' );