<?php
$section  = 'header_style';
$priority = 1;

Kirki::add_field( 'saturnthemes', array(
    'type'     => 'color-alpha',
    'setting'  => 'header_bg',
    'label'    => esc_html__( 'Header BG', 'saturnthemes-industry' ),
    'section'  => $section,
    'priority' => $priority++,
    'default'  => PRIMARY_BACKGROUND_COLOR,
    'output'   => array(
        array(
            'element'  => '.header',
            'property' => 'background-color',
        ),
    )
) );

Kirki::add_field( 'saturnthemes', array(
    'type'     => 'color-alpha',
    'setting'  => 'header_nav_bg',
    'label'    => esc_html__( 'Header Navigation BG', 'saturnthemes-industry' ),
    'description' => esc_html__( 'For Header Type 2, 3, 4', 'saturnthemes-industry' ),
    'section'  => $section,
    'priority' => $priority++,
    'default'  => SECONDARY_COLOR,
    'output'   => array(
        array(
            'element'  => '.header-nav',
            'property' => 'background-color',
        ),
    ),
) );

Kirki::add_field( 'saturnthemes', array(
    'type'     => 'color',
    'setting'  => 'header_color_main',
    'label'    => esc_html__( 'Text Color', 'saturnthemes-industry' ),
    'section'  => $section,
    'priority' => $priority++,
    'default'  => SECONDARY_COLOR,
    'output'   => array(
        array(
            'element'  => '.header, .header a',
            'property' => 'color',
        ),
        array(
            'element'  => '.nav-main .menu > li > a:before',
            'property' => 'background-color',
        ),
    ),
) );

Kirki::add_field( 'saturnthemes', array(
    'type'     => 'color',
    'setting'  => 'header_color_meta',
    'label'    => esc_html__( 'Meta Text Color', 'saturnthemes-industry' ),
    'section'  => $section,
    'priority' => $priority++,
    'default'  => SECONDARY_COLOR,
    'output'   => array(
        array(
            'element'  => '',
            'property' => 'color',
        ),
    ),
) );

