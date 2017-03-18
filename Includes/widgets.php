<?php

function k_widget(){
  register_sidebar(array(
      'name' => __('Main Sidebar','Theme 2k17'),
      'id'   => 'k_sidebar',
      'description' => 'Sidebar for Theme 2k17',
      'class'       => '',
      'before_widget' => '<div id="%1$s" class="col-md-offset-1 col-md-10 eleWrap %2$s">',
      'before_title'  => '<div class="sidetitle">',
      'after_title'   => '</div><div class="sidecont">',
      'after_widget'  =>  '</div></div>'
  ));
}