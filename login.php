<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <script src="otentikasi.js" defer></script>
    <link rel="stylesheet" href="Login Page.css">
</head>
<body>
    <div class="login-box">
    <h2>Login Admin Klinik Ananda</h2>
    <form id="loginForm">
        <div class="user-box">
        <br>
        <br>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        </div>
        <br>

        <div class="user-box">
        <br>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        </div>

        <div>
            <a href="#" type="button" onclick="validateLogin()">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Sign in
            </a>
        </div>

        <p class="Belum">Belum punya akun?</p>
        <a  class="Daftar" href="">Daftar sekarang </a>
        
    </div>
    </form>
</body>
</html>