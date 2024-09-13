<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('styles.css')}}">
    
</head>
<body>

    
    <form action="index" method="">
        <h2>login</h2><br>
        <label for="username">Username:</label>
        <input type="text" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br><br>

        <input type="submit" value="Login" >
        <p>TIDAK PUNYA AKUN?<a href="register">KLIK DISINI!</a></p>
    </form>

    <?php
// Database configuration
$host = "localhost";
$username = "root";
$password = "";
$database = "db_resep"; 

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
        header("Location: index"); 
        exit();
    } else {
        // Login gagal
        echo "Login gagal. Silakan cek kembali username dan password Anda.";
    }
}

// Menutup koneksi
$conn->close();
?>


</body>
</html>
