<?php

namespace App\Classes;

class Enqueue
{
    public function register()
    {
        add_action('admin_enqueue_scripts', [$this, 'boot']);
    }

    public function boot()
    {
        wp_enqueue_style('style', plugins_url('/../../public/css/app.css', __FILE__));
        wp_enqueue_script('script', plugins_url('/../../public/js/app.js', __FILE__));
    }
}
