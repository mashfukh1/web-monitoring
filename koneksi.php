<?php
$server     = "localhost";
$user       = "root";
$pass       = "";
$database   = "ngopi";

$koneksi = mysqli_connect($server, $user, $pass, $database);
if($koneksi == TRUE){
    // echo "Berhasil Terhubung";
}else{
    echo "Gagal Terhubung";
}