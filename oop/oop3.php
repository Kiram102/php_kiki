<?php

    class bangun_datar{

        public $hasil;
        public $hasil2;
        public $hasil3;
        public $hasil4;

        public function segitiga($alas,$tinggi){
            echo"<h3>Segitiga<h3>";
            echo "Alas : $alas <br>";
            echo "Tinggi : $tinggi <br>";
           $this->hasil = $alas * $tinggi;
            echo"Hasil : $this->hasil <br>";
            echo"<hr>";
        }

        public function persegi($persegi){
            echo"<h3>Persegi<h3>";
            echo "Persegi : $persegi <br>";
            $this->hasil2 = $persegi * $persegi;
            echo"Hasil : $this->hasil2 <br>";
            echo"<hr>";
        }

        public function persegi_panjang($panjang,$lebar){
            echo"<h3>Persegi Panjang<h3>";
            echo "Panjang : $panjang <br>";
            echo "Lebar : $lebar <br>";
            $this->hasil3 = $panjang * $lebar;
            echo"Hasil : $this->hasil3 <br>";
            echo"<hr>";
        }

        public function lingkaran($jari){
            echo"<h3>Lingkaran<h3>";
            echo "Jari : $jari <br>";
            $this->hasil4 = 3.14 * $jari * $jari;
            echo"Hasil : $this->hasil4 <br>";
            echo"<hr>";
        }
    }

    $mtk = new bangun_datar;

    echo $mtk->segitiga(10,20);
    echo $mtk->persegi(10);
    echo $mtk->persegi_panjang(14,19);
    echo $mtk->lingkaran(28);
?>