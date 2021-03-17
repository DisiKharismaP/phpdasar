<?php
require 'function.php';
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
    <h1>Tambah data Pahlawan</h1>

    <form action="" method="post">

    <label for="gambar_pahlawan">Gambar :</label>
    <input type="text" name="gambar_pahlawan" id="gambar_pahlawan" required></input>
    <p>

    <label for="nama_pahlawan">Nama :</label>
    <input type="text" name="nama_pahlawan" id="nama_pahlawan" required></input>
    <p>

    <label for="lahir_pada_di">Lahir pada, di :</label>
    <input type="text" name="lahir_pada_di" id="lahir_pada_di" required></input>
    <p>

    <label for="posisi_pahlawan">Posisi :</label>
    <input type="text" name="posisi_pahlawan" id="posisi_pahlawan" required></input>
    <p>

    <label for="meninggal_pada_di">Meninggal pada, di :</label>
    <input type="text" name="meninggal_pada_di" id="meninggal_pada_di" required></input>
    <p>

    <label for="julukan_pahlawan">Julukan :</label>
    <input type="text" name="julukan_pahlawan" id="julukan_pahlawan" required></input>
    <p>

    <button type="submit" name="submit">submit</button>

    </form>
</body>
</html>