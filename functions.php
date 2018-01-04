<?php
/*
=========================================
INCLUDE SCRIPTS
=========================================
*/
function ukljucise_script_enqueue (){
    //css
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(),'3.3.7', 'all');
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/ukljucise.css', array(), 'all');
  
    //js
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.4', true);
    wp_enqueue_script('customjs', get_template_directory_uri() . '/js/ukljucise.js', array(), '1.0.0', true);
   
    
}
add_action('wp_enqueue_scripts','ukljucise_script_enqueue');
/*
=========================================
ACTIVATE MENUS
=========================================
*/
function ukljucise_theme_setup(){
    add_theme_support('menus');
    register_nav_menu('primary', 'Primary Header Navigation');
    register_nav_menu('secondary', 'Footer Navigation');
}
add_action('init', 'ukljucise_theme_setup');

/*
=========================================
THEME SUPPORT
=========================================
*/
add_theme_support ('custom-background');
add_theme_support ('custom-header');
add_theme_support ('post-thumbnails');
add_theme_support ('post-formats',array('aside', 'image','video'));
