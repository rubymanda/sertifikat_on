<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class certificate extends CI_Controller
 {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('model_certificate');
        $this->load->model('model_events');


        // if (!$this->session->userdata('certificate_id')) {
        //     $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">please login!</div>');
        //     redirect('dataedit_certificate/edit_certificate');
        // }
    }

	
	public function index()
	{
		$data['certificate'] = $this->db->get_where('certificate', ['certificate_id' => $this->session->userdata('certificate_id')])->row_array();
		$data['title'] = 'E-CERTIFICATE';
        $Certificate = $this->model_certificate->getDataCertificate();
		$data['Certificate'] = $Certificate;
        $queryAllcertificate = $this->model_certificate->getDatacertificate();
		$data['queryAllcertificate'] = $queryAllcertificate;
		$this->load->view('template/auth/auth_header', $data);
        $this->load->view('template/sidebar/admin');
		$this->load->view('sertifikat/certificate');
		$this->load->view('template/auth/auth_footer');
	}

	public function tambah_certificate()
	{
		$data['certificate'] = $this->db->get_where('certificate', ['certificate_id' => $this->session->userdata('certificate_id')])->row_array();
		$data['title'] = 'E - Sertifikat';
        $events = $this->model_events->getDataevents();
		$desha = $this->db->query("SELECT * FROM users WHERE level='user'")->result();
        $data['events'] = $events;
        $data['desha'] = $desha;
		$this->load->view('template/auth/auth_header', $data);
        $this->load->view('template/sidebar/admin');
		$this->load->view('sertifikat/tambah_certificate');
		$this->load->view('template/auth/auth_footer');
	}

    public function edit_certificate($certificate_id)
	{
		$data['certificate'] = $this->db->get_where('certificate', ['certificate_id' => $this->session->userdata('certificate_id')])->row_array();
		$data['title'] = 'E - Sertifikat';
        $queryAllcertificate = $this->model_certificate->getDatacertificateDetail($certificate_id);
		$data['queryAllcertificate'] = $queryAllcertificate;
		$this->load->view('template/user/user_header', $data);
        $this->load->view('template/sidebar/admin');
		$this->load->view('sertifikat/edit_certificate');
		$this->load->view('template/user/user_footer');
	}

	public function fungsi_tambah_certificate()
   {
        $data['certificate'] = $this->db->get_where('certificate', ['certificate_id' => $this->session->userdata('certificate_id')])->row_array();

        $certificate_id = $this->input->post('certificate_id');
        $participant_name = $this->input->post('participant_name');
        $event_name = $this->input->post('event_name');
        $event_date = $this->input->post('event_date');
        $certificate_text = $this->input->post('certificate_text');
  
       

        $ArrInsert = array(
            'certificate_id' => $certificate_id,
            'participant_name' => $participant_name,
            'event_name' => $event_name,
            'event_date' => $event_date,
            'certificate_text' => $certificate_text
 
           
        );

        $this->model_certificate->insertDatacertificate($ArrInsert);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan!</div>');
        redirect('certificate');
    }

    public function fungsi_edit_certificate()
    {
        $data['certificate'] = $this->db->get_where('certificate', ['certificate_id' => $this->session->userdata('certificate_id')])->row_array();

        $certificate_id = $this->input->post('certificate_id');
        $participant_name = $this->input->post('participant_name');
        $event_name = $this->input->post('event_name');
        $event_date = $this->input->post('event_date');
        $certificate_text = $this->input->post('certificate_text');
      

        $ArrUpdate = array(
        	'certificate_id' => $certificate_id,
            'participant_name' => $participant_name,
            'event_name' => $event_name,
            'event_date' => $event_date,
            'certificate_text' =>  $certificate_text
         
           
        );

        $this->model_certificate->updateDatacertificate($certificate_id, $ArrUpdate);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
        redirect('certificate');
    }

    public function hapus_certificate($certificate_id)
    {
        $data['users'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();

        $this->model_certificate->hapusDatacertificate($certificate_id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!</div>');
        redirect('certificate');
    }

}



