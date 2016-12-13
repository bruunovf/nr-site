<?php
/**
 * SaturnThemes Theme Customizer
 *
 * @package SaturnThemes
 */

/**
 * Remove Default Sections
 */
function saturnthemes_industry_remove_customizer_sections( $wp_customize ) {
    $wp_customize->remove_section( 'header_image' );
}

add_action( 'customize_register', 'saturnthemes_industry_remove_customizer_sections' );

/**
 * Setting Customizer
 */

Kirki::add_config( 'saturnthemes', array(
    'options_type' => 'theme_mod',
    'capability'   => 'edit_theme_options',
) );

$panel_priority = 0;
$panels = apply_filters( 'saturnthemes_industry_customizer_panels', array(
    'site' => array(
        'title'       => esc_html__('General Settings - GFXNull.Net', 'saturnthemes-industry'),
        'priority'    => 1,
    ),
    'header' => array(
        'title'       => esc_html__('Header Settings', 'saturnthemes-industry'),
        'priority'    => 2,
    ),
    'footer' => array(
        'title'       => esc_html__('Footer Settings', 'saturnthemes-industry'),
        'priority'    => 3,
    ),
    'woocommerce' => array(
        'title'       => esc_html__('Woocommerce Settings', 'saturnthemes-industry'),
        'priority'    => 4,
    ),
    'post' => array(
        'title'       => esc_html__('Post Settings', 'saturnthemes-industry'),
        'priority'    => 4,
    ),
) );

$section_priority = 0;
$sections = apply_filters( 'saturnthemes_industry_customizer_sections', array(
    //Site
    'site_layout' => array(
        'title'       => esc_html__('Theme Layout', 'saturnthemes-industry'),
        'panel'       => 'site',
        'priority'    => $section_priority++,
    ),
    'site_logo' => array(
        'title'       => esc_html__('Logo and Icons', 'saturnthemes-industry'),
        'panel'       => 'site',
        'priority'    => $section_priority++,
    ),
    'site_font' => array(
        'title'       => esc_html__('Typography', 'saturnthemes-industry'),
        'panel'       => 'site',
        'priority'    => $section_priority++,
    ),
    'site_style' => array(
        'title'       => esc_html__('Style', 'saturnthemes-industry'),
        'panel'       => 'site',
        'priority'    => $section_priority++,
    ),
    'site_social' => array(
        'title'       => esc_html__('Social', 'saturnthemes-industry'),
        'panel'       => 'site',
        'priority'    => $section_priority++,
    ),
    'site_breadcrumb' => array(
        'title'       => esc_html__('Header Page Title', 'saturnthemes-industry'),
        'panel'       => 'site',
        'priority'    => $section_priority++,
    ),

    //Header
    'header_preset' => array(
        'title'       => esc_html__('Preset', 'saturnthemes-industry'),
        'panel'       => 'header',
        'priority'    => $section_priority++,
    ),
    'header_type' => array(
        'title'       => esc_html__('General', 'saturnthemes-industry'),
        'panel'       => 'header',
        'priority'    => $section_priority++,
    ),
    'header_top_bar' => array(
        'title'       => esc_html__('Top Bar', 'saturnthemes-industry'),
        'panel'       => 'header',
        'priority'    => $section_priority++,
    ),
    'header_style' => array(
        'title'       => esc_html__('Style', 'saturnthemes-industry'),
        'panel'       => 'header',
        'priority'    => $section_priority++,
    ),
    'header_primary_menu' => array(
        'title'       => esc_html__( 'Primary Menu', 'saturnthemes-industry' ),
        'panel'       => 'header',
        'priority'    => $section_priority++,
    ),
    'header_menu_dropdown' => array(
        'title'       => esc_html__( 'Menu Dropdown', 'saturnthemes-industry' ),
        'panel'       => 'header',
        'priority'    => $section_priority++,
    ),
    'header_contacts_details' => array(
        'title'       => esc_html__( 'Contact Detail (For Header Type 2, 3, 4)', 'saturnthemes-industry' ),
        'panel'       => 'header',
        'priority'    => $section_priority++,
    ),

    //Post
    'post_archives' => array(
        'title'       => esc_html__('Post Archives', 'saturnthemes-industry'),
        'panel'       => 'post',
        'priority'    => $section_priority++,
    ),
    'post_single' => array(
        'title'       => esc_html__('Single Post', 'saturnthemes-industry'),
        'panel'       => 'post',
        'priority'    => $section_priority++,
    ),
    'post_general' => array(
        'title'       => esc_html__('General', 'saturnthemes-industry'),
        'panel'       => 'post',
        'priority'    => $section_priority++,
    ),
    'post_layout' => array(
        'title'       => esc_html__('Layout', 'saturnthemes-industry'),
        'panel'       => 'post',
        'priority'    => $section_priority++,
    ),
    //Page
    'page' => array(
        'title'       => esc_html__('Page Settings', 'saturnthemes-industry'),
        'priority'    => $section_priority++,
    ),

    //Footer
    'footer_preset' => array(
        'title'       => esc_html__('Preset', 'saturnthemes-industry'),
        'panel'       => 'footer',
        'priority'    => $section_priority++,
    ),
    'footer_general' => array(
        'title'       => esc_html__('General', 'saturnthemes-industry'),
        'panel'       => 'footer',
        'priority'    => $section_priority++,
    ),
    'footer_color' => array(
        'title'       => esc_html__('Color', 'saturnthemes-industry'),
        'panel'       => 'footer',
        'priority'    => $section_priority++,
    ),
    'footer_copyright' => array(
        'title'       => esc_html__('Copyright', 'saturnthemes-industry'),
        'panel'       => 'footer',
        'priority'    => $section_priority++,
    ),
    'footer_extra_info' => array(
        'title'       => esc_html__('Extra Information', 'saturnthemes-industry'),
        'panel'       => 'footer',
        'priority'    => $section_priority++,
    ),

    //Woocommerce
    'woocommerce_archives' => array(
        'title'       => esc_html__('Product Archives', 'saturnthemes-industry'),
        'panel'       => 'woocommerce',
        'priority'    => $section_priority++,
    ),
    'woocommerce_single' => array(
        'title'       => esc_html__('Single Product', 'saturnthemes-industry'),
        'panel'       => 'woocommerce',
        'priority'    => $section_priority++,
    ),

    // Promo Popup
    'promo_popup' => array(
        'title'       => esc_html__('Promo Popup', 'saturnthemes-industry'),
        'priority'    => $section_priority,
    ),

    //Custom Code
    'custom_code' => array(
        'title'       => esc_html__('Custom Code', 'saturnthemes-industry'),
        'priority'    => $section_priority++,
    ),
) );

