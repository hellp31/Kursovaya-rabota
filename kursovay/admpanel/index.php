
<?php
require_once "../helpers/function.php";
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
      <a href="#" class="logo"><img src="../images\Линии.png" alt="linii"></a>
      
      


        <div class="header-right">
            <a class="novod" href="../news.php">Новости</a>
            <a class="novod" href="../studens.php">Студенты</a>
            <a href="/"><p class="ras">Расписание</p></a>
            <a class="novod" href="../exam.php">Экзамены</a>
            <a class="novod" href="../dz.php">Д/З</a>

              <div>
                <form action="../exit.php">
                    <button class="book-button">Выйти</button>
                </form>
              </div>
          
        </div>
     
    </div>


    <div class="main-heading">
      <h1><span id="zagol">Расписание &#129327;</span></h1>
      <p>Расписание может меняться в соответствии с заменами.</p>
    </div>
  </header>

<main>
   <style>
            td:nth-child(5),td:nth-child(6){text-align:center;}
            table{border-spacing: 0;border-collapse: collapse;color:grey; text-align:center; border: 2px dotted #aaa; margin: auto; background-color: #0b1622 ; }
            td, th{padding: 10px;border: 1px solid black;}
        </style>
 <!-- <img style="margin: 10px auto 20px; display: block; width:50%; height:50%;" src="../images\Расписание.png" alt="raspisanie">-->

  <?php
        mysqli_query($db, "SET NAMES utf8");
    $sql = "SELECT * FROM lessons ";
    $result = mysqli_query($db, $sql);
    
    try {
        echo "<table>
                <tr>
                    <th>Пара</th>
                    <th>Учитель</th>
                </tr>";
        foreach ($result as $row)
        {
            echo "<tr>";
            echo "<td>" . $row["leson"] . "</td>"; // №2 (table_a)
            echo "<td>" . $row["teacher"] . "</td>"; // №3 (table_a)
            echo "</tr>";
        }
        echo "</table>";
    }
    
    catch(PDOException $e) {
        echo "Error DB: " . $e->getMessage();
    }
    $db = null;
    ?>

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







<script  href="scripts\main.js"></script>
</body>
</html>