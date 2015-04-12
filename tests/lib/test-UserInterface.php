<?php
namespace WpMoodyTests;
use WpMoody;
use WpMoody\UserInterface;

class TestUserInterface extends \WP_UnitTestCase
{

    public function testMedia_button()
    {

        $actual = UserInterface::getEditorForm();
        $expected = '';

        $this->assertEquals($expected, $actual);
    }
}