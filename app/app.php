<?php

namespace App;

use App\Services\AppServices;

class App
{
    public static function fire()
    {
        if(version_compatible(env('VERSION'))) {
            wp_die(__('You must update your wordpress to use this plugin', 'nuworks'));
        }

        (new AppServices)->start();
    }
}
