<?php

/**
 * Theme globals class
 * Here we store the global state of the theme. All globals are here
 */
class tagdiv_global {

	/**
	 * theme plugins
	 * 'PLUGIN_CONSTANT' => 'hash'
	 * @var array
	 */
	private static $td_plugins = array(
		'TD_COMPOSER'       => array( 'version' => '72f925014dc5642945728092f057897e',         'class' => 'tdc_version_check' ),
		'TD_CLOUD_LIBRARY'  => array( 'version' => 'b379c96c54343541fd8742379a419361',    'class' => 'tdb_version_check' ),
		'TD_SOCIAL_COUNTER' => array( 'version' => '0f1656c48c5da80d87e8e2dbbe8b195b',   'class' => 'td_social_counter_plugin' ),
		'TD_NEWSLETTER'     => array( 'version' => '795e74d53223156068c4e29e39e0ed3e',       'class' => 'td_newsletter_version_check' ),
		'TD_SUBSCRIPTION'   => array( 'version' => '___td-subscription___',     'class' => 'tds_version_check' ),
		'TD_MOBILE_PLUGIN'  => array( 'version' => '6fd9788f56c19b52a1686714ef76f15f',    'class' => 'td_mobile_theme' ),
		'AMP'               => array( 'version' => '___amp___',                 'class' => 'AMP_Autoloader' ),
		'TD_STANDARD_PACK'  => array( 'version' => '8f2d47acef43f76b1dfa75a39c0fe3df',    'class' => 'tdsp_version_check' ),
		'TD_WOO'            => array( 'version' => '8222a9dbebfed344aa024334a38b656c',              'class' => 'td_woo_version_check' )
	);


	/**
	 * Get the $td_plugins hashes array
	 * @return array
	 */
	static function get_td_plugins() {
		return self::$td_plugins;
	}

	/**
	 * set below with either http or https string
	 * @var string
	 */
    static $http_or_https = 'http';

	/**
	 * Determines if SSL is used and sets the $http_or_https global
	 */
    static function set_http_or_https() {
	    if ( is_ssl() ) {
		    self::$http_or_https = 'https';
	    }
    }

	/**
	 * the plugins that are installable via the theme > plugins panel & tgma
	 * @var array
	 */
    static $theme_plugins_list = array();

	/**
	 * the plugins that are just for information proposes
	 * @var array
	 */
	static $theme_plugins_for_info_list = array();


    /**
     * the js files that are used in wp-admin
     * @var array
     *
     * @todo check what js files are needed for wp admin
     */
    static $js_files_for_wp_admin = array (
        'td_wp_admin'     => '/includes/wp-booster/wp-admin/js/td_wp_admin.js',
        'td_edit_page'    => '/includes/wp-booster/wp-admin/js/td_edit_page.js',
        'td_page_options' => '/includes/wp-booster/wp-admin/js/td_page_options.js',
        'td_tooltip'      => '/includes/wp-booster/wp-admin/js/tooltip.js',
	    'td_confirm'      => '/includes/wp-booster/wp-admin/js/tdConfirm.js',
    );

}

/**
 * set http or https
 */
tagdiv_global::set_http_or_https();


