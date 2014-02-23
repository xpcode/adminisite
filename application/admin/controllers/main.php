<?php 

class Main extends CI_Controller {

	private $userinfo;

	function __construct() {
		parent::__construct();

		$this->load->library('session');
		$this->userinfo = $this->session->userdata('userinfo');

		if(empty($this->userinfo)){
			header('Location: login');
			exit();
		}
	}

	public function index()
	{
		$data["userinfo"] = $this->userinfo;

		$this->load->view('main', $data);
	}
}