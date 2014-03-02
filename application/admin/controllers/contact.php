<?php

require_once('basic_controller.php');

class Contact extends Basic_Controller {

	function __construct() {
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('login');
	}
}