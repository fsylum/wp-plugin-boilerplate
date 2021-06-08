<?php

namespace Fsylum\Plugin\WP;

use Fsylum\Plugin\Contracts\Runnable;

class Admin implements Runnable
{
    public function run()
    {
        add_action('admin_enqueue_scripts', [$this, 'enqueue_admin_scripts']);
        add_action('admin_enqueue_scripts', [$this, 'enqueue_admin_styles']);
    }

    public function enqueue_admin_scripts()
    {
        wp_enqueue_script('wp-plugin-script-manifest', WPB_PLUGIN_URL . '/assets/dist/js/manifest.js', [], WPB_PLUGIN_VERSION, true);
        wp_enqueue_script('wp-plugin-script-app', WPB_PLUGIN_URL . '/assets/dist/js/app.js', ['jquery'], WPB_PLUGIN_VERSION, true);
    }

    public function enqueue_admin_styles()
    {
        wp_enqueue_style('wp-plugin-style', WPB_PLUGIN_URL . '/assets/dist/css/app.css', [], WPB_PLUGIN_VERSION);
    }
}
