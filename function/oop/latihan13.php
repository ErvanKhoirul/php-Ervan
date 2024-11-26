<?php

class bangundatar{
    
  var $luas ="";
  public function persegi($sisi){
    echo"Sisinya : $sisi <br>";
    $this->luas = $sisi * $sisi;
    echo"L = sisi x sisi <br>";
    echo "Jadi hasil luasnya adalah :<b><i>$this->luas</i></b> <hr>";

  }
  public function persegi_panjang($panjang,$lebar){
$this-> luas = $panjang * $lebar;
echo"Panjangnya : $panjang <br>";
echo "Lebarnya  : $lebar   <br>";
echo"L = sisi x lebar <br>";
echo "Jadi hasil luasnya adalah :<b><i>$this->luas</i></b> <hr>";

  }
  public function segitiga($setengah,$alas,$tinggi){

  $this->luas  = $setengah * $alas * $tinggi;
  echo "Alasnya : $alas <br>";
  echo "Tingginya : $tinggi <br>";
  echo " L= 1/5 x alas x tinggi <br>";
  echo "Jadi hasil  luasnya adalah : <b><i>$this->luas</i></b> <hr>";
  }
  public function lingkaran($phi,$r){
    $this->luas = $phi * $r;
    echo"konstanta : $phi<br>";
    echo "Jari-jari : $r<br>";
    echo "L = phi x jari-jari <br>";
    echo "jadi hasil luasnya adalah : <b><i>$this->luas</i></b> <hr>";
  }

}

$cetak = new bangundatar();
echo "<h3>Hasil Menghitung Persegi</h3>";
echo $cetak->persegi(5);
echo "<br>";

echo "<h3>Hasil Menghitung Persegi Panjang</h3>";
echo $cetak->persegi_panjang(3,6);

echo "<h3>Hasil Menghitung Segitiga</h3>";
echo $cetak->segitiga(0.5,5,20);

echo "<h3>Hasil Menghitung lingkaran</h3>";
echo $cetak->lingkaran(3,14,10);
?>

