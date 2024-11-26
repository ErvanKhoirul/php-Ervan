<?php

$makanan="";
$minuman="";

switch($makanan){
    case  "Burger":
      $harga_makanan = 15000;
      break;
    case "Sosis Bakar":
       $harga_makanan = 20000;
       break;
    case  "Kebab":
        $harga_makanan= 25000;
   default:
      echo "Maaf Anda Belum Memesan Makanan<br>";
}

  switch($minuman){
    case "Thaitea":
       $harga_minuman= 5000;
    break;
    case  "Jus Alpukat":
       $harga_minuman = 8000;
    break;
    case"Capcin" :
       $harga_minuman = 10000;
    break;
default:
     echo"Maaf Anda Belum Memesan Minuman Karena Tidak Punya Duit";
  }
?>