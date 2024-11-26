<?php
$mhs = [
    [
        "nama" => "Candra",
        "jurusan" => "Teknik Informattika",
        "alamat" => "Bandung",
    ],
    [
        "nama" => "Abdul",
        "jurusan" => "Teknik Industri",
        "alamat" => "Jakarta",
    ],
];

foreach ($mhs as $data) {
    echo "Nama : ".$data['nama']. "<br>";
    echo "jurusan :". $data['jurusan']. "<br>";
    echo "Alamat :". $data ['alamat']. "<br>";
    echo "<hr>";
}