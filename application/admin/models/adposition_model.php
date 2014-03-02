<?php 

require_once('crm_model.php');

class Adposition_model extends CRM_model {

	function __construct() {
		parent::__construct();

		$this-> _table   = 'adposition';
	    $this-> _primary = 'id';
	}
}