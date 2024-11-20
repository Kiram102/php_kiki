<?php
$data_json = '[
    {
        "nama": "Kiki",
        "alamat": "Bandung"
    },
    {
        "nama": "Jamal",
        "alamat": "Bandung"
    },
    {
        "nama": "Kuma",
        "alamat": "Bandung"
    }
]';

$list = json_decode($data_json);

foreach ($list as $data) {
    echo "Nama : {$data->nama}<br>";
    echo "Alamat : {$data->alamat}<br>";
    echo "<hr>";
}
