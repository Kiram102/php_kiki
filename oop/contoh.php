<?php

    class mobil{

        var $warna;
        var $merk;
        var $ukuran;

        function maju(){
            echo"Maju";
        }

        function berhenti(){
            echo"Stop";
        }
    
    }

    $mobil = new mobil();

    echo $mobil->maju();
    echo"<br>";
    echo $mobil->berhenti();

?>