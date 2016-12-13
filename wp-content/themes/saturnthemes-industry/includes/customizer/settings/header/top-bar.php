<?php
$section  = 'header_top_bar';
$priority = 1;

Kirki::add_field( 'saturnthemes', array(
	'type'      => 'editor',
	'setting'   => 'header_contact_info',
	'label'     => esc_html__( 'Contact Info', 'saturnthemes-industry' ),
	'section'   => $section,
	'priority'  => $priority++,
	'default'   => esc_html__( '<ul class="header-contact-info">
                    <li>
                        <i class="fa fa-phone"></i><span>(+44) 555 890767</span>
                    </li>
                    <li>
                        <i class="fa fa-map-marker"></i><span>Washington, DC 20002, US</span>
                    </li>
                    <li>
                        <i class="fa fa-envelope-o"></i><span>info@saturnthemes.com</span>
                    </li>
                </ul>', 'saturnthemes-industry' ),
	'transport' => 'postMessage',
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'text',
	'settings' => 'header_top_bar_button',
	'label'    => esc_html__( 'Text Button', 'saturnthemes-industry' ),
	'section'  => $section,
	'priority' => $priority++,
	'default'  => esc_attr__( 'Get a quote', 'saturnthemes-industry' ),
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'text',
	'settings' => 'header_top_bar_link_button',
	'label'    => esc_html__( 'Link Button', 'saturnthemes-industry' ),
	'section'  => $section,
	'priority' => $priority++,
	'default'  => esc_attr__( '#', 'saturnthemes-industry' ),
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'color-alpha',
	'setting'  => 'header_top_bar_bg',
	'label'    => esc_html__( 'Top Bar BG', 'saturnthemes-industry' ),
	'section'  => $section,
	'priority' => $priority++,
	'default'  => SECONDARY_COLOR,
	'output'   => array(
		array(
			'element'  => '.site-topbar',
			'property' => 'background-color',
		),
	)
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'color',
	'setting'  => 'header_top_bar_color',
	'label'    => esc_html__( 'Text Color', 'saturnthemes-industry' ),
	'section'  => $section,
	'priority' => $priority++,
	'default'  => '#FFF',
	'output'   => array(
		array(
			'element'  => '.site-topbar,.site-topbar .link-title',
			'property' => 'color',
		)
	),
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'color',
	'setting'  => 'header_top_bar_button_bg',
	'label'    => esc_html__( 'Button BG', 'saturnthemes-industry' ),
	'section'  => $section,
	'priority' => $priority++,
	'default'  => '#000',
	'output'   => array(
		array(
			'element'  => '.site-topbar .btn, .site-topbar .btn:after',
			'property' => 'background-color',
		)
	),
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'color',
	'setting'  => 'header_top_bar_button_color',
	'label'    => esc_html__( 'Button Color', 'saturnthemes-industry' ),
	'section'  => $section,
	'priority' => $priority++,
	'default'  => '#FFF',
	'output'   => array(
		array(
			'element'  => '.site-topbar .btn .link-title',
			'property' => 'color',
		)
	),
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'color',
	'setting'  => 'header_top_bar_button_icon',
	'label'    => esc_html__( 'Icon Button Color', 'saturnthemes-industry' ),
	'section'  => $section,
	'priority' => $priority++,
	'default'  => PRIMARY_COLOR,
	'output'   => array(
		array(
			'element'  => '.site-topbar .btn i.fa',
			'property' => 'color',
		)
	),
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'color',
	'setting'  => 'header_top_bar_border_bottom_button',
	'label'    => esc_html__( 'Border Bottom Button Color', 'saturnthemes-industry' ),
	'section'  => $section,
	'priority' => $priority++,
	'default'  => PRIMARY_COLOR,
	'output'   => array(
		array(
			'element'  => '.site-topbar .btn:after',
			'property' => 'background-color',
		)
	),
) );

