<?php 

require_once('crm_model.php');

class User_model extends CRM_model {

	function __construct() {
		parent::__construct();

		$this-> _table   = 'user';
	    $this-> _primary = 'id';
	}

	public function get_password($username){
		$user = $this->get_userinfo($username);

		if(!empty($user)){
			return $user['password'];
		}

		return FALSE;
	}

	public function get_userinfo($username){
		$users = $this->get_by(array('username'=>$username));

		if(!empty($users)){
			return $users[0];
		}
		return FALSE;
	}
}