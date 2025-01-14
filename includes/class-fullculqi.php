<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * FullCulqi Class
 * @since  1.0.0
 * @package Includes / FullCulqi
 */
class FullCulqi {

	/**
	 * Plugin Instance
	 */
	protected static $_instance = null;

	/**
	 * Settings Instance
	 */
	protected $settings;
	
	/**
	 * Admin Instance
	 */
	protected $admin;

	/**
	 * Payment Instance
	 */
	protected $payment;

	/**
	 * Checkout Instance
	 */
	protected $checkout;

	/**
	 * Ajax Instance
	 */
	protected $ajax;

	/**
	 * License Instance
	 */
	protected $license;

	/**
	 * Ensures only one instance is loaded or can be loaded.
	 */
	public static function instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}

		return self::$_instance;
	}

	/**
	 * Cloning is forbidden.
	 */
	public function __clone() {
		_doing_it_wrong( __FUNCTION__, esc_html__( 'Cheatin&#8217; huh?', 'fullculqi' ), '2.1' );
	}

	/**
	 * Unserializing instances of this class is forbidden.
	 */
	public function __wakeup() {
		_doing_it_wrong( __FUNCTION__, esc_html__( 'Cheatin&#8217; huh?', 'fullculqi' ), '2.1' );
	}


	/**
	 * Construct
	 * @return mixed
	 */
	function __construct() {

		$this->load_dependencies();
	}

	/**
	 * Load Dependencies
	 * @return mixed
	 */
	private function load_dependencies() {

		require_once FULLCULQI_DIR . 'vendor/autoload.php';
		require_once FULLCULQI_DIR . 'includes/functions.php';
		require_once FULLCULQI_DIR . 'includes/class-fullculqi-i18n.php';
		require_once FULLCULQI_DIR . 'includes/class-fullculqi-cpt.php';
		require_once FULLCULQI_DIR . 'includes/class-fullculqi-logs.php';
		require_once FULLCULQI_DIR . 'includes/class-fullculqi-ajax.php';

		// Endpoint
		require_once FULLCULQI_DIR . 'includes/class-fullculqi-endpoints.php';
		require_once FULLCULQI_DIR . 'includes/class-fullculqi-webhooks.php';

		// 3rd-party
		require_once FULLCULQI_DIR . 'includes/3rd-party/plugins/woocommerce/class-fullculqi-wc.php';
		

		if( is_admin() ) {
			require_once FULLCULQI_DIR . 'includes/admin/class-fullculqi-settings.php';
			require_once FULLCULQI_DIR . 'includes/admin/class-fullculqi-welcome.php';
			
			// Metaboxes
			require_once FULLCULQI_DIR . 'includes/admin/metaboxes/class-fullculqi-metaboxes.php';
			require_once FULLCULQI_DIR . 'includes/admin/metaboxes/class-fullculqi-orders.php';
			require_once FULLCULQI_DIR . 'includes/admin/metaboxes/class-fullculqi-charges.php';
			require_once FULLCULQI_DIR . 'includes/admin/metaboxes/class-fullculqi-customers.php';
		}

		do_action( 'fullculqi_init' );
	}

}
?>