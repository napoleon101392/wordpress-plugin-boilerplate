<?php

namespace App\Menu;

trait PageTransformer
{
    protected $menu;

    protected $capability;

    public function __construct($capability)
    {
        $this->capability = $capability;
        $this->menu = [
            'icon' => null,
            'position' => null
        ];
    }

    private function menu_title($subject)
    {
        $string = str_replace(['_', '.', '-'], ' ', $subject);

        return ucfirst($string);
    }

    private function menu_slug($subject)
    {
        $string = str_replace(' ', '-', $subject);

        return strtolower($string);
    }
}
