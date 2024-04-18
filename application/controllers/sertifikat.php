<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sertifikat extends CI_Controller {

	
	public function index()
	{
		$data['title'] = 'E - CERTIFICATE';
		$this->load->view('template/user/user_header', $data);
		$this->load->view('template/sidebar/user');
		$this->load->view('halaman/sertifikatuser');
		$this->load->view('template/user/user_footer');
	}
}