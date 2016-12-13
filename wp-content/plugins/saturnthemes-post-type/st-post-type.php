<?php
/*
Plugin Name: SaturnThemes Post Type
Plugin URI: http://saturnthemes.com/
Description: SaturnThemes Post Type
Author: SaturnThemes
Author URI: http://facewp.com/
Text Domain: saturnthemes_post_type
Version: 1.0
*/

define( 'SATURNTHEMES_POST_TYPE', 'saturnthemes_post_type' );

$plugin_path = dirname(__FILE__);

require_once $plugin_path . '/post_type.class.php';

$options = get_option('saturnthemes_post_types_options');

$defaultPostTypesOptions = array(

	'staff' => array(
		'title' => __( 'Staff', SATURNTHEMES_POST_TYPE ),
		'plural_title' => __( 'Staff', SATURNTHEMES_POST_TYPE ),
		'rewrite' => 'staff'
	),
	'services' => array(
		'title' => __( 'Services', SATURNTHEMES_POST_TYPE ),
		'plural_title' => __( 'Services', SATURNTHEMES_POST_TYPE ),
		'rewrite' => 'services'
	),
);

$saturnthemes_post_types_options = wp_parse_args( $options, $defaultPostTypesOptions );

SATURNTHEMES_PostType::registerPostType( 'testimonial', __( 'Testimonial', SATURNTHEMES_POST_TYPE ),
	array(  
		'menu_icon' => 'dashicons-testimonial',
		'supports' => array( 'title', 'excerpt', 'thumbnail' ), 
		'exclude_from_search' => true, 
		'publicly_queryable' => false 
	)
);

// Staff post type
SATURNTHEMES_PostType::registerPostType( 'staff', $saturnthemes_post_types_options['staff']['title'],
	array( 
		'pluralTitle' => $saturnthemes_post_types_options['staff']['plural_title'],
		'menu_icon' => 'dashicons-businessman', 
		'supports' => array( 'title', 'editor', 'thumbnail') ,
		'rewrite' => array( 'slug' => $saturnthemes_post_types_options['staff']['rewrite'] ),
	) 
);

// Services
SATURNTHEMES_PostType::registerPostType( 'services', $saturnthemes_post_types_options['services']['title'],
	array( 
		'menu_icon' => 'dashicons-clipboard',
		'pluralTitle' => $saturnthemes_post_types_options['services']['plural_title'],
		'supports' => array( 'title', 'editor', 'thumbnail', 'comments', 'excerpt' ),
		'rewrite' => array( 'slug' => $saturnthemes_post_types_options['services']['rewrite'] ),
                'show_in_nav_menus'  => true,
	) 
);

SATURNTHEMES_PostType::addTaxonomy( 'services_category', __( 'Categories', SATURNTHEMES_POST_TYPE ), 'services' );

SATURNTHEMES_PostType::addMetaBox( 'testimonial_info', __( 'Testimonial Info', SATURNTHEMES_POST_TYPE ), array( 'testimonial' ), '', '', '', array(
	'fields' => array(
		'testimonial_profession'   => array(
			'label' => __( 'Profession', SATURNTHEMES_POST_TYPE ),
			'type'  => 'text'
		)
	)
) );

SATURNTHEMES_PostType::addMetaBox( 'expert_info', __( 'Expert Info', SATURNTHEMES_POST_TYPE ), array( 'staff' ), '', '', '', array(
	'fields' => array(
		'expert_sphere'   => array(
			'label' => __( 'Staff Sphere', SATURNTHEMES_POST_TYPE ),
			'type'  => 'text'
		)
	)
) );

SATURNTHEMES_PostType::addMetaBox( 'expert_socials', __( 'Expert Socials', SATURNTHEMES_POST_TYPE ), array( 'staff' ), '', '', '', array(
	'fields' => array(
		'facebook'   => array(
			'label' => __( 'Facebook', SATURNTHEMES_POST_TYPE ),
			'type'  => 'text'
		),
		'twitter'   => array(
			'label' => __( 'Twitter', SATURNTHEMES_POST_TYPE ),
			'type'  => 'text'
		),
		'google-plus'   => array(
			'label' => __( 'Google +', SATURNTHEMES_POST_TYPE ),
			'type'  => 'text'
		),
		'linkedin'   => array(
			'label' => __( 'LinkedIn', SATURNTHEMES_POST_TYPE ),
			'type'  => 'text'
		),
		'youtube-play'   => array(
			'label' => __( 'Youtube', SATURNTHEMES_POST_TYPE ),
			'type'  => 'text'
		),
		'email'   => array(
			'label' => __( 'Email', SATURNTHEMES_POST_TYPE ),
			'type'  => 'text'
		),
	)
) );

