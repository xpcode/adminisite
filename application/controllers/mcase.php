<?php 

class New extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	// mcase/channel_id/page
	public function index($channel_id=2, $cur_page=1)
	{
		$cur_channel = $this->channel_model->get_byid($channel_id);

		$this->load->library('pagination');

		$config['base_url'] = '/admin/contact/index/'.$channel_id;
		$config['uri_segment'] = 4;
		$config['per_page'] = 20;

		$param = array();

		if(!empty($channel_id)){
			$param['channel_id'] = $channel_id;
		}

		$data['cur_channel'] = $cur_channel;
		$data['channels'] = $this->channel_model->get_by(array('channel_id'=>$channel_id));

		if($cur_channel['ctype']==1){
			$content = $this->article_model->get_by(array('channel_id'=>$channel_id));

			$config['total_rows'] = $this->article_model->count($param);

		} elseif($cur_channel['ctype']==2){
			$content = $this->pic_model->get_by(array('channel_id'=>$channel_id, 'itype'=>1), 'DESC', );

			$config['total_rows'] = $this->pic_model->count($param);
		}

		$this->pagination->initialize($config);

		$data['pagination'] = $this->pagination->create_links();
		$data['content'] = $content;

		$this->load->view('mcase/index');
	}
}