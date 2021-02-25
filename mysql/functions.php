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
?>