<?php
/**
 * Woocommerce Single Product
 * ==========================
 */
$section  = 'woocommerce_single';
$priority = 1;

Kirki::add_field( 'saturnthemes', array(
    'type'     => 'legend',
    'setting'  => 'woocommerce_single_layout_legend',
    'label'    => esc_html__( 'Layout', 'saturnthemes-industry' ),
    'section'  => $section,
    'priority' => $priority++,
) );

Kirki::add_field( 'saturnthemes', array(
    'type'     => 'radio',
    'settings' => 'woocommerce_single_page_layout',
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
    'settings' => 'woocommerce_single_sidebar_position',
    'label'    => __( 'Sidebar Position', 'saturnthemes-industry' ),
    'section'  => $section,
    'default'  => 'left-sidebar',
    'priority' => $priority++,
    'choices'  => array(
        'no-sidebar'    => esc_html__( 'No Sidebar', 'saturnthemes-industry' ),
        'left-sidebar'  => esc_html__( 'Left Sidebar', 'saturnthemes-industry' ),
        'right-sidebar' => esc_html__( 'Right Sidebar', 'saturnthemes-industry' ),
    ),
) );
