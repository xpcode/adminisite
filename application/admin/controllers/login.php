<?php

class Login extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	public function index()
	{
		$is_login = FALSE;

		if(!empty($_POST)){
			$this->load->helper('array');

			$userinfo = elements(array('username', 'password'), $_POST);

			$this->load->model('user_model');

			$is_login = $this->user_model->login($userinfo["username"], md5($userinfo["password"]));
		}

		if($is_login === TRUE){
			$this->load->library('session');

			$userinfo = $this->user_model->get_userinfo($userinfo["username"]);

			$this->session->set_userdata('userinfo', $userinfo);

			header('Location: main');
		} else {
			$this->load->view('login');
		}
	}
}