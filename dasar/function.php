<?php
//function = sekumpulan instruksi yang dibungkus dalam sebuah blok

function biodata(){
    echo "disi<br>";
    echo "X<br>";
    echo "20, Agustus 2005<br>";
}

biodata();
biodata();
echo "<p>";

//date
//menampilkan tanggal dengan format tertentu
/*
l = nama hari lengkap = wednesday
D = nama hari singkat = wed
d = tanggal = 19
m = bulan(angka) = 06
M = bulan(text) = Juni
y = tahun(singkt) = 21
Y = tahun = 2021
*/
date_default_timezone_set("Asia/jakarta");
echo date("H:i:s");
echo "<p>";

//time
//detik yg sudah berlalu sejaik 1 januari 1970
echo time();
echo "<p>";

echo date("l, d, M Y", time()+60*60*24*1000);
echo "<p>";

echo date("l", strtotime("20 Agustus 2005"));


?>