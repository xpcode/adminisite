<?php

require_once('basic_controller.php');

class Product extends Basic_Controller {

	function __construct() {
		parent::__construct();

		$this->channel_code = 'product';
	}

	public function index($channel_id=0, $cur_page=1)
	{
		$data["userinfo"] = $this->userinfo;

		$this->load->model('article_model');
		$this->load->model('channel_model');
		$this->load->library('pagination');

		$config['base_url'] = '/admin/product/index/'.$channel_id;
		$config['uri_segment'] = 4;
		$config['per_page'] = 20;

		$param = array();

		if(!empty($channel_id)){
			$param['channel_id'] = $channel_id;
		}

		$config['total_rows'] = $this->article_model->count($param);

		$this->pagination->initialize($config);

		$data['pagination'] = $this->pagination->create_links();

		$data["contacts"] = $this->article_model->get_bycolumn($param, 'ASC', ($cur_page-1)*$config['per_page'], $config['per_page']);
		$data["channels"] = $this->channel_model->get_by(array('pid'=>2));
		$data['cur_channel_id'] = $channel_id;

		$this->load->view('product/manage', $data);
	}

	public function add()
	{
		$channel=$this->get_channelid_bycode($this->channel_code);

		if(!empty($_POST)){
			$this->load->helper('array');

			$rst_upload = $this->do_upload('img');

			if($rst_upload['status']=='success'){

				$articleinfo = elements(array('channel_id', 'title', 'intro', 'content'), $_POST);
				$articleinfo['img'] = $rst_upload['msg']['full_path'];
				$articleinfo['modify_datetime'] = date('Y-m-d H:i:s');

				$this->load->model('article_model');

				$contact_id = $this->article_model->add($articleinfo);

				if($contact_id){
					echo json_encode(array('code'=>200));
					// header('Location: /admin/product/index/'.$articleinfo['channel_id']);
					exit();
				}
			} else {
				$data['upload_msg'] = $rst_upload['msg'];
			}
		}

		$data["userinfo"] = $this->userinfo;
		$data["action"] = 'add';
		
		$this->load->model('channel_model');
		$data["channels"] = $this->channel_model->get_by(array('pid'=>$channel['id']));

		$this->load->view('article/edit', $data);
	}

	public function update($id)
	{
		$channel=$this->get_channelid_bycode($this->channel_code);

		$this->load->model('article_model');

		if(!empty($_POST)){
			$this->load->helper('array');

			$articleinfo = elements(array('channel_id', 'title', 'intro', 'content'), $_POST);
			$articleinfo['img'] = $rst_upload['msg']['full_path'];
			$articleinfo['modify_datetime'] = date('Y-m-d H:i:s');


			$contact_id = $this->article_model->update($_POST['id'], $articleinfo);

			if($contact_id){
				header('Location: /admin/product/index/'.$articleinfo['channel_id']);
				exit();
			}
		}

		$data["userinfo"] = $this->userinfo;
		$data["action"] = '/admin/product/update';
		$data["article"] = $this->article_model->get_byid($id);
		
		$this->load->model('channel_model');
		$data["channels"] = $this->channel_model->get_by(array('pid'=>$channel['id']));

		$this->load->view('article/edit', $data);
	}

	public function delete($id){
		$this->load->model('article_model');

		$article = $this->article_model->get_byid($id);

		$this->article_model->del_byid($id);

		header('Location: /admin/article/index/'.$article['channel_id']);
	}
}