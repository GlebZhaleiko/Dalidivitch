<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
    <form id="form" method="post">
        <div>
            name:
            <br>
            <input required type="text" name="n" id="n" pattern="[A-Z][A-Za-z]{1,}"/>            
            <br>
            theme:
            <br>
            <input required type="text" name="t" id="t" />
            <br>
            telephone:
            <br>
            <input required type="text" name="tel" id="tel" />
            <br>
            
            data:
            <br>
            <input required type="date" name="tel" id="d" max="2020-01-01" />
            <br>
            <input type="button" name="loginBtn" id="loginBtn" value="add" onclick="addEntity()"/>
        </div>
    </form>
    <script src="one.js"></script>
    </body>
</html>

<?php
    $link = mysqli_connect("localhost", "root", "password", "db");
    mysqli_set_charset($link , "utf8");
    if (!$link) {
        echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
        echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
    exit;
    }
    if ($result = mysqli_query($link, 
    '
    select * from a
    ')) {
        echo "<br>","Categors";
        echo "<table border=","1px",">";
        echo "<tr>";
        echo "<td>n</td>";
        echo "<td>t</td>";
        echo "<td>tel</td>";
        echo "</tr>";
        while( $row = mysqli_fetch_assoc($result) ){
        echo '<tr>';
        echo '<td style="border: 1px solid black">'.$row["n"].'</td>';
        echo '<td style="border: 1px solid black">'.$row["t"].'</td>';
        echo '<td style="border: 1px solid black">'.$row["tel"].'</td>';
        echo '</tr>';
    }
    echo '</table>';
        /* Освобождаем используемую память */
        mysqli_free_result($result);
    }
    mysqli_close($link);
    
?>