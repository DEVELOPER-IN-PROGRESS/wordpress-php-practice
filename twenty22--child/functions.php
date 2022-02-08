<?php

function twenty22_child_enqueue(){
	wp_enqueue_style('parent-style', get_template_directory_uri().'/style.css') ;
	wp_enqueue_style('main-css', get_template_directory_uri().'/style.css') ;
}

add_action('wp_enqueue_scripts', 'twenty22_child_enqueue') ;
?>