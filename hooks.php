<?php
/**
* Fiscal Years admin replacement
*
* @author Paul Shipley <paul@paulshipley.com.au>
* @copyright 2019 Paul Shipley
* @license GPL
*/

include_once($path_to_root . "/modules/admin_fiscalyear/fiscalyears_class.php");

class hooks_admin_fiscalyear extends hooks
{
	var $module_name = 'admin_fiscalyear';

/*
Install additional menu options provided by module
*/
	function install_tabs($app)
	{
		$app->add_application(new fiscalyear_app);
	}

	function install_options($app)
	{
		global $path_to_root;

		switch ($app->id) {
			case 'system':
				$app->add_rapp_function(0, _("Fiscal Years Replacement"),
				$path_to_root.'/modules/admin_fiscalyear/fiscalyears.php', 'SA_FISCALYEARS', MENU_MAINTENANCE);
		}
	}
}
