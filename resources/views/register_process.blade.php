<?php
// Menghubungkan ke database (gantilah informasi sesuai dengan database Anda)
$host = "localhost";
$username = "root";
$password = "";
$database = "db_resep";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengambil data dari form
$username = $_POST['username'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

// Validasi password
if ($password != $confirm_password) {
    die("Password dan konfirmasi password tidak cocok.");
}

// Enkripsi password (gunakan algoritma yang lebih aman di lingkungan produksi)
$hashed_password = ($password);

// Insert data ke database
$sql = "INSERT INTO users (username, password) VALUES ('$username', '$hashed_password')";

if ($conn->query($sql) === TRUE) {
    echo "Registrasi berhasil.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

echo '<script>';
echo 'setTimeout(function () { window.location.href = "index"; }, 1000);'; 
echo '</script>';

$conn->close();
?>
