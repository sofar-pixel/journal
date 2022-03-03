<?php
require_once 'includes.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $login = (new Login())->logout();
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
<h1>PEDULI DIRI</h1>
<h4>catatan perjalanan</h4>
<button><a href="index.php">HOME</a></button>
<button><a href="tampil.php">CATATAN PERJALANAN</a></button>
<button><a href="input.php">ISI DATA</a></button>
<button><a href="logout.php">LOGOUT</a></button>

<section class="loginform cf">
    <center>
        <br>
        <?php
        if (!isset($_SESSION['is_auth'])) :
            echo '<b>login Required! you will redirect to login page</b>';
            header("refresh:3; url=login.php");
            die;
        else:
            $r = '<b>' . 'Selamat Datang ' . $_SESSION['nama'] . ' Di Peduli Diri  </b>';
            $r .= '
<form action='. $_SERVER['PHP_SELF'] .' method="post" accept-charset="utf-8">
            <input type="submit" value="Click here for logout">
        </form>';
        
            echo $r;
        endif;
        ?>
        <br>
    </center>
</section>

</body>
</html>