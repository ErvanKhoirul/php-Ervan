<?php
class contoh{

    public $nama = "Ervan";


    private function tampil(){
        echo "Perkenalkan nama saya $this->nama yang tamvan";
    }

    public function keluar(){
        echo $this->tampil();
    }
}

$cetak = new contoh();
echo $cetak->keluar();
echo "<br>";
echo $cetak->nama;