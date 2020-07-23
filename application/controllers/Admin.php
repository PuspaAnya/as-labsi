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
        $this->load->model('Ubah_periode_model');
        $this->load->model('m_general', 'mdl');
    }

    public function index()
    {
        $data['title'] = 'Admin Page';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['d_periode'] = $this->db->get_where('periode')->row_array();
        $data['kalender_akademik'] = $this->Kalender_akademik_model->getAllKalender();
        // $data['periode'] = $this->Ubah_periode_model->getAllData();
        // $this->load->model('Kalender_user_model', 'kalender_user');
        // $data['kalender_user'] = $this->db->get('kalender_akademik')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/admin-sidebar', $data);
        $this->load->view('templates/admin-topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }

    public function edit_periode()
    {
        $id         = '1';
        $tahun_periode = $this->input->post('tahun_periode');

        $cek = $this->mdl->getWhere('periode', ['id' => $id]);

        $data = [
            'tahun_periode' => $tahun_periode
        ];

        $this->form_validation->set_rules('tahun_periode', 'Tahun periode', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Form FAQ LABSI';
            $data['d_periode'] = $this->mdl->getWhere('periode', ['id' => $id])->row_array();
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/admin-sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/edit_periode', $data);
            $this->load->view('templates/footer');
        } else {
            if ($cek->num_rows() > 0) {
                $this->session->set_flashdata('message', 'diubah');
                $this->mdl->update('periode', $data, ['id' => $id]);
            } else {
                $this->session->set_flashdata('message', 'disimpan');
                $this->mdl->save('periode', $data);
            }

            redirect('admin');
        }
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

        // $data['pengumuman_data'] = $this->db->order_by('id', 'DESC')->get('tb_pengumuman')->result_array();
        $data['periode'] = $this->db->get_where('periode')->row_array();
        $data['pengumuman_data'] = $this->Pengumuman_model->getAllData();

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
        $data['berkas'] = $this->db->order_by('id', 'DESC')->get('tb_sop');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/admin-sidebar', $data);
        $this->load->view('templates/admin-topbar', $data);
        $this->load->view('admin/labsi/sop', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_sop()
    {
        $id         = $this->uri->segment(3);
        $judul = $this->input->post('judul');
        $isi    = $this->input->post('isi');

        $cek = $this->mdl->getWhere('tb_sop', ['id' => $id]);

        $data = [
            'judul' => $judul,
            'isi' => $isi
        ];

        $this->form_validation->set_rules('judul', 'Judul', 'required|trim');
        $this->form_validation->set_rules('isi', 'Isi', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Form SOP LABSI';
            $data['d_sop'] = $this->mdl->getWhere('tb_sop', ['id' => $id])->row_array();
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/admin-sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/labsi/tambah_sop', $data);
            $this->load->view('templates/footer');
        } else {
            if ($cek->num_rows() > 0) {
                $this->session->set_flashdata('message', 'Data berhasil diupdate');
                $this->mdl->update('tb_sop', $data, ['id' => $id]);
            } else {
                $this->session->set_flashdata('message', 'Data berhasil disimpan');
                $this->mdl->save('tb_sop', $data);
            }

            redirect('admin/sop');
        }
    }

    public function faq()
    {
        $data['title'] = 'FAQ - Admin Page';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $data['berkas'] = $this->db->get('tb_jadwal_praktikum');

        $data['berkas'] = $this->db->order_by('id', 'DESC')->get('tb_faq');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/admin-sidebar', $data);
        $this->load->view('templates/admin-topbar', $data);
        $this->load->view('admin/labsi/faq', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_faq()
    {
        $id         = $this->uri->segment(3);
        $pertanyaan = $this->input->post('pertanyaan');
        $jawaban    = $this->input->post('jawaban');

        $cek = $this->mdl->getWhere('tb_faq', ['id' => $id]);

        $data = [
            'pertanyaan' => $pertanyaan,
            'jawaban' => $jawaban
        ];

        $this->form_validation->set_rules('pertanyaan', 'Pertanyaan', 'required|trim');
        $this->form_validation->set_rules('jawaban', 'Jawaban', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Form FAQ LABSI';
            $data['d_faq'] = $this->mdl->getWhere('tb_faq', ['id' => $id])->row_array();
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/admin-sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/labsi/tambah_faq', $data);
            $this->load->view('templates/footer');
        } else {
            if ($cek->num_rows() > 0) {
                $this->session->set_flashdata('message', 'Data berhasil diupdate');
                $this->mdl->update('tb_faq', $data, ['id' => $id]);
            } else {
                $this->session->set_flashdata('message', 'Data berhasil disimpan');
                $this->mdl->save('tb_faq', $data);
            }

            redirect('admin/faq');
        }
    }

    public function edit_faq()
    {
        $data['title'] = 'Form Edit Data FAQ';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/admin-sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/labsi/edit_faq', $data);
        $this->load->view('templates/footer');
    }

    public function hapus_faq($id)
    {
        $this->db->delete('tb_faq', ['id' => $id]);
        $this->session->set_flashdata('message', 'dihapus');
        redirect('admin/faq');
    }

    public function contact()
    {
        $data['title'] = 'Contact - Asistant Page';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $data['berkas'] = $this->db->get('tb_contact');
        $data['berkas'] = $this->db->order_by('id', 'DESC')->get('tb_contact');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/admin-sidebar', $data);
        $this->load->view('templates/admin-topbar', $data);
        $this->load->view('admin/labsi/contact', $data);
        $this->load->view('templates/footer');
    }

    public function detail_contact($id)
    {
        $data['title'] = 'All Biodata Assistant';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['d_contact'] = $this->db->get_where('tb_contact', ['id' => $id])->row_array();
        // $this->load->model('User_model', 'all_user');
        // $data['all_user'] = $this->db->get('user')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/admin-sidebar', $data);
        $this->load->view('templates/admin-topbar', $data);
        $this->load->view('admin/labsi/detail_contact', $data);
        $this->load->view('templates/footer');
    }

    public function hapus_contact($id)
    {
        $this->db->delete('tb_contact', ['id' => $id]);
        $this->session->set_flashdata('message', 'dihapus');
        redirect('admin/contact');
    }

    public function jadwal_jaga()
    {
        $data['title'] = 'Jadwal Jaga - Asistant Page';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['berkas'] = $this->db->order_by('keterangan_berkas', 'ASC')->get('tb_jadwal_jaga');

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

    public function hapus_jadwal_jaga($id)
    {
        $this->db->delete('tb_jadwal_jaga', ['kd_berkas' => $id]);
        $this->session->set_flashdata('message', 'dihapus');
        redirect('admin/jadwal_jaga');
    }

    public function jadwal_praktikum()
    {
        $data['title'] = 'Jadwal Praktikum - Asistant Page';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $data['berkas'] = $this->db->get('tb_jadwal_praktikum');

        $data['berkas'] = $this->db->order_by('keterangan_berkas', 'ASC')->get('tb_jadwal_praktikum');

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

    public function hapus_jadwal_praktikum($id)
    {
        $this->db->delete('tb_jadwal_praktikum', ['kd_berkas' => $id]);
        $this->session->set_flashdata('message', 'dihapus');
        redirect('admin/jadwal_praktikum');
    }

    public function materi()
    {
        $data['title'] = 'Materi Download - Asistant Page';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $data['berkas'] = $this->db->get('tb_berkas');
        $data['berkas'] = $this->db->order_by('keterangan_berkas', 'ASC')->get('tb_berkas');

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

    public function hapus_materi($id)
    {
        $this->db->delete('tb_berkas', ['kd_berkas' => $id]);
        $this->session->set_flashdata('message', 'dihapus');
        redirect('admin/materi');
    }

    public function all_biodata()
    {
        $data['title'] = 'All Biodata Assistant';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $this->load->model('User_model', 'all_user');
        $data['all_user'] = $this->db->get('user')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/admin-sidebar', $data);
        $this->load->view('templates/admin-topbar', $data);
        $this->load->view('admin/biodata/all_biodata', $data);
        $this->load->view('templates/footer');
    }

    public function detail_biodata($id)
    {
        $data['title'] = 'All Biodata Assistant';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['d_biodata'] = $this->db->get_where('user', ['id' => $id])->row_array();
        // $this->load->model('User_model', 'all_user');
        // $data['all_user'] = $this->db->get('user')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/admin-sidebar', $data);
        $this->load->view('templates/admin-topbar', $data);
        $this->load->view('admin/biodata/detail_biodata', $data);
        $this->load->view('templates/footer');
    }

    public function hapus_biodata($id)
    {
        $this->db->delete('user', ['id' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data asisten berhasil dihapus!
          </div>');
        redirect('admin/all_biodata');
    }

    public function biodata_kerja()
    {
        $data['title'] = 'All Biodata Assistant';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $this->load->model('User_model', 'all_user');
        // $data['all_user'] = $this->db->get('user')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/admin-sidebar', $data);
        $this->load->view('templates/admin-topbar', $data);
        $this->load->view('admin/biodata/biodata-kerja', $data);
        $this->load->view('templates/footer');
    }

    public function editBiodata()
    {
        $data['title'] = 'Edit Biodata';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['status'] = ['Aktif', 'Tidak Aktif'];
        $data['jabatan'] = ['Asisten', 'Ketua', 'Penanggung Jawab (PJ)'];
        $data['lokasi'] = ['Kelapa Dua, Depok', 'Karawaci', 'Kalimalang'];

        $this->form_validation->set_rules('name', 'Nama Lengkap', 'required|trim');
        $this->form_validation->set_rules('no_hp', 'No Hp / Whatsapp', 'required|trim');
        $this->form_validation->set_rules('kelas', 'Kelas', 'required|trim');
        $this->form_validation->set_rules('loc_jaga', 'Lokasi Jaga', 'required|trim');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required|trim');
        $this->form_validation->set_rules('status', 'Status Asisten', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/admin-sidebar', $data);
            $this->load->view('templates/admin-topbar', $data);
            $this->load->view('admin/biodata/edit_biodata', $data);
            $this->load->view('templates/footer');
        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $npm = $this->input->post('npm');
            $no_hp = $this->input->post('no_hp');
            $kelas = $this->input->post('kelas');
            $loc_jaga = $this->input->post('loc_jaga');
            $jabatan = $this->input->post('jabatan');
            $status = $this->input->post('status');

            //cek jika ada gambar yg diupload
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/profile';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/profile/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->set('name', $name);
            $this->db->set('npm', $npm);
            $this->db->set('no_hp', $no_hp);
            $this->db->set('kelas', $kelas);
            $this->db->set('loc_jaga', $loc_jaga);
            $this->db->set('jabatan', $jabatan);
            $this->db->set('status', $status);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Your profile has been updated!
          </div>');
            redirect('admin/biodata_kerja');
        }
    }

    public function tambah_asisten()
    {
        $data['title'] = 'Tambah Asisten Baru';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $this->load->model('User_model', 'all_user');
        // $data['all_user'] = $this->db->get('user')->result_array();

        $this->form_validation->set_rules('npm', 'NPM', 'required|trim|is_unique[user.npm]', [
            'is_unique' => 'This npm has already registered!'
        ]);
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/admin-sidebar', $data);
            $this->load->view('templates/admin-topbar', $data);
            $this->load->view('admin/biodata/tambah_asisten', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'npm' => htmlspecialchars($this->input->post('npm', true)),
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data asisten berhasil ditambahkan!
          </div>');
            redirect('admin/all_biodata');
        }
    }

    public function ubah_Password()
    {
        $data['title'] = 'Form Ubah Password';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[3]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Confirm Password', 'required|trim|min_length[3]|matches[new_password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/admin-sidebar', $data);
            $this->load->view('templates/admin-topbar', $data);
            $this->load->view('admin/biodata/ubah_password', $data);
            $this->load->view('templates/footer');
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Wrong current password!
              </div>');
                redirect('admin/ubah_password');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Password baru tidak boleh sama dengan password lama!
              </div>');
                    redirect('admin/ubah_password');
                } else {
                    //password sudah ok
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Password telah diubah!
              </div>');
                    redirect('admin/ubah_password');
                }
            }
        }
    }
}
