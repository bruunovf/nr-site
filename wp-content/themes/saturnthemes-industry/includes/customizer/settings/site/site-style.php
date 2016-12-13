<?php
$section  = 'site_style';
$priority = 1;

Kirki::add_field( 'saturnthemes', array(
    'type'     => 'color',
    'setting'  => 'site_primary_color',
    'label'    => esc_html__( 'Primary Color', 'saturnthemes-industry' ),
    'section'  => $section,
    'priority' => $priority++,
    'default'  => PRIMARY_COLOR,
    'output'   => array(
        array(
            'element'  => '.primary-color,.vc_custom_heading.primary-color h2,.staff-content-title:hover,.icon-btn .btn:hover .link-title,.site-topbar i,.entry-meta-item .fa,.entry-meta-item a,.entry-meta-item a:visited,.post-share-buttons > .fa,button .fa, input[type="button"] .fa, input[type="reset"] .fa, input[type="submit"] .fa, #respond #submit .fa, .button .fa,.comments-area .comment-reply-link,.price .amount,.product_list_widget .amount,.woocommerce-cart .cart .amount,.cart_totals .shipping-calculator-button,.woocommerce-info a,.icon-box-icon i,.custom-contact-info i,.industry-contact-detail a,.industry-contact-detail .icon, services-content:hover .services-content-title a, .services-content:hover .services-content-title:after',
            'property' => 'color',
        ),
        array(
            'element'  => '.primary-bg,.testimonial-thumbnail:before,.cta-button .icon-box,.button.primary-button,.post-share-buttons a:hover,.woocommerce .onsale,.pagination .page-numbers.current,.pagination .page-numbers:hover,.page-links >a:hover,.page-links > span:not(.page-links-title), .mini-cart .cart-contents .count, .widget_price_filter .price_slider .ui-slider-range,.single_add_to_cart_button,.woocommerce-cart .button.primary-button,.woocommerce-checkout #place_order,.industry-contact-detail .contact-social-links li a:hover,.scrollup:hover,.services-content:hover .services-icon,.no-results .search-submit,.page-not-found .search-submit',
            'property' => 'background-color',
        ),
        array(
            'element'  => '.heading, .widget-title, .comments-area .comment-respond .comment-reply-title, blockquote,.button.primary-button,.pagination .page-numbers.current,.pagination .page-numbers:hover,.page-links > span:not(.page-links-title),.page-links >a:hover,.single-product .single_add_to_cart_button,.woocommerce-cart .button.primary-button,.woocommerce-checkout #place_order,.wpcf7-form input:focus,.scrollup:hover,.no-results .search-submit,.page-not-found .search-submit',
            'property' => 'border-color',
        ),
        array(
            'element'  => '.single-product .woocommerce-tabs ul.tabs li.active, .single-product .woocommerce-tabs ul.tabs li:hover,.woocommerce-cart .cart thead,.woocommerce-checkout .woocommerce-checkout-review-order-table thead',
            'property' => 'border-left-color',
        ),
        array(
            'element'  => '.testimonial-container.style2 .testimonial-thumbnail:after, .testimonial-container.style3 .testimonial-thumbnail:after',
            'property' => 'border-right-color',
        ),
        array(
            'element'  => '.woocommerce-checkout .woocommerce-checkout-review-order-table tr.shipping',
            'property' => 'border-bottom-color',
        ),
        array(
            'element'  => '.vc_tta-tabs-position-left.vc_tta-tabs .vc_tta-tab.vc_active > a,.vc_tta-tabs-position-left.vc_tta-tabs .vc_tta-panel.vc_active .vc_tta-panel-heading',
            'property' => 'background-color',
            'suffix'   => '!important',
        ),
        array(
            'element'  => '.vc_tta-tabs-position-top.vc_tta-tabs .vc_tta-tabs-container .vc_tta-tabs-list .vc_tta-tab.vc_active > a, .vc_tta-accordion.vc_tta .vc_tta-panel.vc_active .vc_tta-panel-heading',
            'property' => 'border-left-color',
            'suffix'   => '!important',
        ),
    ),
) );

