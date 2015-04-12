<?php
namespace WpMoodyTests;
use WpMoody;
use WpMoody\UserInterface;

class TestUserInterface extends \WP_UnitTestCase
{

    public function test_actionEditorForm()
    {

        $this->expectOutputString( '<a href="#" id="wp-moody-analyze" class="media">Moody Me</a>' );
        UserInterface::actionEditorForm();
    }
}