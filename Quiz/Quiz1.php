<?php

//Quiz1 
for($i = 0; $i <= 100; $i++){
    echo "$i<br>";
}
echo "<p>";

//Quiz2
date_default_timezone_set("Asia/Jakarta");
$jam = date("H:i");

if($jam > "04.30" && $jam < "05.52"){
    $waktu = "Subuh";
}elseif($jam > "12.00" && $jam < "15.28"){
    $waktu = "Dzuhur";
}elseif($jam > "15.28" && $jam < "18.17"){
    $waktu = "Ashar";
}elseif($jam > "18.17" && $jam < "19.31"){
    $waktu = "Maghrib";
}else {
    $waktu = 'isya';
} 
echo "Waktu"." ".$waktu;
echo "<p>";

//Quiz3
$nilai = 50;

if($nilai >= 90 & $nilai <= 100){
    $hasil = "A";
}elseif($nilai >= 80 & $nilai <= 90 ){
    $hasil = "B";
}elseif($nilai >= 70 & $nilai <= 80 ){
    $hasil = "C";
}else {
    $hasil = 'Remed';
} 
echo $hasil;


?>