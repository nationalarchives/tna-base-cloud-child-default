<?php

// Theme version
define( 'CHILD_EDD_VERSION', '0.1' );

// Include functions
include 'inc/functions-global.php';

// add_action
add_action('wp_enqueue_scripts', 'dequeue_parent_style', 9999);
add_action('wp_head', 'dequeue_parent_style', 9999);
add_action('wp_enqueue_scripts', 'tna_child_styles');

