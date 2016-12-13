<?php
$section  = 'site_logo';
$priority = 1;

Kirki::add_field( 'saturnthemes', array(
    'type'        => 'image',
    'setting'     => 'site_logo',
    'label'       => esc_html__( 'Logo', 'saturnthemes-industry' ),
    'description' => esc_html__( 'Choose a default logo image to display', 'saturnthemes-industry' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => 'http://industry.saturnthemes.com/images/logo.png',
) );

Kirki::add_field( 'saturnthemes', array(
    'type'        => 'image',
    'setting'     => 'site_logo_retina',
    'label'       => esc_html__( 'Retina', 'saturnthemes-industry' ),
    'description' => esc_html__( 'Choose a image for retina logo', 'saturnthemes-industry' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => '',
) );

Kirki::add_field( 'saturnthemes', array(
    'type'        => 'image',
    'setting'     => 'site_favicon',
    'label'       => esc_html__( 'Upload Favicon', 'saturnthemes-industry' ),
    'description' => esc_html__( 'Choose a default favicon to display', 'saturnthemes-industry' ),
    'section'     => $section,
    'priority'    => $priority++,
    'default'     => '',
) );

Kirki::add_field( 'saturnthemes', array(
    'type'        => 'image',
    'setting'     => 'site_apple_touch_icon',
    'label'       => esc_html__( 'Apple Touch Icon', 'saturnthemes-industry' ),
    'description' => esc_html__( 'File must be .png format. Optimal dimensions: 152px x 152px', 'saturnthemes-industry' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => '',
) );
