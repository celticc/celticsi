
<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Dasbor extends CI_Controller {
 
 	public function index()
 	{
 		$data = array ( 'title' 	=> 'Halaman Utama',
 						'isi'		=> 'secure/dasbor/list'
 					);
 		$this->load->view('secure/layout/wrapper', $data, FALSE);
 	}
 
 }
 
 /* End of file list.php */
 /* Location: ./application/views/secure/dasbor/list.php */ 