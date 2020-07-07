<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->library('form_validation');
        $this->load->library('javascript');
        $this->load->model('Kalender_akademik_model');
        $this->load->model('Pengumuman_model');
        $this->load->model('Kontak_model');
    }

    public function index()
    {
        $data['title'] = 'Admin Page';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['periode'] = $this->db->get_where('periode')->row_array();
        $data['kalender_akademik'] = $this->Kalender_akademik_model->getAllKalender();
        // $this->load->model('Kalender_user_model', 'kalender_user');
        // $data['kalender_user'] = $this->db->get('kalender_akademik')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/admin-sidebar', $data);
        $this->load->view('templates/admin-topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_kal()
    {
        $data['title'] = 'Form Tambah Data Kalender Akademik';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('kegiatan', 'Kegiatan', 'trim|required', [
            'required' => 'Field Kegiatan harus diisi.'
        ]);
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'trim|required', [
            'required' => 'Field tanggal harus diisi.'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/admin-sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/tambah_kal', $data);
            $this->load->view('templates/footer');
        } else {
            //validasinya sukses
            $this->Kalender_akademik_model->tambahDataKalender();
            $this->session->set_flashdata('message', 'ditambahkan');
            redirect('admin');
        }
    }

    public function edit($id)
    {
        $data['title'] = 'Form Edit Data Kalender Akademik';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kalender_akademik'] = $this->Kalender_akademik_model->getDataKalenderById($id);

        $this->form_validation->set_rules('kegiatan', 'Kegiatan', 'trim|required', [
            'required' => 'Field Kegiatan harus diisi.'
        ]);
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'trim|required', [
            'required' => 'Field tanggal harus diisi.'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/admin-sidebar', $data);
            $this->load->view('templates/admin-topbar', $data);
            $this->load->view('admin/edit', $data);
            $this->load->view('templates/footer');
        } else {
            //validasinya sukses
            $this->Kalender_akademik_model->editDataKalender();
            $this->session->set_flashdata('message', 'diubah');
            redirect('admin');
        }
    }

    public function hapus($id)
    {
        $this->Kalender_akademik_model->hapusDataKalender($id);
        $this->session->set_flashdata('message', 'dihapus');
        redirect('admin');
    }

    public function pengumuman()
    {
        $data['title'] = 'Admin Page';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        //$data['berkas'] = $this->db->get('tb_pengumuman');
        $data['periode'] = $this->db->get_where('periode')->row_array();
        $data['pengumuman_data'] = $this->Pengumuman_model->getAllData();
        // $this->load->model('Kalender_user_model', 'kalender_user');
        // $data['kalender_user'] = $this->db->get('kalender_akademik')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/admin-sidebar', $data);
        $this->load->view('templates/admin-topbar', $data);
        $this->load->view('admin/pengumuman', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_pengumuman()
    {
        $data['title'] = 'Form Tambah Data Pengumuman';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('tanggal', 'Tanggal', 'trim|required', [
            'required' => 'Field tanggal harus diisi.'
        ]);
        $this->form_validation->set_rules('pengumuman', 'Pengumuman', 'trim|required', [
            'required' => 'Field Pengumuman harus diisi.'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/admin-sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/tambah_pengumuman', $data);
            $this->load->view('templates/footer');
        } else {
            //validasinya sukses
            $this->Pengumuman_model->tambahData();
            $this->session->set_flashdata('message', 'ditambahkan');
            redirect('admin/pengumuman');
        }
    }

    public function edit_pengumuman($id)
    {
        $data['title'] = 'Form Edit Data Kalender Akademik';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pengumuman_data'] = $this->Pengumuman_model->getDataById($id);

        $this->form_validation->set_rules('tanggal', 'Tanggal', 'trim|required', [
            'required' => 'Field tanggal harus diisi.'
        ]);
        $this->form_validation->set_rules('pengumuman', 'Pengumuman', 'trim|required', [
            'required' => 'Field Pengumuman harus diisi.'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/admin-sidebar', $data);
            $this->load->view('templates/admin-topbar', $data);
            $this->load->view('admin/edit_pengumuman', $data);
            $this->load->view('templates/footer');
        } else {
            //validasinya sukses
            $this->Pengumuman_model->editData();
            $this->session->set_flashdata('message', 'diubah');
            redirect('admin/pengumuman');
        }
    }

    public function hapus_pengumuman($id)
    {
        $this->Pengumuman_model->hapusData($id);
        $this->session->set_flashdata('message', 'dihapus');
        redirect('admin/pengumuman');
    }

    public function sop()
    {
        $data['title'] = 'SOP & Peraturan - Asistant Page';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/admin-sidebar', $data);
        $this->load->view('templates/admin-topbar', $data);
        $this->load->view('admin/labsi/sop', $data);
        $this->load->view('templates/footer');
    }

    public function faq()
    {
        $data['title'] = 'FAQ - Asistant Page';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/admin-sidebar', $data);
        $this->load->view('templates/admin-topbar', $data);
        $this->load->view('admin/labsi/faq', $data);
        $this->load->view('templates/footer');
    }

    public function contact()
    {
        $data['title'] = 'Contact - Asistant Page';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['berkas'] = $this->db->get('tb_contact');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/admin-sidebar', $data);
        $this->load->view('templates/admin-topbar', $data);
        $this->load->view('admin/labsi/contact', $data);
        $this->load->view('templates/footer');
    }

    public function hapus_contact($id)
    {
        $data['contact_data'] = $this->Kontak_model->getDataById($id);

        $this->Kontak_model->hapusData($id);
        $this->session->set_flashdata('message', 'dihapus');
        redirect('admin/contact');
    }

    public function jadwal_jaga()
    {
        $data['title'] = 'Jadwal Jaga - Asistant Page';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['berkas'] = $this->db->get('tb_jadwal_jaga');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/admin-sidebar', $data);
        $this->load->view('templates/admin-topbar', $data);
        $this->load->view('admin/praktikum/jadwal-jaga', $data);
        $this->load->view('templates/footer');
    }

    public function proses_jadwaljaga()
    {
        $config['upload_path'] = './assets/doc';
        $config['allowed_types'] = 'pdf|doc|docx|ppt|pptx|xls|xlsx|zip';

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('berkas')) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('admin/praktikum/tambah_jadwaljaga', $error);
        } else {
            $data['nama_berkas'] = $this->upload->data('file_name');
            $data['keterangan_berkas'] = $this->input->post('keterangan_berkas');
            $data['tipe_berkas'] = $this->upload->data('file_ext');
            $data['ukuran_berkas'] = $this->upload->data('file_size');
            $this->db->insert('tb_jadwal_jaga', $data);
            redirect('admin/jadwal_jaga');
        }
    }

    public function upload_jadwaljaga()
    {
        $data['title'] = 'Materi Download - Asistant Page';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['berkas'] = $this->db->get('tb_jadwal_jaga');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/admin-sidebar', $data);
        $this->load->view('templates/admin-topbar', $data);
        $this->load->view('admin/praktikum/tambah_jadwaljaga', $data);
        $this->load->view('templates/footer');
    }

    public function download_jadwaljaga($id)
    {
        $data = $this->db->get_where('tb_jadwal_jaga', ['kd_berkas' => $id])->row();
        force_download('assets/doc/' . $data->nama_berkas, NULL);
    }

    public function jadwal_praktikum()
    {
        $data['title'] = 'Jadwal Praktikum - Asistant Page';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['berkas'] = $this->db->get('tb_jadwal_praktikum');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/admin-sidebar', $data);
        $this->load->view('templates/admin-topbar', $data);
        $this->load->view('admin/praktikum/jadwal-praktikum', $data);
        $this->load->view('templates/footer');
    }

    public function proses_jadwalpraktikum()
    {
        $config['upload_path'] = './assets/doc';
        $config['allowed_types'] = 'pdf|doc|docx|ppt|pptx|xls|xlsx|zip';

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('berkas')) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('admin/praktikum/tambah_jadwalpraktikum', $error);
        } else {
            $data['nama_berkas'] = $this->upload->data('file_name');
            $data['keterangan_berkas'] = $this->input->post('keterangan_berkas');
            $data['tipe_berkas'] = $this->upload->data('file_ext');
            $data['ukuran_berkas'] = $this->upload->data('file_size');
            $this->db->insert('tb_jadwal_praktikum', $data);
            redirect('admin/jadwal_praktikum');
        }
    }

    public function upload_jadwalpraktikum()
    {
        $data['title'] = 'Materi Download - Asistant Page';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['berkas'] = $this->db->get('tb_jadwal_praktikum');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/admin-sidebar', $data);
        $this->load->view('templates/admin-topbar', $data);
        $this->load->view('admin/praktikum/tambah_jadwalpraktikum', $data);
        $this->load->view('templates/footer');
    }

    public function download_jadwalpraktikum($id)
    {
        $data = $this->db->get_where('tb_jadwal_praktikum', ['kd_berkas' => $id])->row();
        force_download('assets/doc/' . $data->nama_berkas, NULL);
    }

    public function materi()
    {
        $data['title'] = 'Materi Download - Asistant Page';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['berkas'] = $this->db->get('tb_berkas');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/admin-sidebar', $data);
        $this->load->view('templates/admin-topbar', $data);
        $this->load->view('admin/praktikum/materi', $data);
        $this->load->view('templates/footer');
    }

    public function proses()
    {
        $config['upload_path'] = './assets/doc';
        $config['allowed_types'] = 'pdf|doc|docx|ppt|pptx|xls|xlsx|zip';
        // $config['max_size'] = 1000;
        // $config['max_width'] = 1024;
        // $config['max_height'] = 768;
        //$config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('berkas')) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('admin/upload_materi', $error);
        } else {
            $data['nama_berkas'] = $this->upload->data('file_name');
            $data['keterangan_berkas'] = $this->input->post('keterangan_berkas');
            $data['tipe_berkas'] = $this->upload->data('file_ext');
            $data['ukuran_berkas'] = $this->upload->data('file_size');
            $this->db->insert('tb_berkas', $data);
            redirect('admin/materi');
        }
    }

    public function upload_materi()
    {
        $data['title'] = 'Materi Download - Asistant Page';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['berkas'] = $this->db->get('tb_berkas');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/admin-sidebar', $data);
        $this->load->view('templates/admin-topbar', $data);
        $this->load->view('admin/praktikum/upload_materi', $data);
        $this->load->view('templates/footer');
    }

    public function download($id)
    {
        $data = $this->db->get_where('tb_berkas', ['kd_berkas' => $id])->row();
        force_download('assets/doc/' . $data->nama_berkas, NULL);
    }

    public function all_biodata()
    {
        $data['title'] = 'All Biodata Assistant';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('User_model', 'all_user');
        $data['all_user'] = $this->db->get('user')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/admin-sidebar', $data);
        $this->load->view('templates/admin-topbar', $data);
        $this->load->view('admin/biodata/all_biodata', $data);
        $this->load->view('templates/footer');
    }

    public function biodata_pribadi()
    {
        $data['title'] = 'All Biodata Assistant';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('User_model', 'all_user');
        $data['all_user'] = $this->db->get('user')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/admin-sidebar', $data);
        $this->load->view('templates/admin-topbar', $data);
        $this->load->view('admin/biodata/biodata-pribadi', $data);
        $this->load->view('templates/footer');
    }

    public function biodata_kerja()
    {
        $data['title'] = 'All Biodata Assistant';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('User_model', 'all_user');
        $data['all_user'] = $this->db->get('user')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/admin-sidebar', $data);
        $this->load->view('templates/admin-topbar', $data);
        $this->load->view('admin/biodata/biodata-kerja', $data);
        $this->load->view('templates/footer');
    }
}
