<?php
/**
 * Class file for the user interface.
 */
namespace WpMoody;
use WpMoody;

/**
 * The user interface class.
 */
class UserInterface
{

    /**
     * Action callback to print out the WpMoody media button
     */
    public static function actionMediaButtons()
    {

        echo '<a title="Moody Me" href="#" class=>
            <img src="' . WPMOODY_ASSETS_URL . '/images/Bluemix-logo-86x32.png" /></a>';
    }

}