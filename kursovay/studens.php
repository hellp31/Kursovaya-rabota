
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
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet"> 
    

</head>
<body>
<header>
    <div class="header">
      <a href="/admpanel/index.php" class="logo"><img src="../images\Линии.png" alt="linii"></a>
      
      


        <div class="header-right">
            <a class="novod" href="news.php">Новости</a>
            <a href="studens.php"><p class="ras">Студенты</p></a>
            <a  class="novod" href="index.php">Расписание</a>
            <a class="novod" href="exam.php">Экзамены</a>
           
            <div class="dropdown">
              <button onclick="myFunction()" class="dropbtn">Кабинет</button>
              <div id="myDropdown" class="dropdown-content">
                <a href="prof.php"><?php echo( $_SESSION['user']);?></a>
                <a href="exit.php">Выйти</a>
              </div>
            </div>
          
        </div>
     
    </div>


    
  </header>
<style>




.wrap-expand-table a[href^="#click-expand"], .wrap-expand-table a[href="#close"] {
text-decoration: none;

}
 
/* Если браузер не поддерживает структурные псевдоклассы, то список будет раскрыт и доступ к данным сохранится */
[id^="click-expand"] {
position: fixed; /* чтобы страница "не подпрыгивала" к id */
}
[id^="click-expand"]:target + .wrap-expand-table button[id^="button1"],
[id^="click-expand"]:not(:target) + .wrap-expand-table tbody tr:nth-of-type(n+5), /* 5 — порядковый номер строки, после которой строки будут скрыты */
[id^="click-expand"]:not(:target) + .wrap-expand-table button[id^="button2"] {
display: none;
}



            td:nth-child(5),td:nth-child(6){text-align:center;}
            table{width: 1500px;border-spacing: 0;color:black; text-align:center;  margin: auto; background: linear-gradient(#012E4A 0% 4%, #036280 4% 38.5%, #378BA4 38.5% 61.5%, #81BECE 61.5% 81%, #d6dcd6 81% 100%); border-radius:100px; }
            td, th{padding: 10px;}
            tr{height: 70px; }
            tr,td,th{border: 1px solid black;}
            th{color: white;}
            .btn{position: sticky;top: 110px;padding: 10px 30px;border-radius: 50px; }
            .btn:hover {
            background: #2794ee;
            }
            .btn:active {
            box-shadow: inset 0 1px 3px rgba(188, 188, 188, 0.2);
            text-shadow: 0 1px 3px rgba(241, 238, 238, 0.2);
            }
            .btn:active {
                background: #d8d9da;
            }


            .btn1{padding: 10px 30px;border-radius: 50px; }
            .btn1:hover {
            background: #2794ee;
            }
            .btn1:active {
            box-shadow: inset 0 1px 3px rgba(188, 188, 188, 0.2);
            text-shadow: 0 1px 3px rgba(241, 238, 238, 0.2);
            }
            .btn1:active {
                background: #d8d9da;
            }
            #a1{
              color: black;
            }
</style>

<main>
  <div class="main-heading">
      <h1><span id="zagol">Студенты &#128077;</span></h1>
      <p></p>
    </div>

    
            <div id="click-expand1"></div>
            <div class="wrap-expand-table"> <a id="a1" href="#click-expand1"><button class="btn1" id="button1" >Развернуть</button></a><a id="a1"href="#close"><button class="btn"  id="button2" >Cвернуть</button></a>
            <table class="my-table">
              <thead>
            <tr> 
              <th>Имя</th>
              <th>Фамилия</th>
              <th>День рождения</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach(student() as $row) {?>
            <tr>
              <td><?=$row['name']?></td>
              <td><?=$row['surname']?></td>
              <td><?=$row['birthday']?></td>
            </tr>
            <?php }?>
            </tbody>
  </table>
  
</div>

 
  

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







<script  src="scripts/main.js"></script>
<script  src="scripts/script.js"></script>

</body>
</html>