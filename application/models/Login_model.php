<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Login_model extends CI_Model {

	// login 
	public function login($username,$password)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where(array('username' => $username,
							   'password' => sha1($password)));
		$this->db->order_by('id','desc');
		$query = $this->db->get();
		return $query->row();
	}

	public function login_mahasiswa($username,$password)
	{
		$this->db->select('*');
		$this->db->from('mahasiswa');
		$this->db->where(array('username' => $username,
							   'password' => sha1($password)));
		$this->db->order_by('id','desc');
		$query = $this->db->get();
		return $query->row();
	}

}

/* End of file Login_model */
/* Location: ./application/models/Login_model */