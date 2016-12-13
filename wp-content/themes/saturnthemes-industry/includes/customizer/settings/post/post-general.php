<?php
$section = 'post_general';
$priority = 1;

// Hide Category
Kirki::add_field( 'saturnthemes', array(
    'type'        => 'toggle',
    'setting'     => 'post_hide_category',
    'label'       => esc_html__( 'Hide Category', 'saturnthemes-industry' ),
    'section'     => $section,
    'priority'    => $priority++,
    'default'     => '0',
));

// Hide Date
Kirki::add_field( 'saturnthemes', array(
    'type'        => 'toggle',
    'setting'     => 'post_hide_date',
    'label'       => esc_html__( 'Hide Date', 'saturnthemes-industry' ),
    'section'     => $section,
    'priority'    => $priority++,
    'default'     =>  '0',
));

// Hide Author
Kirki::add_field( 'saturnthemes', array(
    'type'        => 'toggle',
    'setting'     => 'post_hide_author',
    'label'       => esc_html__( 'Hide Author Name', 'saturnthemes-industry' ),
    'section'     => $section,
    'priority'    => $priority++,
    'default'     => '0',
));

// Hide Share Buttons
Kirki::add_field( 'saturnthemes', array(
    'type'        => 'toggle',
    'setting'     => 'post_hide_share_buttons',
    'label'       => esc_html__( 'Hide Share Buttons', 'saturnthemes-industry' ),
    'section'     => $section,
    'priority'    => $priority++,
    'default'     => '0',
));

// Hide Read More button
Kirki::add_field( 'saturnthemes', array(
    'type'        => 'toggle',
    'setting'     => 'post_hide_read_more',
    'label'       => esc_html__( 'Hide Read More Button', 'saturnthemes-industry' ),
    'section'     => $section,
    'priority'    => $priority++,
    'default'     => '0',
));

// Hide Comment Link
Kirki::add_field( 'saturnthemes', array(
    'type'        => 'toggle',
    'setting'     => 'post_hide_comment_link',
    'label'       => esc_html__( 'Hide Comment Link', 'saturnthemes-industry' ),
    'section'     => $section,
    'priority'    => $priority++,
    'default'     => '0',
));

// Hide Featured Image
Kirki::add_field( 'saturnthemes', array(
    'type'        => 'toggle',
    'setting'     => 'post_hide_featured_image',
    'label'       => esc_html__( 'Hide Featured Image', 'saturnthemes-industry' ),
    'section'     => $section,
    'priority'    => $priority++,
    'default'     => '0',
));

// Hide Tags
Kirki::add_field( 'saturnthemes', array(
    'type'        => 'toggle',
    'setting'     => 'post_hide_tags',
    'label'       => esc_html__( 'Hide Tags', 'saturnthemes-industry' ),
    'section'     => $section,
    'priority'    => $priority++,
    'default'     => '0',
));

// Hide Author Area
Kirki::add_field( 'saturnthemes', array(
    'type'        => 'toggle',
    'setting'     => 'post_hide_author_area',
    'label'       => esc_html__( 'Hide Author Area', 'saturnthemes-industry' ),
    'section'     => $section,
    'priority'    => $priority++,
    'default'     => '0',
));

// Hide Related Posts
Kirki::add_field( 'saturnthemes', array(
    'type'        => 'toggle',
    'setting'     => 'post_hide_related_posts',
    'label'       => esc_html__( 'Hide Related Posts', 'saturnthemes-industry' ),
    'section'     => $section,
    'priority'    => $priority++,
    'default'     => '0',
));