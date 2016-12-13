<?php
/**
 *
 * @package SaturnThemes
 */
$saturnthemes_core = SaturnThemesC();
if ( 'no-sidebar' != $saturnthemes_core->get('saturnthemes_industry_sidebar_position') && $saturnthemes_core->get( 'saturnthemes_industry_sidebar' ) && is_active_sidebar( $saturnthemes_core->get( 'saturnthemes_industry_sidebar' ) ) ) : ?>
<div class="col-md-3 <?php echo esc_attr( $saturnthemes_core->get('saturnthemes_industry_sidebar_position') ); ?>">
    <aside class="sidebar">
        <?php dynamic_sidebar( $saturnthemes_core->get( 'saturnthemes_industry_sidebar' ) ); ?>
    </aside>
</div>
<?php endif; ?>