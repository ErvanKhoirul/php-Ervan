<?php

//class manusia
class manusia{
    //properti
    public $nama;
    public $warna;

    //method manusia
    function tampilkan_nama(){
        return "Nama Saya Malasngoding <br/>";
    }

}
//instansiansi class manusia
$manusia = new manusia();

//memanggil method tampilkan_nama dari class manusia
echo $manusia->tampilkan_nama();