<?php 
require 'function.php';
$id = $_GET["id"];
$db = mysqli_connect("localhost", "root", "", "db_phpdasar");

if(hapus($id) > 0){
    echo"
    <script>
    alert('data berhasil dihapus!');
    document.location.href = 'index.php'
    </script>
    ";
}else{
    echo"
    <script>
    alert('data gagal dihapus!');
    </script>
    ";
}
echo mysqli_error($db)

?>