<?php 

require_once('crm_model.php');

class User_model extends CRM_model {

	function __construct() {
		parent::__construct();

		$this-> _table   = 'user';
	    $this-> _primary = 'id';
	}

	public function get_password($username){
		$sql = "SELECT password FROM user WHERE username='".$username."' LIMIT 1";
		$this->load->database();
		$query = $this->db->query($sql);
		$row = $query->row();

		return $row->password;
	}

	public function get_userinfo($username){
		$sql = "SELECT id, username FROM user WHERE username='".$username."' LIMIT 1";
		$this->load->database();
		$query = $this->db->query($sql);
		$row = $query->row();

		return array(
			"id"=>$row->id,
			"username"=>$row->username,
			"lastlogin"=>$row->lastlogin
			);
	}

	public function login($username, $password){
		$password_rlt = $this->get_password($username);

		return $password_rlt == $password;
	}
}