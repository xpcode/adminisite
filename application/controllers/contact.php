<?php 

class Contact extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	public function index()
	{
		$data['area_list'] = $query->result_array();

		$this->load->view('contacts/index', $data);
	}
}