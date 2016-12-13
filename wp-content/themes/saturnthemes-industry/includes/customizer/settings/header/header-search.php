<?php
$section  = 'header_search';
$priority = 1;

Kirki::add_field( 'saturnthemes', array(
    'type'        => 'toggle',
    'setting'     => 'header_search_show',
    'label'       => esc_html__( 'Show Search Form', 'saturnthemes-industry' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => 1,
) );

Kirki::add_field( 'saturnthemes', array(
    'type'        => 'toggle',
    'setting'     => 'header_search_categories_show',
    'label'       => esc_html__( 'Show Categories', 'saturnthemes-industry' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => 1,
) );