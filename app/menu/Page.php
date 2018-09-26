<?php

namespace App\Menu;

use App\Menu\PageTransformer;

Class Page
{
    use PageTransformer;

    public function create($page_title, $controller)
    {
        $this->menu['page_title'] = $page_title;
        $this->menu['menu_title'] = $this->menu_title($page_title);
        $this->menu['capability'] = $this->capability;
        $this->menu['menu_slug']  = $this->menu_slug($page_title);
        $this->menu['callback'] = $controller;

        return $this;
    }

    public function icon($icon = null)
    {
        $this->menu['icon'] = $icon;

        return $this;
    }

    public function position($position = null)
    {
        $this->menu['position'] = $position;

        return $this;
    }

    public function make()
    {
        add_menu_page(
            $this->menu['page_title'],
            $this->menu['menu_title'],
            $this->menu['capability'],
            $this->menu['menu_slug'],
            $this->menu['callback'],
            $this->menu['icon'],
            $this->menu['position']
        );

        return $this;
    }
}
