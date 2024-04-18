<?php

defined('BASEPATH') or exit('No direct script access allowed');

class model_generate extends CI_Model
{
    function getDatagn_certificate()
    {
        $query = $this->db->get('certificate_assignments');
        return $query->result();
    }

    function insertDatagn_certificate($data)
    {
        $this->db->insert('certificate_assignments', $data);
    }

    function getDatagn_certificateDetail($id)
    {
        $this->db->where('assignment_id', $id);
        $query =  $this->db->get('certificate_assignments');
        return $query->row();
    }

    function updateDatagn_certificate($id, $data)
    {
        $this->db->where('assignment_id', $id);
        $this->db->update('certificate_assignments', $data);
    }

    function hapusDatagn_certificate($id)
    {
        $this->db->where('assignment_id', $id);
        $this->db->delete('certificate_assignments');
    }
    // function getDatakategori()
    // {
    //     $query = $this->db->get('kategori');
    //     return $query->result();
    // }
    

}