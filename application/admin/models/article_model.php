<?php 

require('crm_model.php');

class Article_model extends CRM_model {

	function __construct() {
		parent::__construct();

		$this-> _table   = 'article';
	    $this-> _primary = 'id';
	}
}