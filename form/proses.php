<?php
if(isset($_POST['proses'])){
    $no = $_POST['no'];
    $nama = $_POST['nama'];
    $pendidikan = $_POST['pendidikan'];
    $tanggal = $_POST['tanggal'];
    $jabatan = $_POST['jabatan'];
    $bpjs = $_POST['bpjs'];
    $lama = $_POST['lama'];
    $pinjaman = $_POST['pinjaman'];
    $status = $_POST['status'];
    $tabungan = $_POST['tabungan'];
    $lainnya = $_POST['lainnya'];

    if ($jabatan == "Kepala Sekolah") {
        $gaji = 10000000;
    } elseif($jabatan == "Wakasek"){
        $gaji = 7500000;
    } elseif ($jabatan == "Guru"){
        $gaji = 5000000;
    } elseif ($jabatan == "OB") {
        $gaji = 2500000;
    } else {
        $gaji = 0;
    }

    if ($lama > 5) {
        $tunjangan = 1000000;
    } else {
        $tunjangan = 0;
    }

    if($status == "Tetap"){
        $bonus = 500000;
    } else {
        $bonus = 0;
    }

    $jumlah = $gaji + $tunjangan + $bonus;
    $gaji_kotor = $jumlah;

    $jumlah_potongan = $bpjs + $pinjaman + $tabungan + $lainnya;
    $total_potongan = $jumlah_potongan;

    $total_bersih = $gaji_kotor - $total_potongan;
    $gaji_bersih = $total_bersih;

?>
 
 <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title></title>
  </head>
  <body>
    <center>
    <h4>Struk Gaji</h4>

    <div class="card" style="width: 40%;">
  <div class="card-header">
    <?php echo $nama; ?>
  </div>
  <div class="card-body">
    <h5>Primary card title</h5>
    <table>
        <tr>
            <td>No</td>
            <td>:</td>
            <td><?php echo"$no"; ?></td>
        </tr>
        <tr>
            <td>Name</td>
            <td>:</td>
            <td><?php echo"$nama"; ?></td>
        </tr>
        <tr>
            <td>Unit Pendidikan</td>
            <td>:</td>
            <td><?php echo"$pendidikan"; ?></td>
        </tr>
    </table>
    <br>
    <h4>GAJI</h4>
    <table>
        <tr>
            <td>Jabatan</td>
            <td>:</td>
            <td><?php echo"$jabatan"; ?></td>
        </tr>
        <tr>
            <td>Gaji</td>
            <td>:</td>
            <td><?php echo  number_format($gaji); ?></td>
        </tr>
        <tr>
            <td>Lama Kerja</td>
            <td>:</td>
            <td><?php echo"$lama"; ?></td>
        </tr>
        <tr>
            <td>Tunjangan Lama Kerja</td>
            <td>:</td>
            <td><?php echo  number_format($tunjangan); ?></td>
        </tr>
        <tr>
            <td>Status Kerja</td>
            <td>:</td>
            <td><?php echo"$status"; ?></td>
        </tr>
        <tr>
            <td>Bonus</td>
            <td>:</td>
            <td><?php echo  number_format($bonus); ?></td>
        </tr>
        <tr>
            <td>Gaji Kotor</td>
            <td>:</td>
            <td><?php echo number_format($gaji_kotor); ?></td>
        </tr>
    </table>
    <br>
    <h4>Potongan</h4>
    <table>
        <tr>
            <td>BPJS</td>
            <td>:</td>
            <td><?php echo  number_format($bpjs) ?></td>
        </tr>
        <tr>
            <td>Pinjaman</td>
            <td>:</td>
            <td><?php echo  number_format($pinjaman) ?></td>
        </tr>
        <tr>
            <td>Tabungan</td>
            <td>:</td>
            <td><?php echo  number_format($tabungan) ?></td>
        </tr>
        <tr>
            <td>Lainnya</td>
            <td>:</td>
            <td><?php echo number_format($lainnya) ?></td>
        </tr>
        <tr>
            <td>Total Potongan</td>
            <td>:</td>
            <td><?php echo number_format($jumlah_potongan); ?></td>
        </tr>
    </table>
    <br>
    <h4>Total</h4>
    <h4>Gaji Bersih : <?php echo number_format($gaji_bersih); ?></h4>
  </div>
</div>

    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>

<?php } ?>