<?php
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
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li> <?= $mhs[0] ?> </li>
        <?php endforeach ?>
    </ul>

</body>

</html>