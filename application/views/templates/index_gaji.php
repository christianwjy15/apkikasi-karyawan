<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h4 class="m-0 font-weight-bold text-primary">Data Gaji
        <form method="POST" action="<?php echo base_url('Gaji/buat_laporan');?>" class="d-inline">
            <input type="hidden" name="tanggal_mulai" value="<?php echo isset($_POST['tanggal_mulai']) ? $_POST['tanggal_mulai'] : ''; ?>">
            <input type="hidden" name="tanggal_selesai" value="<?php echo isset($_POST['tanggal_selesai']) ? $_POST['tanggal_selesai'] : ''; ?>">
            <button type="submit" class="btn btn-info btn-sm float-right">Buat Laporan</button>
        </form>
        <span style="margin-left: 10px;"></span>
        <a href="<?php echo base_url('Gaji/tambah_data');?>" class="btn btn-primary btn-sm float-right">Tambah Data</a>
    </div>
    <div class="card-body">

        <!-- Formulir Filter Tanggal -->
        <form method="POST" action="<?php echo base_url('Gaji/filter_tanggal');?>">
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="tanggal_mulai">Tanggal Mulai</label>
                    <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="tanggal_selesai">Tanggal Selesai</label>
                    <input type="date" class="form-control" id="tanggal_selesai" name="tanggal_selesai" required>
                </div>
                <div class="form-group col-md-3 align-self-end">
                    <button type="submit" class="btn btn-primary">Filter</button>
                </div>
            </div>
        </form>

        <!-- Search Input -->
        <div class="form-group">
            <input type="text" class="form-control" id="searchInput" placeholder="Search...">
        </div>

        <?php echo $this->session->flashdata('pesan')?>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                    <td>No</td>
                    <td>NIP</td>
                    <td>Tanggal</td>
                    <td>Potongan</td>
                    <td>PPH</td>
                    <td>Total Gaji</td>
                    <td colspan="2">Aksi</td>
                    </tr>
                </thead>
                <tbody id="dataBody">

                <?php 
                $no = 1;
                foreach($gaji as $gj): ?>
                <tr>
                    <td><?php echo $no++;?></td>
                    <td><?php echo $gj['nip']?></td>
                    <td><?php echo $gj['tanggal']?></td>
                    <td><?php echo $gj['potongan']?></td>
                    <td><?php echo $gj['pph']?></td>
                    <td><?php echo $gj['total_gaji']?></td>
                    <td>
                        <a href="<?php echo base_url() ?>Gaji/edit_data/<?php echo $gj['id_gaji'];?>" class="badge badge-primary">Edit</a>
                        <a href="<?php echo base_url() ?>Gaji/hapus_data/<?php echo $gj['id_gaji'];?>" class="badge badge-danger">Hapus</a>
                        <a href="<?php echo base_url() ?>Gaji/slip_gaji/<?php echo $gj['id_gaji'];?>" class="badge badge-info">Slip Gaji</a>
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

<script>
// JavaScript to filter the table based on search input
document.getElementById('searchInput').addEventListener('keyup', function() {
    var input, filter, table, tr, td, i, j, txtValue;
    input = document.getElementById('searchInput');
    filter = input.value.toLowerCase();
    table = document.getElementById('dataTable');
    tr = table.getElementsByTagName('tr');

    for (i = 1; i < tr.length; i++) {
        tr[i].style.display = 'none';
        td = tr[i].getElementsByTagName('td');
        for (j = 0; j < td.length; j++) {
            if (td[j]) {
                txtValue = td[j].textContent || td[j].innerText;
                if (txtValue.toLowerCase().indexOf(filter) > -1) {
                    tr[i].style.display = '';
                    break;
                }
            }
        }
    }
});
</script>
