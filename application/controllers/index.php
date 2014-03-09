<?php

require_once('basic.php');

class Index extends Basic {

	function __construct() {
		parent::__construct();

		$this->channel_code = 'main';
	}

	public function index()
	{
		$this->load->model('article_model');

		$data['banner'] = $this->getbanner(1);
		$data['channel_code'] = $this->channel_code;
		$data['cur_channel'] = $this->get_channelid_bycode($this->channel_code);
		$data['articles'] = $this->article_model->get_bycolumn(array('channel_id'=>27, 'recommend'=>1), 'DESC', NULL, 6);
		$data['articles_qa'] = $this->article_model->get_bycolumn(array('channel_id'=>28, 'recommend'=>1), 'DESC', NULL, 12);
		$data['cooperation_logos'] = $this->pic_model->get_recommand_homepage();

		$this->load->view('index', $data);
	}
}