foreach ( $panels as $panel_id => $panel ) {
    Kirki::add_panel( $panel_id, $panel );
}

foreach ( $sections as $section_id => $section ) {
    Kirki::add_section( $section_id, $section );
}

/**
 * Include settings
 * ================
 */
//Site
require_once( SATURNTHEMES_INDUSTRY_THEME_DIR . 'includes/customizer/settings/site/site-layout.php' );
require_once( SATURNTHEMES_INDUSTRY_THEME_DIR . 'includes/customizer/settings/site/site-logo.php' );
require_once( SATURNTHEMES_INDUSTRY_THEME_DIR . 'includes/customizer/settings/site/site-font.php' );
require_once( SATURNTHEMES_INDUSTRY_THEME_DIR . 'includes/customizer/settings/site/site-social.php' );
require_once( SATURNTHEMES_INDUSTRY_THEME_DIR . 'includes/customizer/settings/site/site-style.php' );
require_once( SATURNTHEMES_INDUSTRY_THEME_DIR . 'includes/customizer/settings/site/site-breadcrumb.php' );

//Header
require_once( SATURNTHEMES_INDUSTRY_THEME_DIR . 'includes/customizer/settings/header/preset.php' );
require_once( SATURNTHEMES_INDUSTRY_THEME_DIR . 'includes/customizer/settings/header/header-general.php' );
require_once( SATURNTHEMES_INDUSTRY_THEME_DIR . 'includes/customizer/settings/header/header-style.php' );
require_once( SATURNTHEMES_INDUSTRY_THEME_DIR . 'includes/customizer/settings/header/header-search.php' );
require_once( SATURNTHEMES_INDUSTRY_THEME_DIR . 'includes/customizer/settings/header/top-bar.php' );
require_once( SATURNTHEMES_INDUSTRY_THEME_DIR . 'includes/customizer/settings/header/primary-menu.php' );
require_once( SATURNTHEMES_INDUSTRY_THEME_DIR . 'includes/customizer/settings/header/menu-dropdown.php' );
require_once( SATURNTHEMES_INDUSTRY_THEME_DIR . 'includes/customizer/settings/header/contact-details.php' );

