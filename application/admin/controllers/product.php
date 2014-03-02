<?php

require_once('basic_controller.php');

class Product extends Basic_Controller {
	public $channel_code = 'product';

	function __construct() {
		parent::__construct();
	}

	public function index()
	{
		$data["userinfo"] = $this->userinfo;

		$this->load->view('/product/manage', $data);
	}

	public function add()
	{
		$data["userinfo"] = $this->userinfo;

		$this->load->view('product/edit', $data);
	}

	public function edit($id)
	{
		$data["userinfo"] = $this->userinfo;

		$this->load->view('product/edit', $data);
	}

	public function delete($id)
	{
		$this->load->model('article_model');
		$this->article->delId($id);

		$this->index();
	}
}