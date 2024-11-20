<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <form action="" method="post">
            <h2>Biodata Siswa</h2>
    <table>
        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td><input type="text" name="nama" value="" required></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td><input type="text" name="kelas" value="" required></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="proses" value="Simpan"></td>
        </tr>
    </table>
        </form>
    </center>
</body>
</html>

<?php
if(isset($_POST['proses'])){
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];

    echo "Nama : $nama";
    echo "<br>";
    echo "Kelas : $kelas";
}
?>