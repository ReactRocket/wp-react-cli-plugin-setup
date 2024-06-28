<?php
/**
 * Plugin Name: wp-react-cli-plugin-setup
 * Description: React-App in WordPress.
 */

function func_load_reactscripts() {
    wp_register_script('wpreact_reactjs', plugin_dir_url(__FILE__) . 'build/static/js/main.js', array(), null, true);
    wp_register_script('wpreact_chunkjs', plugin_dir_url(__FILE__) . 'build/static/js/2.chunk.js', array(), null, true);
    wp_register_script('wpreact_runtimejs', plugin_dir_url(__FILE__) . 'build/static/js/runtime-main.js', array(), null, true);
}

add_action('wp_enqueue_scripts', 'func_load_reactscripts');

// Add shortcode
function func_wp_react(){
    wp_enqueue_script('wpreact_reactjs');
    wp_enqueue_script('wpreact_chunkjs');
    wp_enqueue_script('wpreact_runtimejs');

    $str = "<div id='root'></div>";
    return $str;
}

add_shortcode('wpreact', 'func_wp_react');
?>
