<?php
/**
 * Sidebar
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/global/sidebar.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */
$saturnthemes_core = SaturnThemesC();
if ( 'no-sidebar' != $saturnthemes_core->get('saturnthemes_industry_sidebar_position') && $saturnthemes_core->get( 'saturnthemes_industry_sidebar' ) && is_active_sidebar( $saturnthemes_core->get( 'saturnthemes_industry_sidebar' ) ) ) : ?>
	<div class="col-md-3 <?php echo esc_attr( $saturnthemes_core->get('saturnthemes_industry_sidebar_position') ); ?>">
		<aside class="sidebar">
			<?php dynamic_sidebar( $saturnthemes_core->get( 'saturnthemes_industry_sidebar' ) ); ?>
		</aside>
	</div>
<?php endif; ?>