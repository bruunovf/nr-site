<?php
/**
 * The header for our theme.
 *
 * @package SaturnThemes
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
        <link rel="shortcut icon" href="<?php echo Kirki::get_option( 'saturnthemes', 'site_favicon' ); ?>">
        <link rel="apple-touch-icon" href="<?php echo Kirki::get_option( 'saturnthemes', 'site_apple_touch_icon' ); ?>" />
    <?php } ?>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

    <?php wp_head(); ?>

</head>

<?php

$saturnthemes_core = SaturnThemesC();
$saturnthemes_industry_header_type = Kirki::get_option( 'saturnthemes', 'header_type' );
$saturnthemes_core->set( 'saturnthemes_industry_header_type', Kirki::get_option( 'saturnthemes', 'header_type' ) );
$saturnthemes_core->set( 'saturnthemes_industry_sidebar_position', saturnthemes_industry_get_sidebar_position() );
$saturnthemes_core->set( 'saturnthemes_industry_sidebar', saturnthemes_industry_get_sidebar() );
?>

<body <?php body_class(); ?>>

<div id="slide-menu">
    <?php wp_nav_menu( array(
        'theme_location'  => 'primary',
        'menu_id'         => 'mobile-menu',
        'menu_class'      => 'mobile-menu',
        'container'       => 'nav',
        'container_id'    => 'mobile-menu-container',
        'container_class' => 'mobile-menu-container',
        'walker'          => new saturnthemes_industry_Mobile_Walker_Nav_Menu(),
    ) ); ?>
    <div class="col-xs-12">
        <?php echo saturnthemes_industry_social_links(); ?>
    </div>
</div>

<div id="page" class="page-wrapper">
    <?php if ( $saturnthemes_industry_header_type == 'header-01' || $saturnthemes_industry_header_type == 'header-05' ) : ?>
        <?php require_once( get_template_directory() . '/header/header-01.php' ); ?>
    <?php else : ?>
        <?php require_once( get_template_directory() . '/header/header-02.php' ); ?>
    <?php endif; ?>

    <?php get_template_part( 'template-parts/page', 'title' ); ?>
