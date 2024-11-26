<?php

function Pendaftaran($jurusan,$nama,$jenis_kelamin,$tempat_lahir,$tanggal_lahir,$no_hp,$email){

    echo "Jurusan       : $jurusan       <br>";
    echo "Nama Lengkap  : $nama          <br>";
    echo "Jenis Kelamin : $jenis_kelamin <br>";
    echo "Tempat Lahir  : $tempat_lahir  <br>";
    echo "Tanggal Lahir : $tanggal_lahir <br>";
    echo "No Hp Siswa   : $no_hp         <br>";
    echo "Email         : $email         <br>";
function Alamat($provinsi,$kabupaten,$kecamatan,$desa,$alamat,$kode_pos){

    echo "Provinsi       : $provinsi      <br>";
    echo "Kabupaten/kota : $kabupaten     <br>";
    echo "Kecamatan      : $kecamatan     <br>";
    echo "Desa/Kelurahan : $desa          <br>";
    echo "Alamat         : $alamat        <br>";
    echo "Kode Pos       : $kode_pos      <br>";
}
function Data_Asal_Sekolah($nama_asal_sekolah,$alamat_sekolah){
    echo "Nama Asal Sekolah : $nama_asal_sekolah  <br>";
    echo "Alamat Sekolah    : $alamat_sekolah     <br>";
}
function  Data_Orang_Tua($nama_lengkap_ortu,$pekerjaan_ortu,$no_hp_ortu,$alamat_lengkap){
   echo "Nama Lengkap Ortu : $nama_lengkap_ortu   <br>";
   echo "Pekerjaan Ortu    : $pekerjaan_ortu      <br>";
   echo "Nomor Hp          : $no_hp_ortu          <br>";
   echo "Alamat Lengkap    : $alamat_lengkap      <br>";
}
}

echo "<h3> Data Diri  </h3>";
Pendaftaran("RPL","Ervan Sani Kasep","Laki-laki","Bandung","26 November 2007","089530352825","ervansani105@gmail.com");
echo "<hr>";
echo "<h3> Alamat </h3>";
Alamat("Jawa Barat","Bandung","Baleendah","Bale agung","jl Bale agung","89765");
echo "<hr>";
echo "<h3> Data Asal Sekolah </h3>";
Data_Asal_Sekolah("Mts Persis Pamempeuk","Jl Banjaran",);
echo "<h3> Data Orang Tua </h3>";
echo "<hr>";
Data_Orang_Tua("Jesicca","Bos","08956353423","Jl Bale agung");
?>