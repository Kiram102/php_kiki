<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <center> 
            <h2>Nilai Ujian Nasional</h2>
            <table>
           
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama" required></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td><input type="text" name="kelas" required></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td>
                        <select name="jurusan" id="">
                            <option value="RPL">RPL</option>
                            <option value="TBSM">TBSM</option>
                            <option value="TKRO">TKRO</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><br></td>
                </tr>
                <tr>
                    <td>Nilai Ujian</td>
                </tr>
                <tr>
                    <td>Nilai B.indo</td>
                    <td>:</td>
                    <td><input type="number" name="indo" required></td>
                </tr>
                <tr>
                    <td>Nilai B.inggris</td>
                    <td>:</td>
                    <td><input type="number" name="inggris" required></td>
                </tr>
                <tr>
                    <td>Nilai Matematika</td>
                    <td>:</td>
                    <td><input type="number" name="matematika" required></td>
                </tr>
                <tr>
                    <td>Nilai Produktif</td>
                    <td>:</td>
                    <td><input type="number" name="produktif" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="simpan" value="Simpan"></td>
                </tr>
            </table>
        </center>
    </form>
</body>
</html>

<?php
if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];
    $b_indo = $_POST['indo'];
    $inggris = $_POST['inggris'];
    $matematika = $_POST['matematika'];
    $produktif = $_POST['produktif'];

    $tambah = $b_indo + $inggris + $matematika + $produktif;
    $total = $tambah / 4;
    $hasil = $total;

    echo"
     <center>
        <br>
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>$nama</td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td>$kelas</td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td>$jurusan</td>
            </tr>
            <tr>
                <td>Nilai B.indo</td>
                <td>:</td>
                <td>$b_indo</td>
            </tr>
            <tr>
                <td>Nilai Inggris</td>
                <td>:</td>
                <td>$inggris</td>
            </tr>
            <tr>
                <td>Nilai Matematika</td>
                <td>:</td>
                <td>$matematika</td>
            </tr>
            <tr>
                <td>Nilai Produktif</td>
                <td>:</td>
                <td>$produktif</td>
            </tr>
            <tr>
                <td>Rata-Rata</td>
                <td>:</td>
                <td>$hasil</td>
            </tr>
        </table>
    </center>";
    // echo "
    // <br>
    // <center>
    // ============================<br>
    // Nama : $nama<br>
    // Kelas : $kelas<br>
    // Jurusan : $jurusan<br>
    // Nilai B.indo : $b_indo<br>
    // Nilai Inggris : $inggris<br>
    // Nilai Matematika : $matematika<br>
    // Nilai Produktif : $produktif<br>
    // Rata-Rata : $hasil<br>
    //  ============================<br></center>";
    if ($hasil >= 75) {
        echo"<br><center>Status : Lulus</center>";
    } else {
        echo"<br><center>Status : Tidak Lulus</center>";
    }    
}
?>