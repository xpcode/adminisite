<?php

require_once('basic.php');

class Contact extends Basic_Controller {

	function __construct() {
		parent::__construct();

		$this->channel_code='contact';
	}

	public function index($channel_id=0, $cur_page=1)
	{
		$data["userinfo"] = $this->userinfo;

		$this->load->model('contact_model');
		$this->load->model('channel_model');
		$this->load->library('pagination');

		$config['base_url'] = '/admin/contact/index/'.$channel_id;
		$config['uri_segment'] = 4;
		$config['per_page'] = 20;

		$param = array();

		if(!empty($channel_id)){
			$param['channel_id'] = $channel_id;
		}

		$config['total_rows'] = $this->contact_model->count($param);

		$this->pagination->initialize($config);

		$data['pagination'] = $this->pagination->create_links();

		$data["contacts"] = $this->contact_model->get_bycolumn($param, 'ASC', ($cur_page-1)*$config['per_page'], $config['per_page']);
		$data["channels"] = $this->channel_model->get_by(array('pid'=>5));
		$data['cur_channel_id'] = $channel_id;

		$this->load->view('contact/manage', $data);
	}

	public function add()
	{
		$channel=$this->get_channelid_bycode($this->channel_code);

		if(!empty($_POST)){
			$this->load->helper('array');

			$contactinfo = elements(array('channel_id', 'project', 'name', 'tel', 'tel_2', 'tel_service', 'email'), $_POST);
			$contactinfo['modify_datetime'] = date('Y-m-d H:i:s');

			$this->load->model('contact_model');

			$contact_id = $this->contact_model->add($contactinfo);

			if($contact_id){
				header('Location: /admin/contact/index/'.$contactinfo['channel_id']);
				exit();
			}
		}

		$data["userinfo"] = $this->userinfo;
		$data["action"] = 'add';
		
		$this->load->model('channel_model');
		$data["channels"] = $this->channel_model->get_by(array('pid'=>$channel['id']));

		$this->load->view('contact/edit', $data);
	}

	public function update($id)
	{
		$channel=$this->get_channelid_bycode($this->channel_code);

		$this->load->model('contact_model');

		if(!empty($_POST)){
			$this->load->helper('array');

			$contactinfo = elements(array('channel_id', 'project', 'name', 'tel', 'tel_2', 'tel_service', 'email'), $_POST);
			$contactinfo['modify_datetime'] = date('Y-m-d H:i:s');


			$contact_id = $this->contact_model->update($_POST['id'], $contactinfo);

			if($contact_id){
				header('Location: /admin/contact/index/'.$contactinfo['channel_id']);
				exit();
			}
		}

		$data["userinfo"] = $this->userinfo;
		$data["action"] = '/admin/contact/update';
		$data["contact"] = $this->contact_model->get_byid($id);
		
		$this->load->model('channel_model');
		$data["channels"] = $this->channel_model->get_by(array('pid'=>$channel['id']));

		$this->load->view('contact/edit', $data);
	}

	public function delete($id){
		$this->load->model('contact_model');

		$contact = $this->contact_model->get_byid($id);

		$this->contact_model->del_byid($id);

		header('Location: /admin/contact/index/'.$contact['channel_id']);
	}
}