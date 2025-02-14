<div class="container-fluid">
    <h3>Halaman Tambah Data</h3>
    <hr>
    <br>
    <form method="post" action="<?php echo base_url('Home/proses_tambah_data'); ?>" enctype="multipart/form-data">
    
    <div class="row mb-3">
        <label for="nip" class="col-sm-2 col-form-label">NIP</label>
        <div class="col-sm-5">
        <input type="text" class="form-control" name="nip" require="">
        </div>
    </div>
    
    <div class="row mb-3">
        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-5">
        <input type="text" class="form-control" name="nama" require="">
        </div>
    </div>

    <div class="row mb-3">
        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-5">
        <input type="text" class="form-control" name="alamat" require="">
        </div>
    </div>

    <div class="row mb-3">
        <label for="golongan" class="col-sm-2 col-form-label">Golongan</label>
        <div class="col-sm-5">
        <input type="number" class="form-control" name="golongan" require="">
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