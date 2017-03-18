<?php

add_theme_support('menus');
add_theme_support('title-tag');


include (get_template_directory().'/Includes/Front/enqueue.php');
include (get_template_directory().'/Includes/setup.php');
include (get_template_directory().'/Includes/widgets.php');

add_action('wp_enqueue_scripts','k_enqueue');
add_action('after_setup_theme','k_setup_theme');
add_action('widgets_init','k_widget');