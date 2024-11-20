<?php

    class kendaraan{

        public $warna = "Hitam";
        public function a(){
            echo "Ini Kendaraan";
        }
    }

    class mobil extends kendaraan {

        public function b(){
            echo $this->a();
            echo "<br>";
            echo "Warna Saya Adalah : $this->warna";
        }
    }

    $cetak = new mobil();
    echo $cetak->b();

?>