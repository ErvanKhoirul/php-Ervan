<?php

$nama = "Ervan Khoirul Sani";
$kelas = "XI RPL2";
$jk = "Laki-Laki";

echo "Nama : $nama<br>";
echo "Kelas: $kelas<br>";
echo "Jenis Kelamin: $jk<hr>";

$nilai_mtk =99;
$nilai_indo =99;
$nilai_inggris= 100;
$nilai_produktif = 100;
$hasil1= $nilai_mtk + $nilai_indo + $nilai_inggris + $nilai_produktif /4;
$hasil2= $hasil1 /4;

echo "Nilai Mtk :$nilai_mtk<br>";
echo "Nilai Indo :$nilai_indo<br>";
echo "Nilai Inggris :$nilai_inggris<br>";
echo "Nilai Produktif : $nilai_produktif<br>";
echo "Rata-Rata : $hasil2<hr>";
if ($hasil2 >= 80) {
  echo "Anda Lulus";
}else {
  echo "Maaf Anda Tidak Lulus";
}
?>