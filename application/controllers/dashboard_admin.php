<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard_admin extends CI_Controller {

	
	public function index()
	{
		$data['title'] = 'E-CERTIFICATE | DASHBOARD';
		$this->load->view('template/user/user_header', $data);
		$this->load->view('template/sidebar/admin');
		$this->load->view('dashboard/admin');
		$this->load->view('template/user/user_footer');
	}
}