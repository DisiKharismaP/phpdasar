<?php 
//array biasa
$siswi = ["Disi","SMK IT", "disi.kharisma@gmail.com"];

//array didalam array
$siswa = [
    ["Disi","SMK IT", "disi.kharisma@gmail.com"],
    ["Disii","SMK IT", "disii.kharisma@gmail.com"],
    ["Disiii","SMK IT", "disiii.kharisma@gmail.com"],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menampilkan list</title>
</head>
<body>
    <h1>Siswi</h1>
    <ul>
        <li><?php echo $siswi[0] ?></li>
        <li><?php echo $siswi[1] ?></li>
        <li><?php echo $siswi[2] ?></li>
    </ul>

    <ul>
        <?php foreach($siswi as $s):?>
        <li> <?= $s?> </li>
        <?php endforeach;?>
    </ul>
    
    <!-- mencetak array di dalam array menggunakan foreach -->
    <ul>
        <?php foreach($siswa as $sa): echo "<br>"?>
            <?php foreach($sa as $s):?>
                <li> <?= $s;?> </li>
            <?php endforeach;?>
        <?php endforeach;?>
    </ul>
</body>
</html>