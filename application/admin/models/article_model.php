<?php 

require_once('crm_model.php');

class Article_model extends CRM_model {

	function __construct() {
		parent::__construct();

		$this-> _table   = 'article';
	    $this-> _primary = 'id';
	}

	function get_bychannelpid($channelpid, $order='DESC', $offset=NULL, $limit=NULL){
		$sql = 'SELECT a.* FROM `article` a INNER JOIN `channel` b ON a.channel_id=b.id WHERE b.pid='.$channelpid;

		if(!empty($order)){
			$sql = $sql.' ORDER BY a.id '.$order;
		}

		if(isset($limit) AND isset($offset)){
			$sql = $sql.' LIMIT '.$offset.','.$limit;
		}

		$query = $this->db->query($sql);

		if($query->num_rows()>0){
			return $query->result_array();
		}
		return array();
	}

	function count_bychannelpid($channelpid){
		$sql = 'SELECT COUNT(*) cc FROM `article` a INNER JOIN `channel` b ON a.channel_id=b.id WHERE b.pid='.$channelpid;
		$query = $this->db->query($sql);

		return $query->result_array()[0]['cc'];
	}
}