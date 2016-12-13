<?php
$section  = 'header_contact_details';
$priority = 1;

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'toggle',
	'setting'  => 'header_contact_details_show',
	'label'    => esc_html__( 'Show Contact Details', 'saturnthemes-industry' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default' => 0,
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'legend',
	'setting'  => 'header_contact_details_legend',
	'label'    => esc_html__( 'Details', 'saturnthemes-industry' ),
	'section'  => $section,
	'priority' => $priority ++,
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'repeater',
	'section'  => $section,
	'priority' => $priority ++,
	'settings' => 'header_contact_details',
	'default'  => array(
		array(
			'title'       => esc_html__( 'Call Us:', 'saturnthemes-industry' ),
			'icon'        => 'fa-phone',
			'information' => '(+44) 555 890767',
			'url'         => '',
		),
		array(
			'title'       => esc_html__( 'Mail Us:', 'saturnthemes-industry' ),
			'icon'        => 'fa-envelope-o',
			'information' => 'info@saturnthemes.com',
			'url'         => 'mailto://info@saturnthemes.com',
		),
	),
	'fields'   => array(
		'title'       => array(
			'type'    => 'text',
			'label'   => esc_html__( 'Title', 'saturnthemes-industry' ),
			'default' => '',
		),
		'icon'        => array(
			'type'    => 'text',
			'label'   => esc_html__( 'Icon Class', 'saturnthemes-industry' ),
			'default' => 'fa fa-phone',
		),
		'information' => array(
			'type'    => 'text',
			'label'   => esc_html__( 'Information', 'saturnthemes-industry' ),
			'default' => '',
		),
		'url'         => array(
			'type'    => 'text',
			'label'   => esc_html__( 'URL', 'saturnthemes-industry' ),
			'default' => '#',
		),
	),
) );