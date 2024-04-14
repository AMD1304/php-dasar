<?php

// ini adalah array numerik 
// $mahasiswa = [
//     [
//         "Ahmad Supriyanto", "12210663",
//         "Sistem Informasi", "supriyantoahmad420@gmail.com"
//     ],
//     [
//         "Laura Putri", "12210663",
//         "Sistem Informasi", "supriyantoahmad420@gmail.com"
//     ]
// ];


// Array Assosiative

$mahasiswa = [
    [
        "Nama" => "Ahmad Supriyanto",
        "NIM" => "12210663",
        "Jurusan" => "Sistem Informasi",
        "Email" => "supriyantoahmad420@gmail.com",
        // "gambar" => "ahmad.jpg"
    ],
    [
        "Nama" => "Laura",
        "NIM" => "12210663",
        "Jurusan" => "Sistem Informasi",
        "Email" => "supriyantoahmad420@gmail.com",
        "Tugas" => [90, 80, 100]
    ],



];
// echo $mahasiswa[1]["Tugas"][2];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Daftar Mahasiswa</title>
</head>

<body>

    <h1>Daftar Mahasiswa </h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>

            <li>Nama : <?= $mhs["Nama"] ?> </li>
            <li>NIM : <?= $mhs["NIM"] ?> </li>
            <li>Jurusan : <?= $mhs["Jurusan"] ?> </li>
            <li>Email : <?= $mhs["Email"] ?> </li>

        </ul>
    <?php endforeach ?>

</body>

</html>