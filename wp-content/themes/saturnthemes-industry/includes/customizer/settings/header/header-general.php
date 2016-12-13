<?php
$section  = 'header_type';
$priority = 1;

Kirki::add_field( 'saturnthemes', array(
    'type'        => 'radio',
    'setting'     => 'header_type',
    'label'       => esc_html__( 'Header Type', 'saturnthemes-industry' ),
    'description' => esc_html__( 'For best, you need choose preset header, do not change header type', 'saturnthemes-industry' ),
    'section'     => $section,
    'priority'    => $priority++,
    'default'     => 'header-01',
    'choices'     => array(
        'header-01' => 'Type 01',
        'header-02' => 'Type 02',
        'header-03' => 'Type 03',
        'header-04' => 'Type 04',
        'header-05' => 'Type 05',
    ),
) );


Kirki::add_field( 'saturnthemes', array(
    'type'        => 'toggle',
    'setting'     => 'header_sticky_enable',
    'label'       => esc_html__( 'Enable Sticky Header', 'saturnthemes-industry' ),
    'section'     => $section,
    'priority'    => $priority++,
    'default'     => 0,
) );