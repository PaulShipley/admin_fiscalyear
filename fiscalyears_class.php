<?php
/**
* Fiscal Years admin replacement
*
* @author Paul Shipley <paul@paulshipley.com.au>
* @copyright 2019 Paul Shipley
* @license GPL
*/

class fiscalyear_app extends application
{

	function __construct()
	{
		$this->add_rapp_function(0, _("Fiscal Years Replacement"),
		'/modules/admin_fiscalyear/fiscalyears.php?', 'SA_FISCALYEARS', MENU_MAINTENANCE);

		$this->add_extensions();
	}
}
?>