<?php

if(! function_exists('config'))
{
    function config($path)
    {
        $file = explode('.', $path)[0];
        $index = explode('.', $path)[1];
        $data = include_once(__DIR__ . "/config/{$file}.php");

        return $data[$index];
    }
}

if(! function_exists('view')) {
    function view($file, ...$variables)
    {
        foreach($variables as $var) {
            extract($var);
        }

        return require __DIR__ . "/resources/views/{$file}.view.php";
    }
}
