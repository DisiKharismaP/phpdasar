<?php

//operator penggabung string
//.
$nama_depan = "disi";
$nama_belakang = "persia";

echo $nama_depan . " " . $nama_belakang;
echo "<p>";

//operator aritmatika
// + - * / %
$x = 7;
$y = 2;
echo $x+$y;
echo "<br>";

echo $x-$y;
echo "<br>";

echo $x*$y;
echo "<br>";

echo $x/$y;
echo "<br>";

echo $x%$y;
echo "<p>";

//operator assignment
// =, +=, -=, *=, /=, %=, .=
$x = 10;
$x /= 5;
echo $x;
echo "<br>";

$nama = "disi";
$nama .= "dese";
echo $nama;
echo "<p>";


//operator perbandingan
// <, >, <=, >=, ==, !=
//var_dump = menampilkan informasi dari variable
var_dump(1 == "1");
echo "<p>";

//operator identitas
//===, !==
var_dump(1 === "1");
echo "<p>";

//logika
//&& || !
$x = 20;
var_dump($x < 10 || $x % 2 == 0);

?>