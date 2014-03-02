<?php 

require_once('crm_model.php');

class Contact_model extends CRM_model {

	function __construct() {
		parent::__construct();

		$this-> _table   = 'contact';
	    $this-> _primary = 'id';
	}
}