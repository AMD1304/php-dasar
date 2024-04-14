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
    // $gambar = htmlspecialchars($data["gambar"]);

    // upload gambar
    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    $query = "INSERT INTO mahasiswa
    VALUES
     (NULL,'$nama','$nim','$email','$jurusan','$gambar')";


    mysqli_query($konek, $query);

    return mysqli_affected_rows($konek);
}

function upload()
{
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek upload gamabar 
    if ($error === 4) {
        echo "<script>
        alert('pilih gambar terlebih dahulu');
        </script>";
        return false;
    }

    // hanya gambar yg boleh di upload
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
        alert('yang anda upload bukan gambar');
        </script>";
        return false;
    }

    // cek jika ukuran terlalu besar
    if ($ukuranFile >= 1000000) {
        echo "<script>
        alert('ukuran gambar terlalu besar');
        </script>";
        return false;
    }




    // generate  nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= $ekstensiGambar;
    // lolos validasi
    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);
    return $namaFileBaru;
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
    // $gambarLama = ($data["gambarLama"]);

    // cek apakah user pilih gambar baru
    // if ($_FILES['gambar']['eror'] === 4) {
    //     $gambar = $gambarLama;
    // } else {
    //     $gambar = upload();
    // }

    $query = "UPDATE mahasiswa SET 
        nama='$nama',
        nim='$nim',
        email='$email',
        jurusan='$jurusan',
        gambar='$gambar' WHERE id = $id";


    mysqli_query($konek, $query);

    return mysqli_affected_rows($konek);
}

function cari($keywoard)
{
    $query = "SELECT * FROM mahasiswa WHERE 
    nama LIKE'$keywoard%' OR
    nim LIKE '$keywoard%' OR 
    email LIKE '$keywoard%' OR 
    jurusan LIKE '$keywoard%'";

    return query($query);
}

function registrasi($data)
{
    global $konek;


    $username = strtolower(stripslashes($data["username"]));
    $passwoard = mysqli_real_escape_string($konek, $data["passwoard"]);
    $passwoard2 =  mysqli_real_escape_string($konek, $data["passwoard2"]);


    // cek username sudah ada belum
    $result = mysqli_query($konek, "SELECT username FROM user
     WHERE username = '$username'");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>
        alert('username sudah ada')
        
        </script>";
        return false;
    }




    // cek konfirmasi passwoard

    if ($passwoard !== $passwoard2) {
        echo "<scrip>
            alert('koonfirmasi passwoard tdk sesuai');
        
        </script>";
        return false;
    } else {
        echo mysqli_error($konek);
    }

    // enkripsi passwoard
    $passwoard = password_hash($passwoard, PASSWORD_DEFAULT);

    // tambahkan user baru ke database
    mysqli_query($konek, "INSERT INTO user
                VALUES 
                (NULL,'$username','$passwoard')");

    return mysqli_affected_rows($konek);
}
