<?php
/**
 * My Custom Theme functions and definitions
 *
 * @link       https://developer.wordpress.org/themes/basics/theme-functions/
 * @package Allight
 * @copyright  Copyright (c) 2021, Ben Chapman
 * @license    http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */

function Allight_support(){
    // Add title tag functionality.
    add_theme_support( 'title-tag' );
}

add_action('after_setup_theme', 'Allight_support');


function clickyTheme_menu(){
    $locations = array(
        'primary' => "Desktop Primary Top", 
        'footer' => "Footer Menu"
    ); 

    register_nav_menus($locations); 
}

add_action('init','clickyTheme_menu'); 


/**
 * Enqueue a stylesheet.
 */

function my_theme_enqueue() {
	$version = wp_get_theme()->get( 'Version' ); 
    wp_enqueue_style( 'Clicky-style', get_template_directory_uri() . '/style.css', array(''), $version, 'all' );
    wp_enqueue_style( 'Clicky-styleGuide', '/wp-content/themes/Theme/clickyHTML/css/globals.css' , array(), $version, 'all' );
    wp_enqueue_style( 'Clicky-styleGlobal', '/wp-content/themes/Theme/clickyHTML/css/styleguide.css' , array(), $version, 'all' );
    wp_enqueue_style( 'Clicky-styleCSS', '/wp-content/themes/Theme/clickyHTML/css/clickyTest.css' , array(), $version, 'all' );
    wp_enqueue_style( 'Clicky-fonts', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css', array(), '5.13.0', 'all' );
    wp_enqueue_style( 'Clicky-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', array(), '4.4.1', 'all' );
    wp_enqueue_style( 'my-theme', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue' );





?>