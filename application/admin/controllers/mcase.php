<?php

require_once('basic_article.php');

class Mcase extends Basic_article {

	function __construct() {
		parent::__construct();

		$this->channel_code = 'case';
	}

	function index($channel_id=NULL, $cur_page=1)
	{
		$data = $this->get_viewdata_4list($channel_id, $cur_page);

		$data['banner'] = $this->get_banner();

		$this->load->view($this->channel_code.'/manage', $data);
	}

	function add()
	{
		$data = $this->get_viewdata_4add();

		$this->load->view('article/edit', $data);
	}

	function update($id)
	{
		$data = $this->get_viewdata_4update($id);

		$this->load->view('article/edit', $data);
	}
}