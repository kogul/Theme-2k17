<?php
function k_enqueue(){
  wp_register_style('k_bootstrap',get_template_directory_uri().'/Assets/Styles/bootstrap.css');
  wp_enqueue_style('k_bootstrap');
  wp_register_style('k_custom',get_template_directory_uri().'/Assets/Styles/custom.css');
  wp_enqueue_style('k_custom');

  wp_register_script('k_bootstrap',get_template_directory_uri().'/Assets/Scripts/bootstrap.js',array(),1.0,true);
  wp_register_script('k_custom',get_template_directory_uri().'/Assets/Scripts/custom.js',array(),1.0,true);
  wp_enqueue_script('jquery');
  wp_enqueue_script('k_bootstrap');
  wp_enqueue_script('k_custom');

}