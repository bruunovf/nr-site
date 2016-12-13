<?php
/**
 * Site General
 * ================
 */
$section  = 'site_breadcrumb';
$priority = 1;

Kirki::add_field( 'saturnthemes', array(
    'type'        => 'toggle',
    'setting'     => 'site_breadcrumb_enable',
    'label'       => esc_html__( 'Show Breadcrumb', 'saturnthemes-industry' ),
    'description' => esc_html__( 'Enabling this option will display breadcrumb', 'saturnthemes-industry' ),
    'section'     => $section,
    'priority'    => $priority++,
    'default'     => 1,
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'text',
	'setting'  => 'breadcrumb_home_text',
	'label'    => esc_html( __( '"Home" text', 'saturnthemes-industry' ) ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => 'Home',
	'required' => array(
		array(
			'setting'  => 'site_breadcrumb_enable',
			'operator' => '==',
			'value'    => 1,
		),
	),
) );

Kirki::add_field( 'saturnthemes', array(
	'type'        => 'image',
	'setting'     => 'breadcrumb_background_image',
	'label'       => esc_html__( 'Background Image', 'saturnthemes-industry' ),
	'description' => esc_html__( 'Choose a default image to display', 'saturnthemes-industry' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 'http://industry.saturnthemes.com/images/breadcrumb-bg-default.jpg',
) );

Kirki::add_field( 'saturnthemes', array(
	'type'      => 'editor',
	'setting'   => 'page_title_call_to_action',
	'label'     => esc_html__( 'Call to action button', 'saturnthemes-industry' ),
	'section'   => $section,
	'priority'  => $priority++,
	'default'   => esc_html__( '
						<a class="cta-button" href="#">
							<div class="icon-box icon-left">
								<span class="icon-box-icon">
									<i class="fa fa-building-o"></i>
								</span>
								<div class="icon-box-content">
									<p>Don’t Hesitate To Ask</p>
									<h3>Request A Quick Quote</h3>
								</div>
							</div>
						</a>
                ', 'saturnthemes-industry' ),
	'transport' => 'postMessage',
) );