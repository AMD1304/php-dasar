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
