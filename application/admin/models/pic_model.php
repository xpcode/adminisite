<?php 

require_once('crm_model.php');

class Pic_model extends CRM_model {

	function __construct() {
		parent::__construct();

		$this-> _table   = 'img';
	    $this-> _primary = 'id';
	}

	function getbanner_bychannelid($channel_id){
		$imgs = $this->get_by(array('channel_id'=>$channel_id));

		if(!empty($imgs)){
			return $imgs[0];
		}
		return FALSE;
	}

	function setbanner_bychannelid($channel_id, $filename, $url){
		$banner = $this->getbanner_bychannelid($channel_id);

		if($banner){
			$banner['filename'] = $filename;
			$banner['url'] = $url;
			$banner['modify_datetime'] = date('Y-m-d H:i:s');

			$banner_id = $this->update($banner['id'], $banner);
		} else {
			$banner = array();
			$banner['filename'] = $filename;
			$banner['url'] = $url;
			$banner['modify_datetime'] = date('Y-m-d H:i:s');

			$banner_id = $this->add($banner);
		}

		return $banner_id;
	}
}