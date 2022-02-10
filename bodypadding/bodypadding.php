<?php
/*
Plugin Name: 6.14 - bodycolorchanger
Plugin URI: https://github.com/DEVELOPER-IN-PROGRESS
Description: Demo plugin for learning how to work an array of options with the Options API in WordPress.
Version: 1.0.0
Contributors: zgordon
Author: john
Author URI: https://github.com/DEVELOPER-IN-PROGRESS
License: GPLv2 or later
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: wpplugin
Domain Path:  /languages
*/

if(!defined('WPINC')){
    die;
}

function plugin_settings_page() {
    add_menu_page(
        'body-Color',
        'Plugin Menu',
        'manage_options',
        'color_picker',
         'plugin_page_markup',
          'dashicons-wordpress-alt',
           100 );

     //add_submenu_page  for plugin subpage
}

add_action('admin_menu' , 'plugin_settings_page') ;

function plugin_settings_link($links) {
    $settings_link = '<a href="admin.php?page=color_picker">'. __('SETTINGS' ,'color_picker').'</a>' ;
    array_push($links , $settings_link);
    return $links ;
}

$filter_name = 'plugin_action_links_'. plugin_basename( __FILE__ );
 add_filter( $filter_name , 'plugin_settings_link');

 


 function color_scripts() {
     wp_enqueue_script(
            'color',
            plugin_dir_path(__FILE__).'color.js'
     );
 }

 add_action('admin_enqueue_scripts' , 'color_scripts') ;

function plugin_page_markup() {
    echo "<h3> Pick a color for document body </h3>" ;

    echo  plugin_dir_path(__FILE__).'color.js' ;
?>

<input type="color"  id="favcolor" name="favcolor" value="#ff0000" />
<input type="checkbox" id="checkbox"  />

<?php
}

?>