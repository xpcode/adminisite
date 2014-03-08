<?php

require_once('basic.php');

class Index extends Basic {

	function __construct() {
		parent::__construct();

		$this->channel_code = 'main';
	}

	public function index()
	{
		$data['banner'] = $this->getbanner(1);
		$data['channel_code'] = $this->channel_code;
		$data['cur_channel'] = $this->get_channelid_bycode($this->channel_code);

		$this->load->view('index', $data);
	}
}