<?php

namespace App\Classes;

use App\Menu\Page;
use App\Http\Controllers\TestController;

class AdminMenu
{
    public function register()
    {
        add_action('admin_menu', [$this, 'boot']);
    }

    public function boot()
    {
        $page = new Page('manage_options');

        $page->create('Nuworks', [new TestController, 'create'])
             ->icon('dashicons-wordpress')
             ->make();
    }
}
