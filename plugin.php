<?php
/*
Plugin Name: Cyclone Slider Template: tCycle
Version: 1.0
Description: Creates a super light minimalist slideshow. Note: The only options supported are Transition Effects (Fade, Scroll Horizontally), Slide Delay, and Transition Speed. Other options will not function.
Author: Nico Amarilla
Author URI: http://www.codefleet.net/
License: GPLv3
License URI: https://www.gnu.org/licenses/gpl-3.0.html
*/

add_filter( 'cyclone_slider_template_list', 'cyclone_slider_template_tcycle' );
function cyclone_slider_template_tcycle( $template_list ) {

    $template_list[ 'tcycle' ] = array(
        'name'          => 'tCycle',
        'path'          => realpath( plugin_dir_path( __FILE__ ) ),
        'url'           => plugin_dir_url( __FILE__ ),
        'supports'      => array(
            'image'
        ),
        'location_name' => 'plugin',
        'scripts'       => array(
            'tcycle.js'
        ),
        'styles'        => array()
    );

    return $template_list;
}