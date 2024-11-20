<?php

    $nama = "KIKI";
    $jenis_kelamin = "Laki-Laki";
    $jenis = "MAKANAN";
    $menu = "Nasi goreng";
    $jumlah = 10;

    if ($jenis == "MAKANAN") {
        
        if ($menu == "Nasi goreng") {
            $harga = 10000;
            $total = $harga * $jumlah;
            if ($total >= 50000) {
                $persen = $harga * 100 / 20;
                $hasil = $total - $persen;
            } else {
                $potongan = $total;
                $persen = "tidak ada diskon";
                $hasil = $total;
            }
            
        } elseif ($menu == "Mie goreng") {

            $harga = 15000;
            $total = $harga * $jumlah;
            if ($total >= 50000) {
                $persen = $harga * 100 / 20;
                $hasil = $total - $persen;
            } else {
                $potongan = $total;
                $persen = "tidak ada diskon";
                $hasil = $total;
            }
            
        } elseif ($menu == "Ayam goreng") {
            
            $harga = 20000;
            $total = $harga * $jumlah;
            if ($total >= 50000) {
                $persen = $harga * 100 / 20;
                $hasil = $total - $persen;
            } else {
                $potongan = $total;
                $persen = "tidak ada diskon";
                $hasil = $total;
            }
            
        } else {
            echo "Menu tidak tersedia";
        }

    } elseif ($jenis == "MINUMAN") {

        if ($menu == "Air mineral") {
            $harga = 5000;
            $total = $harga * $jumlah;
            if ($total >= 50000) {
                $persen = $harga * 100 / 20;
                $hasil = $total - $persen;
            } else {
                $potongan = $total;
                $persen = "tidak ada diskon";
                $hasil = $total;
            }
            
        } elseif ($menu == "Fresh tea") {

            $harga = 7000;
            $total = $harga * $jumlah;
            if ($total >= 50000) {
                $persen = $harga * 100 / 20;
                $hasil = $total - $persen;
            } else {
                $potongan = $total;
                $persen = "tidak ada diskon";
                $hasil = $total;
            }
            
        } elseif ($menu == "Jus") {
            
            $harga = 12000;
            $total = $harga * $jumlah;
            if ($total >= 50000) {
                $persen = $harga * 100 / 20;
                $hasil = $total - $persen;
            } else {
                $potongan = $total;
                $persen = "tidak ada diskon";
                $hasil = $total;
            }
            
        } else {
            echo "Menu tidak tersedia";
        }
    
    } else {
        echo "Jenis makanan tidak tersedia";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h2>------RESTORAN SELALU RAME------</h2>
    <h2>---------------------------------------------------</h2>
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?php echo "$nama"; ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><?php echo "$jenis_kelamin"; ?></td>
        </tr>
        <tr>
            <td>Jenis</td>
            <td>:</td>
            <td><?php echo "$jenis"; ?></td>
        </tr>
        <tr>
            <td>Menu</td>
            <td>:</td>
            <td><?php echo "$menu"; ?></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td>:</td>
            <td><?php echo "$harga RB"; ?></td>
        </tr>
        <tr>
            <td>Jumlah</td>
            <td>:</td>
            <td><?php echo "$jumlah"; ?></td>
        </tr>
        <tr></tr>
    </table>
    <h2>---------------------------------------------------</h2>
    <table>
        <tr>
            <td>TOTAL</td>
            <td>:</td>
            <td><?php echo"$total RB"; ?></td>
        </tr>
        <tr>
            <td>Diskon 20%</td>
            <td>:</td>
            <td><?php echo"$persen RB"; ?></td>
        </tr>
    </table>
    <h2>---------------------------------------------------</h2>
    <table>
    <tr>
            <td>TOTAL BAYAR</td>
            <td>:</td>
            <td><?php echo"$hasil RB"; ?></td>
        </tr>
    </table>
</body>
</html>