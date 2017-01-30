<?php

/*
 Plugin Name: Ultimate Directory German PLZ und State Search
 Plugin URI: https://github.com/Themekraft/directory
 Description: Ultimate Directory German PLZ und State Search with German Map to click the States
 Version: 0.1
 Author: Sven Lehnert
 Author URI: https://profiles.wordpress.org/svenl77
 License: GPLv2 or later
 Network: false

 *****************************************************************************
 *
 * This script is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 ****************************************************************************
 */


class TK_Ultimate_Directory_PLZ_SEARCH_DE {

	public function __construct() {

		// Add an init hook to allow other plugins to hook into the init
		$this->init_hook();

		// Some constance needed to get files and templates and make them overwrite in the theme possible. tk_ud_INSTALL_PATH and tk_ud_INCLUDES_PATH
		$this->load_constants();

		// Load all needed files
		add_action( 'init', array( $this, 'includes' ), 1 );

		// Load the plugin translation files
		add_action( 'init', array( $this, 'load_plugin_textdomain' ), 10, 1 );

		// Admin js
		// add_action( 'admin_enqueue_scripts', array( $this, 'admin_js' ), 1, 1 );

		// Front css
		add_action( 'wp_enqueue_scripts', array( $this, 'front_js' ), 1005, 1 );

	}


	/**
	 * Defines TK_Ultimate_Directory action
	 *
	 * @package Ultimate Directory
	 * @since 0.1
	 */

	public function init_hook() {

		do_action( 'tk_ud_init' );

	}

	/**
	 * Defines constants needed throughout the plugin.
	 *
	 * @package Ultimate Directory
	 * @since 0.1
	 */

	public function load_constants() {

		if ( ! defined( 'TK_UD_PLZ_INSTALL_URL' ) ) {
			define( 'TK_UD_PLZ_INSTALL_URL', plugins_url( '/', __FILE__ ) );
		}

		if ( ! defined( 'TK_UD_PLZ_INSTALL_PATH' ) ) {
			define( 'TK_UD_PLZ_INSTALL_PATH', dirname( __FILE__ ) . '/' );
		}

		if ( ! defined( 'TK_UD_PLZ_INCLUDES_PATH' ) ) {
			define( 'TK_UD_PLZ_INCLUDES_PATH', TK_UD_PLZ_INSTALL_PATH . 'includes/' );
		}

	}

	/**
	 * Includes files needed by Ultimate Directory
	 *
	 * @package Ultimate Directory
	 * @since 0.1
	 */

	public function includes() {

		require_once( TK_UD_PLZ_INCLUDES_PATH . '/functions.php' );
		require_once( TK_UD_PLZ_INCLUDES_PATH . '/shortcodes.php' );

		require_once( TK_UD_PLZ_INCLUDES_PATH . 'resources/ogdbPLZnearby/ogdbPLZnearby2.lib.php' );

	}

	/**
	 * Loads the textdomain for the plugin
	 *
	 * @package Ultimate Directory
	 * @since 0.1
	 */

	public function load_plugin_textdomain() {

		load_plugin_textdomain( 'tk-um', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );

	}

	/**
	 * Enqueue the needed JS for the admin screen
	 *
	 * @package Ultimate Directory
	 * @since 0.1
	 *
	 * @param $hook_suffix
	 */
	function admin_js( $hook_suffix ) {}

	/**
	 * Enqueue the needed JS for the front
	 *
	 * @package Ultimate Directory
	 * @since 0.1
	 *
	 */
	function front_js() {
		wp_enqueue_script( 'tk-ud-plz-search-de', plugins_url( 'assets/js/search-plz.js', __FILE__ ), array( 'jquery' ) );
		wp_enqueue_script( 'tk-ud-plz-papaparse', plugins_url( 'assets/resources/plzTeam/js/papaparse.min.js', __FILE__ ), array( 'jquery' ) );
	}


}

new TK_Ultimate_Directory_PLZ_SEARCH_DE;