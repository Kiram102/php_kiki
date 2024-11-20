<?php

    class kucing {

        public function __construct(){

            echo "Halo Nama Saya Upet<br>";
        }

        public function makan(){

            echo "Saya Makan Daging<br>";
        }

        public function minum(){

            echo "Saya Minum Susu<br>";
        }

        public function __destruct(){

            echo "Saya Bersuara meonggg<br>";
        }
    }

    $kucing = new kucing();

    echo $kucing->makan();
    echo $kucing->minum();
?>