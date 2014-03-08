<?php 

require_once('crm_model.php');

class Pic_model extends CRM_model {

	function __construct() {
		parent::__construct();

		$this-> _table   = 'img';
	    $this-> _primary = 'id';
	}

	function getbanner_bychannelid($channel_id){
		$imgs = $this->get_by(array('channel_id'=>$channel_id, 'itype'=>2));

		if(!empty($imgs)){

			return $imgs;
		}
		return FALSE;
	}

	function setbanner_bychannelid($channel_id, $filename, $url){
		$this->deletebanner_bychannelid($channel_id);

		$banner['channel_id'] = $channel_id;
		$banner['itype'] = 2;
		$banner['filename'] = $filename;
		$banner['url'] = $url;
		$banner['modify_datetime'] = date('Y-m-d H:i:s');

		$banner_id = $this->add($banner);

		return $banner_id;
	}

	function sethomepagebanner_bychannelid($channel_id, $filenames){
		$this->deletebanner_bychannelid($channel_id);

		if(is_array($filenames)){

			foreach ($filenames as $key => $value) {
				$banner = array();
				$banner['itype'] = 2;
				$banner['channel_id'] = 1;
				$banner['filename'] = $value;
				$banner['modify_datetime'] = date('Y-m-d H:i:s');

				$banner_id = $this->add($banner);

				if(empty($banner_id)){
					return FALSE;
				}
			}

			return TRUE;
		}

		return FALSE;
	}

	function deletebanner_bychannelid($channel_id){
		$imgs = $this->get_by(array('channel_id'=>$channel_id, 'itype'=>2));

		if(!empty($imgs)){
			foreach ($imgs as $val) {
				$this->del_byid($val['id']);
			}
		}
	}
}