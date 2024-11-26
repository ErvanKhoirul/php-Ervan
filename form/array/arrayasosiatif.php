<?php
$data =["Dwi" => 90, "Asep" => 75, "Dudung" =>65, "Romlah" => 85];
//menambah index di array
$data["Ahmad"]= 88;

foreach ($data as $key => $value)  {
    echo "Nama: $key<br>";
    echo "Nilai :$value<br>";

    $keterangan = $value > 75 ?"lulus" : "tidak lulus";
    echo "keterangan :$keterangan<hr>";
};