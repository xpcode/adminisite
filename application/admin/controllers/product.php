<?php

require_once('basic_article.php');

class Product extends Basic_article {

	function __construct() {
		parent::__construct();

		$this->channel_code = 'product';
	}

	function index($channel_id=NULL, $cur_page=1, $channel_id_2=NULL)
	{
		$data = $this->get_viewdata_4list($channel_id, $cur_page, $channel_id_2);

		$data['banner'] = $this->get_banner();

		$this->load->view($this->channel_code.'/manage', $data);
	}

	function add($channel_id=NULL)
	{
		$data = $this->get_viewdata_4add($channel_id);

		$this->load->view('article/edit', $data);
	}

	function update($id)
	{
		$data = $this->get_viewdata_4update($id);

		$this->load->view('article/edit', $data);
	}
}