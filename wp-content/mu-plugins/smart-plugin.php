<?php
/**
 * Plugin Name: SmartSites
 * Description:
 * Version: 1.0
 * Author: SmartSites
 * Author URI: https://www.smartsites.com
 * Text Domain: smartsites
 */

 
if (!defined('ABSPATH')) {
    die('Invalid request.');
}

if ( !defined( 'SMART_SS_PATH' ) ) {
    define('SMART_SS_PATH', plugin_dir_path(__FILE__));
}

foreach (glob(SMART_SS_PATH . "inc/*.php") as $filename) {
    include_once $filename;
}