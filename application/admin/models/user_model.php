<?php 

class User_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	public function get_password($username){
		$sql = "SELECT password FROM users WHERE username='".$username."' LIMIT 1";
		$this->load->database();
		$query = $this->db->query($sql);
		$row = $query->row();

		return $row->password;
	}

	public function get_userinfo($username){
		$sql = "SELECT id, username FROM users WHERE username='".$username."' LIMIT 1";
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