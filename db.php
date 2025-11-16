<?php
// Koneksi ke database
$host = 'localhost';  // Host database (biasanya 'localhost' jika di server lokal)
$user = 'root';       // Username untuk koneksi (misalnya 'root' di localhost)
$pass = '';           // Password untuk koneksi (kosong jika tidak ada password di localhost)
$db   = 'dashboard';  // Nama database yang akan diakses

// Mencoba koneksi ke database
$conn = new mysqli($host, $user, $pass, $db, 3306);  // Tambah port

// Cek apakah koneksi berhasil
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);  // Menampilkan pesan kesalahan jika gagal
} else {
    echo "";
}

?>
