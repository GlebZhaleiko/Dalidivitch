
Обновление:

<?php
    error_reporting(0);
    $link = mysqli_connect("localhost", "root", "", "trading", 3306);
    mysqli_set_charset($link , "utf8");
    if (!$link) {
        echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
        echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
    exit;
    }
    echo "Соединение с MySQL установлено!" . PHP_EOL;
    $id = $_POST["id-input"];
    $name = $_POST["name-input"];
	$surname = $_POST["surname-input"];
    $pos = $_POST["pos-input"];
    $query=mysqli_query($link,"update users set name  = '$name', last_name = '$surname', pos = '$pos' where id = '$id'");
    if ($query) header("Location: 1.php");
    else echo "Error";
    mysqli_close($link);
?>

