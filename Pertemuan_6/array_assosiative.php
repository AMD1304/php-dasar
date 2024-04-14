<?php

// $hari = ["senin", "selasa", "rabu"];
// $arr = [123, "test", true];

// echo $arr[0];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Latihan Array</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: aqua;
            text-align: center;
            line-height: 50px;
            margin: 5px;
            float: left;
            transition: 1s;
        }

        .kotak:hover {
            transform: rotate(360deg);
        }

        .clear {
            clear: both;
        }
    </style>
</head>

<body>
    <?php
    $angka = [
        [1, 2, 3],
        [4, 5, 6]

    ];
    // echo $angka[0][2];

    ?>


    <?php foreach ($angka as $a) : ?>
        <?php foreach ($a as $b) : ?>
            <div class="kotak"><?= $b ?></div>
        <?php endforeach; ?>
        <div class="clear"></div>
    <?php endforeach; ?>



</body>

</html>