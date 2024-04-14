<?php


$mahasiswa = [
    [
        "nama" => "Ahmad Supriyanto",
        "nim" => "12210663",
        "jurusan" => "Sistem Informasi",
        "email" => "supriyantoahmad420@gmail.com",
        // "gambar" => "ahmad.jpg"
    ],
    [
        "nama" => "Laura Putri Nurahmad",
        "nim" => "12210663",
        "jurusan" => "Sistem Informasi",
        "email" => "supriyantoahmad420@gmail.com",
        "tugas" => [90, 80, 100]
    ],



];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Daftar Mahasiswa</title>
</head>

<body>

    <h1>Daftar Mahasiswa </h1>
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li>
                <a href="Latihan_get2.php?nama=<?= $mhs["nama"]; ?>
                &nim=<?= $mhs["nim"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>">
                    <?= $mhs["nama"]; ?></a>
            </li>

        <?php endforeach ?>
    </ul>

</body>

</html>