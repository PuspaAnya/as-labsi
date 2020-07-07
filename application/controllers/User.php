<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->library('form_validation');
        $this->load->model('Kalender_akademik_model');
        $this->load->model('Pengumuman_model');
        $this->load->model('Kontak_model');
    }

    public function index()
    {
        $data['title'] = 'Home - Asistant Page';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['kalender_akademik'] = $this->Kalender_akademik_model->getAllKalender();
        // $this->load->model('Kalender_akademik_model', 'kalender_user');
        // $data['kalender_user'] = $this->db->get('kalender_akademik')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }

    public function pengumuman()
    {
        $data['title'] = 'Pengumuman - Asistant Page';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['periode'] = $this->db->get_where('periode')->row_array();
        $data['pengumuman_data'] = $this->Pengumuman_model->getAllData();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/pengumuman', $data);
        $this->load->view('templates/footer');
    }

    public function sop()
    {
        $data['title'] = 'SOP & Peraturan - Asistant Page';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/labsi/sop', $data);
        $this->load->view('templates/footer');
    }

    public function faq()
    {
        $data['title'] = 'FAQ - Asistant Page';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/labsi/faq', $data);
        $this->load->view('templates/footer');
    }

    public function contact()
    {
        $data['title'] = 'Contact - Asistant Page';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama', 'Nama', 'trim|required', [
            'required' => 'Field nama harus diisi.'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'trim|required', [
            'required' => 'Field email harus diisi.'
        ]);
        $this->form_validation->set_rules('pesan', 'Pesan', 'trim|required', [
            'required' => 'Field pesan harus diisi.'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/labsi/contact', $data);
            $this->load->view('templates/footer');
        } else {
            //validasinya sukses
            $this->Kontak_model->tambahData();
            $this->session->set_flashdata('message', 'dikirim');
            redirect('user/contact');
        }
    }

    public function jadwal_jaga()
    {
        $data['title'] = 'Jadwal Jaga - Asistant Page';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['berkas'] = $this->db->get('tb_jadwal_jaga');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/praktikum/jadwal-jaga', $data);
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
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/praktikum/jadwal-praktikum', $data);
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
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/praktikum/materi', $data);
        $this->load->view('templates/footer');
    }

    public function download($id)
    {
        $data = $this->db->get_where('tb_berkas', ['kd_berkas' => $id])->row();
        force_download('assets/doc/' . $data->nama_berkas, NULL);
    }

    public function biodata_pribadi()
    {
        $data['title'] = 'Biodata - Asistant Page';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/biodata-pribadi', $data);
        $this->load->view('templates/footer');
    }

    public function biodata_kerja()
    {
        $data['title'] = 'Biodata - Asistant Page';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/biodata-kerja', $data);
        $this->load->view('templates/footer');
    }

    public function editBiodataKerja()
    {
        $data['title'] = 'Edit Biodata Kerja';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/biodata/edit-bio-kerja', $data);
            $this->load->view('templates/footer');
        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');

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
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Your profile has been updated!
          </div>');
            redirect('user/biodata_kerja');
        }
    }
}
