<?php
require 'functions.php';
//cek apakah tombol submit udh di klik atau belum
if(isset($_POST["submit"])){

    if(tambah_quiz($_POST) > 0){
        //kalo berhasil
        echo "
            <script>
            alert('data berhasil di tambahkan');
            document.location.href = 'quiz.php';
            </script>
        ";
    }else{
        //kalo gagal
        echo "
            <script>
            alert('data gagal di tambahkan');
            document.location.href = 'quiz.php';
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

    <h1>Tambah data Member</h1>

    <form action="" method="post">

    <label for="gambar_member">Gambar Member :</label>
    <input type="text" name="gambar_member" id="gambar_member" required></input>
    <p>

    <label for="nama_asli_member">Nama Asli Member :</label>
    <input type="text" name="nama_asli_member" id="nama_asli_member" required></input>
    <p>

    <label for="nama_panggung_member">Nama Panggung Member :</label>
    <input type="text" name="nama_panggung_member" id="nama_panggung_member" required></input>
    <p>

    <label for="nama_instagram">Nama Instagram :</label>
    <input type="text" name="nama_instagram" id="nama_instagram" required></input>
    <p>


    <label for="posisi_member">Posisi Member :</label>
    <input type="text" name="posisi_member" id="posisi_member" required></input>
    <p>

    <button type="submit" name="submit">submit</button>

    </form>
</body>
</html>