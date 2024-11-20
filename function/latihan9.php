<?php

    function segita($alas,$tinggi){
        echo"<h3>Segitiga<h3>";
        echo"Alas : $alas <br>";
        echo"Tinggi : $tinggi <br>";
        $hasil_segitiga = $alas * $tinggi;
        echo"Hasil : $hasil_segitiga";
    }

    segita(10,30);
    echo"<br>";
    echo"<hr>";

    function persegi($sisi){
        echo"<h3>Persegi<h3>";
        echo"Sisi : $sisi <br>";
        $hasil_persegi = $sisi * $sisi ;
        echo"Hasil : $hasil_persegi";
    }

    persegi(10);
    echo"<br>";
    echo"<hr>";

    function persegi_panjang($panjang,$lebar){
        echo"<h3>Persegi Panjang<h3>";
        echo"Panjang : $panjang <br>";
        echo"Lebar : $lebar <br>";
        $hasil_panjang = $panjang * $lebar;
        echo"Hasil : $hasil_panjang";
    }

    persegi_panjang(20,30);
    echo"<br>";
    echo"<hr>";

    function lingkaran($jari){
        echo"<h3>Lingkaran<h3>";
        echo"Jari : $jari <br>";
        $hasil_lingkaran = 3.14 * $jari * $jari;
        echo"Hasil : $hasil_lingkaran";
    }

    lingkaran(20);
    echo"<br>";
    echo"<hr>";

?>