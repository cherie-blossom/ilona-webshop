<?php

// Activate Menu
register_nav_menus( array(
  'primary' => __( 'Primary Menu',      'ilonarubtsova' ),
  'social'  => __( 'Social Links Menu', 'ilonarubtsova' ),
) );

// Include CSS file and JS file in wordpress
function ilona_style_and_script() {

wp_enqueue_style('ilona_style', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');
wp_enqueue_script('ilona-js', get_template_directory_uri() . '/js/app.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'ilona_style_and_script');
