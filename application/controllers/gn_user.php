<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class gn_user extends CI_Controller
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
        $this->load->view('template/sidebar/user');
		$this->load->view('user/generate_user');
		$this->load->view('template/auth/auth_footer');
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



