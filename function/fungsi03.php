<?php
function sapa($nama){
    echo "Selamat pagi $nama".PHP_EOL;
}

echo "Masukkan nama : ";
$nama = trim(fgets(STDIN));
sapa($nama);
?>