//Woocommerce
require_once( SATURNTHEMES_INDUSTRY_THEME_DIR . 'includes/customizer/settings/woocommerce/archives.php' );
require_once( SATURNTHEMES_INDUSTRY_THEME_DIR . 'includes/customizer/settings/woocommerce/single.php' );

//Post
require_once( SATURNTHEMES_INDUSTRY_THEME_DIR . 'includes/customizer/settings/post/archives.php' );
require_once( SATURNTHEMES_INDUSTRY_THEME_DIR . 'includes/customizer/settings/post/single.php' );
require_once( SATURNTHEMES_INDUSTRY_THEME_DIR . 'includes/customizer/settings/post/post-general.php' );
require_once( SATURNTHEMES_INDUSTRY_THEME_DIR . 'includes/customizer/settings/post/post-layout.php' );

//Page
require_once( SATURNTHEMES_INDUSTRY_THEME_DIR . 'includes/customizer/settings/page.php' );

//Footer
require_once( SATURNTHEMES_INDUSTRY_THEME_DIR . 'includes/customizer/settings/footer/footer-preset.php' );
require_once( SATURNTHEMES_INDUSTRY_THEME_DIR . 'includes/customizer/settings/footer/footer-general.php' );
require_once( SATURNTHEMES_INDUSTRY_THEME_DIR . 'includes/customizer/settings/footer/footer-copyright.php' );

// Promo Popup
require_once( SATURNTHEMES_INDUSTRY_THEME_DIR . 'includes/customizer/settings/promo-popup.php' );

//Custom Code
require_once( SATURNTHEMES_INDUSTRY_THEME_DIR . 'includes/customizer/settings/custom-code.php' );

function saturnthemes_industry_custom_background_cb() {
    // $background is the saved custom image, or the default image.
    $background = set_url_scheme( get_background_image() );

    if ( is_page() ) {
        $_background_image      = get_post_meta( get_the_ID(), 'saturnthemes_industry_background_image', true );
        $_background_position   = get_post_meta( get_the_ID(), 'saturnthemes_industry_background_position', true );
        $_background_repeat     = get_post_meta( get_the_ID(), 'saturnthemes_industry_background_repeat', true );
        $_background_attachment = get_post_meta( get_the_ID(), 'saturnthemes_industry_background_attachment', true );


        if ( $_background_image ) {
            $background = $_background_image;
        }
    }

    // $color is the saved custom color.
    // A default has to be specified in style.css. It will not be printed here.
    $color = get_background_color();

    if ( $color === get_theme_support( 'custom-background', 'default-color' ) ) {
        $color = false;
    }

    if ( ! $background && ! $color )
        return;

    $style = $color ? "background-color: #$color;" : '';

    if ( $background ) {
        $image = " background-image: url('$background');";

        $repeat = ( ! empty( $_background_image ) && ! empty( $_background_repeat ) ) ? $_background_repeat : get_theme_mod( 'background_repeat', get_theme_support( 'custom-background', 'default-repeat' ) );
        if ( ! in_array( $repeat, array( 'no-repeat', 'repeat-x', 'repeat-y', 'repeat' ) ) )
            $repeat = 'repeat';
        $repeat = " background-repeat: $repeat;";

        if ( ! empty( $_background_image ) && ! empty( $_background_position ) ) {
            $position = ' background-position: ' . $_background_position . ';';
        } else {
            $position = get_theme_mod( 'background_position_x', get_theme_support( 'custom-background', 'default-position-x' ) );
            if ( ! in_array( $position, array( 'center', 'right', 'left' ) ) )
                $position = 'left';
            $position = " background-position: top $position;";
        }

        if ( ! empty( $_background_image ) && ! empty( $_background_attachment ) ) {
            $attachment = ' background-attachment: ' . $_background_attachment . ';';
        } else {
            $attachment = get_theme_mod( 'background_attachment', get_theme_support( 'custom-background', 'default-attachment' ) );
            if ( ! in_array( $attachment, array( 'fixed', 'scroll' ) ) )
                $attachment = 'scroll';
            $attachment = " background-attachment: $attachment;";
        }

        $style .= $image . $repeat . $position . $attachment;
    }
    ?>
    <style type="text/css" id="custom-background-css">
        body.custom-background { <?php echo trim( $style ); ?> }
    </style>
    <?php
}
