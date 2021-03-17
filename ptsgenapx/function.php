<?php 

//koneksi ke database
//(host, user, password, nama database)
$db = mysqli_connect("127.0.0.1", "root", "", "db_phpdasar");

function get($query){
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($post){
    global $db;
    //ambil data dri tiap elemen form
    $gambar = $post["gambar_pahlawan"];
    $nama = $post["nama_pahlawan"];
    $lahir = $post["lahir_pada_di"];
    $posisi = $post["posisi_pahlawan"];
    $meninggal = $post["meninggal_pada_di"];
    $julukan = $post["julukan_pahlawan"];


    //query insert data
    $query = "INSERT INTO tb_pahlawan VALUES( null, '$gambar', '$nama', '$lahir', '$posisi', '$meninggal', '$julukan')";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function hapus($id){
    global $db;

    $query = "DELETE FROM tb_pahlawan WHERE id_pahlawan = $id";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

function edit($data){
    global $db;

    $id = $data["id_pahlawan"];
    $gambar = $data["gambar_pahlawan"];
    $nama = $data["nama_pahlawan"];
    $lahir = $data["lahir_pada_di"];
    $posisi = $data["posisi_pahlawan"];
    $meninggal = $data["meninggal_pada_di"];
    $julukan = $data["julukan_pahlawan"];

    $query = "UPDATE tb_pahlawan SET
    gambar_pahlawan = '$gambar',
    nama_pahlawan = '$nama',
    lahir_pada_di = '$lahir',
    posisi_pahlawan = '$posisi',
    meninggal_pada_di = '$meninggal',
    julukan_pahlawan = '$julukan'

    WHERE id_pahlawan = $id";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

?>