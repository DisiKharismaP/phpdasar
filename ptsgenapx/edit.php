<?php
require 'function.php';
// $db = mysqli_connect("localhost", "root", "", "db_phpdasar");

$id = $_GET["id"];

$pahlawan = get("SELECT * FROM tb_pahlawan WHERE id_pahlawan = $id")[0];
// var_dump($siswa[0]["nama_siswa"]);

//cek apakah tombol submit udh di klik atau belum
if(isset($_POST["submit"])){

    if(edit($_POST) > 0){
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
            </script>
        ";
    }
};

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
    <h1>Ubah data Pahlawan</h1>

    <form action="" method="post">

    <input type="hidden" name="id_pahlawan" value="<?= $pahlawan["id_pahlawan"];?>"></input>

    <label for="gambar_pahlawan">Gambar :</label>
    <input type="text" name="gambar_pahlawan" id="gambar_pahlawan" required
    value="<?= $pahlawan["gambar_pahlawan"];?>"></input>
    <p>

    <label for="nama_pahlawan">Nama :</label>
    <input type="text" name="nama_pahlawan" id="nama_pahlawan" required
    value="<?= $pahlawan["nama_pahlawan"];?>"></input>
    <p>

    <label for="lahir_pada_di">Lahir pada, di :</label>
    <input type="text" name="lahir_pada_di" id="lahir_pada_di" required
    value="<?= $pahlawan["lahir_pada_di"];?>"></input>
    <p>

    <label for="posisi_pahlawan">Posisi/Jabatan sebagai :</label>
    <input type="text" name="posisi_pahlawan" id="posisi_pahlawan" required
    value="<?= $pahlawan["posisi_pahlawan"];?>"></input>
    <p>

    <label for="meninggal_pada_di">Meninggal pada, di :</label>
    <input type="text" name="meninggal_pada_di" id="meninggal_pada_di" required
    value="<?= $pahlawan["meninggal_pada_di"];?>"></input>
    <p>

    <label for="julukan_pahlawan">Julukan sebagai :</label>
    <input type="text" name="julukan_pahlawan" id="julukan_pahlawan" required
    value="<?= $pahlawan["julukan_pahlawan"];?>"></input>
    <p>

    <button type="submit" name="submit">submit</button>

    </form>
</body>
</html>