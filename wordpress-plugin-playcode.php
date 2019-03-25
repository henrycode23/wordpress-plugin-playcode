<?php

/**
* Plugin Name: WordPress Play Code
* Plugin URI: https://github.com/henrycode23/wordpress-plugin-playcode
* Description: Practice WordPress Plugin Development
* Version: 1.0
* Author: Jack Henry Sadang
* Author URI: https://jsadang.wordpress.com/
* Text Domain: wordpress-plugin-playcode
* Domain Path: /languages
*
* 
* 
*/

// Text Domains
__( 'String (text to be internationalized)', 'wordpress-plugin-playcode' );

register_activation_hook( __FILE__, 'activate_wordpress_plugin_playcode' );
