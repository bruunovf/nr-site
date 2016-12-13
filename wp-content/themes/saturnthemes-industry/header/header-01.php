<?php
$saturnthemes_industry_header_type = Kirki::get_option( 'saturnthemes', 'header_type' );
$saturnthemes_industry_menu_class = '';
$saturnthemes_industry_logo                    = Kirki::get_option( 'saturnthemes', 'site_logo' );
$saturnthemes_industry_logo_retina             = Kirki::get_option( 'saturnthemes', 'site_logo_retina' );
$saturnthemes_industry_woocommerce_exists      = class_exists( 'WooCommerce' );

?>
<div class="site-topbar hidden-md-down">
    <div class="container">
        <div class="row row-xs-center">
            <div class="col-xs-12 col-md-7">
                <?php echo html_entity_decode( Kirki::get_option( 'saturnthemes', 'header_contact_info' ) ); ?>
            </div>
            <div class="col-xs-6 col-md-3 end-md">
                <?php echo saturnthemes_industry_social_links(); ?>
            </div>
            <div class=" col-md-2 end-md">
                <a href="<?php echo esc_url( Kirki::get_option( 'saturnthemes', 'header_top_bar_link_button' ) ); ?>" class="btn">
                    <i class="fa fa-pencil-square-o"></i>
                    <span class="link-title"><?php echo Kirki::get_option( 'saturnthemes', 'header_top_bar_button' ); ?></span>
                </a>
            </div>
        </div>
    </div>
</div>
<header id="header" class="header <?php echo esc_attr( $saturnthemes_industry_header_type ); echo esc_attr( saturnthemes_industry_get_overlay_header() ? 'header-overlay' : '' ); ?> <?php echo esc_attr( Kirki::get_option( 'saturnthemes', 'header_sticky_enable' ) != 1 ? 'affix-disabled' : ''  ); ?>" data-spy="affix" data-offset-top>
    <div class="container">
        <div class="row row-xs-center hidden-sm-down">
            <?php
            if ( $saturnthemes_industry_logo ) { ?>
                <div class="logo col-xs-6 col-md-3 start-xs">

                    <?php if( is_front_page() ) : ?>
                        <h1>
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?> - <?php bloginfo( 'description' ); ?>" rel="home">
                                <img src="<?php echo esc_url( $saturnthemes_industry_logo ); ?>" <?php if ( $saturnthemes_industry_logo_retina ) { ?> srcset="<?php echo esc_url( $saturnthemes_industry_logo_retina ); ?> 2x" <?php } ?> alt="<?php bloginfo( 'name' ); ?>" />
                            </a>
                        </h1>
                    <?php else : ?>
                        <h2>
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?> - <?php bloginfo( 'description' ); ?>" rel="home">
                                <img src="<?php echo esc_url( $saturnthemes_industry_logo ); ?>" <?php if ( $saturnthemes_industry_logo_retina ) { ?> srcset="<?php echo esc_url( $saturnthemes_industry_logo_retina ); ?> 2x" <?php } ?> alt="<?php bloginfo( 'name' ); ?>" />
                            </a>
                        </h2>
                    <?php endif; ?>
                </div>
            <?php } ?>
            <div class="col-md-8">
                <div class="menu-container">
                    <div class="menu-inner">
                        <?php
                        if ( class_exists( 'saturnthemes_industry_Type1_Walker_Nav_Menu' ) && has_nav_menu( 'primary' ) ) {
                            wp_nav_menu( array(
                                'theme_location' => 'primary',
                                'menu_class'     => 'menu menu-horizontal',
                                'menu_id'        => 'primary-menu',
                                'walker'          => new saturnthemes_industry_Type1_Walker_Nav_Menu(),
                            ) );
                        } else {
                            wp_nav_menu( array(
                                'theme_location' => 'primary',
                                'menu_class'     => 'menu menu-horizontal',
                                'menu_id'        => 'primary-menu',
                            ) );
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-1 end-xs">
                <?php if ( $saturnthemes_industry_woocommerce_exists ) : ?>
                    <?php saturnthemes_industry_cart_link() ?>
                <?php endif; ?>
                <div id="header-search" class="search-type-1">
                    <span id="js-search-overlay" class="fa fa-search"></span>
                </div>
            </div>
        </div>
        <div class="row row-xs-center hidden-md-up mobile-header">
            <div class="col-xs-2 start-xs mobile-right">
                <i id="mobile-menu-toggle" class="fa fa-navicon hidden-lg-up"></i>
            </div>
            <?php
            if ( $saturnthemes_industry_logo ) { ?>
                <div class="logo col-xs-8 center-xs">

                    <?php if( is_front_page() ) : ?>
                        <h1>
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?> - <?php bloginfo( 'description' ); ?>" rel="home">
                                <img src="<?php echo esc_url( $saturnthemes_industry_logo ); ?>" <?php if ( $saturnthemes_industry_logo_retina ) { ?> srcset="<?php echo esc_url( $saturnthemes_industry_logo_retina ); ?> 2x" <?php } ?> alt="<?php bloginfo( 'name' ); ?>" />
                            </a>
                        </h1>
                    <?php else : ?>
                        <h2>
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?> - <?php bloginfo( 'description' ); ?>" rel="home">
                                <img src="<?php echo esc_url( $saturnthemes_industry_logo ); ?>" <?php if ( $saturnthemes_industry_logo_retina ) { ?> srcset="<?php echo esc_url( $saturnthemes_industry_logo_retina ); ?> 2x" <?php } ?> alt="<?php bloginfo( 'name' ); ?>" />
                            </a>
                        </h2>
                    <?php endif; ?>
                </div>
            <?php } ?>
            <div class="col-xs-2 end-xs">
                <div class="mobile-search">
                    <span class="fa fa-search"></span>
                </div>
            </div>
        </div>
        <div id="search-mobile-toggle">
            <?php echo saturnthemes_industry_get_search_form(); ?>
            <i class="fa fa-times mobile-search mobile-search-close"></i>
        </div>
    </div>
</header>

<div class="full-screen-search-container">
    <a class="full-screen-search-close"><i class="fa fa-times"></i></a>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-xs-center center-xs">
                <form name="search-form" role="search" method="get" class="search-form animated" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <div class="row row-md-center">
                        <div class="col-sm-3 start-xs end-md">
                            <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'saturnthemes-industry' ); ?></span>
                            <span class="search-label"><?php echo _x( 'Search:', 'label', 'saturnthemes-industry' ); ?></span>
                        </div>
                        <div class="col-md-6">
                            <input type="search" class="search-field" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'saturnthemes-industry' ); ?>" />
                        </div>
                        <div class="col-md-3 start-xs">
                            <span class="search-button">
                                <i class="fa fa-search"></i>
                                <input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'saturnthemes-industry' ); ?>" />
                            </span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>