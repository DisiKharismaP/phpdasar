<?php 

//koneksi ke database
//(host, user, password, nama database)
$db = mysqli_connect("127.0.0.1", "root", "", "db_phpdasar");

function query($query){
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
    $gambar = $post["gambar_siswa"];
    $nama = $post["nama_siswa"];
    $kelas = $post["kelas_siswa"];
    $email = $post["email_siswa"];

    //query insert data
    $query = "INSERT INTO tb_siswa VALUES( null, '$gambar', '$nama', '$kelas', '$email')";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}
?>