<?php
$section  = 'footer_copyright';
$priority = 1;

Kirki::add_field( 'saturnthemes', array(
    'type'        => 'toggle',
    'setting'     => 'footer_copyright_enable',
    'label'       => esc_html__( 'Show Copyright', 'saturnthemes-industry' ),
    'description' => esc_html__( 'Enabling this option will display copyright area', 'saturnthemes-industry' ),
    'section'     => $section,
    'priority'    => $priority++,
    'default'     => 1,
) );

Kirki::add_field( 'saturnthemes', array(
    'type'      => 'editor',
    'setting'   => 'footer_copyright_content',
    'label'     => esc_html__( 'Content', 'saturnthemes-industry' ),
    'section'   => $section,
    'priority'  => $priority++,
    'default'   => esc_html__( '2016 - Industry. All Rights Reserved.', 'saturnthemes-industry' ),
    'transport' => 'postMessage',
    'required'  => array(
        array(
            'setting'  => 'footer_copyright_enable',
            'operator' => '==',
            'value'    => 1,
        ),
    ),
) );