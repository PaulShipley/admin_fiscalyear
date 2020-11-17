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

	function __construct()
	{
		$this->module_name = 'import_bank_transactions';
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
