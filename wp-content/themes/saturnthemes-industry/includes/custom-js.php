<?php function saturnthemes_industry_js_custom_code() { ?>
    <?php echo html_entity_decode( Kirki::get_option( 'saturnthemes', 'custom_js' ) ); ?>
<?php }

add_action( 'wp_footer', 'saturnthemes_industry_js_custom_code' );
