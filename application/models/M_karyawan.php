<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_karyawan extends CI_Model {

	public function SemuaData()
	{
		return $this->db->get('karyawan')->result_array();
	}

	public function proses_tambah_data()
	{
		$data = [
			"nip" => $this->input->post('nip'),
			"nama" => $this->input->post('nama'),
			"alamat" => $this->input->post('alamat'),
			"golongan" => $this->input->post('golongan')
		];

		$this->db->insert('karyawan', $data);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
												Data berhasil ditambahkan!
											  </div>');
		
	}

	public function hapus_data($nip)
	{
		$this->db->where('nip', $nip);
		$this->db->delete('karyawan');
	}

	public function ambil_id_karyawan($nip)
	{
		return $this->db->get_where('karyawan', ['nip' => $nip])->row_array();
	}

	public function proses_edit_data()
	{
		$data = [
			"nip" => $this->input->post('nip'),
			"nama" => $this->input->post('nama'),
			"alamat" => $this->input->post('alamat'),
			"golongan" => $this->input->post('golongan')
		];

		$this->db->where('nip', $this->input->post('nip'));
		$this->db->update('karyawan', $data);

		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
		 											Data berhasil diubah!
	  	 										</div>');
	}
}
