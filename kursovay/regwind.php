<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Наш курс</title>
    <link rel ="icon" href="images/logo.jpg">
    <link rel="stylesheet" href="styles\main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet"> 

</head>
<body>
  <header class="otverh"></header>
    <form action="register.php" method="post">
        <div class="container">
          <h1 class="reg_wind_text_higth">Регистрация</h1>
          <p class="reg_wind_text_higth">Пожалуйста, заполните эту форму, чтобы создать учетную запись.</p>

          <div class="pole_reg">
          
      
          <label class="reg_wind_text" for="name"></label>
          <input type="text" placeholder="Введите имя" name="name" required>
            <br>
          <label class="reg_wind_text" for="family"></label>
          <input type="text" placeholder="Введите фамилию" name="family" required>
          <br>
          <label class="reg_wind_text" for="psw"></label>
          <input type="text" placeholder="Введите пароль" name="psw" required>
          <br>
          <label class="reg_wind_text" for="psw_repeat"></label>
          <input type="text" placeholder="Повторите пароль" name="psw_repeat" required>
          </div>

      
         
          
        </div>
      
        <div class="container_signin">
          <p class="reg_wind_text">Создавая учетную запись, вы соглашаетесь с нашими <a href="https://ru.wikipedia.org/wiki/Конфиденциальность">Условия и конфиденциальность</a>.</p>
          <p class="reg_wind_text">У вас уже есть учетная запись? <a href="singin.php">Войти</a>.</p>
        </div>
        <div style="margin-bottom: 5%;">
        <button type="submit" class="registerbtn" >Зарегистрироваться</button>
      </div>
      </form>

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
</body>
</html>