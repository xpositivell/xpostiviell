<?php
    if (empty($_GET['v1']) or empty($_GET['v2']) or empty ($_GET['act'])) {
        die ('Не хватает данных');
    }
    if (is_numeric($_GET['v1']) and is_numeric($_GET['v2'])) {
    $x = $_GET ['v1'];
    $y = $_GET ['v2'];
    $act = $_GET ['act'];
    if ($act == '+') {
    $z = $x + $y;
    }
    else if ($act == '-') {
    $z = $x - $y;
    }
    else if ($act == '/'){
        if ($y)

    echo $x.' '.$act.' '.$y.' = '.$z;
?>