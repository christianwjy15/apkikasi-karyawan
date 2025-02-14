<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slip Gaji</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for SB Admin 2 -->
    <style>
        .slip-gaji {
            max-width: 600px;
            margin: 0 auto;
        }
        .slip-gaji .info p, .slip-gaji .income p, .slip-gaji .deductions p, .slip-gaji .total p {
            margin-bottom: 5px;
        }
        .slip-gaji .label {
            display: inline-block;
            width: 120px;
            font-weight: bold;
        }
        .slip-gaji .value {
            display: inline-block;
        }
    </style>
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="card shadow mb-4 slip-gaji">
            <div class="card-header py-3">
                <h4 style="text-align: center;" class="m-0 font-weight-bold text-primary">Slip Gaji</h6>
            </div>
            <div class="card-body">
                <div class="info mb-4">
                    <p><span class="label">Tanggal:</span> <span class="value"><?php echo $gaji['tanggal']; ?></span></p>
                    <p><span class="label">Nama:</span> <span class="value"><?php echo $karyawan['nama']; ?></span></p>
                    <p><span class="label">NIP:</span> <span class="value"><?php echo $gaji['nip']; ?></span></p>
                </div>
                <div class="income mb-4">
                    <h6 class="font-weight-bold text-success">Penghasilan</h6>
                    <p><span class="label">Gaji Pokok:</span> <span class="value"><?php echo number_format($jabatan['gaji_pokok'], 0, ',', '.'); ?></span></p>
                    <p><span class="label">Bonus:</span> <span class="value"><?php echo number_format(($jabatan['gaji_pokok'] * $jabatan['bonus'] / 100), 0, ',', '.'); ?></span></p>
                </div>
                <div class="deductions mb-4">
                    <h6 class="font-weight-bold text-danger">Dikurangi</h6>
                    <p><span class="label">Potongan:</span> <span class="value">(<?php echo number_format($gaji['potongan'], 0, ',', '.'); ?>)</span></p>
                    <p><span class="label">PPH:</span> <span class="value">(<?php echo number_format($gaji['pph'], 0, ',', '.'); ?>)</span></p>
                </div>
                <div class="total">
                    <h6 class="font-weight-bold text-info">Total Take Home Pay</h6>
                    <p><span class="value"><?php echo number_format($gaji['total_gaji'], 0, ',', '.'); ?></span></p>
                </div>
            </div>
        </div>
    </div>
    

    <div class="row justify-content-center mt-3">
        <div class="col-sm-5 text-center">
            <a href="<?php echo base_url('Gaji/download_pdf/'.$gaji['id_gaji']); ?>" class="btn btn-primary">Download</a>
        </div>
    </div>

    <!-- Bootstrap and SB Admin 2 JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

