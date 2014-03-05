<?php

require_once('basic.php');

class Pic extends Basic_Controller {

	function __construct() {
		parent::__construct();

		$this->load->model('pic_model');
		$this->load->model('channel_model');
	}

	function index($channel_id=NULL, $cur_page=1)
	{
		$this->load->view($this->channel_code.'/manage', $data);
	}

	function add($channel_code, $itype)
	{
		if($channel_code == 'homepage'){
			$this->sethomepagebanner();
			return FALSE;
		}


		$channel = $this->get_channelid_bycode($channel_code);

		if(!empty($_POST)){
			$this->load->helper('array');

			$picinfo = elements(array('channel_id', 'itype', 'title', 'filename', 'filename_sub', 'url'), $_POST);

			if(!empty($picinfo['filename_sub'])){
				$rst_upload_sub = $this->do_upload('filename_sub');

				if($rst_upload_sub['status']=='success'){
					$picinfo['filename_sub'] = $rst_upload_sub['msg']['full_path'];
				}
			}

			$picinfo['modify_datetime'] = date('Y-m-d H:i:s');

			$rst_upload = $this->do_upload('filename');

			// 图片上传成功才算
			if($rst_upload['status']=='success'){
				$picinfo['filename'] = $rst_upload['msg']['full_path'];

				$pic_id = $this->pic_model->add($picinfo);

				if($pic_id){
					echo json_encode(array('code'=>200, 'href'=>'/admin/'.$channel_code.'/index/'.$channel['id']));
				} else {
					echo json_encode(array('code'=>201));
				}

				exit();
			}
		}

		$data["userinfo"] = $this->userinfo;
		$data["itype"] = $itype;
		$data['cur_channel'] = $channel;
		$data['cur_channel']['code'] = $channel_code;

		$this->load->view('pic/edit', $data);
	}

	function update($id)
	{
		$data = $this->get_viewdata_4update($id);

		$this->load->view('pic/edit', $data);
	}

	function sethomepagebanner()
	{
		if(!empty($_POST)){
			$this->load->helper('array');

			$picinfos = elements(array('filename_1', 'filename_2', 'filename_3', 'filename_4', 'filename_5'), $_POST);

			$filenames = array();

			foreach ($picinfos as $key=>$value) {
				$rst_upload = $this->do_upload($key);

				// 图片上传成功才算
				if($rst_upload['status']=='success'){
					$filenames[$key] = $rst_upload['msg']['file_fullname'];
				}
			}

			$upload = $this->pic_model->sethomepagebanner_bychannelid(1, $filenames);

			if(empty($upload)){
				echo json_encode(array('code'=>201));
			} else {
				echo json_encode(array('code'=>200, 'href'=>'/admin/main'));
			}
			
			exit();
		}

		$data["userinfo"] = $this->userinfo;
		$data["itype"] = 2;
		$data['cur_channel'] = $this->get_channelid_bycode('homepage');
		$data['cur_channel']['code'] = 'homepage';

		$this->load->view('pic/edit', $data);
	}
}