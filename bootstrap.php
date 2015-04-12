<?php
/**
 * Boostrap WP Moody plugin
 */
namespace WpMoody;

use WpMoody;


//autoload vendor
require_once('vendor/autoload.php');


/**
 * Autoload WP Moody library.
 * @param string The full class name.
 */
spl_autoload_register(function($class){

    $file = str_replace('\\WpMoody', 'lib', $class);

    if ( is_readable($file) ) {
        require_once($file);
    }
});