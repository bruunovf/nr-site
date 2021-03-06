<?php
class SaturnThemes_Industry_Core {
  protected static $_instance = null;

  protected $data = array();

	public static function instance() {
    if ( is_null( self::$_instance ) ) {
      self::$_instance = new self();
    }
    return self::$_instance;
  }

  public function __construct() {
    $this->define_constants();
    $this->includes();
    $this->init_hooks();
  }

  private function init_hooks() {

  }

  private function define_constants() {
    $theme = wp_get_theme();

    $this->define( 'SaturnThemes_THEME', $theme->name );
    $this->define( 'SATURNTHEMES_INDUSTRY_THEME_VERSION', $theme->version );
  }

  private function define( $name, $value ) {
    if ( ! defined( $name ) ) {
      define( $name, $value );
    }
  }

  private function is_request( $type ) {
    switch ( $type ) {
      case 'admin' :
        return is_admin();
      case 'ajax' :
        return defined( 'DOING_AJAX' );
      case 'cron' :
        return defined( 'DOING_CRON' );
      case 'frontend' :
        return ( ! is_admin() || defined( 'DOING_AJAX' ) ) && ! defined( 'DOING_CRON' );
    }
  }

  public function includes() {
    include_once( $this->core_path() . 'includes/custom-sidebar.php' );
    include_once( $this->core_path() . 'includes/mega-menu/mega-menu.php' );
    include_once( $this->core_path() . 'includes/class-saturnthemes-customizer.php' );

    if ( $this->is_request( 'admin' ) ) {
      include_once( 'includes/admin/class-saturnthemes-admin.php' );
      include_once( 'includes/libraries/class-tmg-plugin-activation.php' );
    }

    if ( $this->is_request( 'ajax' ) ) {
      $this->ajax_includes();
    }

    if ( $this->is_request( 'frontend' ) ) {
      $this->frontend_includes();
    }
  }

  public function ajax_includes() {
  }

  /**
   * Include required frontend files.
   */
  public function frontend_includes() {
  }

  /**
   * Get the plugin url.
   * @return string
   */
  public function core_url() {
    return get_template_directory_uri() . '/core/';
  }

  /**
   * Get the plugin path.
   * @return string
   */
  public function core_path() {
    return get_template_directory() . '/core/';
  }

  public function template_path() {
    return get_template_directory();
  }

  public function is_debug() {
    return defined( 'WP_DEBUG' ) && WP_DEBUG;
  }

  public function set( $key, $value ) {
  	$this->data[ $key ] = $value;
  }

  public function get( $key ) {
  	return isset( $this->data[ $key ] ) ? $this->data[ $key ] : null;
  }
}

function SaturnThemesC() {
  return SaturnThemes_Industry_Core::instance();
}

SaturnThemesC();
