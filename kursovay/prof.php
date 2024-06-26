
<?php

require_once "helpers/function.php";
if (empty($_SESSION['user'])) {
    header("Location: http://localhost:3000");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Наш курс</title>
    <link rel ="icon" href="../images/logo.jpg">
    <link rel="stylesheet" href="../styles\main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet"> 
   
</head>
<body>
<header>
    <div class="header">
      <a href="/" class="logo"><img src="../images\Линии.png" alt="linii"></a>
      
      


        <div class="header-right">
            <a class="novod" href="../news.php">Новости</a>
            <a class="novod" href="../studens.php">Студенты</a>
            <a href="admpanel/index.php"><p class="novod">Расписание</p></a>
            <a class="novod" href="../exam.php">Экзамены</a>
            
            <div class="dropdown">
              <button onclick="myFunction()" class="dropbtn">Кабинет </button>
              <div id="myDropdown" class="dropdown-content">

                <a href="exit.php"> Выйти</a>
              </div>
            </div>
             
          
        </div>
     
    </div>


  
  </header>
<style>
.linia{
  height: 0.5px;
  width: 100%;
  background-color: white;

}
hr{
  width:'50%' ;
  color:'green';
}
  .body{
    width: 90%;
    background-color: white;
    height: 50px;
    margin: 10px auto 20px;
    display: block;
    margin-top: 50px;
  }

  .tit{
    float: left;
  }
  .izm{
float: right;
margin-left: 950px ;
  }
</style>
<main> 
   <div class="main-heading">
      <h1><span id="zagol">Личный кабинет <?php echo( $_SESSION['user']);?>а</span></h1>
      <p>Привет <?php echo( $_SESSION['user']);?>.</p>
      <p>Создайте пост</p>
   </div>


   <center>
      
<div class="svz">
  <div style='background: #0b1622; color:white; width:100%;height:100px'>
      <div style='float:left'>
        <h1  >Посты</h1>
      </div>
        <div style='float:right'>
        <h1 ><a class="action"  href='create.php'>Создать</a></h1>
        </div>
  </div>
  <br>




<?php
      

  $name = $_SESSION['user'] ?? '';
$family = $_SESSION['family'] ?? '';

// Выполняем запрос для получения ID пользователя
$sql = "SELECT id FROM `users` WHERE name=? AND family=?";
$stmt = $db->prepare($sql); // Используем подготовленные выражения для предотвращения SQL-инъекций
$stmt->bind_param("ss", $name, $family);
$stmt->execute();
$result = $stmt->get_result(); // Получаем результат выполнения запроса
$row = $result->fetch_assoc(); // Извлекаем первую строку результата
$author_id = $row['id'] ?? ''; // Присваиваем переменной $author_id значение ID пользователя

// Выполняем запрос для получения сообщений автора
$sql = "SELECT DISTINCT * FROM `posts` WHERE author_id = ?";
$stmt = $db->prepare($sql);
$stmt->bind_param("i", $author_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div class='tit'>
            {$row['title']}
            <div  class='izm'>
                <td><a href='update.php?id={$row['id']}'>Изменить</a></td>
            </div>
        </div>
        <div>
            <p class='body'>{$row['body']}</p>
        </div>
        <div class='linia'></div>";
    }
  }
?>
      </div>

   </center>
</main>
<footer>
  <div class="footer">
    <div class="row">
      <a href="https://vk.me/join/AJQ1d8CosSI7TcgMB/eW/xQ4"><i class="fa fa-vk"></i></a>
      <a href="https://www.youtube.com/@user-vs2rf9mg8g/featured"><i class="fa fa-youtube"></i></a>
      <a href="https://t.me/c/1940888921/1"><i class="fa fa-telegram"></i></a>
    </div>

    <div class="row">
      <ul>
        <li><a href="#">Связаться с нами</a></li>
        <li><a href="https://translated.turbopages.org/proxy_u/en-ru.ru.7d7bd6a7-65db0850-50656b09-74722d776562/https/en.wikipedia.org/wiki/Privacy_policy">Политика конфиденциальности</a></li>
        <li><a href="#">Правила</a></li>
      </ul>
    </div>

    <div class="row">
    Copyright © 2024 - All rights reserved 
    </div>
  </div>
</footer>







<script  src="../scripts\script.js"></script>
</body>
</html>