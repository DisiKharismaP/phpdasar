<?php
require 'function.php';

//ambil data dari table
$pahlawan = get("SELECT * FROM tb_pahlawan");


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
    <h1>Daftar Biodata Pahlawan</h1>
    <a href="tambah.php">tambah data pahlawan</a>
    <p>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Lahir pada, di</th>
            <th>Posisi</th>
            <th>Meninggal pada, di</th>
            <th>Julukan</th>
        </tr>

    <?php $i = 1; ?>
    <?php foreach($pahlawan as $row): ?>

        <tr>
            <td><?= $i;?></td>

            <td>
            <a href="edit.php?id=<?= $row["id_pahlawan"];?>">ubah</a><br>
            <a href="hapus.php?id=<?= $row["id_pahlawan"];?>">hapus</a>
            </td>

            <td><img src="img/<?= $row["gambar_pahlawan"];?>" width="100"></td>
            <td><?= $row["nama_pahlawan"];?></td>
            <td><?= $row["lahir_pada_di"];?></td>
            <td><?= $row["posisi_pahlawan"];?></td>
            <td><?= $row["meninggal_pada_di"];?></td>
            <td><?= $row["julukan_pahlawan"];?></td>
        </tr>

    <?php $i++ ?>
    <?php endforeach; ?>
    
    </table>
</body>
</html>