<?php
$section  = 'page';
$priority = 1;

Kirki::add_field( 'saturnthemes', array(
    'type'        => 'toggle',
    'setting'     => 'page_share',
    'label'       => esc_html__( 'Hide Share Buttons', 'saturnthemes-industry' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => '0',
) );