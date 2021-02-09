<?php
//for
/*
didalam kurung ada 3
1. inisialisasi = variable awal
2. kondisi terminasi = memberhentikan pengulangan
3. increment decrement = menentukan pengulangannya
maju atau mundur
*/
for($i = 0; $i < 5; $i++){
    echo "Hello!!<br>";
}

//while
/*kalo kondisinya true lakukan yg di dalam {} */
//cek kondisi dulu, baru jalankan perintah
$f = 0;
while($f < 5){
    echo "welcome!!<br>";
    $f++;
}

//do while
/*lakukan pengulangan selama kondisinya true*/
//jalankan dulu, baru cek kondisi
$y = 6;
do{
    echo "disi!!<br>";
    $y++;
}while($y < 5);

?>