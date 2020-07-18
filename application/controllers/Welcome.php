<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
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
		// $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['kalender_akademik'] = $this->Kalender_akademik_model->getAllKalender();
		// $this->load->model('Kalender_akademik_model', 'kalender_user');
		// $data['kalender_user'] = $this->db->get('kalender_akademik')->result_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/user_umum_sidebar', $data);
		$this->load->view('templates/user_umum_topbar', $data);
		$this->load->view('user_umum/index', $data);
		$this->load->view('templates/footer');
	}

	public function auth()
	{
		$data['title'] = 'Asistant Login Account';
		$this->load->view('templates/auth_header', $data);
		$this->load->view('auth/login');
		$this->load->view('templates/auth_footer');
	}

	public function pengumuman()
	{
		$data['title'] = 'Pengumuman - Asistant Page';

		$data['periode'] = $this->db->get_where('periode')->row_array();
		$data['pengumuman_data'] = $this->Pengumuman_model->getAllData();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/user_umum_sidebar', $data);
		$this->load->view('templates/user_umum_topbar', $data);
		$this->load->view('user_umum/pengumuman', $data);
		$this->load->view('templates/footer');
	}

	public function sop()
	{
		$data['title'] = 'SOP & Peraturan - Asistant Page';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/user_umum_sidebar', $data);
		$this->load->view('templates/user_umum_topbar', $data);
		$this->load->view('user_umum/labsi/sop', $data);
		$this->load->view('templates/footer');
	}

	public function faq()
	{
		$data['title'] = 'FAQ - Asistant Page';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/user_umum_sidebar', $data);
		$this->load->view('templates/user_umum_topbar', $data);
		$this->load->view('user_umum/labsi/faq', $data);
		$this->load->view('templates/footer');
	}

	public function contact()
	{
		$data['title'] = 'Contact - Asistant Page';

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
			$this->load->view('templates/user_umum_sidebar', $data);
			$this->load->view('templates/user_umum_topbar', $data);
			$this->load->view('user_umum/labsi/contact', $data);
			$this->load->view('templates/footer');
		} else {
			//validasinya sukses
			$this->Kontak_model->tambahData();
			$this->session->set_flashdata('message', 'dikirim');
			redirect('welcome/contact');
		}
	}

	public function jadwal_praktikum()
	{
		$data['title'] = 'Jadwal Praktikum - Asistant Page';
		$data['berkas'] = $this->db->get('tb_jadwal_praktikum');

		$this->load->view('templates/header', $data);
		$this->load->view('templates/user_umum_sidebar', $data);
		$this->load->view('templates/user_umum_topbar', $data);
		$this->load->view('user_umum/praktikum/jadwal_praktikum', $data);
		$this->load->view('templates/footer');
	}
}
