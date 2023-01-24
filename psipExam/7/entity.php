<?php
    $id = $_REQUEST["id"];
    
    
    $link = mysqli_connect("localhost", "root", "password", "bd");
    mysqli_set_charset($link , "utf8");
    if (!$link) {
        echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
        echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
    exit;
    }
    if ($result = mysqli_query($link, 'select * from a where id='.$id)) 
    {
        while( $row = mysqli_fetch_assoc($result) )
        {
            echo '<div class="entity">';
            echo $row["id"]."<br>";
            echo $row["title"]."<br>";
            echo $row["ingr"]."<br>";
            echo $row["t"]."<br>";
            echo $row["c"]."<br>";
            echo '</div>';
        }
        mysqli_free_result($result);
    }
?>