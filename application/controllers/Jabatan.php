<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jabatan extends CI_Controller {

	public function index()
	{
		$data['jabatan'] = $this->M_jabatan->SemuaData();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar');
		$this->load->view('templates/index_jabatan', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_data()
	{
		$data['jabatan'] = $this->M_jabatan->SemuaData();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar');
		$this->load->view('home/tambah_data_jabatan', $data);
		$this->load->view('templates/footer');
	}

	public function proses_tambah_data()
	{
		$this->M_jabatan->proses_tambah_data();
		redirect('Jabatan');
	}

	public function hapus_data($golongan)
	{
		$this->M_jabatan->hapus_data($golongan);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
													Data berhasil dihapus!
	  											</div>');
		redirect('Jabatan');
	}

	public function edit_data($golongan)
	{
		$data['jabatan'] = $this->M_jabatan->ambil_id_jabatan($golongan);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar');
		$this->load->view('home/edit_data_jabatan', $data);
		$this->load->view('templates/footer');
	}

	public function proses_edit_data($golongan)
	{
		$this->M_jabatan->proses_edit_data($golongan);
		redirect('jabatan');
	
	}
}
