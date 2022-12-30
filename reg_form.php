<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>SportLife - сайт о спорте</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel = "stylesheet" href = "css/regstyle.css" type="text/css" charset="utf-8">
  <link rel = "stylesheet" href = "css/main_page.css" type="text/css" charset="utf-8">
  <link rel = "stylesheet" href = "css/main.css" type="text/css" charset="utf-8">
  <meta name="description" content = "Информационно - развлекательный портал для любителей спорта">
  <meta name ="viewport" content = "width=device-width, initial-scale=1">
  <link href="img/log.ico" rel="shortcut icon" type="image/x-icon">
  <link rel="stylesheet" href="css/fontawesome.min.css">
  <title>SportLife - сайт о спорте</title>


</head>
<script src="https://kit.fontawesome.com/190c15c4db.js" crossorigin="anonymous"></script>

<body>
<div id="wrapper">
      <div id="content">
         <header>
    <div id="logo">
       <a href = "/index.php" title="На главную">
       <img src="img/logo.png" title="SportLife.com" alt="SportLife.com">
       <span>SportLife</span>
     </a>
    </div>

    <div id="about">
    <a href="feedback.php" title="Написать нам письмо">Обратная связь</a>
    </div>

    <div id="reg_auth">
      <a href="ent_form.php" title="Войти в кабинет пользователя"><div class="btn">Войти</div>
      </a>

      <a href="reg_form.php" title="Зарегестрироваться на сайте"><div class="btn">Регистрация</div>
      </a>
    </div>
    </header>
    <nav>
      <a href="hockey.php">Хоккей</a>
      <a href="football.php">Футбол</a>
      <a href="figureskating.php">Фигурное катание</a>
      <a href="skiing.php">Лыжи</a>
      <a href="biathlon.php">Биатлон</a>
  
      <div id="search">
        <span>Поиск <i class="fa-solid fa-magnifying-glass"></i></span>
      </div>
    </nav>

 <h2 class="heading_n">Регистрация</h2>
 <div style="clear:both"><br></div>
 <div class="conteiner">
 <form method="post" action="save_acc.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Логин</label><br>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>

  <div class="mb-3 col-md- col-12">
    <label for="exampleInputPassword1" class="form-label">Пароль</label><br>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>

  <input type="submit" class="btn" name="submit" value="Зарегистрироваться">
  <a href="ent_form.php" title="Войти"><div class="btn">Авторизация</div>
      </a>
 </form>
 </div>

 <br>

    
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script>
        $(document).scroll(function(){
          if($(document).scrollTop() > $('header').height() + 10)
             $('nav').addClass('fixed');
          else 
             $('nav').removeClass('fixed');


        });
    </script>
 </body>
 </html>