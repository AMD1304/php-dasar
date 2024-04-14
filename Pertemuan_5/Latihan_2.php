<?php

// Melakukan Pengulangan pada array
// for / foreach

// foreach artinya untuk setiap

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
    <?php foreach ($angka as $a) : ?>
        <div><?php echo $a; ?></div>
    <?php endforeach ?>



</body>

</html>