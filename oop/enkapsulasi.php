<?php

    class kucing{

        private $minum = "Susu";
        public $nama = "daffa";

        public function makan(){
            echo "makan whiskas<br>";
            echo "Saya Minum $this->minum";
        }
    }

    $cetak = new kucing;

    echo $cetak->makan();

?>