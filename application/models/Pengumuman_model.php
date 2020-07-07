<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengumuman_model extends CI_Model
{
    public function getAllData()
    {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('tb_pengumuman');
        return $query->result_array();

        //return $this->db->get('tb_pengumuman')->result_array();
    }

    public function tambahData()
    {
        $data = [
            "tanggal" => $this->input->post('tanggal', true),
            "pengumuman" => $this->input->post('pengumuman', true)
        ];

        $this->db->insert('tb_pengumuman', $data);
    }

    public function hapusData($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_pengumuman');
    }

    public function getDataById($id)
    {
        return $this->db->get_where('tb_pengumuman', ['id' => $id])->row_array();
    }

    public function editData()
    {
        $data = [
            "tanggal" => $this->input->post('tanggal', true),
            "pengumuman" => $this->input->post('pengumuman', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tb_pengumuman', $data);
    }
}