function saturnthemes_plugin_styles() {
    $plugin_url =  plugins_url('', __FILE__);

    wp_enqueue_style( 'admin-styles', $plugin_url . '/assets/css/admin.css', null, null, 'all' );

    wp_enqueue_style( 'wp-color-picker' );
    wp_enqueue_script( 'wp-color-picker');

    wp_enqueue_style( 'saturnthemescss-datetimepicker', $plugin_url . '/assets/css/jquery.datetimepicker.css', null, null, 'all' );
    wp_enqueue_script( 'saturnthemesjs-datetimepicker', $plugin_url . '/assets/js/jquery.datetimepicker.js', array( 'jquery' ), null, true );

    wp_enqueue_media();
}

add_action( 'admin_enqueue_scripts', 'saturnthemes_plugin_styles' );

add_action('plugins_loaded', 'saturnthemes_plugin_setup');

function saturnthemes_plugin_setup(){

    $plugin_url =  plugins_url('', __FILE__);

    load_plugin_textdomain( 'saturnthemes_post_type', false, $plugin_url . '/languages' );

}


// SATURNTHEMES Post Type Rewrite subplugin
add_action( 'admin_menu', 'saturnthemes_register_post_types_options_menu' );

if( ! function_exists( 'saturnthemes_register_post_types_options_menu' ) ){
	function saturnthemes_register_post_types_options_menu(){
		add_submenu_page( 'tools.php', __('SATURNTHEMES Post Types', SATURNTHEMES_POST_TYPE), __('SATURNTHEMES Post Types', SATURNTHEMES_POST_TYPE), 'manage_options', 'saturnthemes_post_types', 'saturnthemes_post_types_options' );
	}
}

if( ! function_exists( 'saturnthemes_post_types_options' ) ){
	function saturnthemes_post_types_options(){

		if ( ! empty( $_POST['saturnthemes_post_types_options'] ) ) {
			update_option( 'saturnthemes_post_types_options', $_POST['saturnthemes_post_types_options'] );
		}

		$options = get_option('saturnthemes_post_types_options');

		$defaultPostTypesOptions = array(

			'staff' => array(
				'title' => __( 'Staff', SATURNTHEMES_POST_TYPE ),
				'plural_title' => __( 'Staff', SATURNTHEMES_POST_TYPE ),
				'rewrite' => 'staff'
			),
			'services' => array(
				'title' => __( 'Services', SATURNTHEMES_POST_TYPE ),
				'plural_title' => __( 'Services', SATURNTHEMES_POST_TYPE ),
				'rewrite' => 'services'
			)
		);

		$options = wp_parse_args( $options, $defaultPostTypesOptions );
		
		$content = '';

		$content .= '
			<div class="wrap">
		        <h2>' . __( 'Custom Post Type Renaming Settings', SATURNTHEMES_POST_TYPE ) . '</h2>

		        <form method="POST" action="">
		            <table class="form-table">';
						foreach ($defaultPostTypesOptions as $key => $value){
							$content .= '
								<tr valign="top">
									<th scope="row">
										<label for="'.$key.'_title">' . __( '"'.$value['title'].'" title (admin panel tab name)', SATURNTHEMES_POST_TYPE ) . '</label>
									</th>
									<td>
				                        <input type="text" id="'.$key.'_title" name="saturnthemes_post_types_options['.$key.'][title]" value="' . $options[$key]['title'] . '"  size="25" />
				                    </td>
								</tr>
								<tr valign="top">
				                    <th scope="row">
				                        <label for="'.$key.'_plural_title">' . __( '"'.$value['plural_title'].'" plural title', SATURNTHEMES_POST_TYPE ) . '</label>
				                    </th>
				                    <td>
				                        <input type="text" id="'.$key.'_plural_title" name="saturnthemes_post_types_options['.$key.'][plural_title]" value="' . $options[$key]['plural_title'] . '"  size="25" />
				                    </td>
				                </tr>
				                <tr valign="top">
				                    <th scope="row">
				                        <label for="'.$key.'_rewrite">' . __( '"'.$value['plural_title'].'" rewrite (URL text)', SATURNTHEMES_POST_TYPE ) . '</label>
				                    </th>
				                    <td>
				                        <input type="text" id="'.$key.'_rewrite" name="saturnthemes_post_types_options['.$key.'][rewrite]" value="' . $options[$key]['rewrite'] . '"  size="25" />
				                    </td>
				                </tr>
				                <tr valign="top"><th scope="row"></th></tr>
			                ';
						}
		 $content .='</table>
		            <p>' . __( "NOTE: After you change the rewrite field values, you'll need to refresh permalinks under Settings -> Permalinks", SATURNTHEMES_POST_TYPE ) . '</p>
		            <br/>
		            <p>
						<input type="submit" value="' . __( 'Save settings', SATURNTHEMES_POST_TYPE ) . '" class="button-primary"/>
					</p>
		        </form>
		    </div>
		';
		
		echo $content;
	}
}