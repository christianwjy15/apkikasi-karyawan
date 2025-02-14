<div class="container-fluid">
    <h3>Halaman Edit Data</h3>
    <hr>
    <br>
    <form method="post" action="<?php echo base_url('Home/proses_edit_data/'.$karyawan['nip']); ?>" enctype="multipart/form-data">
    <input type="hidden" name="nip" value="<?php echo $karyawan['nip'];?>">

    <div class="row mb-3">
        <label for="nip" class="col-sm-2 col-form-label">NIP</label>
        <div class="col-sm-5">
        <p class="form-control-plaintext"><?php echo $karyawan['nip']; ?></p>
        </div>
    </div>
    
    <div class="row mb-3">
        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-5">
        <input type="text" class="form-control" name="nama" value="<?php echo $karyawan['nama'];?>">
        </div>
    </div>

    <div class="row mb-3">
        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-5">
        <input type="text" class="form-control" name="alamat" value="<?php echo $karyawan['alamat'];?>">
        </div>
    </div>

    <div class="row mb-3">
        <label for="golongan" class="col-sm-2 col-form-label">Golongan</label>
        <div class="col-sm-5">
        <input type="number" class="form-control" name="golongan" value="<?php echo $karyawan['golongan'];?>">
        </div>
    </div>

    <div class="row mb-3">
        <label for="deskripsi" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-5">
        <button type="submit" class="btn btn-primary">Ubah</button>
        </div>
    </div> 

    </form>

</div>

