<?php

require_once('basic.php');

class Logout extends Basic_Controller {

	function __construct() {
		parent::__construct();
	}

	public function index()
	{
		$this->load->library('session');

		$this->session->unset_userdata('userinfo');

		header('Location: /admin/login');
	}
}