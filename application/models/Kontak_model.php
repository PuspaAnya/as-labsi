<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kontak_model extends CI_Model
{
    public function getAllData()
    {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('tb_contact');
        return $query->result_array();

        //return $this->db->get('tb_pengumuman')->result_array();
    }

    public function tambahData()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "email" => $this->input->post('email', true),
            "pesan" => $this->input->post('pesan', true)
        ];

        $this->db->insert('tb_contact', $data);
    }

    public function hapusData($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_contact');
    }

    public function getDataById($id)
    {
        return $this->db->get_where('tb_contact', ['id' => $id])->row_array();
    }

    public function editData()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "email" => $this->input->post('email', true),
            "pesan" => $this->input->post('pesan', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tb_contact', $data);
    }
}
