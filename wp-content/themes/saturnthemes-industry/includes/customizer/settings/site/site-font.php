<?php
/**
 * Site General
 * ================
 */
$section  = 'site_font';
$priority = 1;

//Font
Kirki::add_field( 'saturnthemes', array(
    'type'     => 'typography',
    'setting'  => 'site_body_font',
    'label'    => esc_html__( 'Body', 'saturnthemes-industry' ),
    'section'  => $section,
    'priority' => $priority++,
    'default'  => array(
        'font-family'    => BODY_FONT_FAMILY,
        'font-size'      => '14px',
        'font-weight'    => '400',
        'line-height'    => '1.6',
    ),
    'choices'  => array(
        'font-style'     => false,
        'font-family'    => true,
        'font-size'      => true,
        'font-weight'    => true,
        'line-height'    => true,
    ),
    'output'   => array(
        array(
            'element' => 'body',
        ),

    ),
) );

Kirki::add_field( 'saturnthemes', array(
    'type'     => 'typography',
    'settings' => 'heading_font',
    'label'    => esc_html__( 'Heading Font', 'saturnthemes-industry' ),
    'section'  => $section,
    'priority' => $priority++,
    'default'  => array(
        'font-family'    => HEADING_FONT_FAMILY,
        'font-weight'    => '700',
        'line-height'    => '1.2',
        'letter-spacing' => '0em',
    ),
    'choices'  => array(
        'font-family'    => true,
        'font-size'      => false,
        'font-weight'    => true,
        'line-height'    => true,
        'letter-spacing' => true,
    ),
    'output'   => array(
        array(
            'element' => 'h1,h2,h3,h4,h5,h6',
        ),
        // VC Tab Headings
        array(
            'element' => '.vc_tta-tabs .vc_tta-tabs-container .vc_tta-tabs-list .vc_tta-tab > a'
        )
    ),
) );

Kirki::add_field( 'saturnthemes', array(
    'type'        => 'slider',
    'setting'     => 'h1_font_size',
    'label'       => esc_html__( 'Font size', 'saturnthemes-industry' ),
    'description' => esc_html__( 'H1', 'saturnthemes-industry' ),
    'section'     => $section,
    'priority'    => $priority++,
    'default'     => '28',
    'choices'     => array(
        'min'  => 10,
        'max'  => 90,
        'step' => 1,
    ),
    'transport'   => 'postMessage',
    'output'      => array(
        array(
            'element'  => 'h1',
            'property' => 'font-size',
            'units'    => 'px',
        ),
    ),
    'js_vars'     => array(
        array(
            'element'  => 'h1',
            'function' => 'css',
            'property' => 'font-size',
            'units'    => 'px',
        ),
    ),
) );

Kirki::add_field( 'saturnthemes', array(
    'type'        => 'slider',
    'setting'     => 'h2_font_size',
    'description' => esc_html__( 'H2', 'saturnthemes-industry' ),
    'section'     => $section,
    'priority'    => $priority++,
    'default'     => '24',
    'choices'     => array(
        'min'  => 10,
        'max'  => 90,
        'step' => 1,
    ),
    'transport'   => 'postMessage',
    'output'      => array(
        array(
            'element'  => 'h2',
            'property' => 'font-size',
            'units'    => 'px',
        ),
    ),
    'js_vars'     => array(
        array(
            'element'  => 'h2',
            'function' => 'css',
            'property' => 'font-size',
            'units'    => 'px',
        ),
    ),
) );

Kirki::add_field( 'saturnthemes', array(
    'type'        => 'slider',
    'setting'     => 'h3_font_size',
    'description' => esc_html__( 'H3', 'saturnthemes-industry' ),
    'section'     => $section,
    'priority'    => $priority++,
    'default'     => '20',
    'choices'     => array(
        'min'  => 10,
        'max'  => 90,
        'step' => 1,
    ),
    'transport'   => 'postMessage',
    'output'      => array(
        array(
            'element'  => 'h3',
            'property' => 'font-size',
            'units'    => 'px',
        ),
    ),
    'js_vars'     => array(
        array(
            'element'  => 'h3',
            'function' => 'css',
            'property' => 'font-size',
            'units'    => 'px',
        ),
    ),
) );

Kirki::add_field( 'saturnthemes', array(
    'type'        => 'slider',
    'setting'     => 'h4_font_size',
    'description' => esc_html__( 'H4', 'saturnthemes-industry' ),
    'section'     => $section,
    'priority'    => $priority++,
    'default'     => '16',
    'choices'     => array(
        'min'  => 10,
        'max'  => 90,
        'step' => 1,
    ),
    'transport'   => 'postMessage',
    'output'      => array(
        array(
            'element'  => 'h4',
            'property' => 'font-size',
            'units'    => 'px',
        ),
    ),
    'js_vars'     => array(
        array(
            'element'  => 'h4',
            'function' => 'css',
            'property' => 'font-size',
            'units'    => 'px',
        ),
    ),
) );

Kirki::add_field( 'saturnthemes', array(
    'type'        => 'slider',
    'setting'     => 'h5_font_size',
    'description' => esc_html__( 'H5', 'saturnthemes-industry' ),
    'section'     => $section,
    'priority'    => $priority++,
    'default'     => '14',
    'choices'     => array(
        'min'  => 10,
        'max'  => 90,
        'step' => 1,
    ),
    'transport'   => 'postMessage',
    'output'      => array(
        array(
            'element'  => 'h5',
            'property' => 'font-size',
            'units'    => 'px',
        ),
    ),
    'js_vars'     => array(
        array(
            'element'  => 'h5',
            'function' => 'css',
            'property' => 'font-size',
            'units'    => 'px',
        ),
    ),
) );

Kirki::add_field( 'saturnthemes', array(
    'type'        => 'slider',
    'setting'     => 'h6_font_size',
    'description' => esc_html__( 'H6', 'saturnthemes-industry' ),
    'section'     => $section,
    'priority'    => $priority++,
    'default'     => 12,
    'choices'     => array(
        'min'  => 10,
        'max'  => 90,
        'step' => 1,
    ),
    'transport'   => 'postMessage',
    'output'      => array(
        array(
            'element'  => 'h6',
            'property' => 'font-size',
            'units'    => 'px',
        ),
    ),
    'js_vars'     => array(
        array(
            'element'  => 'h6',
            'function' => 'css',
            'property' => 'font-size',
            'units'    => 'px',
        ),
    ),
) );