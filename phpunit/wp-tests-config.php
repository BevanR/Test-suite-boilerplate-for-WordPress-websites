<?php
/**
 * WP configuration for the WP system under test.
 *
 * It's own `wp-config.php` will be ignored.
 */

// Path to the WP system under test.  Keep a backslash on the end.
define( 'ABSPATH', './' );

// Test with WordPress debug mode (default).
define( 'WP_DEBUG', true );

define( 'WP_TESTS_DOMAIN', 'example.org' );
define( 'WP_TESTS_EMAIL', 'admin@example.org' );
define( 'WP_TESTS_TITLE', 'ArcheTest' );

define( 'WP_PHP_BINARY', 'php' );

define( 'WPLANG', '' );

/**
 * MySQL settings.
 */

// The test suite will drop all tables with the specified table prefix.
// Only numbers, letters, and underscores.
$table_prefix  = 'wptests_';

define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

// Most MySQL connection settings are specified in `wp-tests-config.local.php`.
//
// wp-tests-config.local.php is not version controlled which allows for
// environment-specific settings.
//
// @see "Installation" in README.md
// @see wp-tests-config.local-sample.php
require('wp-tests-config.local.php');
