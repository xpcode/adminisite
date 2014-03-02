<?php 

require_once('crm_model.php');

class Img_model extends CRM_model {

	function __construct() {
		parent::__construct();

		$this-> _table   = 'img';
	    $this-> _primary = 'id';
	}
}