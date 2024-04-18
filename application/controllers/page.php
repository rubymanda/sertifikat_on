<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class page extends CI_Controller {

	public function index()
	{
		$data['title'] = 'E-CERTIFICATE | PAGE';
		$this->load->view('auth/page/page', $data);
		
	}
}
