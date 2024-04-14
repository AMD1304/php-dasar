<?php

// Melakukan Pengulangan pada array
// for / foreach

$angka = [1, 2, 3, 47, 8, 10];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Latihan Array</title>
    <style>
        div {
            width: 50px;
            height: 50px;
            background-color: aqua;
            text-align: center;
            line-height: 50px;
            margin: 5px;
            float: left;
        }
    </style>

</head>

<body>
    <?php for ($i = 0; $i < count($angka); $i++) : ?>
        <div><?php echo $angka[$i]; ?></div>
    <?php endfor ?>


</body>

</html>