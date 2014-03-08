<?php 

require_once('basic.php');

class Mcase extends Basic {

	function __construct() {
		parent::__construct();

		$this->channel_id = 3;
		$this->channel_code = 'mcase';
	}

	// mcase/index/channel_id/page
	public function index($sub_channel_id=14, $cur_page=1, $sub_channel_id_2=22)
	{
		$this->load->model('channel_model');
		$this->load->model('contact_model');

		$cur_channel = $this->channel_model->get_byid($sub_channel_id);

		$param['channel_id'] = $sub_channel_id;

		if($sub_channel_id==14){
			$data['channels_2'] = $this->channel_model->get_by(array('pid'=>14));
			$data['cur_channel_2'] = $this->channel_model->get_byid($sub_channel_id_2);

			$this->load->model('pic_model');
			$data['pic_list'] = $this->pic_model->get_by($param);

		} else {
			$this->load->library('pagination');

			$config['base_url'] = '/mcase/index/'.$sub_channel_id;
			$config['uri_segment'] = 4;
			$config['per_page'] = 20;

			if($cur_channel['ctype']==1){
				$this->load->model('article_model');

				$config['total_rows'] = $this->article_model->count($param);

				$data['rtext_list'] = $this->article_model->get_bycolumn($param, 'DESC', NULL, 5);

			} else if($cur_channel['ctype']==2) {
				$this->load->model('pic_model');

				$config['total_rows'] = $this->pic_model->count($param);

				$param['itype'] = 1;

				$data['pic_list'] = $this->pic_model->get_bycolumn($param, 'DESC', NULL, 20);
			}

			$this->pagination->initialize($config);

			$data['pagination'] = $this->pagination->create_links();
			$data['re_contact_list'] = $this->contact_model->get_bycolumn(array('channel_id'=>$sub_channel_id), 'DESC', NULL, 3);
		}


		$data['banner'] = $this->getbanner($this->channel_id);
		$data['channel_code'] = $this->channel_code;
		$data['channel_name'] = $this->get_channelid_bycode($this->channel_code)['name'];
		$data['channels'] = $this->channel_model->get_by(array('pid'=>$this->channel_id));
		$data['cur_channel'] = $cur_channel;

		$this->load->view('mcase/index', $data);
	}
}