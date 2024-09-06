
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    
</head>
<body>

    
    <form action="koneksi.php" method="post">
        <h2>login</h2><br>
        <label for="username">Username:</label>
        <input type="text" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br><br>

        <input type="submit" value="Login" >
        <p>TIDAK PUNYA AKUN?<a href="register.php">KLIK DISINI!</a></p>
    </form>

</body>
</html>
