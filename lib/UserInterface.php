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
     * Action handle for display action button in editor/post form.
     */
    public static function actionEditorForm()
    {
        echo '<a href="#" id="wp-moody-analyze" class="media">Moody Me</a>';
    }
}