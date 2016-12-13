<?php
$section  = 'site_layout';
$priority = 1;

Kirki::add_field( 'saturnthemes', array(
    'type'        => 'legend',
    'setting'     => 'site_layout_legend',
    'label'       => esc_html__( 'Layout', 'saturnthemes-industry' ),
    'section'     => $section,
    'priority'    => $priority++,
) );

Kirki::add_field( 'saturnthemes', array(
    'type'     => 'radio',
    'settings' => 'site_page_layout',
    'label'    => __( 'Page Layout', 'saturnthemes-industry' ),
    'section'  => $section,
    'default'  => 'wide',
    'priority' => $priority++,
    'choices'  => array(
        'wide'       => esc_html__( 'Wide', 'saturnthemes-industry' ),
        'boxed'      => esc_html__( 'Boxed', 'saturnthemes-industry' ),
    ),
) );

Kirki::add_field( 'saturnthemes', array(
    'type'     => 'radio',
    'settings' => 'site_sidebar_position',
    'label'    => __( 'Sidebar Position', 'saturnthemes-industry' ),
    'section'  => $section,
    'default'  => 'no-sidebar',
    'priority' => $priority++,
    'choices'  => array(
        'no-sidebar'    => esc_html__( 'No Sidebar', 'saturnthemes-industry' ),
        'left-sidebar'  => esc_html__( 'Left Sidebar', 'saturnthemes-industry' ),
        'right-sidebar' => esc_html__( 'Right Sidebar', 'saturnthemes-industry' ),
    ),
) );
