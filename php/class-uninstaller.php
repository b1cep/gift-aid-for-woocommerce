<?php
/**
 * Uninstaller Class.
 *
 * @since	1.3.0
 *
 * @package dtg\gift_aid_for_woocommerce
 *
 * @todo - Needs work to provide proper validation ahead of an uninstall.
 */

namespace dtg\gift_aid_for_woocommerce;

/**
 * Class Uninstaller
 *
 * Carry out actions when the plugin is uninstalled.
 *
 * Things to consider:
 *
 * - This method should be static
 * - Check if the $_REQUEST content actually is the plugin name
 * - Run an admin referrer check to make sure it goes through authentication
 * - Verify the output of $_GET makes sense
 * - Repeat with other user roles. Best directly by using the links/query string parameters.
 * - Repeat things for multisite. Once for a single site in the network, once sitewide.
 *
 * @since		1.3
 *
 * @package dtg\gift_aid_for_woocommerce
 */
class Uninstaller {

	/**
	 * Path to the root plugin file.
	 *
	 * @var 	string
	 * @access	private
	 * @since	1.3.0
	 */
	private $plugin_root;

	/**
	 * Plugin name.
	 *
	 * @var 	string
	 * @access	private
	 * @since	1.3.0
	 */
	private $plugin_name;

	/**
	 * Plugin prefix.
	 *
	 * @var 	string
	 * @access	private
	 * @since	1.3.0
	 */
	private $plugin_prefix;

	/**
	 * Constructor.
	 *
	 * @since		1.3
	 */
	public function __construct() {
		$this->plugin_root 		 = DTG_GIFT_AID_ROOT;
		$this->plugin_name		 = DTG_GIFT_AID_NAME;
		$this->plugin_prefix     = DTG_GIFT_AID_PREFIX;
	}

	/**
	 * Unleash Hell.
	 *
	 * @since		1.3
	 */
	public function run() {
		// Exit if WordPress hasn't requested the uninstall.
		// if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
		// 	exit();
		// }
	}
}
