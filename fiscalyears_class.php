<?php
/**********************************************************************
// Creator: Paul Shipley
// date_:   2017-11-04
// Title:   Fiscal Years admin replacement
// Free software under GNU GPL
***********************************************************************/

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