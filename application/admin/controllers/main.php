<?php

require_once('basic_controller.php');

class Main extends Basic_Controller {

	function __construct() {
		parent::__construct();
	}

	public function index($pid=0, $cur_page=1)
	{
		$data["userinfo"] = $this->userinfo;

		$this->load->model('channel_model');
		$this->load->library('pagination');

		$config['base_url'] = '/admin/main/index/'.$pid;
		$config['uri_segment'] = 4;
		$config['per_page'] = 20;

		$param = array('pid'=>$pid);

		if($pid>0){
			$data["ischildren"] = true;
		}

		$config['total_rows'] = $this->channel_model->count($param);

		$this->pagination->initialize($config);

		$data['pagination'] = $this->pagination->create_links();

		$data["channels"] = $this->channel_model->get_bycolumn($param, 'ASC', ($cur_page-1)*$config['per_page'], $config['per_page']);

		$data['pid'] = $pid;

		$this->load->view('main', $data);
	}
}