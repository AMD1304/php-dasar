<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("location: login.php");
    exit;
}


require "functions.php";
$mahasiswa = query("SELECT * FROM mahasiswa");
// $mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id ASC");
// // var_dump($mahasiswa);

// tombol cari di tekan

if (isset($_POST["cari"])) {
    $mahasiswa = cari($_POST["keywoard"]);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Halaman Admin</title>
</head>

<body>
    <a href="logout.php">Logout</a>


    <h1>Daftar Mahasiswa</h1>

    <a href="tambah.php">Tambah Data Mahasiswa</a>
    <br><br>
    <form action="" method="post">
        <input type="text" name="keywoard" size="50" autofocus placeholder="masukan keywoard pencarian" autocomplete="off">
        <button type="submit" name="cari">Cari</button>
    </form>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
        <?php $i = 1;
        ?>
        <?php foreach ($mahasiswa as $row) : ?>

            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="ubah.php?id=<?= $row["id"] ?>">Ubah</a> |
                    <a href="hapus.php?id=<?= $row["id"] ?>">Hapus</a>
                </td>
                <td>
                    <img src="" width=" 50">Gambar</a>
                </td>
                <td><?= $row["nama"] ?></td>
                <td><?= $row["nim"] ?></td>
                <td><?= $row["email"] ?></td>
                <td><?= $row["jurusan"] ?></td>
                <td><?= $row["gambar"] ?></td>
            </tr>
            <?php $i++; ?>

        <?php endforeach; ?>


    </table>



</body>

</html>