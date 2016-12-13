<?php
/*
 * Enable support for Post Thumbnails on posts and pages.
 *
 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
 */
if ( ! function_exists( 'saturnthemes_industry_add_image_size' ) ) :
    function saturnthemes_industry_add_image_size() {
        add_theme_support( 'post-thumbnails' );
        add_image_size( 'saturnthemes-industry-full-thumb', 1170, 0, true );
        add_image_size( 'saturnthemes-industry-grid-thumb', 270, 0, true );
        add_image_size( 'image-170-170', 170, 170, array( 'center', 'center' ) );
        add_image_size( 'image-370-190', 370, 190, array( 'center', 'center' ) );
        add_image_size( 'image-270-190', 270, 190, array( 'center', 'center' ) );
    }
endif;
add_action( 'after_setup_theme', 'saturnthemes_industry_add_image_size' );