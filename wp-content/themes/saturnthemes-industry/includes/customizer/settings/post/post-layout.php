<?php
$section  = 'post_layout';
$priority = 1;

Kirki::add_field( '', array(
    'type'     => 'radio',
    'settings' => 'blog_layout',
    'label'    => __( 'Blog Layout', 'saturnthemes-industry' ),
    'section'  => $section,
    'priority' => $priority++,
    'default'  => 'full',
    'choices'  => array(
        'full'    => esc_html__( 'Standard Post Layout', 'saturnthemes-industry' ),
        'grid' => esc_html__( 'Grid Post Layout', 'saturnthemes-industry' ),
    ),
) );

Kirki::add_field( '', array(
    'type'     => 'radio',
    'settings' => 'blog_archive_layout',
    'label'    => esc_html__( 'Blog Archive Layout', 'saturnthemes-industry' ),
    'section'  => $section,
    'priority' => $priority++,
    'default'  => 'full',
    'choices'  => array(
        'full'    => esc_html__( 'Standard Post Layout', 'saturnthemes-industry' ),
        'grid' => esc_html__( 'Grid Post Layout', 'saturnthemes-industry' ),
    ),
) );

Kirki::add_field( '', array(
    'type'     => 'radio',
    'settings' => 'post_summary',
    'label'    => esc_html__( 'Homepage/Archive Post Summary Type', 'saturnthemes-industry' ),
    'section'  => $section,
    'default'  => 'excerpt',
    'priority' => $priority++,
    'choices'  => array(
        'full'      => esc_html__( 'Full Post', 'saturnthemes-industry' ),
        'read-more' => esc_html__( 'Use Read More Tag', 'saturnthemes-industry' ),
        'excerpt'   => esc_html__( 'Use Excerpt', 'saturnthemes-industry' ),
    ),
) );