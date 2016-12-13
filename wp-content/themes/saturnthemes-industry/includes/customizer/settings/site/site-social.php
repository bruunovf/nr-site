<?php
/**
 * Top Social
 * ==============
 */
$section  = 'site_social';
$priority = 1;

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'text',
	'settings' => 'social_links_title',
	'label'    => esc_html__( 'Title', 'saturnthemes-industry' ),
	'section'  => $section,
	'priority' => $priority++,
	'default'  => esc_html__( 'Follow Us', 'saturnthemes-industry' ),
) );

Kirki::add_field( 'saturnthemes', array(
	'type'        => 'color-alpha',
	'setting'     => 'social_links_color',
	'label'       => esc_html__( 'Color', 'saturnthemes-industry' ),
	'description' => esc_html__( 'Choose color for social icon.', 'saturnthemes-industry' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '#888',
	'output'      => array(
		array(
			'element'  => '.social-links li a',
			'property' => 'color',
		),
		array(
			'element'  => '.social-links li a:after',
			'property' => 'background-color',
		),
	),
) );

Kirki::add_field( 'saturnthemes', array(
	'type'        => 'color-alpha',
	'setting'     => 'social_links_color_hover',
	'description' => esc_html__( 'Choose color for social icon on hover.', 'saturnthemes-industry' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '#FFF',
	'output'      => array(
		array(
			'element'  => '.social-links li a:hover',
			'property' => 'color',
		),
	),
) );

Kirki::add_field( 'saturnthemes', array(
	'type'        => 'repeater',
	'label'       => esc_html__( 'Social items', 'saturnthemes-industry' ),
	'description' => esc_html__( 'You can add/remove and sort your social network link in this section', 'saturnthemes-industry' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'settings'    => 'social_links',
	'default'     => array(
        array(
            'social_name' => esc_html__( 'Follow Us', 'saturnthemes-industry' ),
            'link_url'    => '',
        ),
		array(
			'social_name' => esc_html__( 'Facebook', 'saturnthemes-industry' ),
			'link_url'    => 'http://facebook.com',
		),
        array(
            'social_name' => esc_html__( 'Twitter', 'saturnthemes-industry' ),
            'link_url'    => 'http://twitter.com',
        ),
        array(
            'social_name' => esc_html__( 'Instagram', 'saturnthemes-industry' ),
            'link_url'    => 'https://www.instagram.com/',
        ),
        array(
            'social_name' => esc_html__( 'Vine', 'saturnthemes-industry' ),
            'link_url'    => 'https://vine.co/',
        ),

	),
	'fields'      => array(
		'social_name' => array(
			'type'    => 'text',
			'label'   => esc_html__( 'Name', 'saturnthemes-industry' ),
			'default' => '',
		),
		'link_url'    => array(
			'type'    => 'text',
			'label'   => esc_html__( 'URL', 'saturnthemes-industry' ),
			'default' => '',
		),
	),
) );