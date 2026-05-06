<?php
$host = "localhost";
$user = "root";
$pass = "Informatika_1991";
$db   = "praktik_pemweb";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
} else {
    echo "Koneksi berhasil";
}
?>