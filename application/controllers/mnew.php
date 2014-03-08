<?php

require_once('basic.php');

class Mnew extends Basic {

	function __construct() {
		parent::__construct();

		$this->channel_id = 4;
		$this->channel_code = 'mnew';
	}

	public function index()
	{
		$data['banner'] = $this->getbanner(5);
		$data['cur_channel'] = $this->get_channelid_bycode($this->channel_code);
		$data['channels'] = $this->get_by(array('id'=>$data['cur_channel']['id']));

		$this->load->view('mnew/index', $data);
	}
}