<?php
// Cara koneksi ke database
mysqli_connect("localhost", "root", "", "phpdasar");


// ambil data dari tabel mahasiswa / query data mahasiswa
$result = mysqli_query($konek, "SELECT * FROM mahasiswa");
// if (!$result) {
//     echo mysqli_error($konek);
// }
// var_dump($result);

// ambil data(fetch) mahasiswa dari objek result
// mysqli_fetch_row() / mengembalikan array numerik
// mysqli_fetch_assoc() / mengembalikan array assosiative
// mysqli_fetch_array() / mengembalikan kedua nya
// mysqli_fetch_object()

// $mhs = mysqli_fetch_row($result);
// var_dump($mhs[4])

// while ($mhs = mysqli_fetch_assoc($result)) {
//     var_dump($mhs);
// }
// var_dump($mhs["jurusan"])

// $mhs = mysqli_fetch_array($result);
// var_dump($mhs["jurusan"])

// $mhs = mysqli_fetch_object($result);
// var_dump($mhs->nama)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Halaman Admin</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
        <?php $i = 1;
        ?>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>

            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="">Ubah</a> |
                    <a href="">Hapus</a>
                </td>
                <td>
                    <img src="" width="50">Gambar</a>
                </td>
                <td><?= $row["nim"] ?></td>
                <td><?= $row["nama"] ?></td>
                <td><?= $row["email"] ?></td>
                <td><?= $row["jurusan"] ?></td>
            </tr>
            <?php $i++; ?>

        <?php endwhile; ?>


    </table>



</body>

</html>