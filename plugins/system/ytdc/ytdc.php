<?php
/**
 * @package    plg_system_ytcontact
 *
 * @author     Kicktemp GmbH <hello@kicktemp.com>
 * @copyright  Copyright © 2020 Kicktemp GmbH. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       https://kicktemp.com
 */

use Joomla\CMS\Component\ComponentHelper;
use Joomla\CMS\Plugin\CMSPlugin;
use YOOtheme\Application;
use YOOtheme\Builder;
use YOOtheme\Builder\Source\SourceTransform;

defined('_JEXEC') or die;

/**
 * StudiogongContact plugin.
 *
 * @package   plg_system_ytcontact
 * @since     1.0.0
 */
class plgSystemYtdc extends CMSPlugin
{

    public function  onAfterRoute ()
    {
        $app = JFactory::getApplication();
        if ('com_content' == JRequest::getCMD('option') && !$app->isAdmin()) {
            $template = 'yootheme_child';
            require_once(JPATH_SITE . '/templates/' . $template . '/code/SourceTransform.php');
        }
    }

}
