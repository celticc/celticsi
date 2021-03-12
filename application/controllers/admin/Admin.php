<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
	}

	public function index()
	{
		$user = $this->admin_model->listing();

		$data = array(	'title' 	=> 'Data Pengguna',
						'user'		=> $user,
						'isi'		=> 'admin/user/list'
					 );
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

}
