 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h4 class="m-0 font-weight-bold text-primary">Data Karyawan
        <a href="<?php echo base_url('Home/tambah_data');?>", class="btn btn-primary btn-sm float-right">Tambah Data</a>
    </div>
    <div class="card-body">
        <?php echo $this->session->flashdata('pesan')?>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                    <td>No</td>
                    <td>NIP</td>
                    <td>Nama</td>
                    <td>Alamat</td>
                    <td>Golongan</td>
                    <td colspan="2">Aksi</td>
                    </tr>
                </thead>
                <tbody>

                <?php 
                $no = 1;
                foreach($karyawan as $kry): ?>
                <tr>
                    <td><?php echo $no++;?></td>
                    <td><?php echo $kry['nip']?></td>
                    <td><?php echo $kry['nama']?></td>
                    <td><?php echo $kry['alamat']?></td>
                    <td><?php echo $kry['golongan']?></td>
                    
                    <td>
                        <a href="<?php echo base_url() ?>Home/edit_data/<?php echo $kry['nip'];?>" class="badge badge-primary">Edit</a>
                        <a href="<?php echo base_url() ?>Home/hapus_data/<?php echo $kry['nip'];?>" class="badge badge-danger">Hapus</a>
                    </td>
                </tr>
                <?php endforeach ?>

                </tbody>
            </table>

        </div>
    </div>
</div>
</div>
<!-- End of Main Content -->