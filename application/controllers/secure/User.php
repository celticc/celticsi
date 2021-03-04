<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}

	public function index()
	{
		$user = $this->user_model->listing();

		$data = array(	'title' 	=> 'Data Pengguna',
						'user'		=> $user,
						'isi'		=> 'secure/user/list'
					 );
		$this->load->view('secure/layout/wrapper', $data, FALSE);
	}

}

/* End of file User.php */
/* Location: ./application/controllers/secure/User.php */