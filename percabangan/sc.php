<?php

$tipe_akun = "Admin";
$aksi ="Hapus";

  switch($tipe_akun) {
    case 'Admin':
        echo "Tipe Akun : $tipe_akun <br>";
        echo "Aksi :";
      switch($aksi){
        case 'Edit': 
            echo "Edit Akun Admin";
          break;
        case 'Hapus':
            echo "Admin Menghapus Akun Dia";
         break;
  } break;
     case 'User':
        echo "Tipe Akun : $tipe_akun <br>";
        echo "Aksi :";
       switch($aksi){
         case 'Edit':
            echo "Edit Akun Anda";
          break;
         case 'Hapus':
            echo "Kamu Tidak Bisa Menghapus Akun Anda";
          break;
  }break;
  }



  
?>