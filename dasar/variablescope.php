<?php 
//lingkup variable 

$x = 10;

function showx(){
    global $x;
    echo $x;
}

showx();

?>