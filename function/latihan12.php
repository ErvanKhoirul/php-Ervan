<?php
 
 function luas_persegi($s){
 return $s * $s;
 
 }

 function luas_persegi_panjang($l,$p){
 return $l *$p;
 }
 function luas_segitiga($a,$t){
  return  0.5 * $a * $t;
 }
 function luas_lingkaran($r){
    $pi = 3.14;
   return $pi * $r * $r;
 }
 $s = 5 ;
 echo "<h2>Menghitung Luas Persegi</h2>";
 echo "Sisi = 5<br>";
 echo "Sisi x sisi = " . luas_persegi($s). "<br>";
 echo "<hr>";
 $l = 10;
 $p = 3;
 echo "<h2>Menghitung Luas Persegi Panjang</h2>";
 echo "Lebar = 10<br>";
 echo "Panjang = 3<br>";
 echo "Panjang x lebar = ". luas_persegi_panjang($l,$p). "<br>";
 echo "<hr>";
 $a = 7 ;
 $t = 2 ;
 echo "<h2>Menghitung Luas Segitiga</h2>";
 echo "Alas = 7<br>";
 echo "Tinggi = 2<br>";
 echo "Alas x Tinggi = ". luas_segitiga($a,$t). "<br>";
 echo "<hr>";
 $r= 14;
 echo "<h2>Menghitung Luas Lingkaran</h2>";
 echo "Jari-jari =14<br>";
 echo "konstata x jari-jari = ". luas_lingkaran($r). "<br>";
 echo "<hr>";

   
?>