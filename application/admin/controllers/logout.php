<?php 

class Logout extends CI_Controller {

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