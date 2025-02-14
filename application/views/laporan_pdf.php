<!DOCTYPE html>
<html>
<head>
    <title>Laporan Keuangan</title>
    <style>
        /* Tambahkan CSS khusus untuk PDF jika diperlukan */
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2 style="text-align: center;">Laporan Keuangan</h2>
    <h4 style="text-align: center;">Tanggal: <?php echo $tanggal_mulai . ' - ' . $tanggal_selesai; ?></h4>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>NIP</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Gaji Pokok</th>
                <th>Bonus</th>
                <th>Potongan</th>
                <th>PPH</th>
                <th>Gaji Bersih</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1;
            $total_bonus = 0;
            $total_potongan = 0;
            $total_pph = 0;
            $total_gaji_pokok = 0;
            $total_gaji_bersih = 0;

            foreach($gaji as $gj): ?>
            <tr>
                <td><?php echo $no++;?></td>
                <td><?php echo $gj['tanggal']?></td>  
                <td><?php echo $gj['nip']?></td> 
                <td><?php echo $this->M_karyawan->ambil_id_karyawan($gj['nip'])['nama']?></td>
                <td><?php $golongan = $this->M_karyawan->ambil_id_karyawan($gj['nip'])['golongan']; 
                   echo $this->M_jabatan->ambil_id_jabatan($golongan)['jabatan']?></td>
                <td><?php $golongan = $this->M_karyawan->ambil_id_karyawan($gj['nip'])['golongan']; 
                   $gaji_pokok = $this->M_jabatan->ambil_id_jabatan($golongan)['gaji_pokok'];
                   $total_gaji_pokok += $gaji_pokok;
                   echo $gaji_pokok;?></td>
                <td><?php $golongan = $this->M_karyawan->ambil_id_karyawan($gj['nip'])['golongan']; 
                   $get_jabatan = $this->M_jabatan->ambil_id_jabatan($golongan);
                   $bonus = $get_jabatan['gaji_pokok'] * $get_jabatan['bonus'] / 100;
                   $total_bonus += $bonus;
                   echo $bonus?></td>
                <td><?php $total_potongan += $gj['potongan']; echo $gj['potongan']?></td>
                <td><?php $total_pph += $gj['pph'];echo $gj['pph']?></td>
                <td><?php $total_gaji_bersih += $gj['total_gaji'];echo $gj['total_gaji']?></td>
            </tr>
            <?php endforeach ?>
            <tr>
                <td colspan="5" style="text-align: center;">Total</td>
                <td><?php echo $total_gaji_pokok?></td>
                <td><?php echo $total_bonus?></td>
                <td><?php echo $total_potongan?></td>
                <td><?php echo $total_pph?></td>
                <td><?php echo $total_gaji_bersih?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>
