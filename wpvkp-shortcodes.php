<?php
/**
 * Plugin Name:WPVKP Shortcodes
 * Plugin URI: http://wpvkp.com/
 * Description: A complete set of WordPress shortcodes to add beautiful and useful elements to your theme.
 * Version: 1.0
 * Author: Vivek Kumar Poddar
 * Author URI: http://wpvkp.com/
 * License: GNU General Public License v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */
 // Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

if (!class_exists('WPVKP_Shortcodes')) {

class IG_Shortcodes_Plugin {
    public function __construct() {
        add_action( 'wp_enqueue_scripts', array( $this, 'wpvkp_shortcodes_scripts' ) );
        add_action('admin_head',  array( $this, 'wpvkp_mce_button'));
    }

/* Add shortcodes scripts file */
public function wpvkp_shortcodes_scripts() {
        wp_enqueue_style('wpvkp-shortcodes-css', plugins_url( 'inc/shortcodes.css', __FILE__ ) );
        wp_enqueue_style('wpvkp-genericons-css', plugins_url( 'inc/genericons/genericons.css', __FILE__ ) );
        wp_enqueue_script('jquery');
        wp_register_script('wpvkp-shortcodes-js', plugins_url( 'inc/shortcodes.js', __FILE__ ));
        wp_enqueue_script('wpvkp-shortcodes-js');
}


// Hooks your functions into the correct filters
public function wpvkp_mce_button() {
    // check user permissions
    if ( !current_user_can( 'edit_posts' ) && !current_user_can( 'edit_pages' ) ) {
        return;
    }
    // check if WYSIWYG is enabled
    if ( 'true' == get_user_option( 'rich_editing' ) ) {
        add_filter( 'mce_external_plugins', array( $this, 'wpvkp_tinymce_plugin' ));
        add_filter( 'mce_buttons', array( $this, 'wpvkp_register_mce_button' ));
    }
}

// Declare script for new button
public function wpvkp_tinymce_plugin( $plugin_array ) {
    $plugin_array['wpvkp_mce_button'] = plugins_url('/inc/mce-button.js', __FILE__);
    return $plugin_array;
}

// Register new button in the editor
public function wpvkp_register_mce_button( $buttons ) {
    array_push( $buttons, 'wpvkp_mce_button' );
    return $buttons;
    }
//end of class
}
$wpvkpshortcodes = new IG_Shortcodes_Plugin();

//Options page
    require_once( dirname(__FILE__) . '/options.php' );
//Shortcodes
    require_once( dirname(__FILE__) . '/inc/wpvkp-shortcodes-shortcodes.php' );
/**
 * Load plugin textdomain.
 */
    add_action( 'plugins_loaded', 'wpvkp_shortcodes_textdomain' );
    function wpvkp_shortcodes_textdomain() {
        load_plugin_textdomain( 'wpvkp-shortcodes', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
    }
//end if class class_exists
}
