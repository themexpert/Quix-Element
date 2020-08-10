<?php
/**
 * @package		Quix
 * @author 		ThemeXpert http://www.themexpert.com
 * @copyright	Copyright (c) 2010-2015 ThemeXpert. All rights reserved.
 * @license 	GNU General Public License version 3 or later; see LICENSE.txt
 * @since 		1.0.0
 */

defined('_JEXEC') or die;

class plgQuixCustomInstallerScript
{

	public function postflight($type, $parent)
	{
		include_once JPATH_SITE . '/administrator/components/com_quix/helpers/quix.php';;

		quix()->getCache()->clearCache();

		QuixHelper::cleanCache();
		QuixHelper::cachecleaner('lib_quix');
		QuixHelper::cachecleaner('lib_quix', 1);
	}
}
