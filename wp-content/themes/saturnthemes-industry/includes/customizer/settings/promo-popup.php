<?php
$section  = 'promo_popup';
$priority = 1;

Kirki::add_field( 'saturnthemes', array(
	'type'        => 'toggle',
	'setting'     => 'promo_popup_show',
	'label'       => esc_html__( 'Show Promo Popup', 'saturnthemes-industry' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '0',
) );

Kirki::add_field( 'saturnthemes', array(
	'type'      => 'editor',
	'setting'   => 'promo_popup_content',
	'label'     => esc_html__( 'Popup Content', 'saturnthemes-industry' ),
	'section'   => $section,
	'priority'  => $priority++,
	'default'   => '',
) );

Kirki::add_field( 'saturnthemes', array(
	'type'        => 'textfield',
	'setting'     => 'promo_popup_width',
	'label'       => esc_html__( 'Popup Width (in px)', 'saturnthemes-industry' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => '700',
) );

Kirki::add_field( 'saturnthemes', array(
	'type'        => 'textfield',
	'setting'     => 'promo_popup_height',
	'label'       => esc_html__( 'Popup Height (in px)', 'saturnthemes-industry' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => '350',
) );

Kirki::add_field( 'saturnthemes', array(
	'type'      => 'color-alpha',
	'setting'   => 'promo_popup_background_color',
	'label'     => esc_html__( 'Popup Background Color', 'saturnthemes-industry' ),
	'section'   => $section,
	'priority'  => $priority++,
	'default'   => '',
) );

Kirki::add_field( 'saturnthemes', array(
	'type'      => 'image',
	'setting'   => 'promo_popup_background_image',
	'label'     => esc_html__( 'Popup Background Image', 'saturnthemes-industry' ),
	'section'   => $section,
	'priority'  => $priority++,
	'default'   => '',
) );

Kirki::add_field( 'saturnthemes', array(
	'type'      => 'select',
	'setting'   => 'promo_popup_background_repeat',
	'label'     => esc_html__( 'Popup Background Repeat', 'saturnthemes-industry' ),
	'section'   => $section,
	'priority'  => $priority++,
	'default'   => 'no-repeat',
	'choices' => array(
		'no-repeat' => esc_html__( 'No Repeat', 'saturnthemes-industry' ),
		'repeat'    => esc_html__( 'Repeat All', 'saturnthemes-industry' ),
		'repeat-x'  => esc_html__( 'Repeat Horizontally', 'saturnthemes-industry' ),
		'repeat-y'  => esc_html__( 'Repeat Vertically', 'saturnthemes-industry' ),
	),
	'required'    => array(
		array(
			'setting'  => 'promo_popup_background_image',
			'operator' => '!=',
			'value'    => '',
		),
	),
) );

Kirki::add_field( 'saturnthemes', array(
	'type'      => 'select',
	'setting'   => 'promo_popup_background_attachment',
	'label'     => esc_html__( 'Popup Background Attachment', 'saturnthemes-industry' ),
	'section'   => $section,
	'priority'  => $priority++,
	'default'   => 'fixed',
	'choices' => array(
		'fixed'  => esc_html__( 'Fixed', 'saturnthemes-industry' ),
		'scroll' => esc_html__( 'Scroll', 'saturnthemes-industry' ),
	),
	'required'    => array(
		array(
			'setting'  => 'promo_popup_background_image',
			'operator' => '!=',
			'value'    => '',
		),
	),
) );

Kirki::add_field( 'saturnthemes', array(
	'type'      => 'select',
	'setting'   => 'promo_popup_background_position',
	'label'     => esc_html__( 'Popup Background Position', 'saturnthemes-industry' ),
	'section'   => $section,
	'priority'  => $priority++,
	'default'   => 'left top',
	'choices' => array(
		'left top'      => esc_html__( 'left top', 'saturnthemes-industry' ),
		'left center'   => esc_html__( 'left center', 'saturnthemes-industry' ),
		'left center'   => esc_html__( 'left center', 'saturnthemes-industry' ),
		'left bottom'   => esc_html__( 'left bottom', 'saturnthemes-industry' ),
		'center top'    => esc_html__( 'center top', 'saturnthemes-industry' ),
		'center center' => esc_html__( 'center center', 'saturnthemes-industry' ),
		'center bottom' => esc_html__( 'center bottom', 'saturnthemes-industry' ),
		'right top'     => esc_html__( 'right top', 'saturnthemes-industry' ),
		'right center'  => esc_html__( 'right center', 'saturnthemes-industry' ),
		'right bottom'  => esc_html__( 'right bottom', 'saturnthemes-industry' ),
	),
	'required'    => array(
		array(
			'setting'  => 'promo_popup_background_image',
			'operator' => '!=',
			'value'    => '',
		),
	),
) );