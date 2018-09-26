<?php

defined('ABSPATH') or die;

define('PLUGIN_BASE', plugin_basename( __FILE__ ));

require __DIR__ . '/../vendor/autoload.php';

require 'vendor/autoload.php';

$dotenv = new Dotenv\Dotenv(__DIR__);

$dotenv->load();
