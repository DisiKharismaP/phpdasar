<?php
//isset = untuk ngecek variable apakah udah ada apa belum
//pada $_GET ada data atau tidak? jika tidak ada datanya, akan dipaksa pindah ke latihansatu.php
if( 
    !isset($_GET["nama"]) || 
    !isset($_GET["jurusan"]) ||
    !isset($_GET["domisili"]) 
){
    //memindahkan ke halaman lain
    header("Location: latihansatu.php");
    exit;
}
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><?= $_GET["nama"];?></li>
        <li><?= $_GET["jurusan"];?></li>
        <li><?= $_GET["domisili"];?></li>
    </ul>

    <a href="latihansatu.php">back</a>
</body>
</html>