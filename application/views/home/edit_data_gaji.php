<div class="container-fluid">
    <h3>Halaman Edit Data</h3>
    <hr>
    <br>
    <form method="post" action="<?php echo base_url('Gaji/proses_edit_data/'.$gaji['id_gaji']); ?>" enctype="multipart/form-data">

    <input type="hidden" name="id_gaji" value="<?php echo $gaji['id_gaji'];?>">
    <div class="row mb-3">
        <label for="nip" class="col-sm-2 col-form-label">NIP</label>
        <div class="col-sm-5">
        <input type="text" class="form-control" name="nip" value="<?php echo $gaji['nip'];?>">
        </div>
    </div>
    
    <div class="row mb-3">
        <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
        <div class="col-sm-5">
        <input type="date" class="form-control" name="tanggal" value="<?php echo $gaji['tanggal'];?>">
        </div>
    </div>

    <div class="row mb-3">
        <label for="potongan" class="col-sm-2 col-form-label">Potongan</label>
        <div class="col-sm-5">
        <input type="number" class="form-control" name="potongan" value="<?php echo $gaji['potongan'];?>">
        </div>
    </div>

    <!-- <div class="row mb-3">
        <label for="pph" class="col-sm-2 col-form-label">PPH</label>
        <div class="col-sm-5">
        <input type="number" class="form-control" name="pph" value="<?php echo $gaji['pph'];?>">
        </div>
    </div>

    <div class="row mb-3">
        <label for="total_gaji" class="col-sm-2 col-form-label">Total Gaji</label>
        <div class="col-sm-5">
        <input type="number" class="form-control" name="total_gaji" value="<?php echo $gaji['total_gaji'];?>">
        </div>
    </div> -->
    

    <div class="row mb-3">
        <label for="deskripsi" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-5">
        <button type="submit" class="btn btn-primary">Ubah</button>
        </div>
    </div>

    </form>

</div>


