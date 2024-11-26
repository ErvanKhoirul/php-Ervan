<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Data Diri Calon Pendaftar</h3>
    <form action="" method="post">
    <table>
        <tr>
            <td>Jurusan</td>
            <td>:</td>
            <td><select name="jurusan" id="">
                <option value="RPL">Rekayasa Perangkat Lunak</option>
                <option value="TBSM">Teknik Sepeda Motor</option>
                <option value="TKR">Teknik Kendaraan Ringan</option>
            </select>
            </td>
        </tr>
        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td><input type="text" name="nama_lengkap"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><input type="radio" name="jenis_kelamin" value="laki-laki" required>laki-laki   
                <input type="radio" name="jenis_kelamin" value="perempuan" required>perempuan    
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td><input type="text" name="tempat_lahir"></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><input type="date" name="tanggal_lahir"></td>
        </tr>
        <tr>
            <td>No hp</td>
            <td>:</td>
            <td><input type="number" name="no_hp"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="kirim" value="Kirim"></td>  
        </tr>

    </table>
</body>
</html>
<?php
   if(isset($_POST['kirim'])){
    $jurusan = $_POST['jurusan'];
    $nama_lengkap  = $_POST['nama_lengkap'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tempat_lahir  = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $no_hp         = $_POST['no_hp'];
    $email         = $_POST['email'];

    class ppdb{

        public function Daftar($jurusan,$nama_lengkap,$jenis_kelamin,$tempat_lahir,$tanggal_lahir,$no_hp,$email){
        echo"<table style ='border-spacing:10px text-align:left;'>";
        echo "<tr><td>Jurusan</td> <td>:</td> <td>". $jurusan."</td></tr>";
        echo "<tr><td>Nama Lengkap</td> <td>:</td> <td>". $nama_lengkap."</td></tr>";
        echo "<tr><td>Jenis Kelamin</td> <td>:</td> <td>".$jenis_kelamin."</td></tr>";
        echo "<tr><td>Tempat Lahir</td> <td>:</td>  <td>".$tempat_lahir."</td></tr>";
        echo "<tr><td>Tanggal Lahir</td> <td>:</td> <td>".$tanggal_lahir."</td></tr>";
        echo "<tr><td>No Hp </td> <td>:</td> <td>".$no_hp."</td></tr>";
        echo "<tr><td>Email</td>  <td>:</td> <td>".$email."</td></tr>";
        echo "</table>";


        }
    }
    $cetak= new ppdb();
  echo $cetak->Daftar($jurusan,$nama_lengkap,$jenis_kelamin,$tempat_lahir,$tanggal_lahir,$no_hp,$email);
   }
?>