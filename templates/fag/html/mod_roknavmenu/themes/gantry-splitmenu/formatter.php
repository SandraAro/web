<?php
/**
* @version   $Id: formatter.php 20154 2014-04-05 16:47:01Z arifin $
 * @author    RocketTheme http://www.rockettheme.com
 * @copyright Copyright (C) 2007 - 2014 RocketTheme, LLC
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 *
* Gantry uses the Joomla Framework (http://www.joomla.org), a GNU/GPLv2 content management system
 *
 */
// no direct access
defined('_JEXEC') or die('Restricted access');

/**
 *
 */
class GantrySplitmenuFormatter extends AbstractJoomlaRokMenuFormatter {
	function format_subnode(&$node) {

        $child_type =$node->getParams()->get('splitmenu_children_type');
        if ($child_type == 'modules' || $child_type == 'modulepos') $node->addListItemClass('parent');

        if ($node->getId() == $this->current_node) $node->addListItemClass('last');
	}
}
