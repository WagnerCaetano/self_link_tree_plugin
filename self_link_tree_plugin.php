<?php
/**
 * Plugin Name:         Self Link Tree Plugin
 * Description:         My own link tree plugin
 * Version:             1.0.0
 * Author:              Wagner Caetano
 * Author URI:          https://wagnercaetano.dev
 * 
 * Be sure to rename the folder this file is in and this file to match what your plugin will be called. The names must be the same so WordPress knows where to look.
 */

function load_ng_link_tree_scripts() {
    wp_enqueue_style( 'ng_self_link_tree_styles', plugin_dir_url( __FILE__ ) . 'dist/self_link_tree/styles.324fa7b22070f452.css' );
    wp_register_script( 'ng_self_link_tree_main', plugin_dir_url( __FILE__ ) . 'dist/self_link_tree/main.8d6c735de5b58ad9.js', true );
    wp_register_script( 'ng_self_link_tree_polyfills', plugin_dir_url( __FILE__ ) . 'dist/self_link_tree/polyfills.9fdc476f6acc1402.js', true );
    wp_register_script( 'ng_self_link_tree_runtime', plugin_dir_url( __FILE__ ) . 'dist/self_link_tree/runtime.189fd643ca1b40e8.js', true );
}

add_action( 'wp_enqueue_scripts', 'load_ng_link_tree_scripts' );

function attach_ng_link_tree() {
    wp_enqueue_script( 'ng_self_link_tree_main' );
    wp_enqueue_script( 'ng_self_link_tree_polyfills' );
    wp_enqueue_script( 'ng_self_link_tree_runtime' );

    return "<app-root></app-root>";
}

add_shortcode( 'ng_self_link_tree_wp', 'attach_ng_link_tree' );

// Add the shortcode [ng_wp] to any page or post.
// The shorcode can be whatever. [ng_wp] is just an example.
?>