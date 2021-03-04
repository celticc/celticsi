<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function listing()
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->order_by('id', 'desc');
		$query = $this->db->get();
		return $query->result();
	}
	

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */