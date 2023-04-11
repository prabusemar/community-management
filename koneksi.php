<?php
$host = "localhost"; //nama host
$user = "prabusemar"; //nama pengguna
$password = "bismillah311447"; //kata sandi
$database = "komunitas"; //nama database

//membuat koneksi
$conn = mysqli_connect($host, $user, $password, $database);

//mengecek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
