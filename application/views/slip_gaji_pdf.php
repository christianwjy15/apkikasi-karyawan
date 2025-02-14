<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slip Gaji</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .slip-gaji {
            border: 1px solid black;
            padding: 20px;
            max-width: 600px;
            margin: 20px auto;
        }
        .slip-gaji h3 {
            text-align: center;
            border-bottom: 1px solid black;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        .slip-gaji .info, .slip-gaji .income, .slip-gaji .deductions, .slip-gaji .total {
            margin-bottom: 20px;
        }
        .slip-gaji .info p, .slip-gaji .income p, .slip-gaji .deductions p, .slip-gaji .total p {
            margin: 0;
        }
        .slip-gaji .label {
            display: inline-block;
            width: 150px;
        }
        .slip-gaji .value {
            display: inline-block;
        }
    </style>
</head>
<body>
    <div class="slip-gaji">
        <h3>Slip Gaji</h3>
        <div class="info">
            <p><span class="label">Tanggal</span> <span class="value"><?php echo $gaji['tanggal']; ?></span></p>
            <p><span class="label">Nama</span> <span class="value"><?php echo $karyawan['nama']; ?></span></p>
            <p><span class="label">NIP</span> <span class="value"><?php echo $gaji['nip']; ?></span></p>
        </div>
        <div class="income">
            <p><strong>Penghasilan</strong></p>
            <p><span class="label">Gaji Pokok</span> <span class="value"><?php echo number_format($jabatan['gaji_pokok'], 0, ',', '.'); ?></span></p>
            <p><span class="label">Bonus</span> <span class="value"><?php echo number_format(($jabatan['gaji_pokok'] * $jabatan['bonus'] / 100), 0, ',', '.'); ?></span></p>
        </div>
        <div class="deductions">
            <p><strong>Dikurangi</strong></p>
            <p><span class="label">Potongan</span> <span class="value">(<?php echo number_format($gaji['potongan'], 0, ',', '.'); ?>)</span></p>
            <p><span class="label">PPH</span> <span class="value">(<?php echo number_format($gaji['pph'], 0, ',', '.'); ?>)</span></p>
        </div>
        <div class="total">
            <p><strong>Total Take Home Pay</strong></p>
            <p><span class="value"><?php echo number_format($gaji['total_gaji'], 0, ',', '.'); ?></span></p>
        </div>
        
    </div>
</body>
</html>
