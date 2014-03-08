<?php 

require_once('crm_model.php');

class Pic_model extends CRM_model {

	function __construct() {
		parent::__construct();

		$this-> _table   = 'img';
	    $this-> _primary = 'id';
	}

	function getbanner_bychannelid($channel_id){
		$imgs = $this->get_by(array('channel_id'=>$channel_id, 'itype'=>2));

		if(!empty($imgs)){

			return $imgs;
		}
		return FALSE;
	}
}