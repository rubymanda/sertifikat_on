<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth_user extends CI_Controller 
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
		$this->load->view('auth/user/login');
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
					if ($user['level'] == 'user') {
                    redirect('dashboard_user');
                }else {
                	 $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">admin login in here !!</div>');
                	redirect('auth_admin');
                }
                } else {
                    
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">wrong password!</div>');
                    redirect('auth_user');
                }  
                
            } else {
                
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">username is not registered!</div>');
                redirect('auth_user');
            }
        }

		public function registrasi()
		{
	
	
			$this->form_validation->set_rules('username', 'username', 'required|trim');
			$this->form_validation->set_rules('full_name', 'full_name', 'required|trim');
			$this->form_validation->set_rules('password', 'password', 'required|trim|min_length[3]', [
				'min_length' => 'password too short!'
			]);
			$this->form_validation->set_rules('email', 'email', 'required|trim');
			$this->form_validation->set_rules('level', 'level', 'required|trim');
	
	
			if ($this->form_validation->run() == false) {
			$data['title'] = 'Registrasi User | Sertifikat Online';
			$this->load->view('template/auth/auth_header', $data);
			$this->load->view('auth/user/registrasi');
			$this->load->view('template/auth/auth_footer');
		} else {
			$post = $this->input->post();
			$data = [
					
				'username' => htmlspecialchars($this->input->post('username', true)),
				'password' => htmlspecialchars($this->input->post('password', PASSWORD_DEFAULT)),
				'full_name' => htmlspecialchars($this->input->post('full_name', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'level' => htmlspecialchars($this->input->post('level', true))
	
	
			];
			// if ($post['password'] !== '') {
			// 	$data['password'] = password_hash($post['password'], PASSWORD_DEFAULT);
			// }
	
			$this->db->insert('users', $data);
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
				congratulation! your account has been created. please login!</div>');
	
				redirect('auth_user');
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">congratulation! your account has been logout.</div>');
		redirect('auth_user');
	}
}