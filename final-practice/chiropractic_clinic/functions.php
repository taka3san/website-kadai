<?php

/**************************************************
CSSファイルの読み込み
 **************************************************/
function my_enqueue_styles()
{
  wp_enqueue_style('ress', get_template_directory_uri() . '/css/reset.css', array(), false, 'all');
  wp_enqueue_style('slick', get_template_directory_uri() . '/css/slick.css', array('ress'), false, 'all');
  wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css', array('ress'), false, 'all');
}
add_action('wp_enqueue_scripts', 'my_enqueue_styles');

/**************************************************
JSファイルの読み込み
 **************************************************/
function st_enqueue_scripts()
{
  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.7.1.min.js', array(), '3.7.1', true);
  wp_enqueue_script('slick', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), false, true);
  wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array('jquery'), false, true);
}
add_action('wp_enqueue_scripts', 'st_enqueue_scripts');


/**************************************************
アイキャッチ画像の対応
 **************************************************/
function setup_theme()
{
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'setup_theme');
