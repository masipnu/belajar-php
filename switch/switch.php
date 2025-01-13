<?php
echo "Ssssttt., masukkan kode rahasia : ";
$kode = trim(fgets(STDIN));

switch($kode){
    case 1:
        echo "Selamat datang Admin";
        break;
    case 2:
        echo "Selamat datang User";
        break;
    case 3:
        echo "Selamat Datang Tamu";
        break;
    default:
        echo "Maaf, akses ditolak";
}
?>