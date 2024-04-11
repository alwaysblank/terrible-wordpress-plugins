<?php
/**
 * Plugin Name: Remove Annoying Admin Notices
 * Version: 1.0.0
 * Plugin URI: http://www.terriblewordpressplugins.com/
 * Description: Remove annoying usages of the `admin_notices` hook which is, frankly, all of them.
 * Author: Ben Martinez-Bateman
 * Author URI: https://www.alwaysblank.dev
 * Requires at least: 6.0
 * Tested up to: 6.0
 *
 * @package WordPress
 * @author Ben Martinez-Bateman
 * @since 1.0.0
 */

add_action( 'admin_notices', function() {
	remove_all_actions( 'admin_notices' );
}, PHP_INT_MIN );
