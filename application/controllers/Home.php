<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['karyawan'] = $this->M_karyawan->SemuaData();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar');
		$this->load->view('templates/index', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_data()
	{
		$data['karyawan'] = $this->M_karyawan->SemuaData();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar');
		$this->load->view('home/tambah_data', $data);
		$this->load->view('templates/footer');
	}

	public function proses_tambah_data()
	{
		$this->M_karyawan->proses_tambah_data();
		redirect('Home');
	}

	public function hapus_data($nip)
	{
		$this->M_karyawan->hapus_data($nip);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
													Data berhasil dihapus!
	  											</div>');
		redirect('Home');
	}

	public function edit_data($nip)
	{
		$data['karyawan'] = $this->M_karyawan->ambil_id_karyawan($nip);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar');
		$this->load->view('home/edit_data', $data);
		$this->load->view('templates/footer');
	}

	public function proses_edit_data($nip)
	{
		$this->M_karyawan->proses_edit_data($nip);
		redirect('Home');
	}
}
