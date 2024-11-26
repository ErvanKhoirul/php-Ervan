<?php
$nilai = [
    ["Rani", "Bandung", "Islam", 165],
    ["Roni", "Kuningan", "Islam", 175],
    ["Dedeng", "Cimahi", "Kristen", 160]
];

//menampilkan  nilai array 
echo $nilai[1][2];
echo "<hr>";
//menampilkan data array secara kolektif
for ($i = 0; $i < count($nilai); $i++) {
    for ($n = 0; $n < count($nilai[$i]); $n++){
        echo $nilai[$i][$n] . "<br>";

        echo "<hr>";
    }
}

//mengunakan foreach
foreach($nilai as $siswa) {
    foreach ($siswa as $biodata) {
             echo $biodata . " ";
    }
    echo "<br>";
}
?>