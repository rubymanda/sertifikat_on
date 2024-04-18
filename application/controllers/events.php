<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class events extends CI_Controller
 {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('model_events');


        // if (!$this->session->userdata('event_id')) {
        //     $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">please login!</div>');
        //     redirect('dataevents/events');
        // }
    }

	
	public function index()
	{
		$data['events'] = $this->db->get_where('events', ['event_id' => $this->session->userdata('event_id')])->row_array();
		$data['title'] = 'E-CERTIFICATE | EVENT';
        $queryAllevents = $this->model_events->getDataevents();
		$data['queryAllevents'] = $queryAllevents;
		$this->load->view('template/auth/auth_header', $data);
        $this->load->view('template/sidebar/admin');
		$this->load->view('dataevents/events');
		$this->load->view('template/auth/auth_footer');
	}

	public function tambah_events()
	{
		$data['events'] = $this->db->get_where('events', ['event_id' => $this->session->userdata('event_id')])->row_array();
		$data['title'] = 'E - Sertifikat';
		$this->load->view('template/auth/auth_header', $data);
        $this->load->view('template/sidebar/admin');
		$this->load->view('dataevents/tambah_events');
		$this->load->view('template/auth/auth_footer');
	}

    public function edit_events($event_id)
	{
		$data['events'] = $this->db->get_where('events', ['event_id' => $this->session->userdata('event_id')])->row_array();
		$data['title'] = 'E - Sertifikat';
        $queryAllevents = $this->model_events->getDataeventsDetail($event_id);
		$data['queryAllevents'] = $queryAllevents;
		$this->load->view('template/user/user_header', $data);
        $this->load->view('template/sidebar/admin');
		$this->load->view('dataevents/edit_events');
		$this->load->view('template/user/user_footer');
	}

	public function fungsi_tambah_events()
   {
        $data['events'] = $this->db->get_where('events', ['event_id' => $this->session->userdata('event_id')])->row_array();

        $event_name = $this->input->post('event_name');
        $event_date = $this->input->post('event_date');
        $location = $this->input->post('location');
        $organizer = $this->input->post('organizer');
  
       

        $ArrInsert = array(
            'event_name' => $event_name,
            'event_date' => $event_date,
            'location' => $location,
            'organizer' => $organizer,
 
           
        );

        $this->model_events->insertDataevents($ArrInsert);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan!</div>');
        redirect('events');
    }

    public function fungsi_edit_events()
    {
        $data['events'] = $this->db->get_where('events', ['event_id' => $this->session->userdata('event_id')])->row_array();

        $event_id = $this->input->post('event_id');
        $event_name = $this->input->post('event_name');
        $event_date = $this->input->post('event_date');
        $location = $this->input->post('location');
        $organizer = $this->input->post('organizer');
      

        $ArrUpdate = array(
        	'event_id' => $event_id,
        	'event_name' => $event_name,
            'event_date' => $event_date,
            'location' => $location,
            'organizer' => $organizer
         
           
        );

        $this->model_events->updateDataevents($event_id, $ArrUpdate);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
        redirect('events');
    }

    public function hapus_events($id)
    {
        $data['users'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();

        $this->model_events->hapusDataEvents($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!</div>');
        redirect('events');
    }

}



