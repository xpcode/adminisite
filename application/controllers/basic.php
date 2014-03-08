<?php 

class Basic extends CI_Controller {
	protected $channel_id;
	protected $channel_code;

	function __construct() {
		parent::__construct();
	}

	protected function getbanner($channel_id){
		$this->load->model('pic_model');

		return $this->pic_model->getbanner_bychannelid($channel_id);
	}

	protected function get_channelid_bycode($channel_code){
		$channels = array(
			'main'=>array('id'=>1, 'name'=>'首页', 'url'=>'/admin/main'),
			'product'=>array('id'=>2, 'name'=>'产品服务', 'url'=>'/admin/product'),
			'mcase'=>array('id'=>3, 'name'=>'案例展示', 'url'=>'/admin/mcase'),
			'mnew'=>array('id'=>4, 'name'=>'营销动态', 'url'=>'/admin/mnew'),
			'contact'=>array('id'=>5, 'name'=>'业务联系', 'url'=>'/admin/contact')
			);

		return $channels[$channel_code];
	}
}