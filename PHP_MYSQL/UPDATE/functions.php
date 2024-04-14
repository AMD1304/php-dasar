<?php

$konek = mysqli_connect("localhost", "root", "", "phpdasar");



function query($query)
{
    global $konek;

    $result = mysqli_query($konek, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $konek;

    $nama = htmlspecialchars($data["nama"]);
    $nim = htmlspecialchars($data["nim"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "INSERT INTO mahasiswa
    VALUES
     (NULL,'$nama','$nim','$email','$jurusan','$gambar')";


    mysqli_query($konek, $query);

    return mysqli_affected_rows($konek);
}

function hapus($id)
{
    global $konek;
    mysqli_query($konek, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($konek);
}

function ubah($data)

{
    global $konek;


    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $nim = htmlspecialchars($data["nim"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "UPDATE mahasiswa SET 
        nama='$nama',
        nim='$nim',
        email='$email',
        jurusan='$jurusan',
        gambar='$gambar' WHERE id = $id";


    mysqli_query($konek, $query);

    return mysqli_affected_rows($konek);
}
