<?php

$jenis = "Makanan";
$menu = "Batagor";
$jumlah = 10;

echo "Nama : Ervan KS <br>";
echo "Jenis Kelamin :Laki-laki <br>";
echo "tanggal beli : 2 oktober 2024 <br>";
echo "jenis :$jenis <br>";
echo "menu : $menu <br>";

if($jenis == "Makanan"){
    if($menu == "Seblak"){
       $harga= 10000;
    echo "Harga : Rp10.000 <br>";
    }else if($menu == "Pentol"){
        $harga = 15000;
    echo "Harga : Rp15.000 <br>";    
    }else if($menu == "Batagor"){
        $harga = 20000;
    echo "Harga : Rp20.000 <br>";
    }
}else if($jenis == "Minuman"){
    if($menu =="Thai tea"){
        $harga = 5000;
    echo "Harga : Rp5000";
    }else if($menu == "Mixue"){
        $harga = 7000;
    echo "Harga :Rp7000";
    }else if($menu == "Kopi"){
        $harga = 12000;
    echo "Harga : Rp12000";
    }
}

echo "Jumlah : $jumlah<br>";
echo "<hr>";
$total = $harga * $jumlah;
echo"Total : $total <br>";

if($total > 50000){
    $diskon = $total *0.1;
    $total_bayar = $total - $diskon;
    echo "Diskon : $diskon <br>";
    echo "<hr>";
    echo"Total Bayar : $total_bayar";
}else{
    echo"Tidak Ada Diskon <br>";
    echo"<hr>";
    echo "Total Bayar :$total";
}


?>