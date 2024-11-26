<?php

//class utama
class Kendaraan {

    protected $warna = "Putih";
    public $merk;

}
 
//class turunan
class mobil extends Kendaraan{

    public function deksripsi(){
        echo "Warna Mobil $this->warna";
    }
}

$cetak = new mobil();
echo $cetak->deksripsi();