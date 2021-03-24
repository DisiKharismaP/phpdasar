<?php
require 'functions.php';
// $db = mysqli_connect("localhost", "root", "", "db_phpdasar");

$id = $_GET["id"];

$idol = get("SELECT * FROM tb_idol WHERE id_member = $id")[0];
// var_dump($siswa[0]["nama_siswa"]);

//cek apakah tombol submit udh di klik atau belum
if(isset($_POST["submit"])){

    if(ubah_quiz($_POST) > 0){
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
    <h1>Ubah data Idol</h1>

    <form action="" method="post">

    <input type="hidden" name="id_member" value="<?= $idol["id_member"];?>"></input>

    <label for="gambar_member">Gambar Idol:</label>
    <input type="text" name="gambar_member" id="gambar_member" required
    value="<?= $idol["gambar_member"];?>"></input>
    <p>

    <label for="nama_asli_member">Nama asli Idol:</label>
    <input type="text" name="nama_asli_member" id="nama_asli_member" required
    value="<?= $idol["nama_asli_member"];?>"></input>
    <p>

    <label for="nama_panggung_member">Nama panggung Idol:</label>
    <input type="text" name="knama_panggung_member" id="nama_panggung_member" required
    value="<?= $idol["nama_panggung_member"];?>"></input>
    <p>

    <label for="nama_instagram">Instagram Idol:</label>
    <input type="text" name="nama_instagram" id="nama_instagram" required
    value="<?= $idol["nama_instagram"];?>"></input>
    <p>

    <label for="posisi_member">Posisi Idol di Grup</label>
    <input type="text" name="posisi_member" id="posisi_member" required
    value="<?= $idol["posisi_member"];?>"></input>
    <p>

    <button type="submit" name="submit">submit</button>

    </form>
</body>
</html>