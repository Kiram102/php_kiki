<?php

    $pedagang = [
        [
            "nama" => "Safri",
            "Buah" => [
                "buah" => ["Amggur"],
                "jenis buah" =>["Anggur Ijo","Anggur Putih"]
            ]
            ],
            [
                "nama" => "Kiki",
                "Buah" => [
                 "buah" => ["Stroberi"],
                 "jenis buah" =>["Stroberi Ciwidey","Stroberi Majapahit"]
                ]
                ],
    ];

    foreach($pedagang as $dagangan){
        echo"Nama :". $dagangan["nama"]."<br>";
        echo"Daftar Buah Kesukaan :";
        foreach($dagangan['Buah']['buah'] as $label){
            echo"<li>" .$label. "</li>";
            foreach($dagangan["Buah"]["jenis buah"] as $barang){
                echo "<ul><li>". $barang."</li></ul>";
            }
        }
        echo"<hr>";
    }
?>