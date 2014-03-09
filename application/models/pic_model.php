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

	function get_recommand_homepage(){
		$sql = 'SELECT a.* FROM `img` a INNER JOIN `channel` b ON a.channel_id=b.id WHERE b.pid=14';

		$sql = $sql.' ORDER BY a.modify_datetime DESC LIMIT 0, 14';

		$query = $this->db->query($sql);

		if($query->num_rows()>0){
			return $query->result_array();
		}
		return array();
	}
}