<?php

namespace Fsylum\Plugin\WP\CLI;

use WP_CLI;

class ExampleCommand
{
    /**
     * Command description
     *
     * ## EXAMPLES
     *
     *     wp example test
     *
     * @when after_wp_load
     */
    public function test($args, $assoc_args)
    {
        WP_CLI::log('Running command `test` from `ExampleCommand`...');
    }
}
