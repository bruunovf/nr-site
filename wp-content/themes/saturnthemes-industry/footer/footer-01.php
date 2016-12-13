<div class="footer-widget-container">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <?php dynamic_sidebar( 'footer-1' ); ?>
            </div>
            <div class="col-sm-6 col-md-4">
                <?php dynamic_sidebar( 'footer-2' ); ?>
            </div>
            <div class="col-sm-6 col-md-4">
                <?php dynamic_sidebar( 'footer-3' ); ?>
            </div>
        </div>
    </div>
</div>
<div class="footer-bottom">
    <div class="container">
        <div class="row row-xs-center">
            <div class="col-xs-12 col-sm-6">
                <div class="">
                    <h3 class="widget-title"><?php echo Kirki::get_option( 'saturnthemes', 'social_links_title' ); ?></h3>
                    <?php echo saturnthemes_industry_social_links(); ?>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 end-md">
                <?php if ( Kirki::get_option( 'infinity', 'footer_copyright_enable' ) == 1 ) : ?>
                    <div class="copyright">
                        <?php echo html_entity_decode( Kirki::get_option( 'infinity', 'footer_copyright_content' ) ); ?>
                    </div><!-- .copyright -->
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>