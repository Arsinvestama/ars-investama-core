<?php
/*
Plugin Name: Ars Investama Core
Version: 1.0
*/

if (!defined('ABSPATH')) exit;

require_once plugin_dir_path(__FILE__).'wallet.php';
require_once plugin_dir_path(__FILE__).'referral.php';
require_once plugin_dir_path(__FILE__).'withdraw.php';
require_once plugin_dir_path(__FILE__).'dashboard.php';
require_once plugin_dir_path(__FILE__).'admin.php';

add_action('wp_enqueue_scripts', function(){
 wp_enqueue_style('ars-style', plugins_url('style.css', __FILE__));
});
