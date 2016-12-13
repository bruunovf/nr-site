<?php
/**
 * @package SaturnThemess
 */
?>
<footer class="site-footer <?php echo esc_attr( Kirki::get_option( 'saturnthemes', 'footer_type' ));?>">
    <?php require_once( get_template_directory() . '/footer/' . Kirki::get_option( 'saturnthemes', 'footer_type' ) . '.php' ); ?>
</footer>
<?php if ( Kirki::get_option( 'saturnthemes', 'footer_back_to_top_enable' ) == 1 ) : ?>
    <a class="scrollup"><i class="fa fa-chevron-up"></i></a>
<?php endif; ?>
</div>
<?php do_action( 'saturnthemes_industry_after_footer' ); ?>
<?php wp_footer(); ?>
</body>
</html>
