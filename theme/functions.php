<?php
function my_setup(){
  wp_deregister_script('jquery');
  wp_enqueue_style('reset',get_template_directory_uri().'/assets/css/reset.css',);
  wp_enqueue_style('top-style',get_template_directory_uri().'/assets/css/style.css',);
  wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), '1.12.4');
  wp_enqueue_script( 'top-js', get_template_directory_uri().'/assets/js/index.js');
}

function get_subloop($num){
  $args = array(
    'post_type' => 'post',
    'posts_per_page'=> $num,
    'paged'=>get_query_var('paged')
  );
  $wp_query = new WP_Query($args);
  return $wp_query;
}

function hooks(){
  add_theme_support('post-thumbnails');
  add_action('wp_enqueue_scripts', 'my_setup',);
}

function init(){
  hooks();
}

init();
