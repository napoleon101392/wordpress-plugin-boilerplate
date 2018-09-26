<?php

defined('WP_UNINSTALL_PLUGIN') or die;

# option1
$books = get_posts([
    'post_type' => 'book',
    'numberposts' => -1
]);

foreach($books as $book) {
    wp_delete_post($book->ID, true);
}

# option2
global $wpdb;

$wpdb->query("DELETE FROM wp_posts WHERE post_type = 'book'");
$wpdb->query("DELETE FROM wp_postmeta WHERE post_id NOT IN (SELECT id FROM wp_posts)")
