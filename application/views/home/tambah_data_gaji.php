<div class="container-fluid">
    <h3>Halaman Tambah Data</h3>
    <hr>
    <br>
    <form method="post" action="<?php echo base_url('Gaji/proses_tambah_data'); ?>" enctype="multipart/form-data">
    
    <div class="row mb-3">
        <label for="nip" class="col-sm-2 col-form-label">NIP</label>
        <div class="col-sm-5">
        <input type="text" class="form-control" name="nip" require="">
        </div>
    </div>
    
    <div class="row mb-3">
        <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
        <div class="col-sm-5">
        <input type="date" class="form-control" name="tanggal" require="">
        </div>
    </div>

    <div class="row mb-3">
        <label for="potongan" class="col-sm-2 col-form-label">Potongan</label>
        <div class="col-sm-5">
        <input type="number" class="form-control" name="potongan" require="">
        </div>
    </div>

    <!-- <div class="row mb-3">
        <label for="pph" class="col-sm-2 col-form-label">PPH</label>
        <div class="col-sm-5">
        <input type="number" class="form-control" name="pph" require="">
        </div>
    </div>

    <div class="row mb-3">
        <label for="total_gaji" class="col-sm-2 col-form-label">Total Gaji</label>
        <div class="col-sm-5">
        <input type="number" class="form-control" name="total_gaji" require="">
        </div>
    </div> -->
    

    <div class="row mb-3">
        <label for="deskripsi" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-5">
        <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
    </div>
    </form>

</div>