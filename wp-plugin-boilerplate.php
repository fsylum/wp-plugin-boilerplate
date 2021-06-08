<?php
/**
 * Plugin Name: wp-plugin-boilerplate
 * Plugin URI: https://github.com/fsylum/wp-plugin-boilerplate
 * Description: Personal WordPress plugin boilerplate
 * Version: 1.0.0
 * Author: Firdaus Zahari
 * Author URI: https://fsylum.net
 * Requires at least: 5.6
 * Requires PHP:      7.4
 */

require __DIR__ . '/vendor/autoload.php';

define('WPB_PLUGIN_URL', untrailingslashit(plugin_dir_url(__FILE__)));
define('WPB_PLUGIN_PATH', untrailingslashit(plugin_dir_path(__FILE__)));
define('WPB_PLUGIN_BASENAME', plugin_basename(__FILE__));
define('WPB_PLUGIN_VERSION', '1.0.0');

$app = new Fsylum\Plugin\App;

// Load internal WP componments
$app->addService(new Fsylum\Plugin\WP\Auth);
$app->addService(new Fsylum\Plugin\WP\Admin);

// Finally run it
$app->run();

// WP_CLI specific commands
if (class_exists('WP_CLI')) {
    WP_CLI::add_command('example', 'Fsylum\Plugin\WP\CLI\ExampleCommand');
}
