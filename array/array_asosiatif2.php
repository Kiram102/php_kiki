<?php

    $siswa = [
        [
            "nama" => "Kiki ramdani",
            "hobi" => "Membaca"
        ],
        [
            "nama" => "Rusdi",
            "hobi" => "Menulis"
        ],
    ];

    foreach($siswa as $murid){
        echo "Nama:". $murid['nama'];
        echo"<br>";
        echo "Hobi :". $murid['hobi'];
        echo "<br>";
    }

?>