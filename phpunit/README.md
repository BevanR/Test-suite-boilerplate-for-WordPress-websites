# PHPunit test suite for WordPress websites

Configuration and support files for a suite of PHPunit tests for a WordPress website.

## Requirements

* [PHPunit](https://phpunit.de/manual/current/en/installation.html)

## Installation

1. `cd` to the root of the WordPress code, so that `ls` shows `index.php wp-admin/ wp-content/ wp-login.php` etc.
1. `mv` this directory to `test/phpunit/` so that this file is `test/phpunit/README.md`.
1. `cd test/phpunit/`
1. Create a new MySQL database and assign privileges to a user.  
  This test suite will **drop all tables** in the specified database each time it runs.
1. `cp wp-tests-config.local-sample.php wp-tests-config.local.php`
1. Modify `wp-tests-config.local.php` to use the new database and user.
1. `cp phpunit-sample.xml ../../phpunit.xml`
1. Optional; Modify `../../phpunit.xml` to include test directories of more plugins.
1. Optional; Write tests.  For an example, see [*Drupal Password Encryption* plugin's `AuthTest.php`](https://github.com/BevanR/Drupal-password-encryption-for-WordPress/tree/trunk/test/AuthTest.php).

## Usage

1. `cd` to the root of the WordPress code, so that `ls` shows `index.php wp-admin/ wp-content/ wp-login.php` etc.
1. `phpunit`

## How it works

- `test/phpunit/` contains configuration and support files specific to the test suite.
- Tests themselves go in other directories.  E.g. `/wp-content/plugins/EXAMPLE/test/*Test.php`.  
  See `phpunit.xml` to extend the list of test source files.
- `phpunit.xml` configures PHPunit when the `phpunit` command executes.
- `test/phpunit/wp-tests-config.php` and `wp-tests-config.local.php` configure the system under test.
- `test/phpunit/bootstrap.php` bootstraps the system under test, starting with configuration tasks, then handing off to WP's test suite's bootstrap process (`test/phpunit/includes/bootstrap.php`).
- `test/phpunit/includes/` is WP core's library of test suite helper files.  
  It is sourced from `svn checkout http://develop.svn.wordpress.org/trunk/tests/phpunit/includes/` and may need updating with WP upgrades.
