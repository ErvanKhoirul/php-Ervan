<?php
//ini class
class manusia{

//ini property/atribut
public $warna;
public $jenis_kelamin = "Pria" ;

//ini method/function
public function makan(){
    echo "Aku Suka Makan Nasi";

}
public function data(){
    echo "Dio Seorang $this->jenis_kelamin";
}
}

//ini object
$cetak = new manusia();
echo $cetak->makan();
echo "<br>";
echo $cetak->data();
?>