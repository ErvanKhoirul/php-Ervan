<?php
$day = date("D M Y");
echo $day ."<br>";
switch ($day) {
    case 'Mon':$day = "Senin";
       break ;
    case 'Tue':$day = "Selasa";
       break ;
    case 'Wed' : $day = "Rabu";
       break ;
    case 'Thu' :$day = "Kamis";
       break ;
    case 'Fri' :$day = "Jumat";
       break ;
    case 'Sat' :$day = "Sabtu";
       break ;
    case 'sun' :$day = "Minggu";
       break;
    default:
        $day = "Kiamat";
}
echo "Hari ini Hari $day";

?>