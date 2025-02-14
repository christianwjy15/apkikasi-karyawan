<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jabatan extends CI_Model {

	public function SemuaData()
	{
		return $this->db->get('jabatan')->result_array();
	}

	public function proses_tambah_data()
	{
		$data = [
			"golongan" => $this->input->post('golongan'),
            "jabatan" => $this->input->post('jabatan'),
            "gaji_pokok" => $this->input->post('gaji_pokok'),
            "bonus" => $this->input->post('bonus')
		];

		$this->db->insert('jabatan', $data);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
												Data berhasil ditambahkan!
											  </div>');
		
	}

	public function hapus_data($golongan)
	{
		$this->db->where('golongan', $golongan);
		$this->db->delete('jabatan');
	}

	public function ambil_id_jabatan($golongan)
	{
		return $this->db->get_where('jabatan', ['golongan' => $golongan])->row_array();
	}

	public function proses_edit_data()
	{
		$data = [
			"golongan" => $this->input->post('golongan'),
            "jabatan" => $this->input->post('jabatan'),
            "gaji_pokok" => $this->input->post('gaji_pokok'),
            "bonus" => $this->input->post('bonus')
		];

		$this->db->where('golongan', $this->input->post('golongan'));
		$this->db->update('jabatan', $data);

		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
		 											Data berhasil diubah!
	  	 										</div>');
	}
}
