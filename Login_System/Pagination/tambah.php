<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("location: login.php");
    exit;
}
require 'functions.php';
$conn = mysqli_connect("localhost", "root", "", "phpdasar");


if (isset($_POST["submit"])) {
    // ambil data dari tiap elemen dalam form
    // var_dump($_POST);
    // $nama = $_POST["nama"];
    // $nim = $_POST["nim"];
    // $email = $_POST["email"];
    // $jurusan = $_POST["jurusan"];
    // $gambar = $_POST["gambar"];

    // var_dump($_POST);
    // die;




    // // query insert data
    // $query = "INSERT INTO mahasiswa(`id`, `nama`, `nim`, `email`, `jurusan`, `gambar`)
    //  VALUES
    //   (NULL,'$nama','$nim','$email','$jurusan','$gambar')";


    // mysqli_query($conn, $query);

    // cek apakah data berhasil di tambahkan atau tidak
    // if (mysqli_affected_rows($conn) > 0) {
    //     echo "berhasil";
    // } else {
    //     echo "gagal";
    //     echo "<br>";
    //     echo mysqli_error($conn);
    // };


    // cek data berhasil di tamba
    if (tambah($_POST) > 0) {
        echo "data berhasil di tambahkan";
    } else {
        echo "data gagal";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tambah Data Mahasiswa</title>
</head>

<body>
    <h1>Tambah Data Mahasiswa</h1>


    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required autocomplete="off">
            </li>
            <li>
                <label for="nim">NIM: </label>
                <input type="text" name="nim" id="nim" required>
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email" required>
            </li>
            <li>
                <label for="jurusan">Jurusan: </label>
                <input type="text" name="jurusan" id="jurusan" required>
            </li>

            <li>
                <label for="gambar">Gambar: </label>
                <input type="file" name="gambar" id="gambar" required>
            </li>
            <li>
                <button type="submit" name="submit">Submit</button>
            </li>


        </ul>


    </form>






</body>

</html>