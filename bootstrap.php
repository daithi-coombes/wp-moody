<?php
/**
 * Boostrap WP Moody plugin
 */
namespace WpMoody;

use WpMoody;
use WpMoody\UserInterface;


//autoload vendor
require_once('vendor/autoload.php');


define('WPMOODY_DIR', dirname(__FILE__));
define('WPMOODY_ASSETS_URL', plugins_url() . '/wp-moody/assets');

/**
 * Autoload WP Moody library.
 * @link http://wordpress.stackexchange.com/a/66484/8404
 * @param string The full class name.
 */
function autoload($class){

    // WpMoody class?
    $class = trim($class, '\\');
    if (strpos($class, __NAMESPACE__) !== 0)
        return;

    $file = WPMOODY_DIR . DIRECTORY_SEPARATOR . str_replace(
        'WpMoody',
        'lib',
        str_replace('\\', DIRECTORY_SEPARATOR, $class)
    ) . '.php';

    if ( is_readable($file) ) {
        require_once($file);
    }
}
spl_autoload_register( __NAMESPACE__ . '\\autoload' );


/**
 * Actions
 */
\add_action( 'media_buttons_context', array('WpMoody\\UserInterface', 'actionMediaButtons') );
//\add_action( 'post_submitbox_misc_actions', array('WpMoody\\UserInterface', 'actionEditorForm') );
//\add_action( 'save_post', array('WpMoody\\Post', 'actionSave'));