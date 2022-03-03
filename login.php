<?php
require_once 'includes.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $login = (new Login())->login();
    die;
}


?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section class="loginform cf">
    <form name="login" action="" method="post" accept-charset="utf-8">
<P><h1>Peduli Diri-Login</h1></p>
        <ul>
            <li>
                <label for="NIK">NIK</label>
                <input type="username" name="nik" placeholder="nomor nik" required>
            </li>
            <li>
                <label for="NAMA">NAMA</label>
                <input type="username" name="nama" placeholder="nama lengkap anda" required></li>
            <li>
                <input type="submit" value="Login">
                <div class="button"><button><a href="registration.php">Pengguna Baru</a></button></div>
            </li>

        </ul>
    </form>
</section>
</body>
</html>