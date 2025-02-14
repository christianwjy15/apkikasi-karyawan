<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gaji extends CI_Controller {

	public function index()
	{
		$data['gaji'] = $this->M_gaji->SemuaData();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar');
		$this->load->view('templates/index_gaji', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_data()
	{
		$data['gaji'] = $this->M_gaji->SemuaData();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar');
		$this->load->view('home/tambah_data_gaji', $data);
		$this->load->view('templates/footer');
	}

	public function proses_tambah_data()
	{

		$this->M_gaji->proses_tambah_data();
		redirect('Gaji');
	}

	public function hapus_data($id_gaji)
	{
		$this->M_gaji->hapus_data($id_gaji);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
													Data berhasil dihapus!
	  											</div>');
		redirect('Gaji');
	}

	public function edit_data($id_gaji)
	{
		$data['gaji'] = $this->M_gaji->ambil_id_gaji($id_gaji);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar');
		$this->load->view('home/edit_data_gaji', $data);
		$this->load->view('templates/footer');
	}

	public function proses_edit_data($id_gaji)
	{
		$this->M_gaji->proses_edit_data($id_gaji);
		redirect('Gaji');
	
	}

	public function slip_gaji($id_gaji){
		
		$data['gaji'] = $this->M_gaji->ambil_id_gaji($id_gaji);
		$nip = $data['gaji']['nip'];

		$data['karyawan'] = $this->M_karyawan->ambil_id_karyawan($nip);
		$golongan = $data['karyawan']['golongan'];

		$data['jabatan'] = $this->M_jabatan->ambil_id_jabatan($golongan);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar');
		$this->load->view('slip_gaji', $data);
		$this->load->view('templates/footer');
	}

	public function download_pdf($id_gaji) {
		$data['gaji'] = $this->M_gaji->ambil_id_gaji($id_gaji);
		$nip = $data['gaji']['nip'];

		$data['karyawan'] = $this->M_karyawan->ambil_id_karyawan($nip);
		$golongan = $data['karyawan']['golongan'];

		$data['jabatan'] = $this->M_jabatan->ambil_id_jabatan($golongan);
        
		//// pdf
        $html = $this->load->view('slip_gaji_pdf', $data, true);
        $this->dompdf_lib->loadHtml($html);
        $this->dompdf_lib->setPaper('a5', 'landscape');
        $this->dompdf_lib->render();
        $this->dompdf_lib->stream("slip_gaji_{$data['gaji']['nip']}.pdf", array("Attachment" => 1));
    }

	public function filter_tanggal() {
		$tanggal_mulai = $this->input->post('tanggal_mulai');
		$tanggal_selesai = $this->input->post('tanggal_selesai');
	
		$data['gaji'] = $this->M_gaji->get_gaji_by_date($tanggal_mulai, $tanggal_selesai);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar');
		$this->load->view('templates/index_gaji', $data);
		$this->load->view('templates/footer');
	}

	public function buat_laporan() {
        $data['tanggal_mulai'] = $this->input->post('tanggal_mulai');
        $data['tanggal_selesai'] = $this->input->post('tanggal_selesai');
		
        $data['gaji'] = $this->M_gaji->get_gaji_by_date( $data['tanggal_mulai'], $data['tanggal_selesai'] );
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar');
		$this->load->view('laporan.php', $data);
		$this->load->view('templates/footer');
    }
	
	public function download_laporan($tanggal_mulai, $tanggal_selesai) {
		$data['tanggal_mulai'] = $tanggal_mulai;
        $data['tanggal_selesai'] = $tanggal_selesai;

        $data['gaji'] = $this->M_gaji->get_gaji_by_date($data['tanggal_mulai'], $data['tanggal_selesai']);
        
		//// pdf
        $html = $this->load->view('laporan_pdf', $data, true);
		$this->dompdf_lib->loadHtml($html);
		$this->dompdf_lib->setPaper('a4', 'landscape');
		$this->dompdf_lib->render();
		$this->dompdf_lib->stream("laporan_".$tanggal_mulai."_".$tanggal_selesai.".pdf", array("Attachment" => 1));
    }
}
