<?php

require_once('basic_controller.php');

class Logout extends Basic_Controller {

	function __construct() {
		parent::__construct();
	}

	public function index()
	{
		$this->load->library('session');

		$this->session->unset_userdata('userinfo');

		header('Location: login');
	}
}