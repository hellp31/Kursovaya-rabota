
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
      <a href="/" class="logo"><img src="../images\Линии.png" alt="linii"></a>
      
      


        <div class="header-right">
            <a class="novod" href="../news.php">Новости</a>
            <a class="novod" href="../studens.php">Студенты</a>
            <a href="/"><p class="ras">Расписание</p></a>
            <a class="novod" href="../exam.php">Экзамены</a>
            
            <div class="dropdown">
              <button onclick="myFunction()" class="dropbtn">Кабинет </button>
              <div id="myDropdown" class="dropdown-content">
                <a href="../prof.php"><?php echo( $_SESSION['user']);?></a>
                <a href="../exit.php"> Выйти</a>
              </div>
            </div>
             
          
        </div>
     
    </div>


  
  </header>

<main> 

   <div class="main-heading">
      <h1><span id="zagol">Расписание &#129327;</span></h1>
      <p>Расписание может меняться в соответствии с заменами.</p>
    </div>
   <style>
            td:nth-child(5),td:nth-child(6){text-align:center;}
            table{border-spacing: 0;border-collapse: collapse;color:black; text-align:center; border: 2px dotted #aaa; margin: auto; background: linear-gradient(#012E4A 0% 20%, #036280 20% 40%, #378BA4 40% 60%, #81BECE 60% 80%, #d6dcd6 80% 100%); }
            td, th{padding: 10px;border: 1px solid black;}
            tr{height: 70px;}
            th{color: white;}
        </style>
 <!-- <img style="margin: 10px auto 20px; display: block; width:50%; height:50%;" src="../images\Расписание.png" alt="raspisanie">-->
<!---->
<table  >
              <tr>
                <th><b>Время</b></th>
                <th><b>Понедельник</b></th>
                <th><b>Вторник</b></th>
                <th><b>Среда</b></th>
                <th><b>Четверг</b></th>
                <th><b>Пятница</b></th>
              </tr>
            <tbody>

                <?php




                        $sql = "SELECT DISTINCT time FROM `lessons` ";
                        $rest = mysqli_query($db, $sql);
                        while($t = mysqli_fetch_assoc($rest)){
                        $sql = "SELECT * FROM lessons WHERE  time = '".$t['time']."'";
                        //print_r($sql);exit;
                        $res = mysqli_query($db, $sql);
                        ?>
                        <tr>
                            <td><?php echo $t['time'] ?></td>
                        <?php 
                        $week_days = array('Понедельник','Вторник','Среда','Четверг','Пятница');
                        $classes = array();
                        while($row = mysqli_fetch_assoc($res)) {
                            $classes[$row['day']] = $row;
                        }
                        foreach ($week_days as $day) {
                        ?>
                            <?php if (array_key_exists($day, $classes)) { $row = $classes[$day]; ?>
                            <td><?php echo $row['leson'] . '<br />' . $row['teacher'] ?></td>
                            <?php } else { ?>
                            <td></td>
                            <?php } ?>
                        <?php    
                        }
                        ?>
                        </tr>
                             <?php
                        } 
                       
                ?>
                </tbody>
            </table>

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