<?php
/**
 * Bootstraps the system under test with specific configuration.
 */

require_once('includes/functions.php');

function _testsuite_enable_plugins() {
    // Set the theme.
    switch_theme('Custom');

	// Activate some plugins.
	$plugins = array(
		'drupal-password-encryption/drupal-password-encryption.php'
	);
	update_option( 'active_plugins', $plugins );
}

tests_add_filter( 'muplugins_loaded', '_testsuite_enable_plugins' );

// Use WP's test suite's bootstrap to complete bootstrapping the system under test.
require 'includes/bootstrap.php';
