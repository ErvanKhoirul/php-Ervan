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
   <h2>Form Bilangan</h2>
   <tr>
       <td>Masukkan Bilangan</td>
       <td>:</td>
       <td><input type="number" name="bilangan" value=""></td>
   </tr>
   <tr>
      <td>Jenis Bilangan</td>
      <td>:</td>
      <td>
         <select name="jenis" id="">
            <option value="terbesar_ke_terkecil">Terbesar Ke Terkecil</option>
            <option value="ganjil">Ganjil</option>
            <option value="genap">Genap</option>
            <option value="kelipatan3">Kelipatan 3</option>
</select>
      </td>
   </tr>
   <tr>
      <td></td>
      <td></td>
      <td><input type="submit" name="proses" value="simpan"></td>
</tr>
</table>
</form>
</center>
</body>
</html>
<?php
if(isset($_POST['proses'])){
   $bilangan = $_POST['bilangan'];
   $jenis = $_POST['jenis'];

   if ($jenis == "terbesar_ke_terkecil") {
      for ($i=$bilangan; $i >=1 ; $i--){
         echo "$i ";
      }
   }elseif ($jenis == "ganjil"){
      for ($i=1; $i <= $bilangan ; $i+=2){
         echo "$i ";
      }
   }elseif ($jenis == "genap"){
      for ($i=2; $i <= $bilangan ; $i+=2){
         echo "$i ";
      }
   }elseif ($jenis == "kelipatan3"){
      for ($i=3; $i<= $bilangan ; $i+=3){
         echo "$i ";
      }
   }
}
?>
