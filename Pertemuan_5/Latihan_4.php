<?php

// ini adalah array numerik 
$mahasiswa = [
    [
        "Ahmad Supriyanto", "12210663",
        "Sistem Informasi", "supriyantoahmad420@gmail.com"
    ],
    [
        "Laura Putri", "12210663",
        "Sistem Informasi", "supriyantoahmad420@gmail.com"
    ]
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
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>

            <li>Nama : <?= $mhs[0] ?> </li>
            <li>NIM : <?= $mhs[1] ?> </li>
            <li>Jurusan : <?= $mhs[2] ?> </li>
            <li>Email : <?= $mhs[3] ?> </li>

        </ul>
    <?php endforeach ?>

</body>

</html>