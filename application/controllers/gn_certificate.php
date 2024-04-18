<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class gn_certificate extends CI_Controller
 {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('model_generate');
        $this->load->model('model_events');
        $this->load->model('model_certificate');


        // if (!$this->session->userdata('event_id')) {
        //     $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">please login!</div>');
        //     redirect('dataevents/events');
        // }
    }

	
	public function index()
	{
		$data['users'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
		$data['title'] = 'E-CERTIFICATE | GENERATE';
        $gn_certificate = $this->model_generate->getDatagn_certificate();
		$data['gn_certificate'] = $gn_certificate;
        $queryAllcertificate_assignments = $this->model_generate->getDatagn_certificate();
		$data['queryAllcertificate_assignments'] = $queryAllcertificate_assignments;
		$this->load->view('template/auth/auth_header', $data);
        $this->load->view('template/sidebar/admin');
		$this->load->view('generate/gn_certificate');
		$this->load->view('template/auth/auth_footer');
	}

	public function tambah_generate()
	{
		$data['gn_certificate'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
		$data['title'] = 'E - GENERATE';
        $certificate = $this->model_certificate->getDatacertificate();
		$events = $this->model_events->getDataEvents();
		$desha = $this->db->query("SELECT * FROM users WHERE level='user'")->result();
        $data['certificate'] = $certificate;
		$data['events'] = $events;
        $data['desha'] = $desha;
		$this->load->view('template/auth/auth_header', $data);
        $this->load->view('template/sidebar/admin');
		$this->load->view('generate/tambah_generate');
		$this->load->view('template/auth/auth_footer');
	}

    public function edit_generate($user_id)
	{
		$data['gn_certificate'] = $this->db->get_where('certificate_assignments', ['user_id' => $this->session->userdata('user_id')])->row_array();
		$data['title'] = 'E - GENERATE';
		$this->load->view('template/user/user_header', $data);
        $this->load->view('template/sidebar/admin');
		$this->load->view('generate/edit_generate');
		$this->load->view('template/user/user_footer');
	}

	public function fungsi_tambah_generate()
   {
        $data['gn_certificate'] = $this->db->get_where('certificate_assignments', ['user_id' => $this->session->userdata('user_id')])->row_array();

        $certificate_id= $this->input->post('certificate_id');
        $user_id = $this->input->post('user_id');
        $event_id = $this->input->post('event_id');
        $assigned_at = $this->input->post('assigned_at');

  

        $ArrInsert = array(
            'certificate_id' => $certificate_id,
            'user_id' => $user_id,
            'event_id' => $event_id,
           'assigned_at'=> $assigned_at
 
           
        );

        $this->model_generate->insertDatagn_certificate($ArrInsert);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan!</div>');
        redirect('gn_certificate');
    }

    public function hapus_generate($id)
    {
        $data['users'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();

        $this->model_generate->hapusDatagn_certificate($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!</div>');
        redirect('gn_certificate');
    }

    public function download($id)
    {
        $sertifikat = $this->model_certificate->getDatacertificateDetail($id);
        $events = $this->model_events->getDataeventsDetail($id);
		
        $data['sertifikat'] = $sertifikat;
        $data['events'] = $events;

        $this->load->library('dompdf_gen');
        $this->load->view('generate/download', $data);

        $paper_size = 'A4';
        $orientation = 'landscape';
        $html = $this->output->get_output();

        $this->dompdf->set_paper($paper_size, $orientation);
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream('certificate.pdf', array('Attachment' => 0));
    }
}



