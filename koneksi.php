<?php

// membuat koneksi untuk database app travel flutter

$_SERVER = "localhost";
$user = "root";
$password = "";
$db = "my_travel";


$connect = new mysqli('$_SERVER, $user, $password, $db');


// Periksa koneksi
if ($connect->connect_error) {
  die("Koneksi gagal: " . $connect->connect_error);
}

echo "Koneksi berhasil";

$connect->close();
