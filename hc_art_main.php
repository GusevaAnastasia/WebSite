<script src="https://kit.fontawesome.com/190c15c4db.js" crossorigin="anonymous"></script>

<!DOCTYPE html>
<html>
   <head>
     <meta charset = "utf-8">
          <title>SportLife - сайт о спорте</title>
     <link rel = "stylesheet" href = "css/main.css" type="text/css" charset="utf-8">
     <link rel = "stylesheet" href = "css/main_page.css" type="text/css" charset="utf-8">
     <link rel = "stylesheet" href = "css/articles.css" type="text/css" charset="utf-8">
     <meta name="description" content = "Информационно - развлекательный портал для любителей спорта">
     <meta name ="viewport" content = "width=device-width, initial-scale=1">
     <link href="img/log.ico" rel="shortcut icon" type="image/x-icon">
     <link rel="stylesheet" href="css/fontawesome.min.css">
     <title>SportLife - сайт о спорте</title>
   </head>

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
    </div>

    <div id="news_art">
        <h2 class="heading">Капитан «Вашингтона» Александр Овечкин превзошел Горди Хоу по голам в НХЛ, теперь впереди — рекорд Уэйна Гретцки</h2>
        <div style="clear:both"><br></div>
    </div>


  <footer>
    <div id="site_name">
      <span>SportLife</span> - актуальное о спорте!
    </div>
    <div id="clear"></div>
    <div id="footer_menu">
      <a href="" title="Узнать о рекламе">Реклама</a>
      <a href="feedback.php" title="Написать письмо">Обратная связь</a>
    </div>
    <div id="rights">
      <a href="">Все права защищены &copy; <?=date('Y')?></a>
    </div>

    <div id="social">
      <a href="" title="Группа в ВК"><i class="fa-brands fa-vk"></i></a>
      <a href="" title="Мы в Twitter"><i class="fa-brands fa-twitter"></i></a>
      <a href="" title="Наш YouTube"><i class="fa-brands fa-youtube"></i></a>
    </div>
    </footer>
    </div>
    
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

