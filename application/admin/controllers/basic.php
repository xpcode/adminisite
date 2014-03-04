<?php 

class Basic_Controller extends CI_Controller {

	protected $userinfo;
	protected $channel_code;

	function __construct() {
		parent::__construct();

		$this->load->library('session');
		$this->userinfo = $this->session->userdata('userinfo');

		if(empty($this->userinfo)){
			header('Location: /admin/login');
			exit();
		}
	}

	function img_upload($id){
		if(isset($id)){
			$channal = $this->get_channelid_bycode($this->channel_code);

			$this->load->model('img_model');

			$data['img_model'] = $this->img_model->get_byid($id);
		} else {
			$data = array();
		}

		$this->load->view('common/header');
		$this->load->view('common/img_upload', $data);
		$this->load->view('common/footer');
	}

	function img_list(){
		$this->load->model('img_model');

		$data['channel'] = $this->get_channelid_bycode($this->channel_code);
		$data['img_list'] = $this->img_model->get_all();

		$this->load->view('common/header');
		$this->load->view('common/img_list', $data);
		$this->load->view('common/footer');
	}

	private function recursive_mkdir($path, $mode = 0777) {
	    $dirs = explode(DIRECTORY_SEPARATOR , $path);
	    $count = count($dirs);
	    $path = '.';

	    for ($i = 0; $i < $count; ++$i) {
	        $path .= DIRECTORY_SEPARATOR . $dirs[$i];

	        if (!is_dir($path) && !mkdir($path, $mode)) {
	            return false;
	        }
	    }
	    return true;
	}

	protected function get_channelid_bycode($channel_code){
		$channels = array(
			'homepage'=>array('id'=>1, 'name'=>'首页', 'url'=>'/admin/main'),
			'product'=>array('id'=>2, 'name'=>'产品服务', 'url'=>'/admin/product'),
			'case'=>array('id'=>3, 'name'=>'案例展示', 'url'=>'/admin/case'),
			'new'=>array('id'=>4, 'name'=>'营销动态', 'url'=>'/admin/new'),
			'contact'=>array('id'=>5, 'name'=>'业务联系', 'url'=>'/admin/contact')
			);

		return $channels[$channel_code];
	}

	protected function do_upload($field_name=NULL, $allowed_types='gif|jpg|png')
	{
		$path = '..\\upload\\'.date("Y").'\\'.date("m");

		if(!realpath($path)){
			if($this->recursive_mkdir($path)){
				$path = realpath($path);
			}
		}

		$config['upload_path'] = $path;
		$config['allowed_types'] = $allowed_types;
		$config['max_size'] = '2000';
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload', $config);

		$result = array();

		if ($this->upload->do_upload($field_name))
		{
			$result['status'] = 'success';
			$result['msg'] = $this->upload->data();
		} 
		else
		{
			$result['status'] = 'error';
			$result['msg'] = $this->upload->display_errors();
		}

		return $result;
	}

	protected function get_banner(){
		$channel = $this->get_channelid_bycode($this->channel_code);

		$this->load->model('pic_model');

		return $this->pic_model->getbanner_bychannelid($channel['id']);
	}
}