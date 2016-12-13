<?php
$section  = 'footer_general';
$priority = 1;

Kirki::add_field( 'saturnthemes', array(
    'type'        => 'radio',
    'setting'     => 'footer_type',
    'label'       => esc_html__( 'Footer Type', 'saturnthemes-industry' ),
    'description' => esc_html__( 'Choose the footer type you want', 'saturnthemes-industry' ),
    'section'     => $section,
    'priority'    => $priority++,
    'default'     => 'footer-01',
    'choices'     => array(
        'footer-01' => 'Type 01',
    ),
) );

Kirki::add_field( 'saturnthemes', array(
    'type'        => 'toggle',
    'setting'     => 'footer_back_to_top_enable',
    'label'       => esc_html__( 'Show Back to Top', 'saturnthemes-industry' ),
    'description' => esc_html__( 'Enabling this option will display Back to Top', 'saturnthemes-industry' ),
    'section'     => $section,
    'priority'    => $priority++,
    'default'     => 1,
) );

Kirki::add_field('saturnthemes', array(
    'type'        => 'color',
    'setting'     => 'footer_background_color',
    'label'       => esc_html__('Background Color', 'saturnthemes-industry'),
    'section'     => $section,
    'priority'    => $priority ++,
    'transport' => 'postMessage',
    'default'   => '#333',
    'output' => array(
        array(
            'element'  => '.site-footer',
            'property' => 'background-color',
        ),
    ),
));

Kirki::add_field('saturnthemes', array(
    'type'        => 'color',
    'setting'     => 'footer_heading_color',
    'label'       => esc_html__('Title Color', 'saturnthemes-industry'),
    'section'     => $section,
    'priority'    => $priority ++,
    'transport' => 'postMessage',
    'default'   => '#FFF',
    'output' => array(
        array(
            'element'  => '.site-footer .widget-title, .site-footer .widget_recent_entries a',
            'property' => 'color',
        )
    ),
));

Kirki::add_field('saturnthemes', array(
    'type'        => 'color',
    'setting'     => 'footer_color',
    'label'       => esc_html__('Text Color', 'saturnthemes-industry'),
    'section'     => $section,
    'priority'    => $priority ++,
    'transport' => 'postMessage',
    'default'   => BODY_TEXT_COLOR,
    'output' => array(
        array(
            'element'  => '.site-footer, .site-footer a',
            'property' => 'color',
        )
    ),
));

Kirki::add_field('saturnthemes', array(
    'type'        => 'color',
    'setting'     => 'footer_link_color',
    'label'       => esc_html__('Link Color Hover', 'saturnthemes-industry'),
    'section'     => $section,
    'priority'    => $priority ++,
    'transport' => 'postMessage',
    'default'   => '#FFF',
    'output' => array(
        array(
            'element'  => '.site-footer a:hover',
            'property' => 'color',
        )
    ),
));

Kirki::add_field('saturnthemes', array(
    'type'        => 'color',
    'setting'     => 'footer_border_color',
    'label'       => esc_html__('Border Color', 'saturnthemes-industry'),
    'section'     => $section,
    'priority'    => $priority ++,
    'transport' => 'postMessage',
    'default'   => '#454545',
    'output' => array(
        array(
            'element'  => '.footer-bottom, .footer-widget-container .menu > li, .site-footer .widget_recent_entries ul li',
            'property' => 'border-color',
        ),
    ),
));

Kirki::add_field('saturnthemes', array(
    'type'        => 'color',
    'setting'     => 'footer_social_bg',
    'label'       => esc_html__('Social Icon BG', 'saturnthemes-industry'),
    'section'     => $section,
    'priority'    => $priority ++,
    'transport' => 'postMessage',
    'default'   => '#000',
    'output' => array(
        array(
            'element'  => '.footer-bottom .social-links li a',
            'property' => 'background-color',
        ),
    ),
));

Kirki::add_field('saturnthemes', array(
    'type'        => 'color',
    'setting'     => 'footer_social_bg_hover',
    'label'       => esc_html__('Social Icon Hover BG', 'saturnthemes-industry'),
    'section'     => $section,
    'priority'    => $priority ++,
    'transport' => 'postMessage',
    'default'   => PRIMARY_COLOR,
    'output' => array(
        array(
            'element'  => '.footer-bottom .social-links li a:hover',
            'property' => 'background-color',
        ),
    ),
));

Kirki::add_field('saturnthemes', array(
    'type'        => 'color',
    'setting'     => 'footer_social_color',
    'label'       => esc_html__('Social Icon Color', 'saturnthemes-industry'),
    'section'     => $section,
    'priority'    => $priority ++,
    'transport' => 'postMessage',
    'default'   => '#888',
    'output' => array(
        array(
            'element'  => '.footer-bottom .social-links li a',
            'property' => 'color',
        ),
    ),
));

Kirki::add_field('saturnthemes', array(
    'type'        => 'color',
    'setting'     => 'footer_social_color_hover',
    'label'       => esc_html__('Social Icon Hover Color', 'saturnthemes-industry'),
    'section'     => $section,
    'priority'    => $priority ++,
    'transport' => 'postMessage',
    'default'   => '#FFF',
    'output' => array(
        array(
            'element'  => '.footer-bottom .social-links li a:hover',
            'property' => 'color',
        ),
    ),
));
