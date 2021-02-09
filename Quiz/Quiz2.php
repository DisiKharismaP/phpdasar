<?php
//Array numerik
$Pulau = ["Jawa", "Sumatra", "Kalimantan", "Sulawesi", "Papua"];

//Array Assosiative
$makanan = [
    ["Padang" => "Rendang",
    "Jawa" => "Sate",
    "Palembang" => "Pempek",   
    "Jogja" => "Gudeg",
    "Betawi" => "Gado-gado"],
   ];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz 2</title>
</head>
<body>

    <h2>5 Pulau terbesar di indonesia :</h2>
    <!-- Array numerik -->
    <ul>
        <li><?= $Pulau[0] ?></li>
        <li><?= $Pulau[1] ?></li>
        <li><?= $Pulau[2] ?></li>
        <li><?= $Pulau[3] ?></li>
        <li><?= $Pulau[4] ?></li>
    </ul>

   <h2>5 Makanan Indonesia beserta daerah asalnya :</h2>
   <!-- Array Assosiative -->
   <?php foreach($makanan as $m):?>
    <ul>
        <li><?= $m["Padang"]; ?>: Padang</li>
        <li><?= $m["Palembang"]; ?>: Palembang</li>
        <li><?= $m["Betawi"]; ?>: Betawi</li>
        <li><?= $m["Jawa"]; ?>: Jawa</li>
        <li><?= $m["Jogja"]; ?>: Jogja</li>
    </ul>
    <?php endforeach;?>
</body>
</html>

