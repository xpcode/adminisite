<?php

require_once('basic.php');

class Main extends Basic_Controller {

	function __construct() {
		parent::__construct();

		$this->channel_code = 'main';
	}

	public function index($pid=0, $cur_page=1)
	{
		$data["userinfo"] = $this->userinfo;

		$this->load->model('channel_model');
		$this->load->model('article_model');
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

		$data["articles"] = $this->article_model->get_by(array('channel_id'=>1));

		$data['pid'] = $pid;

		$data['banner'] = $this->get_banner();

		$data['cur_channel'] = array(
			'id'=>1,
			'code'=>$this->channel_code
			);

		$this->load->view('main', $data);
	}

	public function modify_pwd(){
		$data["userinfo"] = $this->userinfo;
		$data['errormsg'] = '';

		if(!empty($_POST)){
			if(md5($_POST['password_old']) != $this->userinfo['password']){
				$data['errormsg'] = '您输入的旧密码不正确！';

			} else {
				$this->load->model('user_model');
				$user_id = $this->user_model->update($data["userinfo"]['id'], array('password'=>md5($_POST['password'])));

				if(!empty($user_id)){
					header('Location: /admin/logout');
					exit();
				}
			}
		}
		
		$this->load->view('modify_pwd', $data);
	}

}
