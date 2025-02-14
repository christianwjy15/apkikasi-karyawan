<div class="container-fluid">
    <h3>Halaman Tambah Data</h3>
    <hr>
    <br>
    <form method="post" action="<?php echo base_url('Jabatan/proses_tambah_data'); ?>" enctype="multipart/form-data">
    
    <div class="row mb-3">
        <label for="golongan" class="col-sm-2 col-form-label">Golongan</label>
        <div class="col-sm-5">
        <input type="number" class="form-control" name="golongan" require="">
        </div>
    </div>
    
    <div class="row mb-3">
        <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
        <div class="col-sm-5">
        <input type="text" class="form-control" name="jabatan" require="">
        </div>
    </div>

    <div class="row mb-3">
        <label for="gaji_pokok" class="col-sm-2 col-form-label">Gaji Pokok</label>
        <div class="col-sm-5">
        <input type="number" class="form-control" name="gaji_pokok" require="">
        </div>
    </div>

    <div class="row mb-3">
        <label for="bonus" class="col-sm-2 col-form-label">Bonus (%)</label>
        <div class="col-sm-5">
        <input type="number" class="form-control" name="bonus" require="">
        </div>
    </div>
    

    <div class="row mb-3">
        <label for="deskripsi" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-5">
        <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
    </div>
    </form>

</div>