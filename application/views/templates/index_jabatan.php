 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h4 class="m-0 font-weight-bold text-primary">Data Jabatan
        <a href="<?php echo base_url('Jabatan/tambah_data');?>", class="btn btn-primary btn-sm float-right">Tambah Data</a>
    </div>
    <div class="card-body">
        <?php echo $this->session->flashdata('pesan')?>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                    <td>No.</td>
                    <td>Golongan</td>
                    <td>Jabatan</td>
                    <td>Gaji Pokok</td>
                    <td>Bonus(%)</td>
                    <td colspan="2">Aksi</td>
                    </tr>
                </thead>
                <tbody>

                <?php 
                $no = 1;
                foreach($jabatan as $jbt): ?>
                <tr>
                    <td><?php echo $no++;?></td>
                    <td><?php echo $jbt['golongan']?></td>
                    <td><?php echo $jbt['jabatan']?></td>
                    <td><?php echo $jbt['gaji_pokok']?></td>
                    <td><?php echo $jbt['bonus']?></td>
                    
                    <td>
                        <a href="<?php echo base_url() ?>Jabatan/edit_data/<?php echo $jbt['golongan'];?>" class="badge badge-primary">Edit</a>
                        <a href="<?php echo base_url() ?>Jabatan/hapus_data/<?php echo $jbt['golongan'];?>" class="badge badge-danger">Hapus</a>
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