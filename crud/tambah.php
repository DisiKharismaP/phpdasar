<?php
require 'functions.php';
//cek apakah tombol submit udh di klik atau belum
if(isset($_POST["submit"])){

    if(tambah($_POST) > 0){
        //kalo berhasil
        echo "
            <script>
            alert('data berhasil di tambahkan');
            document.location.href = 'index.php';
            </script>
        ";
    }else{
        //kalo gagal
        echo "
            <script>
            alert('data gagal di tambahkan');
            document.location.href = 'index.php';
            </script>
        ";
    }
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
    <h1>Tambah data Siswa</h1>

    <form action="" method="post">

    <label for="gambar_siswa">Gambar :</label>
    <input type="text" name="gambar_siswa" id="gambar_siswa" required></input>
    <p>

    <label for="nama_siswa">Nama :</label>
    <input type="text" name="nama_siswa" id="nama_siswa" required></input>
    <p>

    <label for="kelas_siswa">Kelas :</label>
    <input type="text" name="kelas_siswa" id="kelas_siswa" required></input>
    <p>

    <label for="email_siswa">Email :</label>
    <input type="text" name="email_siswa" id="email_siswa" required></input>
    <p>

    <button type="submit" name="submit">submit</button>

    </form>
</body>
</html>