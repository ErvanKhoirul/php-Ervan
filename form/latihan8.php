
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
    <h2>Nilai Ujian Sekolah</h2>
    <tr>
        <td>Nama Lengkap</td>
        <td>:</td>
        <td><input type="text" name="nama" value=""></td>
    </tr>
       <tr>
           <td>Kelas</td>
           <td>:</td>
           <td><input type = "text" name="kelas" value=""></td>
       </tr>
       <tr>
           <td>Jurusan</td>
           <td>:</td>
           <td>
           <select name="jurusan" id="">
                    <option value="rekayasa perangkat lunak">Rekayasa Perangkat Lunak</option>
                    <option value="teknik kendaraan ringan">Teknik Kendaraan Ringan</option>
                    <option value="teknik bisnis sepeda motor">Teknik Bisnis Sepeda Motor</option>
            </select>
            </td>
       </tr>
       <tr>
         <td><b>Masukan Nilai</b></td>
       </tr>
       <tr>
           <td>Nilai Harian</td>
           <td>:</td>
           <td><input type="text" name="nilai_harian">40%</td>
       </tr>
       <tr>
           <td>Nilai Sikap</td>
           <td>:</td>
           <td><input type="text" name="nilai_sikap">20%</td>
       </tr>
       <tr>
           <td>Nilai UTS</td>
           <td>:</td>
           <td><input type="text" name="nilai_uts">20%</td>
       </tr>
       <tr>
           <td>Nilai UAS</td>
           <td>:</td>
           <td><input type="text" name="nilai_uas">20%</td>
       </tr>
       <tr>
           <td></td>
           <td></td>
           <td><input type="submit" name="proses" value="kirim"></td>
       </tr>
</table>
</center>
</body>
</html>

<?php

if(isset($_POST['proses'])){

$nama_lengkap= $_POST['nama'];
$kelas1 = $_POST['kelas'];
$jurusan1= $_POST['jurusan'];
$nilai_harian = $_POST['nilai_harian'];
$nilai_sikap = $_POST['nilai_sikap'];
$nilai_uts = $_POST['nilai_uts'];
$nilai_uas = $_POST['nilai_uas'];

$satu = $nilai_harian;
$dua = $nilai_sikap;
$tiga = $nilai_uts;
$empat = $nilai_uas;

$harian = $satu * 0.4;
$sikap = $dua * 0.2;
$uts = $tiga * 0.2;
$uas = $empat *0.2;
$rata_rata = $harian + $sikap + $uts + $uas;

$keterangan = $rata_rata >75 ? "<b>Selamat anda lulus</b>" : "<b>Maaf anda tidak lulus</b>";



echo "<br><center>
      <table>
      <tr>
         <td>Nama</td>
         <td>:</td>
         <td>$nama_lengkap</td>
        </tr>
        <tr>
          <td>Kelas</td>
          <td>:</td>
          <td>$kelas1</td>
        </tr>
        <tr>
          <td> Jurusan</td>
          <td>:</td>
          <td>$jurusan1</td>
        </tr>
        <tr>
          <td>Nilai harian</td>
          <td>:</td>
          <td>$nilai_harian</td>
        </tr>
        <tr>
           <td>Nilai Sikap</td>
           <td>:</td>
           <td>$nilai_sikap</td>
        </tr>
        <tr>
           <td>Nilai UTS</td>
           <td>:</td>
           <td>$nilai_uts</td>
        </tr>
        <tr>
           <td>Nilai UAS</td>
           <td>:</td>
           <td>$nilai_uas</td>
        </tr>
        <tr>
           <td>Rata Rata</td>
           <td>:</td>
           <td>$rata_rata</td>
        </tr>
        <tr>
            <td><b>Keterangan</b></td>
            <td>:</td>
            <td>$keterangan</td>
        </tr>
        
      </center>
      </table>";
}     

?>
