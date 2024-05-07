
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
              <a href="prof.php"><p class="ras"><?php echo( $_SESSION['user']);?></p></a>

                <a href="exit.php"> Выйти</a>
              </div>
            </div>
             
          
        </div>
     
    </div>


  
  </header>

<main> 
   <div class="main-heading">
      <h1><span id="zagol">Личный кабинет <?php echo( $_SESSION['user']);?>а</span></h1>
      <p>Привет <?php echo( $_SESSION['user']);?>.</p>
      <p>Тут в будущем появится все ваше</p>
</div>


      <center>
      
      <div class="svz">
      <div style='background: #0b1622; color:white; width:100%;height:100px'>
      <div style='float:center'>
    
    <h1>Новый пост</h1>
    </div>
      </div>
    <article>

    <form action="createup.php" method="post">
    <label for="title" style="float:left;  margin-right:100px">Заголовок</label>
    <br>
    
    <input name="title" style=" float:left; width:25%" placeholder="Введите какой-нибудь название для поста."  required>
    <br>
    <br>
    <label for="body" style="float:left">Тело</label>
    <br>
    
    <textarea name="body" style="float:left ;  width:50%; height:50%" placeholder="Введите какой-нибудь текст" ></textarea>
    <br>
    <br>
    <input type="submit" value="Сохранить">
</form>

</article>
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