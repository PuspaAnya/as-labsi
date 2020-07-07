<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kalender_akademik_model extends CI_Model
{
    public function getAllKalender()
    {
        // $query = "SELECT * `kalender_akademik`";
        // return $this->db->query($query)->result_array();
        return $this->db->get('kalender_akademik')->result_array();
    }

    public function tambahDataKalender()
    {
        $data = [
            "kegiatan" => $this->input->post('kegiatan', true),
            "tanggal" => $this->input->post('tanggal', true)
        ];

        $this->db->insert('kalender_akademik', $data);
    }

    public function hapusDataKalender($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('kalender_akademik');
    }

    public function getDataKalenderById($id)
    {
        return $this->db->get_where('kalender_akademik', ['id' => $id])->row_array();
        return $this->db->get_where('periode', ['id' => $id])->row_array();
    }

    public function editDataKalender()
    {
        $data = [
            "kegiatan" => $this->input->post('kegiatan', true),
            "tanggal" => $this->input->post('tanggal', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('kalender_akademik', $data);
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
