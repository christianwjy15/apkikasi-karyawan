<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_gaji extends CI_Model {

	public function SemuaData()
	{
		return $this->db->get('gaji')->result_array();
	}

	public function proses_tambah_data()
	{
		$nip = $this->input->post('nip');
		$tanggal = $this->input->post('tanggal');
		$potongan = $this->input->post('potongan');

		// mengambil golongan dari tabel karywan berdasarkan NIP
		$get_karyawan = $this->db->get_where('karyawan', ['nip' => $nip])->row_array();
		$golongan = $get_karyawan['golongan'];

		// mengambil informasi gaji pokok dan bonus dari tabel jabatan berdasarkan golongan
		$get_jabatan = $this->db->get_where('jabatan', ['golongan' => $golongan])->row_array();
		$gaji_pokok = $get_jabatan['gaji_pokok'];
		$persen_bonus = $get_jabatan['bonus'];
		$bonus = $persen_bonus * $gaji_pokok / 100;

		$pph = ($gaji_pokok + $bonus) * 5 / 100;
        $total_gaji = $gaji_pokok + $bonus - $pph - $potongan;


		$data = array(
		 		"nip" => $nip,
				"tanggal" => $tanggal,
				"potongan" => $potongan,
				"pph" => $pph,
            	"total_gaji" => $total_gaji
		 	);

		$this->db->insert('gaji', $data);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
												Data berhasil ditambahkan!
											  </div>');
		
	}

	public function hapus_data($id_gaji)
	{
		$this->db->where('id_gaji', $id_gaji);
		$this->db->delete('gaji');
	}

	public function ambil_id_gaji($id_gaji)
	{
		return $this->db->get_where('gaji', ['id_gaji' => $id_gaji])->row_array();
	}

	public function proses_edit_data()
	{
		$nip = $this->input->post('nip');
		$tanggal = $this->input->post('tanggal');
		$potongan = $this->input->post('potongan');

		// mengambil golongan dari tabel karywan berdasarkan NIP
		$get_karyawan = $this->db->get_where('karyawan', ['nip' => $nip])->row_array();
		$golongan = $get_karyawan['golongan'];

		// mengambil informasi gaji pokok dan bonus dari tabel jabatan berdasarkan golongan
		$get_jabatan = $this->db->get_where('jabatan', ['golongan' => $golongan])->row_array();
		$gaji_pokok = $get_jabatan['gaji_pokok'];
		$persen_bonus = $get_jabatan['bonus'];
		$bonus = $persen_bonus * $gaji_pokok / 100;

		$pph = ($gaji_pokok + $bonus) * 5 / 100;
        $total_gaji = $gaji_pokok + $bonus - $pph - $potongan;


		$data = array(
			"nip" => $nip,
		   "tanggal" => $tanggal,
		   "potongan" => $potongan,
		   "pph" => $pph,
		   "total_gaji" => $total_gaji
		);

		$this->db->where('id_gaji', $this->input->post('id_gaji'));
		$this->db->update('gaji', $data);

		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
		 											Data berhasil diubah!
	  	 										</div>');
	}

	public function get_gaji_by_date($tanggal_mulai, $tanggal_selesai) {
		$this->db->where('tanggal >=', $tanggal_mulai);
		$this->db->where('tanggal <=', $tanggal_selesai);
		$query = $this->db->get('gaji');
		return $query->result_array();
	}
}
