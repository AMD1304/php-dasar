<?php
// validasi login
// apakah tombol submit sudah di tekan
if (isset($_POST["submit"])) {
    // cek username dan password
    if ($_POST["username"] == "admin" && $_POST["password"] == "123") {
        // jika benar redirect ke halaman admin
        header("Location: Login.php");
    } else {
        // jika salah
        $eror = true;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login Admin</title>
</head>

<body>
    <h1>Login Admin</h1>
    <?php if (isset($eror)) : ?>
        <p>username/passwoard eror</p>
    <?php endif ?>
    <ul>
        <form action="" method="post">
            <li>
                <label for="username">Username: </label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password: </label>
                <input type="password" name="password" id="password">
            </li>

            <li>
                <button type="submit" name="submit">Login</button>
            </li>





        </form>
    </ul>



</body>

</html>