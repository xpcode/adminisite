<?php

require_once('basic_controller.php');

class Mcase extends Basic_Controller {

	function __construct() {
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('case/manage');
	}
}