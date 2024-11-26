<?php

class Pendaftaran{

    public function dataDiri($jurusan,$nama,$jenis_kelamin,$tempat_lahir,$tanggal_lahir,$nomor_hp_siswa,$email){

        echo "Jurusan          : ".$jurusan."<br>";
        echo "Nama         : ".$nama. "<br>";
        echo "Jenis Kelamin : ".$jenis_kelamin. "<br>";
        echo "Tempat Lahir  : ".$tempat_lahir. "<br>";
        echo "Tanggal Lahir : ".$tanggal_lahir. "<br>";
        echo "Nomor Hp      : ".$nomor_hp_siswa. "<br>";
        echo "Email         : ".$email. "<br>";
    }
    public function alamat($provinsi,$kabupaten,$kecamatan,$desa,$alamat,$kode_pos){

        echo "Nama          : ".$provinsi."<br>";
        echo "Umur          : ".$kabupaten. "<br>";
        echo "Jenis Kelamin : ".$kecamatan. "<br>";
        echo "Tempat Lahir  : ".$desa. "<br>";
        echo "Tanggal Lahir : ".$alamat. "<br>";
        echo "Nomor Hp      : ".$kode_pos. "<br>";
    
    }
    public function asalsekolah($nama_asal_sekolah,$alamat_sekolah){

        echo "Nama Asal Sekolah      : ".$nama_asal_sekolah."<br>";
        echo "Alamat Sekolah          : ".$alamat_sekolah. "<br>";
        
    }
    public function dataortu($nama_lengkap_ortu,$Pekerjan_ortu,$no_hp_ortu,$alamat){

        echo "Nama  Ortu            : ".$nama_lengkap_ortu."<br>";
        echo "Pekerjaan Ortu        : ".$Pekerjan_ortu. "<br>";
        echo "No Hp ortu            : ".$no_hp_ortu. "<br>";
        echo "Alamat                : ".$alamat. "<br>";
        
    }

    
}


$cetak = new Pendaftaran();
echo "<h2>Data Diri</h2><br>";
echo $cetak->dataDiri("Rpl","Ervan","Laki-laki","Bandung","26-11-2007","089530352825","vannkasep@gmail.com");
echo "<hr>";

echo "<h2>Alamat calon Pendaftaran</h2>";
echo $cetak->alamat("Jawa Barat","Bandung","Baleendah","Bale Agung","Jl bale agung","8898");
echo "<hr>";

echo "<h2>Asal Sekolah</h2>";
echo $cetak->asalsekolah("Mts Pamempeuk","Banjaran");

echo "<h2>Data Ortu</h2>";
echo $cetak->dataortu("Atep","Presiden","08956325","Baleendah");

?>