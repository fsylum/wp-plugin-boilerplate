<?php

namespace Fsylum\Plugin\WP;

use Fsylum\Plugin\Contracts\Runnable;

class Auth implements Runnable
{
    public function run()
    {
        add_filter('login_headerurl', [$this, 'login_headerurl']);
        add_filter('login_headertext', [$this, 'login_headertext']);
    }

    public function login_headerurl()
    {
        return home_url();
    }

    public function login_headertext()
    {
        return get_bloginfo('name');
    }
}
