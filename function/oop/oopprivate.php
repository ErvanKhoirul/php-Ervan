<?php

//class manusia
class manusia{
   //menentukan property dengan private
   private $nama = "Malas ngoding";

   //method public
   public function tampilkan_nama(){
    return "Nama Saya ". $this->nama;
   }


}

//instalisasi class manusia
$manusia = new manusia();

//memanggil method public tampilkan_nama
echo $manusia->tampilkan_nama();