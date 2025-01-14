<?php
$nama = "Jung Kook";
$nilai = 80;

function tampilnilai(){
    global $nama, $nilai;
    echo $nama . $nilai;
}

tampilnilai();
?>