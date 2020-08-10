<?php
/**
 * @package     Quix
 * @author      ThemeXpert http://www.themexpert.com
 * @copyright   Copyright (c) 2010-2020 ThemeXpert. All rights reserved.
 * @license     GNU General Public License version 3 or later; see LICENSE.txt
 * @since       1.0.0
 */

defined('_JEXEC') or die;

class plgQuixCustom extends JPlugin
{
    /**
     * Load the language file on instantiation.
     *
     * @var    boolean
     * @since  3.1
     */
    protected $autoloadLanguage = true;

    public function __construct($subject, $config)
    {
        // register your elements path
        $element_path = JPATH_SITE . '/plugins/quix/custom/app/frontend';
        // register assets loading url
        $element_url = JUri::root() . '/plugins/quix/custom/app/frontend';

        if (file_exists(JPATH_SITE . '/libraries/quix/app/bootstrap.php')) {
            jimport('quix.app.bootstrap');
            jimport('quix.app.init');

            quix()->getElementsBag()->fill($element_path . '/elements', $element_url . '/elements', [], 'frontend');
        }

        parent::__construct($subject, $config);
    }
}
