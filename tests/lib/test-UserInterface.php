<?php
namespace WpMoodyTests;
use WpMoody;
use WpMoody\UserInterface;

class TestUserInterface extends \WP_UnitTestCase
{

    public function test_actionMediaButtons()
    {

        $this->expectOutputString('<a title="Moody Me" href="#" class=>
            <img src="' . WPMOODY_ASSETS_URL . '/images/Bluemix-logo-86x32.png" /></a>');
        UserInterface::actionMediaButtons('');
    }
}