<?php

/**
 * Nuworks\Nuworks\App
 *
 * Registers all the actions
 */
App\App::fire();

/**
 * Plugin activation
 *
 * @return void
 */
register_activation_hook(__FILE__, function(){
    flush_rewrite_rules();
});

/**
 * Plugin deactivation
 *
 * @return void
 */
register_deactivation_hook(__FILE__, function(){
    flush_rewrite_rules();
});
