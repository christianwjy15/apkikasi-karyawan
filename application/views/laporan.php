<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h4 style="text-align: center;" class="m-0 font-weight-bold text-primary">Laporan Keuangan</h6>
        <h6 style="text-align: center;" class="m-0 font-weight-bold text-primary">Tanggal: <?php echo $tanggal_mulai, ' - ', $tanggal_selesai;?></h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Tanggal</td>
                        <td>NIP</td>
                        <td>Nama</td>
                        <td>Jabatan</td>
                        <td>Gaji Pokok</td>
                        <td>Bonus</td>
                        <td>Potongan</td>
                        <td>PPH</td>
                        <td>Gaji Bersih</td>
                    </tr>
                </thead>
                <tbody>

                <?php 
                $no = 1;
                $total_bonus = 0;
                $total_potongan = 0;
                $total_pph = 0;
                $total_gaji_pokok = 0;
                $total_gaji_bersih = 0;

                foreach($gaji as $gj): ?>
                <tr>
                    <td><?php echo $no++;?></td>
                    <td><?php echo $gj['tanggal']?></td>  
                    <td><?php echo $gj['nip']?></td>
                    <td><?php echo $this->M_karyawan->ambil_id_karyawan($gj['nip'])['nama']?></td>
                    <td><?php $golongan = $this->M_karyawan->ambil_id_karyawan($gj['nip'])['golongan']; 
                       echo $this->M_jabatan->ambil_id_jabatan($golongan)['jabatan']?></td>
                    <td><?php $golongan = $this->M_karyawan->ambil_id_karyawan($gj['nip'])['golongan']; 
                       $gaji_pokok = $this->M_jabatan->ambil_id_jabatan($golongan)['gaji_pokok'];
                       $total_gaji_pokok += $gaji_pokok;
                       echo $gaji_pokok;?></td>
                    <td><?php $golongan = $this->M_karyawan->ambil_id_karyawan($gj['nip'])['golongan']; 
                       $get_jabatan = $this->M_jabatan->ambil_id_jabatan($golongan);
                       $bonus = $get_jabatan['gaji_pokok'] * $get_jabatan['bonus'] / 100;
                       $total_bonus += $bonus;
                       echo $bonus?></td>
                    <td><?php $total_potongan += $gj['potongan']; echo $gj['potongan']?></td>
                    <td><?php $total_pph += $gj['pph'];echo $gj['pph']?></td>
                    <td><?php $total_gaji_bersih += $gj['total_gaji'];echo $gj['total_gaji']?></td>
                </tr>
                <?php endforeach ?>
                <tr>
                    <td colspan="5" style="text-align: center;">Total</td>
                    <td><?php echo $total_gaji_pokok?></td>
                    <td><?php echo $total_bonus?></td>
                    <td><?php echo $total_potongan?></td>
                    <td><?php echo $total_pph?></td>
                    <td><?php echo $total_gaji_bersih?></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="row justify-content-center mt-3">
    <div class="col-sm-5 text-center">
        <a href="<?php echo base_url('Gaji/download_laporan/'.$tanggal_mulai.'/'.$tanggal_selesai)?>" class="btn btn-primary">Download</a>
    </div>
</div>
</div>


<!-- End of Main Content -->
