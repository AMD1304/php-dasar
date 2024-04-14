<?php
session_start();


// cek cookie
// if (isset($_COOKIE["login"])) {
//     if ($_COOKIE["login"] === "true") {
//         $_SESSION["login"] = true;
//     }
// }

if (isset($_COOKIE["id"]) && isset($_COOKIE["key"])) {
    $id = $_COOKIE["id"];
    $key = $_COOKIE["key"];

    // ambil username berdasarkan id
    $result = mysqli_query($konek, "SELECT username FROM user
                 WHERE id=$id");
    $row = mysqli_fetch_assoc($result);

    // cek cookie dan username
    if ($key === hash('sha256', $row['username'])) {
        $_SESSION['login'] = true;
    }
}


if (isset($_SESSION["login"])) {
    header("location: index.php");
    exit;
}


require "functions.php";

if (isset($_POST['login'])) {
    $username = $_POST["username"];
    $password = $_POST["passwoard"];

    $result = mysqli_query($konek, "SELECT * FROM user 
    WHERE username ='$username'");

    // cek username
    if (mysqli_num_rows($result) === 1) {
        // cek passwoard 
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['passwoard'])) {

            // set session
            $_SESSION["login"] = true;


            // cek cookie
            if (isset($_POST['remember'])) {

                // buat cookie
                // setcookie('login', 'true', time() + 60);
                setcookie('id', $row['id'], time() + 60);
                setcookie('key', hash('sha256', $row["username"]), time() + 60);
            }



            header("location: index.php");
            exit;
        }
    }

    $error = true;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Halaman Login</title>

</head>

<body>
    <h1>Halaman Login</h1>
    <?php if (isset($error)) : ?>
        <p style="color: red;">username / passwoard salah</p>


    <?php endif; ?>


    ?>

    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username :</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="passwoard">passwoard :</label>
                <input type="password" name="passwoard" id="passwoard">
            </li>
            <li>
                <label for="remember">Remember Me :</label>
                <input type="checkbox" name="remember" id="remember">
            </li>
            <li>
                <button type="submit" name="login">Login</button>
            </li>
        </ul>


    </form>



</body>

</html>