<?php 

class New extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	public function index($channel_id=2)
	{
		$this->article_model->get_by
		$this->load->view('mnew/notice');
	}
}