<?php

// Function user defind

function salam($nama)
{
    return "Selamat Datang,$nama";
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Belajar Function</title>
</head>

<body>

    <h1><?= salam("Ahmad") ?> </h1>

</body>

</html>