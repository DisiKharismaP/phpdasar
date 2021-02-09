<?php
//array assosiative = key-nya kita buat string sendiri
$mahasiswa = [
 ["nama" => "firyal",
 "jurusan" => "RPL",
 "domisili" => "bandung"],

 ["nama" => "haura",
 "jurusan" => "RPL",
 "domisili" => "bekasi"],

 ["nama" => "ica",
 "jurusan" => "RPL",
 "domisili" => "bekasi"],
];

// echo $mahasiswa[0]["nama"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" coantent="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1> Daftar Mahasiswa</h1>
    <?php foreach($mahasiswa as $m):?>
        <ul>
            <li>Nama : <?= $m["nama"];?> </li>
            <li>Jurusan : <?= $m["jurusan"];?> </li>
            <li>Dom : <?= $m["domisili"];?> </li>
        </ul>
    <?php endforeach;?>
    
</body>
</html>