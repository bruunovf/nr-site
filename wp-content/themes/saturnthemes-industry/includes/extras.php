<?php
add_filter( 'body_class', 'saturnthemes_industry_body_class' );
function saturnthemes_industry_body_class( $classes ) {

    if ( is_page() && get_post_meta( get_the_ID(), 'saturnthemes_industry_background_image', true ) ) {
        $classes[] = 'custom-background';
    }
    $classes[] = saturnthemes_industry_get_page_layout();
    return $classes;
}

function saturnthemes_industry_get_taxonomies( $content_type ) {
    $taxonomies = get_taxonomies( array( 'object_type' => array( $content_type ) ), 'names', 'and');
    return $taxonomies;
}

/**
 * Social links
 * @param bool|false $mobile
 */
function saturnthemes_industry_social_links() {
    $social_links = Kirki::get_option( 'saturnthemes', 'social_links' );

    if ( ! empty( $social_links ) ) {
        ?>
        <ul class="social-links">
            <?php foreach ( $social_links as $row ) { ?>
                <li <?php echo ( empty( $row['link_url'] ) ? 'class="text"' : ''); ?>>
                    <?php if ( isset( $row['link_url'] ) && ! empty( $row['link_url'] ) ) { ?>
                    <a href="<?php echo esc_url_raw( $row['link_url'] ); ?>"><?php } ?>
                        <?php echo esc_html( $row['social_name'] ); ?>
                        <?php if ( isset( $row['link_url'] ) && ! empty( $row['link_url'] ) ) { ?></a><?php } ?>
                </li>
            <?php } ?>
        </ul>
        <?php
    }
}

//Remove CSS font-size from Widget Tag Cloud.
add_filter('wp_generate_tag_cloud', 'saturnthemes_tag_cloud',10,3);

function saturnthemes_tag_cloud($tag_string){
    return preg_replace("/style='font-size:.+pt;'/", '', $tag_string);
}

/**
 * Position Author
 */
if ( ! function_exists( 'saturnthemes_industry_contactmethods' ) ) :

    function saturnthemes_industry_contactmethods( $contactmethods ) {

        $contactmethods['position']   = 'Position';

        return $contactmethods;
    }
endif;
add_filter('user_contactmethods','saturnthemes_industry_contactmethods',10,1);