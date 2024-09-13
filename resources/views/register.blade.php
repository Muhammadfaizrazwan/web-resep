<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="{{asset('styles.css')}}">
    

</head>
<body>
    
    <form action="index" method="">
    <h2>Register</h2>
        <label for="username">Username:</label>
        <input type="text" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br><br>

        <label for="confirm_password">Confirm Password:</label>
        <input type="password" name="confirm_password" required><br><br>

        <input type="submit" value="Register">
        <p>Sudah Punya Akun?<a href="login">KLIK DISINI!</a></p>
    </form>

    
</body>
</html>
