<?php
/**
 * Woocommerce Single Product
 * ==========================
 */
$section  = 'post_single';
$priority = 1;

Kirki::add_field( 'saturnthemes', array(
    'type'        => 'legend',
    'setting'     => 'post_single_layout_legend',
    'label'       => esc_html__( 'Layout', 'saturnthemes-industry' ),
    'section'     => $section,
    'priority'    => $priority++,
) );

Kirki::add_field( 'saturnthemes', array(
    'type'     => 'radio',
    'settings' => 'post_single_page_layout',
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
    'settings' => 'post_single_sidebar_position',
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

Kirki::add_field( 'infinity', array(
    'type'        => 'toggle',
    'setting'     => 'post_single_title_enable',
    'label'       => esc_html__( 'Enable Single Page Title', 'saturnthemes-industry' ),
    'description' => esc_html__( 'Turn on this option if you want to show page title in single product page', 'saturnthemes-industry' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => '1',
) );

Kirki::add_field( 'infinity', array(
    'type'     => 'text',
    'setting'  => 'post_single_title',
    'label'    => esc_html__( 'Single Page Title', 'saturnthemes-industry' ),
    'section'  => $section,
    'priority' => $priority ++,
    'default'  => 'Blog',
    'required' => array(
        array(
            'setting'  => 'post_single_title_enable',
            'operator' => '==',
            'value'    => 1,
        ),
    ),
) );

