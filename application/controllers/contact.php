<?php

require_once('basic.php');

class Contact extends Basic {

	function __construct() {
		parent::__construct();

		$this->channel_id = 5;
		$this->channel_code = 'contact';
	}

	public function index($sub_channel_id=29)
	{
		$this->load->model('channel_model');
		$this->load->model('contact_model');

		$data['banner'] = $this->getbanner($this->channel_id);
		$data['channel_code'] = $this->channel_code;
		$data['channel_name'] = $this->get_channelid_bycode($this->channel_code)['name'];
		$data['channels'] = $this->channel_model->get_by(array('pid'=>$this->channel_id));
		$data['cur_channel'] = $this->channel_model->get_byid($sub_channel_id);
		$data['contact_list'] = $this->contact_model->get_by(array('channel_id'=>$sub_channel_id));

		$this->load->view('contact/index', $data);
	}
}