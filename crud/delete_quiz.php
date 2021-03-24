<?php 
require 'functions.php';
$id = $_GET["id"];
$db = mysqli_connect("localhost", "root", "", "db_phpdasar");

if(delete_quiz($id) > 0){
    echo"
    <script>
    alert('data berhasil dihapus!');
    document.location.href = 'quiz.php'
    </script>
    ";
}else{
    echo"
    <script>
    alert('data gagal dihapus!');
    document.location.href = 'quiz.php'
    </script>
    ";
}
echo mysqli_error($db)

?>