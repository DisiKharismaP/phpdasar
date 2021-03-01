<?php
require 'functions.php';

$result = query("SELECT * FROM tb_idol");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Biodata Member EXO</h1>
    <a href="tambah_quiz.php">tambah data member</a>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Aksi</th>
            <th>Foto</th>
            <th>Nama Asli</th>
            <th>Nama Panggung</th>
            <th>Instagram</th>
            <th>Posisi</th>
        </tr>

    <?php $i = 1; ?>
    <?php foreach($result as $row): ?>

        <tr>

            <td><?= $i;?></td>

            <td>
            <a href="">ubah</a>
            <a href="">hapus</a>
            </td>

            <td><img src="img/<?= $row["gambar_member"];?>" width="100"></td>
            <td><?= $row["nama_asli_member"];?></td>
            <td><?= $row["nama_panggung_member"];?></td>
            <td><?= $row["nama_instagram"];?></td>
            <td><?= $row["posisi_member"];?></td>

        </tr>

    <?php $i++ ?>
    <?php endforeach; ?>
    

    </table>
    
</body>
</html>