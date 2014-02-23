<?php 

class Contact extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	public function index()
	{
		$sql = 'SELECT * FROM area';

		$this->load->database();
		$query = $this->db->query($sql);
		$data['area_list'] = $query->result_array();
		// $this->db->close();

		/*

		foreach ($query->result_array() as $row)
		{
			$result[]
		}*/

		$this->load->view('contacts/index', $data);
	}
}