<?php

$novel = [
    [
        "judul" => "IT",
        "Penulis" => "Steven King",
        "tanggal_rilis" => "15 September 1986",
        "Penerbit" => "Scribner"

    ],
    [
        "judul" => "Laskar Pelangi",
        "Penulis" => "Andrea Hirata",
        "tanggal_rilis" => "2005",
        "Penerbit" => "Bintang Pusaka"
    ],
    [
        "judul" => "Siksa Kubur",
        "Penulis" => "Joko Anwar",
        "tanggal_rilis" => "11 April 2024",
        "Penerbit" => "Rapi Films"
    ],
    [
        "judul" => "Dilan 1991",
        "Penulis" => "Pidi Bala",
        "tanggal_rilis" => "20 November 2024",
        "Penerbit" => "Airlangga"
    ],
    [
        "judul" => "Ambawick",
        "Penulis" => "Ci Rusdi",
        "tanggal_rilis" => "10 November 1990",
        "Penerbit" => "Ngawi Entertaiment"
    ],
];

foreach($novel as $buku){
    echo "Judul :". $buku['judul'];
    echo"<br>";
    echo "Penulis :". $buku['Penulis'];
    echo "<br>";
    echo "Tanggal Rilis :". $buku['tanggal_rilis'];
    echo "<br>";
    echo "Penerbit :". $buku['Penerbit'];
    echo "<br>";
}

?>
