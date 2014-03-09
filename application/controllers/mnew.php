<?php

require_once('basic.php');

class Mnew extends Basic {

	function __construct() {
		parent::__construct();

		$this->channel_id = 4;
		$this->channel_code = 'mnew';

		$this->load->model('channel_model');
		$this->load->model('article_model');
	}

	public function index($sub_channel_id=27, $cur_page=1)
	{
		$data['banner'] = $this->getbanner($this->channel_id);
		$data['channel_code'] = $this->channel_code;
		$data['channel_name'] = $this->get_channelid_bycode($this->channel_code)['name'];
		$data['channels'] = $this->channel_model->get_by(array('pid'=>$this->channel_id));
		$data['cur_channel'] = $this->channel_model->get_byid($sub_channel_id);

		$param['channel_id'] = $sub_channel_id;
		
		$this->load->library('pagination');

		$config['base_url'] = '/mnew/index/'.$sub_channel_id;
		$config['uri_segment'] = 4;

		if($sub_channel_id==27){
			$config['per_page'] = 5;

		} elseif($sub_channel_id==28){
			$config['per_page'] = 25;
		}

		$config['total_rows'] = $this->article_model->count($param);

		$this->pagination->initialize($config);
		
		$data['pagination'] = $this->pagination->create_links();
		$data['rtext_list'] = $this->article_model->get_bycolumn($param, 'DESC', ($cur_page-1)*$config['per_page'], $config['per_page']);

		$this->load->view('mnew/index', $data);
	}

	public function detail($sub_channel_id, $article_id){
		$data['banner'] = $this->getbanner($this->channel_id);
		$data['channel_code'] = $this->channel_code;
		$data['channel_name'] = $this->get_channelid_bycode($this->channel_code)['name'];
		$data['channels'] = $this->channel_model->get_by(array('pid'=>$this->channel_id));
		$data['cur_channel'] = $this->channel_model->get_byid($sub_channel_id);
		$data['articleinfo'] = $this->article_model->get_byid($article_id);

		$this->load->view('mnew/sp_detail', $data);
	}
}