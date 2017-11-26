<?php // @codingStandardsIgnoreLine
/**
 * The main theme class. Registers theme assets, menus, and fonts.
 *
 * @package JMW2016
 */

namespace JMW2018;

/**
 * Class Theme
 *
 * @package JMW2016
 */
class Theme {
	/**
	 * Version of the theme.
	 *
	 * @var string
	 */
	public $version = '0.1.0';

	/**
	 * Setup theme assets and support.
	 */
	public function setup() {
		$this->load_helper_functions();

		// Admin setup.
		add_action( 'admin_init', [ $this, 'support' ] );
		add_action( 'admin_init', [ $this, 'admin_styles' ] );

		// Menu setup.
		add_action( 'init', [ $this, 'menus' ] );

		// Assets setup.
		add_action( 'wp_enqueue_scripts', [ $this, 'fonts' ] );
		add_action( 'wp_enqueue_scripts', [ $this, 'styles' ] );
		add_action( 'wp_enqueue_scripts', [ $this, 'scripts' ] );

		// Login setup.
		add_action( 'login_enqueue_scripts', [ $this, 'login_styles' ] );
	}

	/**
	 * Require statements for helper functions.
	 */
	public function load_helper_functions() {
		$path = plugin_dir_path( dirname( __FILE__ ) );

		require_once $path . '/template-tags.php';
		require_once $path . '/query.php';
	}

	/**
	 * Add theme support.
	 */
	public function support() {
		// Turn on featured images.
		add_theme_support( 'post-thumbnails' );
	}

	/**
	 * Register theme menus.
	 */
	public function menus() {
		register_nav_menus( [
			'main-menu' => 'Main Menu',
		] );
	}

	/**
	 * Enqueue theme fonts.
	 */
	public function fonts() {
		$query_args = [
			'family' => 'Lato:400,700|Montserrat:400,700',
			'subset' => 'latin,latin-ext',
		];

		wp_enqueue_style( 'google_fonts', add_query_arg( $query_args, '//fonts.googleapis.com/css', [], null ) );
	}

	/**
	 * Register admin stylesheets.
	 */
	public function admin_styles() {
		// Editor styles.
		add_editor_style( get_template_directory_uri() . '/assets/dist/css/editor.css' );
	}

	/**
	 * Register theme styles.
	 */
	public function styles() {
		// Theme stylesheet.
		wp_enqueue_style( 'jmw_main_theme', get_stylesheet_directory_uri() . '/assets/dist/css/master.css', [], $this->version );

	}

	/**
	 * Register login styles.
	 */
	public function login_styles() {
		wp_enqueue_style( 'jmw_login', get_stylesheet_directory_uri() . '/assets/dist/css/login.css', [], $this->version, false );
	}

	/**
	 * Register theme scripts.
	 */
	public function scripts() {
		wp_enqueue_script( 'jmw_main_js', get_template_directory_uri() . '/assets/dist/js/app.js', [ 'jquery' ], $this->version, true );
	}
}
