<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth_admin extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}


	public function index()
	{
		$this->form_validation->set_rules('username', 'username', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == false) {

		$data['title'] = 'login Sertifikat Online';
		$this->load->view('template/auth/auth_header', $data);
		$this->load->view('auth/admin/login');
		$this->load->view('template/auth/auth_footer');
		} else {
		// validasi telah berhasil
		$this->login();
		}
	}

	public function login()
        {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $user = $this->db->get_where('users', ['username' => $username])->row_array();
            $pw = $this->db->get_where('users', ['password' => $password])->row_array();

            if ($user) {

                if ($pw) {
                    $data = [

                        'username' => $user['username']

                    ];
                    $this->session->set_userdata($data);
                    if ($user['level'] == 'admin') {
                    redirect('dashboard_admin');
                }else{
                	 $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">user login in here !!</div>');
                	redirect('auth_user');
                }
                } else {
                    
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">wrong password!</div>');
                    redirect('auth_admin');
                }  
                
            } else {
                
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">username is not registered!</div>');
                redirect('auth_admin');
            }
        }
	

	public function logout()
	{
		$this->session->sess_destroy();
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">congratulation! your account has been logout.</div>');
		redirect(base_url());
	}
}