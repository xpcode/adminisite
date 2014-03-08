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

	function add($channel_code, $itype, $channel_id=NULL)
	{
		if($channel_code == 'main'){
			$this->sethomepagebanner();
			return FALSE;
		}

		if(isset($channel_id)){
			$cur_channel = $this->channel_model->get_byid($channel_id);

		} else {
			$cur_channel = $this->get_channelid_bycode($channel_code);
		}

		if(!empty($_POST)){
			$this->load->helper('array');

			$picinfo = elements(array('channel_id', 'itype', 'title', 'filename', 'filename_sub', 'url'), $_POST);

			if(isset($channel_id)){
				$picinfo['channel_id'] = $channel_id;
			}

			if(!empty($picinfo['filename_sub'])){
				$rst_upload_sub = $this->do_upload('filename_sub');

				if($rst_upload_sub['status']=='success'){
					$picinfo['filename_sub'] = $rst_upload_sub['msg']['file_fullname'];
				}
			}

			$picinfo['modify_datetime'] = date('Y-m-d H:i:s');

			$rst_upload = $this->do_upload('filename');

			// 图片上传成功才算
			if($rst_upload['status']=='success'){
				if($picinfo['itype']==2){
					$pic_id = $this->pic_model->setbanner_bychannelid($cur_channel['id'], $rst_upload['msg']['file_fullname'], $picinfo['url']);

				} else if($picinfo['itype']==1){
					$picinfo['filename'] = $rst_upload['msg']['file_fullname'];

					$pic_id = $this->pic_model->add($picinfo);
				}

				if($pic_id){
					echo json_encode(array('code'=>200, 'href'=>'/admin/'.$channel_code.'/index/'.$cur_channel['id']));
				} else {
					echo json_encode(array('code'=>201));
				}

				exit();
			}
		}

		$data["userinfo"] = $this->userinfo;
		$data["itype"] = $itype;
		$data['cur_channel'] = $cur_channel;
		$data['cur_channel']['code'] = $channel_code;

		$this->load->view('pic/edit', $data);
	}

	function delete($id)
	{
		$this->pic_model->del_byid($id);

		header("Location: ".$_SERVER['HTTP_REFERER']);
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
		$data['cur_channel'] = $this->get_channelid_bycode('main');
		$data['cur_channel']['code'] = 'main';

		$this->load->view('pic/edit', $data);
	}

	public function recommend($id){
		$pic = $this->pic_model->get_byid($id);
		$pic['recommend']=$pic['recommend']==0 ? 1 : 0;

		$this->pic_model->update($id, $pic);
		
		header("Location: ".$_SERVER['HTTP_REFERER']);
	}
}