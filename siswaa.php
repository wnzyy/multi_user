<?php

$server = "localhost";
$user = "root";
$nama_database = "user_level";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>