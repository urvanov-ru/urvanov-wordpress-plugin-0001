<?php
/*
Plugin Name: Urvanov WordPress Plugin 0001
Plugin URI: https://urvanov.ru
Description: This is my first educational plugin.
Author: Urvanov
Version: 0.1
Author URI: https://urvanov.ru
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


add_action( 'wp_head', 'my_addition_to_head');

function my_addition_to_head() {
    print('<!-- Urvanov Wordpress addition to head -->');
}
?>