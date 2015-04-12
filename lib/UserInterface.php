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
        echo '<div class="misc-pub-section misc-pub-section-last">
         <span id="timestamp">'
         . '<label><input type="checkbox"' . (!empty($value) ? ' checked="checked" ' : null) 
         . 'value="1" name="publish_in_frontpage" />Moody Me</label>'
    .'</span></div>';
    }
}