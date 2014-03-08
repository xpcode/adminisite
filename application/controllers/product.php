<?php

require_once('basic.php');

class Product extends Basic {

	function __construct() {
		parent::__construct();

		$this->channel_id = 2;
		$this->channel_code = 'product';
	}

	public function index($sub_channel_id=6)
	{
		$this->load->model('channel_model');

		$data['banner'] = $this->getbanner($this->channel_id);
		$data['channel_code'] = $this->channel_code;
		$data['channel_name'] = $this->get_channelid_bycode($this->channel_code)['name'];
		$data['channels'] = $this->channel_model->get_by(array('pid'=>$this->channel_id));
		$data['cur_channel'] = $this->channel_model->get_byid($sub_channel_id);

		if($data['cur_channel']['ctype']==1){
			$this->load->model('article_model');
			$data['rtext_list'] = $this->article_model->get_bycolumn(array('channel_id'=>$sub_channel_id, 'recommend'=>0), 'DESC', NULL, 5);

		} else if($data['cur_channel']['ctype']==2) {
			$this->load->model('pic_model');
			$data['pic_list'] = $this->pic_model->get_bycolumn(array('channel_id'=>$sub_channel_id, 'recommend'=>0), 'DESC', NULL, 20);

		}
		
		$this->load->model('contact_model');
		$data['re_contact_list'] = $this->contact_model->get_bycolumn(array('channel_id'=>$sub_channel_id), 'DESC', NULL, 3);

		$this->load->view('product/index', $data);
	}
}