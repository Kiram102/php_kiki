<?php 

    class bangun_datar{

        public $luas;
        public$keliling;
    }

    class luas extends bangun_datar{

       public function persegi_panjang($panjang,$lebar){
            echo"<h3>Luas Persegi Panjang<h3>";
            echo"Panjang : $panjang <br>";
            echo"Lebar : $lebar <br>";
            $this->luas = $panjang * $lebar;
            echo"Hasil : $this->luas";
            echo "<hr>";
        }

        public function lingkaran($jari){
            echo"<h3>Luas Lingkaran<h3>";
            echo"Jari : $jari <br>";
            $this->luas = 3.14 * $jari * $jari;
            echo"Hasil : $this->luas";
            echo"<hr>";
        }

        public function segita($alas,$tinggi){
            echo"<h3>Luas Segitiga<h3>";
            echo"Alas : $alas <br>";
            echo"Tinggi : $tinggi <br>";
            $this->luas = $alas * $tinggi;
            echo"Hasil : $this->luas";
            echo"<hr>";
        }

        public function persegi($sisi){
            echo"<h3>Luas Persegi<h3>";
            echo"Sisi : $sisi <br>";
            $this->luas = $sisi * $sisi ;
            echo"Hasil : $this->luas";
            echo"<hr>";
        }
    }

    class keliling extends bangun_datar{

        public function persegi_panjang($panjang, $lebar){
            echo"<h3>Keliling Persegi Panjang<h3>";
            echo"Panjang : $panjang <br>";
            echo"Lebar : $lebar <br>";
            $jumlah = $panjang + $lebar;
            $this->keliling = $jumlah * 2;
            echo"Hasil : $this->keliling";
            echo"<hr>";
        }

        public function persegi($sisi){
            echo"<h3>Keliling Persegi<h3>";
            echo"Sisi: $sisi <br>";
            $this->keliling = 4 * $sisi;
            echo"Hasil : $this->keliling";
            echo"<hr>";
        }

        public function segita($a,$b,$c){
            echo"<h3>Keliling Segitiga<h3>";
            echo"Panjang Sisi Segitiga : $a,$b,$c<br>";
            $this->keliling = $a + $b + $c;
            echo"Hasil : $this->keliling";
            echo"<hr>";
        }

        public function lingkaran($jari){
            echo"<h3>Keliling Lingkaran<h3>";
            echo"Jari : $jari<br>";
            $this->keliling = 2 * 3.14 * $jari ;
            echo"Hasil : $this->keliling";
            echo"<hr>";
        }
    }

    $cetak = new luas();
    
    echo $cetak->persegi_panjang(10,30);
    echo $cetak->lingkaran(10);
    echo $cetak->segita(19,2);
    echo $cetak->persegi(2);

    $cetak2 = new keliling();

    echo $cetak2->persegi_panjang(10,5);
    echo $cetak2->persegi(10);
    echo $cetak2->segita(6,8,10);
    echo $cetak2->lingkaran(7);
?>