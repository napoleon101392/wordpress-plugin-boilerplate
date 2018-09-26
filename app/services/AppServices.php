<?php

namespace App\Services;

class AppServices
{
    public function start()
    {
        foreach(config('app.providers') as $class) {
            !method_exists($class, 'register') ?: (new $class)->register();
        }
    }
}
