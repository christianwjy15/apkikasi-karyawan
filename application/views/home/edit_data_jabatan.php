<div class="container-fluid">
    <h3>Halaman Edit Data</h3>
    <hr>
    <br>
    <form method="post" action="<?php echo base_url('Jabatan/proses_edit_data/'.$jabatan['golongan']); ?>" enctype="multipart/form-data">
    <input type="hidden" name="golongan" value="<?php echo $jabatan['golongan'];?>">

    <div class="row mb-3">
        <label for="golongan" class="col-sm-2 col-form-label">Golongan</label>
        <div class="col-sm-5">
        <p class="form-control-plaintext"><?php echo $jabatan['golongan']; ?></p>
        </div>
    </div>

    <div class="row mb-3">
        <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
        <div class="col-sm-5">
        <input type="text" class="form-control" name="jabatan" value="<?php echo $jabatan['jabatan'];?>">
        </div>
    </div>

    <div class="row mb-3">
        <label for="gaji_pokok" class="col-sm-2 col-form-label">Gaji Pokok</label>
        <div class="col-sm-5">
        <input type="number" class="form-control" name="gaji_pokok" value="<?php echo $jabatan['gaji_pokok'];?>">
        </div>
    </div>

    <div class="row mb-3">
        <label for="bonus" class="col-sm-2 col-form-label">Bonus (%)</label>
        <div class="col-sm-5">
        <input type="number" class="form-control" name="bonus" value="<?php echo $jabatan['bonus'];?>">
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


