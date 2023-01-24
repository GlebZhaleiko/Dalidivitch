<html>
<head>

</head>

<style>

table {
font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
text-align: left;
border-collapse: separate;
border-spacing: 5px;
background: #ECE9E0;
color: #656665;
border: 16px solid #ECE9E0;
border-radius: 20px;
}
th {
font-size: 18px;
padding: 10px;
}
td {
background: #F5D7BF;
padding: 10px;
}


input[type=button], input[type=submit], input[type=reset] {
  background-color: #04AA6D;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}


.styled {
    border: 0;
    line-height: 2.5;
    padding: 0 20px;
    font-size: 1rem;
    text-align: center;
    color: #fff;
    text-shadow: 1px 1px 1px #000;
    border-radius: 10px;
    background-color: rgba(220, 0, 0, 1);
    background-image: linear-gradient(to top left,
                                      rgba(0, 0, 0, .2),
                                      rgba(0, 0, 0, .2) 30%,
                                      rgba(0, 0, 0, 0));
    box-shadow: inset 2px 2px 3px rgba(255, 255, 255, .6),
                inset -2px -2px 3px rgba(0, 0, 0, .6);
}

.styled:hover {
    background-color: rgba(255, 0, 0, 1);
}

.styled:active {
    box-shadow: inset -2px -2px 3px rgba(255, 255, 255, .6),
                inset 2px 2px 3px rgba(0, 0, 0, .6);
}






.login-box h2 {
  margin: 0 0 30px;
  padding: 0;
  color: #fff;
  text-align: center;
}

.login-box .user-box {
  position: relative;
}

.login-box .user-box input {
  width: 100%;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  margin-bottom: 30px;
  border: none;
  border-bottom: 1px solid #fff;
  outline: none;
  background: transparent;
}
.login-box .user-box label {
  position: absolute;
  top:0;
  left: 0;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  pointer-events: none;
  transition: .5s;
}

.login-box .user-box input:focus ~ label,
.login-box .user-box input:valid ~ label {
  top: -20px;
  left: 0;
  color: #03e9f4;
  font-size: 12px;
}

.login-box form a {
  position: relative;
  display: inline-block;
  padding: 10px 20px;
  color: #03e9f4;
  font-size: 16px;
  text-decoration: none;
  text-transform: uppercase;
  overflow: hidden;
  transition: .5s;
  margin-top: 40px;
  letter-spacing: 4px
}

.login-box a:hover {
  background: #03e9f4;
  color: #fff;
  border-radius: 5px;
  box-shadow: 0 0 5px #03e9f4,
              0 0 25px #03e9f4,
              0 0 50px #03e9f4,
              0 0 100px #03e9f4;
}

.login-box a span {
  position: absolute;
  display: block;
}

.login-box a span:nth-child(1) {
  top: 0;
  left: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(90deg, transparent, #03e9f4);
  animation: btn-anim1 1s linear infinite;
}

@keyframes btn-anim1 {
  0% {
    left: -100%;
  }
  50%,100% {
    left: 100%;
  }
}

.login-box a span:nth-child(2) {
  top: -100%;
  right: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(180deg, transparent, #03e9f4);
  animation: btn-anim2 1s linear infinite;
  animation-delay: .25s
}

@keyframes btn-anim2 {
  0% {
    top: -100%;
  }
  50%,100% {
    top: 100%;
  }
}

.login-box a span:nth-child(3) {
  bottom: 0;
  right: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(270deg, transparent, #03e9f4);
  animation: btn-anim3 1s linear infinite;
  animation-delay: .5s
}

@keyframes btn-anim3 {
  0% {
    right: -100%;
  }
  50%,100% {
    right: 100%;
  }
}

.login-box a span:nth-child(4) {
  bottom: -100%;
  left: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(360deg, transparent, #03e9f4);
  animation: btn-anim4 1s linear infinite;
  animation-delay: .75s
}

@keyframes btn-anim4 {
  0% {
    bottom: -100%;
  }
  50%,100% {
    bottom: 100%;
  }
}




input {
  font-size: 16px;
  padding: 10px;
  width: 300px;
  border: none;
  border-bottom: 1px solid #ccc;
}
input:focus {
  outline: none;
}



label {
  color: blue;
  font-size: 18px;
  position: absolute;
  pointer-events: none;
  left: 10px;
  top: 15px;
  transition: 0.2s ease all;
  -moz-transition: 0.2s ease all;
  -webkit-transition: 0.2s ease all;
}

/* active state */
input:focus ~ label, input:valid ~ label {
  top: -15px;
  font-size: 14px;
  color: #5264AE;
}


/* BOTTOM BARS ================================= */
.bar {
  position: relative;
  display: block;
  width: 320px;
}
.bar:before, .bar:after {
  content: "";
  height: 2px;
  width: 0;
  bottom: 0;
  position: absolute;
  background: #5264AE;
  transition: 0.2s ease all;
  -moz-transition: 0.2s ease all;
  -webkit-transition: 0.2s ease all;
}
.bar:before {
  left: 50%;
}
.bar:after {
  right: 50%;
}

/* active state */
input:focus ~ .bar:before,
input:focus ~ .bar:after {
  width: 50%;
}




</style>

<body>

<form method="post">
<input type="submit" name="test" id="test" value="Таблица клиентов" />
<input type="submit" name="test_1" id="test_1" value="Таблица недвижимости" />
<input type="submit" name="test_2" id="test_2" value="Таблица заказов" />
<input type="submit" name="test_3" id="test_3" value="Таблица сотрудников" />
</form>


  <p>Таблица клиентов</p>
  <form action="add.php" method="post">
   <div class="group">      
      <input type="text" name="id-input" id="id-input" placeholder="Номер пасспорта" required>
      <span class="bar"></span>
    </div>
	<br>
  <div class="group">      
      <input type="text" name="nam-input" id="nam-input" placeholder="ФИО" required>
      <span class="bar"></span>
    </div>
    <br>
    <div class="group">      
      <input type="text" name="age-input" id="age-input" placeholder="Номер телефона" required>
      <span class="bar"></span>
    </div>
    <br>
    <div class="group">      
      <input type="text" name="num-input" id="num-input" placeholder="ФИО" required>
      <span class="bar"></span>
    </div>
    <br>
    <div class="group">      
      <input type="text" name="t_id-input" id="t_id-input" placeholder="ФИО" required>
      <span class="bar"></span>
    </div>
    <br>
    <input type="submit" value="Добавить">
</form>

<form action="delete.php" method="post">
    <select name="dropdown_1" id="">
        <?php
        $link = mysqli_connect("localhost", "root", "", "sports_club", 3306);
        mysqli_set_charset($link , "utf8");
        if (!$link) {
            echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
            echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
        exit;
        }
        if ($result = mysqli_query($link, 'SELECT Passport_id FROM sportsman')) {
            while( $row = mysqli_fetch_assoc($result) ){
            echo '<option value="'.$row["Passport_id"].'">'.$row["Passport_id"].'</option>';
        }
            /* Освобождаем используемую память */
            mysqli_free_result($result);
        }
        mysqli_close($link);
        ?>
    </select>
    <input type="submit" value="Удалить">
</form>

<br>
<br>
<br>
<br>
<br>
<br>

<p>Таблица турниров</p>

  <form action="add1.php" method="post">
   <div class="group">      
      <input type="text" name="number-input" id="number-input" placeholder="Номер турнира" required>
      <span class="bar"></span>
    </div>
	<br>
  <div class="group">      
      <input type="text" name="name-input" id="name-input" placeholder="Название турнира" required>
      <span class="bar"></span>
    </div><br>
    <div class="group">      
      <input type="text" name="address-input" id="address-input" placeholder="Адрес" required>
      <span class="bar"></span>
    </div><br>
	
	<div class="group">      
      <input type="text" name="beg-input" id="beg-input" placeholder="Начало" required>
      <span class="bar"></span>
    </div><br>

    <div class="group">      
      <input type="text" name="end-input" id="end-input" placeholder="конец" required>
      <span class="bar"></span>
    </div><br>

    <div class="group">      
      <input type="text" name="prz-input" id="prz-input" placeholder="Приз" required>
      <span class="bar"></span>
    </div><br>
    <input type="submit" value="Добавить">
</form>

<form action="delete1.php" method="post">
    <select name="dropdown_2" id="">
        <?php
        $link = mysqli_connect("localhost", "root", "", "sports_club", 3306);
        mysqli_set_charset($link , "utf8");
        if (!$link) {
            echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
            echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
        exit;
        }
        if ($result = mysqli_query($link, 'SELECT Tourn_id FROM tourn')) {
            while( $row = mysqli_fetch_assoc($result) ){
            echo '<option value="'.$row["Tourn_id"].'">'.$row["Tourn_id"].'</option>';
        }
            /* Освобождаем используемую память */
            mysqli_free_result($result);
        }
        mysqli_close($link);
        ?>
    </select>
    <input type="submit" value="Удалить">
</form>


<br>
<br>
<br>
<br>
<br>
<br>

<p>Таблица заказов</p>
<form action="add2.php" method="post">
   <div class="group">      
      <input type="text" name="number3-input" id="number3-input" placeholder="Номер заказа" required>
      <span class="bar"></span>
    </div>
	<br>
  <div class="group">      
      <input type="text" name="date-input" id="date-input" placeholder="Дата заказа" required>
      <span class="bar"></span>
    </div><br>
    <div class="group">      
      <input type="text" name="code-input" id="code-input" placeholder="Код" required>
      <span class="bar"></span>
    </div><br>
	
	
	<select name="dropdown_passport" id="">
        <?php
        $link = mysqli_connect("localhost", "root", "", "1194675_1", 3306);
        mysqli_set_charset($link , "utf8");
        if (!$link) {
            echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
            echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
        exit;
        }
        if ($result = mysqli_query($link, 'SELECT passport FROM client')) {
            while( $row = mysqli_fetch_assoc($result) ){
            echo '<option value="'.$row["passport"].'">'.$row["passport"].'</option>';
        }
            /* Освобождаем используемую память */
            mysqli_free_result($result);
        }
        mysqli_close($link);
        ?>
    </select>
	
	<select name="dropdown_passport1" id="">
        <?php
        $link = mysqli_connect("localhost", "root", "", "1194675_1", 3306);
        mysqli_set_charset($link , "utf8");
        if (!$link) {
            echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
            echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
        exit;
        }
        if ($result = mysqli_query($link, 'SELECT passport FROM worker')) {
            while( $row = mysqli_fetch_assoc($result) ){
            echo '<option value="'.$row["passport"].'">'.$row["passport"].'</option>';
        }
            /* Освобождаем используемую память */
            mysqli_free_result($result);
        }
        mysqli_close($link);
        ?>
    </select>
	
	<div class="group">      
      <input type="text" name="operation-input" id="operation-input" placeholder="Операция" required>
      <span class="bar"></span>
    </div><br>
	
	<div class="group">      
      <input type="text" name="sum-input" id="sum-input" placeholder="Сумма" required>
      <span class="bar"></span>
    </div><br>
	
    <input type="submit" value="Добавить">
</form>

<form action="delete2.php" method="post">
    <select name="dropdown_3" id="">
        <?php
        $link = mysqli_connect("localhost", "root", "", "1194675_1", 3306);
        mysqli_set_charset($link , "utf8");
        if (!$link) {
            echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
            echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
        exit;
        }
        if ($result = mysqli_query($link, 'SELECT number FROM order_3')) {
            while( $row = mysqli_fetch_assoc($result) ){
            echo '<option value="'.$row["number"].'">'.$row["number"].'</option>';
        }
            /* Освобождаем используемую память */
            mysqli_free_result($result);
        }
        mysqli_close($link);
        ?>
    </select>
    <input type="submit" value="Удалить">
</form>

  
 <br> 
  <br> 
   <br> 
    <br> 
	 <br> 
	  <br> 
  
  
  <p>Таблица сотрудников</p>

  <form action="add3.php" method="post">
   <div class="group">      
      <input type="text" name="pass-input" id="pass-input" placeholder="Номер пасспорта" required>
      <span class="bar"></span>
    </div>
	<br>
  <div class="group">      
      <input type="text" name="FIO1-input" id="FIO1-input" placeholder="ФИО" required>
      <span class="bar"></span>
    </div><br>
    <div class="group">      
      <input type="text" name="title-input" id="title-input" placeholder="Должность" required>
      <span class="bar"></span>
    </div><br>
	
	<div class="group">      
      <input type="text" name="date_p-input" id="date_p-input" placeholder="Дата принятия" required>
      <span class="bar"></span>
    </div><br>
	
	<div class="group">      
      <input type="text" name="salary-input" id="salary-input" placeholder="Зарплата" required>
      <span class="bar"></span>
    </div><br>
    <input type="submit" value="Добавить">
</form>

<form action="delete3.php" method="post">
    <select name="dropdown_4" id="">
        <?php
        $link = mysqli_connect("localhost", "root", "", "1194675_1", 3306);
        mysqli_set_charset($link , "utf8");
        if (!$link) {
            echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
            echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
        exit;
        }
        if ($result = mysqli_query($link, 'SELECT passport FROM worker')) {
            while( $row = mysqli_fetch_assoc($result) ){
            echo '<option value="'.$row["passport"].'">'.$row["passport"].'</option>';
        }
            /* Освобождаем используемую память */
            mysqli_free_result($result);
        }
        mysqli_close($link);
        ?>
    </select>
    <input type="submit" value="Удалить">
</form>
  
  
</div>


<?php

function client()
{

echo '<table border="1px">';
echo '<tr>';
echo '<td>Пасспорт клиента</td>';
echo '<td>ФИО</td>';
echo '<td>Номер телефона</td>';
echo '<td>4</td>';
echo '<td>5</td>';
echo '</tr>';

$link = mysqli_connect("localhost", "root", "", "sports_club", 3306);
mysqli_set_charset($link , "utf8");
if (!$link) {
echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
exit;
}
if ($result = mysqli_query($link, 'SELECT * FROM sportsman')) {
while( $row = mysqli_fetch_assoc($result) ){
echo '<tr>';
echo '<td style="border: 1px solid black">'.$row["Passport_id"].'</td>';
echo '<td style="border: 1px solid black">'.$row["Sportsman_name"].'</td>';
echo '<td style="border: 1px solid black">'.$row["Age"].'</td>';
echo '<td style="border: 1px solid black">'.$row["Phone"].'</td>';
echo '<td style="border: 1px solid black">'.$row["Team_id"].'</td>';
echo '</tr>';
}
echo '</table>';
/* Освобождаем используемую память */
mysqli_free_result($result);
}
mysqli_close($link);

}


function nedv()
{

echo '<table border="1px">';
echo '<tr>';
echo '<td>Номер турнира</td>';
echo '<td>Название</td>';
echo '<td>Адрес</td>';
echo '<td>начало</td>';
echo '<td>конец</td>';
echo '<td>приз</td>';
echo '</tr>';

$link = mysqli_connect("localhost", "root", "", "sports_club", 3306);
mysqli_set_charset($link , "utf8");
if (!$link) {
echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
exit;
}
if ($result = mysqli_query($link, 'SELECT * FROM tourn')) {
while( $row = mysqli_fetch_assoc($result) ){
echo '<tr>';
echo '<td style="border: 1px solid black">'.$row["Tourn_id"].'</td>';
echo '<td style="border: 1px solid black">'.$row["Tourn_name"].'</td>';
echo '<td style="border: 1px solid black">'.$row["Place"].'</td>';
echo '<td style="border: 1px solid black">'.$row["Beginning"].'</td>';
echo '<td style="border: 1px solid black">'.$row["Ending"].'</td>';
echo '<td style="border: 1px solid black">'.$row["Prize"].'</td>';
echo '</tr>';
}
echo '</table>';
/* Освобождаем используемую память */
mysqli_free_result($result);
}
mysqli_close($link);
}


function order()
{

  echo "Информацию о командах, участвовавших в турнирах в текущем месяце";

  echo '<table border="1px">';
  echo '<tr>';
  echo '<td>Название комманды</td>';
  echo '<td>Когда это произошло</td>';
  echo '<td>Комманда которая участвововала</td>';
  echo '</tr>';
  
  $link = mysqli_connect("localhost", "root", "", "sports_club", 3306);
  mysqli_set_charset($link , "utf8");
  if (!$link) {
  echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
  echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
  exit;
  }
  $var = "2020-12-09";
  print_r($var[5] + $var[6]);
  if ($result = mysqli_query($link, 'SELECT tourn.*, Team_id FROM tourn inner join tourn_info on tourn.Tourn_id = tourn_info.Tourn_id  where beginning like "20%";')) {
      while( $row = mysqli_fetch_assoc($result) ){
      echo '<tr>';
      echo '<td style="border: 1px solid black">'.$row["Tourn_name"].'</td>';
      echo '<td style="border: 1px solid black">'.$row["Beginning"].'</td>';
      echo '<td style="border: 1px solid black">'.$row["Team_id"].'</td>';
      echo '</tr>';
  }
  echo '</table>';
  /* Освобождаем используемую память */
  mysqli_free_result($result);
  }
  mysqli_close($link);
}



function worker()
{

}





function first()
{

echo '<table border="1px">';
echo '<tr>';
echo '<td>Пасспорт сотрудника</td>';
echo '<td>ФИО</td>';
echo '<td>Должность</td>';
echo '<td>Дата принятия</td>';
echo '<td>Зарплата</td>';
echo '</tr>';

$link = mysqli_connect("localhost", "root", "", "1194675_1", 3306);
mysqli_set_charset($link , "utf8");
if (!$link) {
echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
exit;
}
if ($result = mysqli_query($link, 'SELECT * FROM worker where salary>200;')) {
while( $row = mysqli_fetch_assoc($result) ){
echo '<tr>';
echo '<td style="border: 1px solid black">'.$row["passport"].'</td>';
echo '<td style="border: 1px solid black">'.$row["FIO"].'</td>';
echo '<td style="border: 1px solid black">'.$row["title"].'</td>';
echo '<td style="border: 1px solid black">'.$row["date_p"].'</td>';
echo '<td style="border: 1px solid black">'.$row["salary"].'</td>';
echo '</tr>';
}
echo '</table>';
/* Освобождаем используемую память */
mysqli_free_result($result);
}
mysqli_close($link);
}


if(array_key_exists('test',$_POST)){
   client();
}

if(array_key_exists('test_1',$_POST)){
   nedv();
}

if(array_key_exists('test_2',$_POST)){
   order();
}

if(array_key_exists('test_3',$_POST)){
   worker();
}

if(array_key_exists('test_4',$_POST)){
   first();
}
   
?>

</body>
</html>