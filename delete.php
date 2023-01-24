<?php
    error_reporting(0);
    $link = mysqli_connect("localhost", "root", "", "sports_club", 3306);
    mysqli_set_charset($link , "utf8");
    if (!$link) {
        echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
        echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
    exit;
    }
    echo "Соединение с MySQL установлено!" . PHP_EOL;
    $id = $_POST["dropdown_1"];
    echo $id;
    $query=mysqli_query($link,"DELETE FROM sportsman WHERE Passport_id ='$id'");
    if ($query) header("Location: 1.php");
    else echo "Error";
    mysqli_close($link);
?>