<?php 

class MarketingNews extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('marketingnews/notice');
	}
	
	public function qa()
	{
		$this->load->view('marketingnews/list');
	}
	
	public function detail()
	{
		$this->load->view('marketingnews/detail');
	}
}