<?php
//validasi untuk akses latihan_get2
// funsi isset untuk mengecek sebuah variabel sudah di buat apa belum

// PR cari macam" fungsi pada php

if (
    !isset($_GET["nama"]) ||
    !isset($_GET["nim"]) ||
    !isset($_GET["jurusan"]) ||
    !isset($_GET["email"])
) {
    // gunakan redirect untuk memindahkan ke halaman lain.
    header("Location: Latihan_get.php");
    exit;
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Detail Mahasiswa</title>
</head>

<body>
    <ul>
        <li><img src="img/cyber.jpg"></li>
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["nim"]; ?></li>
        <li><?= $_GET["jurusan"]; ?></li>
        <li>Supriyantoahmad420@gmail.com</li>
    </ul>



</body>

</html>