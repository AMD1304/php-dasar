<?php
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
                <button type="submit" name="login">Login</button>
            </li>
        </ul>


    </form>



</body>

</html>