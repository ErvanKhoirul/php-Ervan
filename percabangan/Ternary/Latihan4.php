<?php

echo "<h2>Toko Boyo</h2><br>";
echo "--------------------------------------------<br>";
$buku="Romance";
$harga_buku = 45000;
switch($buku) {
    case 'Romance':
        $cashback = 0.5 * $harga_buku;
     break;
    case 'Thriller';
         $cashback = 0.10 * $harga_buku;
     break;
    case 'Comedy';
         $cashback = 0.15 * $harga_buku;
    default ;
         $cashback = 0;
  }
    
echo "Jenis Buku : $buku <br>";
echo "Harga Buku : Rp .". number_format($harga_buku, 0,'.','.'). "<br>";
echo "Cashback : Rp.". number_format($cashback, 0,'.','.'). "<br>";
$hasil = $harga_buku - $cashback;
echo "Total Bayar : Rp.". number_format($hasil,0,'.','.'). "<br>";
echo "---------------------------------------------<br><br>";
echo "<hr>";

echo "<h2>Yusuf Ingin Daftar Tni</h2><br>";
echo "----------------------------------------------<br>";

$tb = 165;
$bb =69;

$keterangan = ($tb >= 165 && $bb <= 75) ?"Lolos" : "Tidak Lolos";

echo "Tinggi Badan : $tb <br>";
echo "Berat Badan : $bb <br>";
echo "Hasil Seleksi : $keterangan";





  

?>