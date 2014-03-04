<?php

require_once('basic.php');

class Basic_article extends Basic_Controller {

	function __construct() {
		parent::__construct();

		$this->load->model('article_model');
		$this->load->model('channel_model');
	}

	protected function get_viewdata_4list($channel_id, $cur_page)
	{
		$channel=$this->get_channelid_bycode($this->channel_code);

		if(!isset($channel_id)){
			$channel_id = $channel['id'];
		}

		$param = array('channel_id'=>$channel_id);

		$this->load->library('pagination');

		$config['base_url'] = '/admin/'.$this->channel_code.'/index/'.$channel_id;
		$config['uri_segment'] = 4;
		$config['per_page'] = 20;

		if($channel_id == $channel['id']){
			$total_rows = $this->article_model->count_bychannelpid($channel_id);
			$articles = $this->article_model->get_bychannelpid($channel_id, 'ASC', ($cur_page-1)*$config['per_page'], $config['per_page']);

		} else {
			$total_rows = $this->article_model->count($param);
			$articles = $this->article_model->get_bycolumn($param, 'ASC', ($cur_page-1)*$config['per_page'], $config['per_page']);
		}
		$config['total_rows'] = $total_rows;

		$this->pagination->initialize($config);
		
		$data["userinfo"] = $this->userinfo;
		$data['pagination'] = $this->pagination->create_links();
		$data["articles"] = $articles;
		$data["channels"] = $this->channel_model->get_by(array('pid'=>$channel['id']));
		$data['cur_channel'] = array(
			'id'=>$channel_id,
			'code'=>$this->channel_code
			);

		return $data;
	}

	protected function get_viewdata_4add()
	{
		$channel=$this->get_channelid_bycode($this->channel_code);

		if(!empty($_POST)){
			$this->load->helper('array');

			$articleinfo = elements(array('channel_id', 'title', 'intro', 'content'), $_POST);

			$rst_upload = $this->do_upload('img');

			if($rst_upload['status']=='success'){
				$articleinfo['img'] = $rst_upload['msg']['full_path'];
			}

			$articleinfo['modify_datetime'] = date('Y-m-d H:i:s');

			if($articleinfo['channel_id']==0){
				$articleinfo['channel_id'] = $channel['id'];
			}

			$contact_id = $this->article_model->add($articleinfo);

			if($contact_id){
				echo json_encode(array('code'=>200, 'href'=>'/admin/'.$this->channel_code.'/index/'.$articleinfo['channel_id']));
				exit();
			}
		}

		$data["userinfo"] = $this->userinfo;
		$data["action"] = '/admin/'.$this->channel_code.'/add';
		$data["channels"] = $this->channel_model->get_by(array('pid'=>$channel['id']));

		return $data;
	}

	protected function get_viewdata_4update($id)
	{
		$channel=$this->get_channelid_bycode($this->channel_code);

		if(!empty($_POST)){
			$this->load->helper('array');

			$articleinfo = elements(array('channel_id', 'title', 'intro', 'content'), $_POST);

			$rst_upload = $this->do_upload('img');

			if($rst_upload['status']=='success'){
				$articleinfo['img'] = '/upload/'.$rst_upload['msg']['file_name'];
			}

			$articleinfo['modify_datetime'] = date('Y-m-d H:i:s');

			if($articleinfo['channel_id']==0){
				$articleinfo['channel_id'] = $channel['id'];
			}

			$contact_id = $this->article_model->update($_POST['id'], $articleinfo);

			if($contact_id){
				echo json_encode(array('code'=>200, 'href'=>'/admin/'.$this->channel_code.'/index/'.$articleinfo['channel_id']));
				exit();
			}
		}

		$data["userinfo"] = $this->userinfo;
		$data["action"] = '/admin/'.$this->channel_code.'/update';
		$data["article"] = $this->article_model->get_byid($id);
		$data["channels"] = $this->channel_model->get_by(array('pid'=>$channel['id']));

		return $data;
	}

	public function delete($id){
		$article = $this->article_model->get_byid($id);

		$this->article_model->del_byid($id);

		header('Location: /admin/'.$this->channel_code.'/index/'.$article['channel_id']);
	}
}