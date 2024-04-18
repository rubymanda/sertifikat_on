<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard_user extends CI_Controller {

	
	public function index()
	{
		$data['title'] = 'E-CERTIFICATE | DASHBOARD';
		$this->load->view('template/user/user_header', $data);
		$this->load->view('template/sidebar/user');
		$this->load->view('dashboard/user');
		$this->load->view('template/user/user_footer');
	}
	
}