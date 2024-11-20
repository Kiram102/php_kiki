<?php

    $siswa = [
        [
            "nis" => "1001",
            "nama" => "Haddad",
            "kelas" => "11 RPL 1",
            "eskul" =>  [
               "nama_eskul" => ["Seni tari","Karawitan","Futsal"],
            ]
        ],
        [
            "nis" => "1002",
            "nama" => "Jamal",
            "kelas" => "11 RPL 2",
            "eskul" =>  [
                "nama_eskul" => ["Futsal"],
            ]
        ],
    ];

    foreach($siswa as $data){
        echo"Nis :".$data['nis']."<br>";
        echo"Nama :".$data['nama']."<br>";
        echo"Kelas :".$data['kelas']."<br>";
        echo"Eskul:";
        foreach($data['eskul']['nama_eskul'] as $eskul){
            echo"<li>". $eskul."</li>";
        }
        echo"<hr>";
    }
?>