<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class 
{
	protected $CI;

	public function __construct()
	{
        $this->CI =& get_instance();

        //load model
        $this->CI->load->model('login_model');
	}

	//fungsi login
	public function login($username,$password)
	{
		$cek = $this->CI->login_model->login($username,$password);
		//jika ada data user, maka buat session login
		if($cek) {
			$id			= $cek->id;
			$nama		= $cek->nama;
			$level		= $cek->level;
			//buat session
			$this->CI->session->set_userdata('id',$id);
			$this->CI->session->set_userdata('nama',$nama);
			$this->CI->session->set_userdata('level',$level);
			//redirek ke dasbor
			redirect(base_url('secure/dasbor'),'refresh');
		}else{
			//jika tidak ada data
			$this->CI->session->set_flashdata('warning', 'Username Atau Password salah');
			redirect(base_url('secure/login'),'refresh');
		}
	}
	
	//fungsi cek login
	public function cek_login()
	{
		//periksa apakah session sudah ada atau belum
		if ($this->CI->session->userdata('username') == "") 
		{
			$this->CI->session->set_flashdata('warning', 'Anda Belum Login');
			redirect(base_url('secure/login'),'refresh');
		}

	}

	//fungsi logout
	public function logout()
	{
		$this->CI->session->unset_userdata('id');
		$this->CI->session->unset_userdata('nama');
		$this->CI->session->unset_userdata('level');
		//redirek login
		$this->CI->session->set_flashdata('success', 'Anda Berhasil Logout');
		redirect(base_url('secure/login'),'refresh');
	}


}

/* End of file Login_user */
/* Location: ./application/libraries/Login_user */
