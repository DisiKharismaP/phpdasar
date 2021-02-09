<?php
//6-10 pagi
//11-2 siang
//3-6 sore
//7-12 malam
//1-6 fajar

date_default_timezone_set("Asia/Jakarta");
$jam = date("H:i");

if($jam > "06.00" && $jam < "10.00"){
    $waktu = "pagi";
}elseif($jam > "10.00" && $jam < "02.00"){
    $waktu = "Siang";
}elseif($jam > "02.00" && $jam < "06.00"){
    $waktu = "Sore";
}elseif($jam > "06.00" && $jam < "12.00"){
    $waktu = "Malam";
}elseif($jam > "12.00" && $jam < "06.00"){
    $waktu = "Fajar";
}

?>