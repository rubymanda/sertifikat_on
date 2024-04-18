<?php

defined('BASEPATH') or exit('No direct script access allowed');

class model_certificate extends CI_Model
{
    function getDatacertificate()
    {
        $query = $this->db->get('certificate');
        return $query->result();
    }

    function insertDatacertificate($data)
    {
        $this->db->insert('certificate', $data);
    }

    function getDatacertificateDetail($id)
    {
        $this->db->where('certificate_id', $id);
        $query =  $this->db->get('certificate');
        return $query->row();
    }

    function updateDatacertificate($id, $data)
    {
        $this->db->where('certificate_id', $id);
        $this->db->update('certificate', $data);
    }

    function hapusDatacertificate($id)
    {
        $this->db->where('certificate_id', $id);
        $this->db->delete('certificate');
    }
    // function getDatakategori()
    // {
    //     $query = $this->db->get('kategori');
    //     return $query->result();
    // }
    

}