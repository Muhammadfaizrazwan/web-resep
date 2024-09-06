<?php
// Database configuration
$host = "localhost";
$username = "root";
$password = "";
$database = "db_login"; 

// Membuat koneksi
$conn = new mysqli($host, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        // Login berhasil
        session_start();
        $_SESSION["username"] = $username;
        header("Location: index.php"); 
        exit();
    } else {
        // Login gagal
        echo "Login gagal. Silakan cek kembali username dan password Anda.";
    }
}

// Menutup koneksi
$conn->close();
?>
