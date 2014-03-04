<?php

require_once('basic.php');

class Channel extends Basic_Controller {

	function __construct() {
		parent::__construct();
	}

	public function add($id)
	{
		if(!empty($_POST)){
			$this->load->helper('array');

			$channelinfo = elements(array('pid', 'name', 'chorder'), $_POST);
			$channelinfo['modify_datetime'] = date('Y-m-d H:i:s');

			$this->load->model('channel_model');

			$channel_id = $this->channel_model->add($channelinfo);

			if($channel_id){
				header('Location: /admin/main/index/'.$channelinfo['pid']);
				exit();
			}
		}

		$data["userinfo"] = $this->userinfo;
		$data["action"] = 'add';
		
		$this->load->model('channel_model');
		$data["parent_channel"] = $this->channel_model->get_byid($id);

		$this->load->view('channel/edit', $data);
	}

	public function update($id)
	{
		if(!empty($_POST)){
			$this->load->helper('array');

			$channelinfo = elements(array('pid', 'name', 'chorder'), $_POST);
			$channelinfo['modify_datetime'] = date('Y-m-d H:i:s');

			$this->load->model('channel_model');

			$channel_id = $this->channel_model->update($_POST['id'], $channelinfo);

			if($channel_id){
				header('Location: /admin/main/index/'.$channelinfo['pid']);
				exit();
			}
		}

		$data["userinfo"] = $this->userinfo;
		$data["action"] = '/admin/channel/update';
		
		$this->load->model('channel_model');
		$data["channel"] = $this->channel_model->get_byid($id);

		$pid = $data["channel"]['pid'];

		if($pid > 0) {
			$data["parent_channel"] = $this->channel_model->get_byid($pid);
		} else {
			$data["parent_channel"] = array('id'=>0, 'name'=>'顶级');
		}

		$this->load->view('channel/edit', $data);
	}

	public function delete($id){
		$this->load->model('channel_model');

		$channel = $this->channel_model->get_byid($id);

		$this->channel_model->del_byid($id);

		header('Location: /admin/main/index/'.$channel['pid']);
	}
}