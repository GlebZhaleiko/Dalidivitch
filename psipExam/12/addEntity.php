<?php
    $n = $_REQUEST["n"];
    $t = $_REQUEST["t"];
    $tel = $_REQUEST["tel"];
    error_reporting(0);
    $link = mysqli_connect("localhost", "root", "password", "db");
    mysqli_set_charset($link , "utf8");
    if (!$link) {
        echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
        echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
    exit;
    }
    
    $query=mysqli_query($link,"insert into a values
    (0,'$n','$t','$tel')");
    if ($query)header("Location: main.php");
    else echo "Error";
    mysqli_close($link);
?>