<?php 

require_once('crm_model.php');

class Area_model extends CRM_model {

	function __construct() {
		parent::__construct();

		$this-> _table   = 'area';
	    $this-> _primary = 'id';
	}
}