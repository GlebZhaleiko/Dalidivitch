<!DOCTYPE html>
<html>
    <head>
    <style>
        .entity{
            border: 1px solid;
        }
    </style>
    </head>
    <body>
    <?php
    $link = mysqli_connect("localhost", "root", "password", "db");
    mysqli_set_charset($link , "utf8");
    if (!$link) {
        echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
        echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
    exit;
    }
    if ($result = mysqli_query($link, 'select * from a')) 
    {
        while( $row = mysqli_fetch_assoc($result) )
        {
            echo '<div id="'.$row["id"].'" class="entity">';
            echo $row["id"]."<br>";
            echo $row["title"]."<br>";
            echo $row["ingr"]."<br>";
            echo $row["t"]."<br>";
            echo $row["c"]."<br>";
            echo '</div>';
        }
        mysqli_free_result($result);
    }
    mysqli_close($link);
    
?>
    <script src="one.js"></script>
    </body>
</html>

