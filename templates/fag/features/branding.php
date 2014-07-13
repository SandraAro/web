<?php
/**
* @version   $Id: branding.php 20154 2014-04-05 16:47:01Z arifin $
* @author    RocketTheme http://www.rockettheme.com
* @copyright Copyright (C) 2007 - 2014 RocketTheme, LLC
* @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
*
* Gantry uses the Joomla Framework (http://www.joomla.org), a GNU/GPLv2 content management system
*
*/
defined('JPATH_BASE') or die();

gantry_import('core.gantryfeature');

class GantryFeatureBranding extends GantryFeature {
    var $_feature_name = 'branding';

	function render($position) {
	    ob_start();
	    ?>
	    <div class="rt-block rt-branding">
			<a href="http://www.uneg.edu.ve/" title="UNEG" class="rt-powered-by"></a>
		</div>
		<?php
	    return ob_get_clean();
	}
}