<?php

function is_services_enqueue_scripts() {
	wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', array(), '5.0.2');
    wp_enqueue_style('is-services-style', get_template_directory_uri() . '/css/style.css', array(),'1.0.0');
}
add_action('wp_enqueue_scripts', 'is_services_enqueue_scripts');