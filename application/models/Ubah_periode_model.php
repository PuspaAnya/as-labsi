<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ubah_periode_model extends CI_Model
{
    public function getAllData()
    {
        $query = $this->db->get('periode');
        return $query->result_array();
        //return $this->db->get('tb_pengumuman')->result_array();
    }

    public function getPeriodeById($id)
    {
        return $this->db->get_where('periode', ['id' => $id])->row_array();
    }

    public function editPeriode()
    {
        $data = [
            "tahun_periode" => $this->input->post('tahun_periode', true),
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('periode', $data);
    }
}
