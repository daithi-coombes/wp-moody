<?php
namespace WpMoodyTests;
use WpMoody;
use WpMoody\UserInterface;

class TestUserInterface extends \WP_UnitTestCase
{

    public function test_actionMediaButtons()
    {

        $actual = UserInterface::actionMediaButtons('');
        $expected =  "<a title='Moody Me' href='#'>
            <img src='" . WPMOODY_ASSETS . "/images/icon.png' /></a>";

      $this->assertEquals($expected, $actual);
    }

    /**
     * @deprecated
     */
    public function test_actionEditorForm()
    {
        return;
        $this->expectOutputString( '<a href="#" id="wp-moody-analyze" class="media">Moody Me</a>' );
        UserInterface::actionEditorForm();
    }
}