<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <center>
    <form action="" method="POST">
    <table>
        <h2>Form Biodata Diri</h2>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" value=""></td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td><input type="text" name="tempat_lahir" value=""></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><input type="date" name="tanggal_lahir" value=""></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><input type="radio" name="jenis_kelamin" value="laki-laki">Laki-laki <input type="radio" name="jenis_kelamin" value="perumpuan">Perempuan</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><textarea name="alamat" id=""></textarea></td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>:</td>
            <td>
                <select name="agama" id="">
                    <option value="islam">Islam</option>
                    <option value="kristen">Kristen</option>
                    <option value="hindu">Hindu</option>
                    <option value="buddha">Buddha</option>
            </select>
            </td>
        </tr>
        <tr>
            <td>Pendidikan Terakhir</td>
            <td>:</td>
            <td>
            <select name="pendidikan" id="">
                    <option value="tk">TK</option>
                    <option value="sd">SD</option>
                    <option value="smp">SMP</option>
                    <option value="sma">SMA</option>
                    <option value="smk">SMK</option>
            </select>
            </td>
        </tr>
        <tr>
            <td>Status</td>
            <td>:</td>
            <td>
            <select name="status" id="">
                    <option value="belum menikah">Belum menikah</option>
                    <option value="sudah menikah">Sudah menikah</option>
            </select>
            </td>
        </tr>
        <tr>
            <td>Hobi</td>
            <td>:</td>
            <td><input type="checkbox" name="hobi" value="membaca">Membaca <input type="checkbox" name="hobi2" value="menulis">Menulis <input type="checkbox" name="hobi" value="ngepush ml">Ngepush ML</td>

        </tr>
        <tr>
            <td>Cita-cita</td>
            <td>:</td>
            <td>
            <select name="cita_cita" id="">
                    <option value="tni">TNI</option>
                    <option value="polisi">POLISI</option>
                    <option value="programmer">Programmer</option>
                    <option value="presiden">Presiden</option>
                    <option value="bos muda">Bos Muda</option>
            </select>
            </td>
        </tr>
        <tr>
            <td>Kata-kata Bijak</td>
            <td>:</td>
            <td><textarea name="kata_bijak" id=""></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="proses" value="Kirim"></td>
        </tr>
    </table>  
   </center> 
</body>
</html>

<?php
if(isset($_POST['proses'])){

$nama2= $_POST['nama'];
$tempat_lahir2 = $_POST['tempat_lahir'];
$tanggal_lahir2= $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$agama = $_POST['agama'];
$pendidikan_terakhir2 = $_POST['pendidikan'];
$status = $_POST['status'];
$hobi =$_POST['hobi'];
$cita_cita = $_POST['cita_cita'];
$kata_kata_bijak = $_POST['kata_bijak'];
echo "<center>";

echo "<br><center>
      <table>
      <h2>Biodata Diri</h2>
      <tr>
         <td>Nama</td>
         <td>:</td>
         <td>$nama2</td>
        </tr>
        <tr>
          <td>Tempat Lahir</td>
          <td>:</td>
          <td>$tempat_lahir2</td>
        </tr>
        <tr>
          <td> Tanggal Lahir</td>
          <td>:</td>
          <td>$tanggal_lahir2</td>
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td>:</td>
          <td>$jenis_kelamin</td>
        </tr>
        <tr>
           <td>Alamat</td>
           <td>:</td>
           <td>$alamat</td>
        </tr>
        <tr>
           <td>Agama</td>
           <td>:</td>
           <td>$agama</td>
        </tr>
        <tr>
           <td>Pendidikan Terakhir</td>
           <td>:</td>
           <td>$pendidikan_terakhir2</td>
        </tr>
        <tr>
           <td>Status</td>
           <td>:</td>
           <td>$status</td>
        </tr>
        <tr>
            <td>Hobi</td>
            <td>:</td>
            <td>$hobi</td>
        </tr>
        <tr>
            <td>Cita-cita</td>
            <td>:</td>
            <td>$cita_cita</td>
        </tr>
        <tr>
            <td>Kata Bijak</td>
            <td>:</td>
            <td>$kata_kata_bijak</td>
        </tr>
      </center>
      </table>";
}
?>