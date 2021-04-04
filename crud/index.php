<?php
require 'functions.php';

//ambil data dari table
$siswa = get("SELECT * FROM tb_siswa");

//jika tombol search ditekan
if (isset($_POST["search"])){

    $siswa = search_quiz($_POST["keyword"]);
    
}


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
    <h1>Daftar Siswa</h1>
    <a href="tambah.php">tambah data siswa</a>
    <p>

    <form action="" method="post">
    <input type="text" name="keyword" size="30" autofocus placeholder="search here..." autocomplete="off">
    <button type="submit" name="search">search</button>
    </form>
    <p>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Email</th>
        </tr>

    <?php $i = 1; ?>
    <?php foreach($siswa as $row): ?>

        <tr>
            <td><?= $i;?></td>

            <td>
            <a href="ubah.php?id=<?= $row["id_siswa"];?>">ubah</a>
            <a href="hapus.php?id=<?= $row["id_siswa"];?>">hapus</a>
            </td>

            <td><img src="img/<?= $row["gambar_siswa"];?>" width="100"></td>
            <td><?= $row["nama_siswa"];?></td>
            <td><?= $row["kelas_siswa"];?></td>
            <td><?= $row["email_siswa"];?></td>
        </tr>

    <?php $i++ ?>
    <?php endforeach; ?>
    
    </table>
</body>
</html>