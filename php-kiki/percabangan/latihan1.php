<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nama = "Dudi Similikiti";
    $kelas = "XI RPL 1";
    $nilai_indo = 85;
    $nilai_Inggris = 75;
    $Matematika = 90;
    $produktif = 85; 
    $rata = 83;
    ?>
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?php echo "$nama";?></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td><?php echo "$kelas";?></td>
        </tr>
        <tr>
            <td>Nilai_B.indo</td>
            <td>:</td>
            <td><?php echo "$nilai_indo";?></td>
        </tr>
        <tr>
            <td>Nilai_B.inggris</td>
            <td>:</td>
            <td><?php echo "$nilai_Inggris";?></td>
        </tr>
        <tr>
            <td>Matematika</td>
            <td>:</td>
            <td><?php echo "$Matematika";?></td>
        </tr>
        <tr>
            <td>Produktif</td>
            <td>:</td>
            <td><?php echo "$produktif";?></td>
        </tr>
        <tr>
            <td>Rata-Rata</td>
            <td>:</td>
            <td><?php echo "$rata";?></td>
        </tr>
    </table>
    <hr>
</body>
</html>
<?php


$jumlah = $nilai_indo + $nilai_Inggris + $Matematika + $produktif;
$total = $jumlah / 4 ;

if ($rata >= 75) {
    echo"Status : Anda lulus";
} else {
    echo "Status : Anda tidak lulus";
}
?>