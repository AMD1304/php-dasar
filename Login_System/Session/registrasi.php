<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("location: login.php");
    exit;
}
require 'functions.php';

// tombol register di tekan
if (isset($_POST["register"])) {
    if (registrasi($_POST) > 0) {
        echo " <script>
            alert('user baru berhasil di tambahkan')
        
        </script>";
    } else {
        echo mysqli_error($konek);
    }
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Halaman Registrasi</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>

<body>
    <h1>Halaman Registrasi</h1>


    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username :</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="passwoard">Passwoard :</label>
                <input type="password" name="passwoard" id="passwoard">
            </li>
            <li>
                <label for="passwoard2">Konfirmasi Passwoard :</label>
                <input type="password" name="passwoard2" id="passwoard2">
            </li>
            <button type="submit" name="register">Register</button>
        </ul>



    </form>




</body>

</html>