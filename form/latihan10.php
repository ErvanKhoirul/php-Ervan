<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <form action="" method="post">
    <h2>Seblak Mang Ervan</h2>
    <table>
    <tr>
        <td>Nama pembeli</td>
        <td>:</td>
        <td><input type="text" name="nama_pembeli" value=""></td>
    </tr>
    <tr>
        <td>Tanggal beli</td>
        <td>:</td>
        <td><input type="date" name="tanggal_beli" value=""></td>
    </tr>
    <tr>
        <td>Makanan</td>
        <td>:</td>
        <td>
            <select name="makanan" id="">
               <option value="Seblak Ceker">Seblak Ceker</option>
               <option value="Cilok goang">Cilok Goang</option>
               <option value="Cimol bojot">Cimol Bojot</option>
               <option value="Pentol">Pentol</option>
               <option value="Makroni seuhah">Makroni Seuhah</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>Qty</td>
        <td>:</td>
        <td><input type="text" name="qty_makanan" value=""></td>
    </tr>
    <tr>
        <td>Minuman</td>
        <td>:</td>
        <td>
            <select name="minuman" id="">
                <option value="air mineral">Air Mineral</option>
                <option value="teh manis">Teh Manis</option>
                <option value="jus">Jus</option>
                <option value="lemon tea">Lemon tea</option>
                <option value="thaitea">Thaitea</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>Qty</td>
        <td>:</td>
        <td><input type="text" name="qty_minuman" value=""></td>
    </tr>
    <tr>
        <td>Pembayaran</td>
        <td>:</td>
        <td><input type="radio" name="pembayaran">Cash
        <input type="radio" name="pembayaran">Qris
        </td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td><input type="submit" name="proses" value="simpen"></td>
    </tr>
</center>
</table>
</body>
</html>
<?php


if(isset($_POST['proses'])){
$nama_pembeli = $_POST['nama_pembeli'];
$tanggal_beli = $_POST['tanggal_beli'];
$makanan = $_POST['makanan'];
$qty_makanan = $_POST['qty_makanan'];
$minuman = $_POST['minuman'];
$qty_minuman  = $_POST['qty_minuman'];
$pembayaran = $_POST['pembayaran'];

$harga_makanan = [
    "Seblak Ceker" => 10000,
    "Cilok goang" => 15000,
    "Cilok Bojot" => 30000,
    "Makroni Seuhah"=> 40000,
    "Pentol" => 45000
];

$harga_minuman = [
    "air mineral" =>5000,
    "teh manis" => 10000,
    "jus" => 15000,
    "lemon tea" => 20000,
    "thaitea" => 25000
];

$total_makanan = $harga_makanan[$makanan] * $qty_makanan;
$total_minuman = $harga_minuman[$minuman] * $qty_minuman;
$total = $total_makanan + $total_minuman;

$diskon = 0;
if($total > 50000){
    $diskon = $total * 0.10;
}

$bonus_pembayaran = ($pembayaran == 'qris') ? 20000 : 0;
$total_pembayaran = $total - $diskon - $bonus_pembayaran;
echo "----------------------------------------------------------------------<br>";
echo"--Struk Pembayaran Seblak Mang Ervan--<br>";
echo "----------------------------------------------------------------------<br>";
echo "Nama Pembeli : $nama_pembeli <br>";
echo "Tanggal beli : $tanggal_beli <br>";
echo "Makanan : $makanan <br>"; 
echo "Qty Makanan : $qty_makanan <br>";
echo "Minuman : $minuman <br>";
echo "Qty Minuman : $qty_minuman <br>";
echo "Pembayaran : $pembayaran <br>";
echo "----------------------------------------------------------------------<br>";
echo "Total : Rp." . number_format($total, 0, ',',',') . "<br>";
echo "Diskon 10% : Rp.".number_format($diskon, 0, ',',',') . "<br>";
echo "Bonus Pembayaran : Rp.". number_format($bonus_pembayaran, 0,',',',') . "<br>";
echo "----------------------------------------------------------------------<br>";
echo "Total Pembayaran : Rp.". number_format($total_pembayaran, 0,',',',') . "<br>";

}
?>