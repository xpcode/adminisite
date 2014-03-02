<?php 

require('crm_model.php');

class Channel_model extends CRM_model {

	function __construct() {
		parent::__construct();

		$this-> _table   = 'channel';
	    $this-> _primary = 'id';
	}
}