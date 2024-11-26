<?php
//membuat fungsi 
function perkenalan($nama, $salam="Assalamualaikum"){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br>";
    echo "Senang Berkenalan dengan anda <br>";

}

//memanggil fungsi yang sudah dibuat
perkenalan("Hana",  "Hi");

echo "<hr>";

$saya = "Ervan Ganteng";
$ucapanSalam = "Selamat Pagi";
// memanggilnya lagi tanpa mengisi parameter salam
perkenalan($saya);
?>