Kirki::add_field( 'saturnthemes', array(
    'type'     => 'color',
    'setting'  => 'site_secondary_color',
    'label'    => esc_html__( 'Secondary Color', 'saturnthemes-industry' ),
    'section'  => $section,
    'priority' => $priority++,
    'default'  => SECONDARY_COLOR,
    'output'   => array(
        array(
            'element'  => '.staff-content .expert-socials > a:hover, .primary-button i, .primary-button .icon-in-btn, .widget_categories li a:hover, .widget_archive li a:hover,.widget_meta li a:hover,.widget_product_categories li a:hover,.wpb_widgetised_column .widget_nav_menu li a:hover,.sidebar .widget_nav_menu li a:hover, button, input[type="button"], input[type="reset"], input[type="submit"], #respond #submit, .button,.button.primary-button .fa,.comment-content cite,.pagination .page-numbers.next, .pagination .page-numbers.prev,.single_add_to_cart_button:before,.widget_search:after, .widget_product_search:after,.cart_totals,.woocommerce-checkout-review-order-table,.woocommerce-checkout .woocommerce-checkout-payment label',
            'property' => 'color',
        ),
        array(
            'element'  => '.button.primary-button:hover, .button.secondary-button:hover, .industry-subscribe-style2 .button.primary-button, .widget_price_filter .ui-slider .ui-slider-handle,.woocommerce-cart .button,.woocommerce-checkout .login .button, .woocommerce-checkout .checkout_coupon .button,.woocommerce-checkout #place_order:hover',
            'property' => 'background-color',
        ),
        array(
            'element'  => '.button.primary-button:hover, .button.secondary-button, button, input[type="button"], input[type="reset"], input[type="submit"], #respond #submit, .button,.woocommerce-cart .button,.woocommerce-checkout #place_order:hover, .industry-subscribe-style2 .button.primary-button',
            'property' => 'border-color'
        )
    ),
) );

Kirki::add_field( 'saturnthemes', array(
    'type'     => 'color',
    'setting'  => 'site_body_text_color',
    'label'    => esc_html__( 'Body Text Color', 'saturnthemes-industry' ),
    'section'  => $section,
    'priority' => $priority++,
    'default'  => BODY_TEXT_COLOR,
    'output'   => array(
        array(
            'element'  => 'body, .comments-link a,.tagcloud a,.post-tags a,.widget_categories a,.widget_categories a:visited,.widget_archive a,.widget_archive a:visited,.widget_meta a,.widget_meta a:visited,.widget_product_categories a,.widget_product_categories a:visited,.sidebar .widget_nav_menu a,.wpb_widgetised_column .widget_nav_menu a, .widget_nav_menu a:visited,.price del .amount,.product_list_widget del .amount,.select2-container .select2-choice,.select2-drop,.custom-contact-info a, .header-contact-detail-title',
            'property' => 'color',
        )
    ),
) );

Kirki::add_field( 'saturnthemes', array(
    'type'      => 'color',
    'setting'   => 'heading_color',
    'label'     => esc_html__( 'Heading Color', 'saturnthemes-industry' ),
    'section'   => $section,
    'priority'  => $priority++,
    'default'   => SECONDARY_COLOR,
    'transport' => 'postMessage',
    'output'    => array(
        array(
            'element'  => 'h1,h2,h3,h4,h5,h6',
            'property' => 'color',
        ),
    ),
) );

Kirki::add_field( 'saturnthemes', array(
    'type'      => 'color',
    'setting'   => 'link_color',
    'label'     => esc_html__( 'Link Color', 'saturnthemes-industry' ),
    'section'   => $section,
    'priority'  => $priority++,
    'default'   => SECONDARY_COLOR,
    'transport' => 'postMessage',
    'output'    => array(
        array(
            'element'  => 'a, a:visited, .share-wrapper a, .share-wrapper a:visited, .share-wrapper a:hover,.mini-cart .total,.mini-cart .cart_list a,.mini-cart .wc-forward',
            'property' => 'color',
        ),
    ),
) );

Kirki::add_field( 'saturnthemes', array(
    'type'      => 'color',
    'setting'   => 'link_color_hover',
    'label'     => esc_html__( 'Link Hover Color', 'saturnthemes-industry' ),
    'section'   => $section,
    'priority'  => $priority++,
    'default'   => PRIMARY_COLOR,
    'transport' => 'postMessage',
    'output'    => array(
        array(
            'element'  => 'a:hover, .site-footer .saturnthemes-social-widget a:hover',
            'property' => 'color',
        ),
    ),
) );

Kirki::add_field( 'saturnthemes', array(
    'type'      => 'color',
    'setting'   => 'button_color',
    'label'     => esc_html__( 'Button Color', 'saturnthemes-industry' ),
    'section'   => $section,
    'priority'  => $priority++,
    'default'   => PRIMARY_COLOR,
    'transport' => 'postMessage',
    'output'    => array(
        array(
            'element'  => '.secondary-button',
            'property' => 'background-color',
        ),
    ),
) );

Kirki::add_field( 'saturnthemes', array(
    'type'      => 'color',
    'setting'   => 'button_color_hover',
    'label'     => esc_html__( 'Button Hover Color', 'saturnthemes-industry' ),
    'section'   => $section,
    'priority'  => $priority++,
    'default'   => LINK_HOVER_COLOR,
    'transport' => 'postMessage',
    'output'    => array(
        array(
            'element'  => '.secondary-button:hover',
            'property' => 'background-color',
        ),
    ),
) );

